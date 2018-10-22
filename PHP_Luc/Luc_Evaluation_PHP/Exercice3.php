<?php    
//  Script qui permettra d’ajouter et d’afficher des films :

// connexion à la BDD :
$pdo = new PDO('mysql:host=localhost;dbname=exercice_3', 
               'root',
               '',
               array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                     PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8') 
);

// variable de message d'erreur :
$message = '' ;

//  print_r($_POST);
// effectuer les vérifications nécessaires sur les champs du formulaire :
    if ($_POST){

            if (!isset($_POST['title']) || strlen($_POST['title']) < 5 || strlen($_POST  ['title'] > 20 ) ) $message .= '<p class="text-danger">Le title doit comporter entre 5 et 20        caractères.</p>';
    

     if (!isset($_POST['actors']) || strlen($_POST['actors']) < 5 || strlen($_POST['actors'] > 20 ) ) $message .= '<p class="text-danger">Le actors doit comporter entre 5 et 20 caractères.</p>';
    

    
     if (!isset($_POST['director']) || strlen($_POST['director']) < 5 || strlen($_POST['director'] > 20 ) ) $message .= '<p class="text-danger">Le director doit comporter entre 5 et 20 caractères.</p>';
    


     if (!isset($_POST['producer']) || strlen($_POST['producer']) < 5 || strlen($_POST['producer'] > 20 ) ) $message .= '<p class="text-danger">Le producer doit comporter entre 5 et 20 caractères.</p>';
   

              if (!isset($_POST['year_of_prod']) || !strtotime($_POST['year_of_prod'])) $message .= '<p class="text-danger">La date n\'est pas valide.</p>';

                if (!isset($_POST['language']) || ($_POST['language'] != 'vf' && $_POST['language'] != 'vostfr' )) $message .= '<p class="text-danger">La langue n\'est pas valide.</p>';

                if (!isset($_POST['category']) || ($_POST['category'] != 'action'  && $_POST['category'] != 'aventure' && $_POST['category'] != 'comedie' && $_POST['category'] != 'epouvante_horreur' && $_POST['category'] != 'science_fiction') ) $message .= '<p class="text-danger">La catégorie n\'est pas valide.</p>';


      if (!isset($_POST['storyline']) || strlen($_POST['storyline']) < 5 || strlen($_POST['storyline'] > 20 ) ) $message .= '<p class="text-danger">Le storyline  doit comporter entre 5 et 20 caractères.</p>';

        if (!isset($_POST['video']) || !filter_var($_POST['video'], FILTER_VALIDATE_URL) ) $message .= '<p class="text-danger">Le lien de la video  doit être un URL valide.</p>';

      foreach($_POST as $indice => $valeur) {
                $_POST[$indice] = htmlspecialchars($valeur, ENT_QUOTES); //pour eviter les injections CSS ET JS
            }

        //   Si plus d'erreur sur le formulaire, on ajoute le film à la BDD :
            if (empty($message)){
                // requéte SQL 
                 $resultat = $pdo->prepare("INSERT INTO movies (title, actors, director, producer, year_of_prod, language, category,  storyline, video) VALUES (:title, :actors, :director, :producer, :year_of_prod, :language, :category, :storyline, :video)");
                 
                                                        $resultat->bindParam(':title', $_POST['title']);
                                                        $resultat->bindParam(':actors' , $_POST['actors']);
                                                        $resultat->bindParam(':director', $_POST['director']);
                                                        $resultat->bindParam(':producer', $_POST['producer']);
                                                        $resultat->bindParam(':year_of_prod', $_POST['year_of_prod']);
                                                        $resultat->bindParam(':language', $_POST['language']);
                                                        $resultat->bindParam(':category', $_POST['category']);
                                                        $resultat->bindParam(':storyline', $_POST['storyline']);
                                                        $resultat->bindParam(':video', $_POST['video']);
                                                                                                            //execute la requete   
                        $succes_requete = $resultat->execute();

            }
        //  message de reussite
            $message .= '<p class="text-success">Le film à bien été ajouter.</p>';





 }// FIN du  if ($_POST){
               

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un film</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Ajouter un film </h1>
<?php echo $message; ?>
    <!-- Créer un formulaire permettant d’ajouter un film : -->
    <form action="" method="post">
    <label for="title">Title</label><br>
    <input type="text" id="title" name="title" value="<?php echo $_POST['title'] ?? '';?>"><br><br>

    <label for="actors">Actors</label><br>
    <input type="text" id="actors" name="actors" value="<?php echo $_POST['actors'] ?? '';?>"><br><br>

    <label for="director">Director</label><br>
    <input type="text" id="director" name="director" value="<?php echo $_POST['director'] ?? '';?>"><br><br>

    <label for="producer">Producer</label><br>
    <input type="text" id="producer" name="producer" value="<?php echo $_POST['producer'] ?? '';?>"><br><br>

    <label for="">Year of product</label><br>
    <select name="year_of_prod" id="year_of_prod">
    <!-- boucle pour afficher les differents dates -->
    <?php   
        $debut = date('Y') - 20;
        while($debut <= date('Y')){  
        echo "<option>$debut</option>";
        $debut++;
}
    ?>
    </select> <br><br>

    <label for="language">Language</label> <br>
    <select name="language" id="language ">
    <option name="language" value="vf">VF</option>
    <option name="language" value="vostfr">VOSTFR</option>
    
    </select><br><br>

    <label for="category">Category</label><br>
    <select name="category" id="category ">
    <option name="category" value="action">Action</option>
    <option name="category" value="aventure">Aventure</option>
    <option name="category" value="comedie">Comédie</option>
    <option name="category" value="epouvante_horreur">Epouvante-horreur</option>
    <option name="category" value="science_fiction">Science fiction</option>
    </select><br><br>


    <label for="storyline">Storyline</label><br>
    <textarea type="text" id="storyline" name="storyline"> </textarea><br><br>
    
    <label for="video">Bande-annonce</label><br>
    <input type="text" id="video" name="video" value=""><br><br>

    <input type="submit">
    </form>

</div>
</body>
</html>