<?php

// ma class Contact
require('MesClass/admin.class.php');


   $messageValid = '';

if(!empty($_POST)){
    
    extract($_POST);

     foreach($_POST as $indice => $valeur) {
                $_POST[$indice] = htmlspecialchars($valeur, ENT_QUOTES); //pour eviter les injections CSS ET JS
            }

            // var_dump($_POST);
            // echo '<pre class="text-white">';
            // var_dump($_FILES);
            // echo '</pre>';
    $valid = (empty($_FILES['photo']['name']) || 
    (empty($nom) || (strlen($nom) < 3 || strlen($nom) > 30 )) ||
     (empty($prenom) || strlen($prenom) < 3 || strlen($prenom) > 30) ||
      (empty($email) ||  !filter_var($email, FILTER_VALIDATE_EMAIL)) || 
      (empty($telephone) || !is_numeric($telephone) || strlen($telephone) != 10) ||
       (empty($linkedin)) || 
       (empty($github)) || 
       empty($apropos) || strlen($apropos) < 10) ? false : true; // écriture ternaire pour if / else

    $erreurphoto = (empty($_FILES['photo']['name'])) ? 'Erreur sur photo.' : null;

    $erreurnom = (empty($nom) || (strlen($nom) < 3 || strlen($nom) > 100)) ? 'Erreur sur le nom.' : null;

    $erreurprenom = (empty($prenom) || (strlen($prenom) < 3 || strlen($prenom) > 30)) ? 'Erreur sur le Prénom.' : null;

    $erreuremail = (empty($email || !filter_var($email, FILTER_VALIDATE_EMAIL) > 100)) ? 'Erreur sur l\'email.' : null;

    $erreurtelephone = (empty($telephone) || (!is_numeric($telephone) || strlen($telephone) != 10)) ? 'Erreur sur le Téléphone.' : null;

    $erreurlinkedin = (empty($linkedin)) ? 'Erreur sur le linkedin.' : null;

    $erreurgithub = (empty($github)) ? 'Erreur sur le Github.' : null;

    $erreurapropos = (empty($apropos) || strlen($apropos) < 10) ? 'Erreur.' : null;


   

    // $erreursujet = (empty($sujet)) ? 'Renseignez votre sujet.' : null;
    $erreurcommentaire = (empty($commentaire) || strlen($commentaire) < 10) ? 'Indiquez votre commentiare.' : null;
    
    
    // echo '<pre class="text-white">';
    // var_dump($_FILES);
    // echo '<pre>';
    // si tous les champs sont correctement renseignés
    if ($valid) {

        $nom_photo = $_FILES['photo']['name'];
        $photo_bdd = 'img/' . $nom_photo; 
        copy($_FILES['photo']['tmp_name'], '' . $photo_bdd);

        // on crée un nouvel objet (ou une instance) de la classe Contact.class.php
        $realisation = new Admin();
        // on utilise la méthode insertRealisation de la classe Realisation.class.php
        $realisation->modifAdmin($prenom, $nom, $email, $telephone, $linkedin, $github, $photo_bdd, $apropos);
        
        $messageValid .= 'Information modifier avec succès'; 
        
    
    }


// var_dump($valid);
}//FIN if(!empty($_POST)){





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter une Compétence</title>
      <!-- Lien de bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <!-- Lien Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <!-- Lien CSS perso -->
    <link rel="stylesheet" href="CSS/Style.css">

    <!-- Lien police -->
 <!--<link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico" rel="stylesheet">  -->
 <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Lobster|Pacifico" rel="stylesheet"> 
</head>
<body>
    <nav class="navbar mt-3 effet">
  <a class="btn navbar-brand ml-5  border-primary rounded-circle" href="index.php"><i class="fas fa-home home"></i></a>
  <!-- <a class="btn border-success bg-success mr-5" href="afficheMessage.php">Messages</a> -->
  <a class="btn bg-primary mr-5" href="admin.php"><i class="fas fa-arrow-circle-left"></i>Retour</a>


 
</nav>


<div class="container">
    <div class="row">

     <div class="col-12 text-center text-white">
            <h2>Modifier mes infos</h2>
            <div class="bg-success rounded"><?php echo $messageValid; ?></div>
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                <div class="bg-danger rounded"><?php if (isset($erreurnom)) echo $erreurnom;  ?></div>
                    <input type="text" class="form-control mb-5 mt-2" id="nom" name="nom" aria-describedby="emailHelp"
                        placeholder="Nom">
                </div>
                <div class="form-group">
                <div class="bg-danger rounded"><?php if (isset($erreurprenom)) echo $erreurprenom;  ?></div>

                    <input type="text" class="form-control mb-5 mt-2" id="prenom" name="prenom" aria-describedby="emailHelp"
                        placeholder="Prénom">
                </div>
                <div class="form-group">
                <div class="bg-danger rounded"><?php if (isset($erreurtelephone)) echo $erreurtelephone;  ?></div>

                    <input type="text" class="form-control mb-5 mt-2" id="telephone" name="telephone" aria-describedby="emailHelp"
                        placeholder="Téléphone">
                </div>
                <div class="form-group">
                <div class="bg-danger rounded"><?php if (isset($erreuremail)) echo $erreuremail;  ?></div>

                    <input type="text" class="form-control mb-5 mt-2" id="email" name="email" aria-describedby="emailHelp"
                        placeholder="Email">
                </div>
                <div class="form-group">
                <div class="bg-danger rounded"><?php if (isset($erreurlinkedin)) echo $erreurlinkedin;  ?></div>

                    <input type="text" class="form-control mb-5 mt-2" id="linkedin" name="linkedin" aria-describedby="emailHelp"
                        placeholder="LinkedIn">
                </div>
                <div class="form-group">
                <div class="bg-danger rounded"><?php if (isset($erreurgithub)) echo $erreurgithub;  ?></div>

                    <input type="text" class="form-control mb-5 mt-2" id="github" name="github" aria-describedby="emailHelp"
                        placeholder="GitHub">
                </div>
                <div class="form-group">
                <div class="bg-danger rounded"><?php if (isset($erreurphoto)) echo $erreurphoto;  ?></div>

                    <input type="file" class="form-control mb-5 mt-2" id="photo" name="photo" aria-describedby="emailHelp"
                        placeholder="photo">
                </div>

                <div class="bg-danger rounded"><?php if (isset($erreurapropos)) echo $erreurapropos;  ?></div>

                  <textarea name="apropos" id="apropos" class="form-control mb-5" placeholder="A propos"></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Modifier</button>
            </form>
        </div>
    </div>
</div>
</div>
    
</body>
</html>