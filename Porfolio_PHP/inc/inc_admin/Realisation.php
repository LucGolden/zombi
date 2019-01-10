<?php

// ma class Contact
require('../MesClass/Realisation.class.php');


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
    $valid = (empty($_FILES['image']['name']) || (empty($nom) || (strlen($nom) < 3 || strlen($nom) > 100 )) || empty($commentaire)) ? false : true; // écriture ternaire pour if / else

    $erreurimage = (empty($_FILES['image']['name'])) ? 'Erreur sur l\'image.' : null;

    $erreurnom = (empty($nom) || (strlen($nom) < 3 || strlen($nom) > 100)) ? 'Erreur sur le nom.' : null;


   

    // $erreursujet = (empty($sujet)) ? 'Renseignez votre sujet.' : null;
    $erreurcommentaire = (empty($commentaire) || strlen($commentaire) < 10) ? 'Indiquez votre commentiare.' : null;
    
    
    
    // si tous les champs sont correctement renseignés
    if ($valid) {

        $nom_photo = $_FILES['image']['name'];
        $photo_bdd = 'img/' . $nom_photo; 
        copy($_FILES['image']['tmp_name'], '' . $photo_bdd);


        // on crée un nouvel objet (ou une instance) de la classe Contact.class.php
        $realisation = new Realisation();
        // on utilise la méthode insertRealisation de la classe Realisation.class.php
        $realisation->insertRealisation($photo_bdd, $nom, $commentaire);
        
        $messageValid .= 'Réalisation enregistrer avec succès'; 
        
    
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
  <a class="btn navbar-brand ml-5  border-info rounded-circle" href="index.php"><i class="fas fa-home home"></i></a>
  <!-- <a class="btn border-success bg-success mr-5" href="afficheMessage.php">Messages</a> -->
  <a class="btn bg-info mr-5" href="admin.php"><i class="fas fa-arrow-circle-left"></i>Retour</a>


 
</nav>


<div class="container">
   
<div class="row mt-5 p-5">
    <div class="col-12 text-center text-white">
        <h2>Ajouter une Réalisation</h2>
        <div><?php  echo $messageValid;  ?></div>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group mt-5 mb-5">
                <div class="bg-danger rounded"><?php if (isset($erreurimage)) echo $erreurimage; ?></div>
                <input type="file" class="form-control mt-3" id="image" name="image" aria-describedby="emailHelp" placeholder="image">
                
            </div>
            
            <div class="form-group  mt-5 mb-5">
                <div class="bg-danger rounded"><?php if (isset($erreurnom)) echo $erreurnom; ?></div>
                
                <input type="text" class="form-control mt-3" id="nom" name="nom" aria-describedby="emailHelp" placeholder="Nom">
                
            </div>
            <div class="form-group  mt-5 mb-5">
                    <div class="bg-danger rounded"><?php if (isset($erreurcommentaire)) echo $erreurcommentaire; ?></div>

                <textarea type="text" class="form-control mt-3" id="commentaire" name="commentaire" aria-describedby="emailHelp"
                    placeholder="commentaire"></textarea>

            </div>
            <button type="submit" class="btn btn-info btn-block">Ajouter</button>
        </form>
    </div>
</div>
</div>
    
</body>
</html>