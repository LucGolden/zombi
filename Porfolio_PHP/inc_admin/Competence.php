<?php


require('MesClass/Competence.class.php');


  
    $messageVal = '';
if(!empty($_POST)){

    extract($_POST);

    //  foreach($_POST as $indice => $valeur) {
    //             $_POST[$indice] = htmlspecialchars($valeur, ENT_QUOTES); //pour eviter les injections CSS ET JS
    //         }

            // var_dump($_POST);

    $valid = (empty($titre) || (strlen($titre) < 3 || strlen($titre) > 30) || (empty($icone)) ) ? false : true; // écriture ternaire pour if / else

    $erreurtitre = (empty($titre) || (strlen($titre) < 3 || strlen($titre) > 30)) ? 'Erreur sur le titre' : null;

    $erreuricone = (empty($icone)) ? 'Erreur sur l\'icone' : null;


    



     // si tous les champs sont correctement renseignés
    if ($valid) {
        // on crée un nouvel objet (ou une instance) de la classe Contact.class.php
        $formation = new Competence();
// on utilise la méthode insertContact de la classe Contact.class.php
        $formation->insertCompetence($titre, $icone);
        $messageVal .= 'Compétence ajouter avec succès';
    }



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
  <a class="btn navbar-brand ml-5  border-danger rounded-circle" href="index.php"><i class="fas fa-home home"></i></a>
  <!-- <a class="btn border-success bg-success mr-5" href="afficheMessage.php">Messages</a> -->
  <a class="btn bg-danger mr-5" href="admin.php"><i class="fas fa-arrow-circle-left"></i>Retour</a>


 
</nav>


<div class="container">
    <div class="row">

     <div class="col-12 m-5 p-5 text-center text-white">
            <h2>Ajouter une compétence</h2>
            <div><?php  echo $messageVal;  ?></div>
            <form method="POST">
                <div class="form-group">
                    <div class="text-danger"><?php   if (isset($erreurtitre)) echo $erreurtitre ;  ?></div>
                    <input type="text" class="form-control mt-5" id="titre" name="titre" aria-describedby="emailHelp"
                    placeholder="Titre ">
                </div>
                <div class="form-group">
                        <div class="text-danger"><?php   if (isset($erreuricone)) echo $erreuricone ;  ?></div>
                    <input type="text" class="form-control mb-5 mt-5" id="icone" name="icone" aria-describedby="emailHelp"
                        placeholder="Icone">
                </div>
                <button type="submit" class="btn btn-danger btn-block">Ajouter</button>
            </form>
        </div>
    </div>
</div>
</div>
    
</body>
</html>