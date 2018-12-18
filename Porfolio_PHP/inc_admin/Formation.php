<?php
require('MesClass/Formation.class.php');


  $messageVal = '';
if(!empty($_POST)){
    extract($_POST);

     foreach($_POST as $indice => $valeur) {
                $_POST[$indice] = htmlspecialchars($valeur, ENT_QUOTES); //pour eviter les injections CSS ET JS
            }

            // var_dump($_POST);

    $valid = (empty($nom_institution) || (strlen($nom_institution) < 3 || strlen($nom_institution) > 30) || (empty($domaine) || (strlen($domaine) < 3 || strlen($domaine) > 30 )) ||  (empty($date_debut) || (strlen($date_debut) < 3 || strlen($date_debut) > 30 )) ||  (empty($date_fin) || (strlen($date_fin) < 3 || strlen($date_fin) > 30 ))) ? false : true; // écriture ternaire pour if / else

    $erreurnom_institution = (empty($nom_institution) || (strlen($nom_institution) < 3 || strlen($nom_institution) > 30)) ? 'Erreur sur le nom de l\'institution' : null;

    $erreurdomaine = (empty($domaine) || (strlen($domaine) < 3 || strlen($domaine) > 30)) ? 'Erreur sur le domaine' : null;

    $erreurdate_debut = (empty($date_debut) || (strlen($date_debut) < 3 || strlen($date_debut) > 30)) ? 'Erreur sur le debut' : null;

    $erreurdate_fin = (empty($date_fin) || (strlen($date_fin) < 3 || strlen($date_fin) > 30)) ? 'Erreur sur la fin' : null;

    $messageVal = '';
    



     // si tous les champs sont correctement renseignés
    if ($valid) {
        // on crée un nouvel objet (ou une instance) de la classe Contact.class.php
        $contact = new Formation();
// on utilise la méthode insertContact de la classe Contact.class.php
        $contact->insertFormation($nom_institution, $domaine, $date_debut, $date_fin);
        $messageVal .= 'Nouvelle formation ajouter avec succès';
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
  <a class="btn navbar-brand ml-5  border-warning rounded-circle" href="index.php"><i class="fas fa-home home"></i></a>
  <!-- <a class="btn border-success bg-success mr-5" href="afficheMessage.php">Messages</a> -->
  <a class="btn bg-warning mr-5" href="admin.php"><i class="fas fa-arrow-circle-left"></i>Retour</a>


 
</nav>


<div class="container">
    

    <div class="row text-white text-center">

        <div class="col-12 m-5">
            <h2>Ajouter une formation</h2>
            <form method="POST" class="p-4">
                <div class="text-success"><?php echo $messageVal;  ?></div>
                <div class="form-group  mt-5 mb-5">

                    <p class="text-danger"><?php  if (isset($erreurnom_institution)) echo $erreurnom_institution ; ?></p>
                    <input type="text" class="form-control" id="nom_institution" name="nom_institution" aria-describedby="emailHelp"
                        placeholder="Nom de l'intitution">

                </div>

                <div class="form-group mt-5 mb-5">
                        <p class="text-danger"><?php if (isset($erreurdomaine)) echo $erreurdomaine ;  ?></p>
                        <input type="text" class="form-control" id="domaine" name="domaine" placeholder="Domaine">
                    </div>
                    
                    <div class="form-group  mt-5 mb-5">
                        <p class="text-danger"><?php if (isset($erreurdate_debut)) echo $erreurdate_debut ;  ?></p>
                        <input type="text" class="form-control" id="date_debut"  name="date_debut" placeholder="Début">
                    </div>
                    
                    <div class="form-group  mt-5 mb-5">
                        <p class="text-danger"><?php  if (isset($erreurdate_fin)) echo $erreurdate_fin ; ?></p>
                        <input type="text" class="form-control" id="date_fin"  name="date_fin" placeholder="Fin">
                    </div>
                <button type="submit" class="btn btn-warning btn-block">Ajouter</button>
            </form>
        </div>
        </div>
</div>
</div>
    
</body>
</html>