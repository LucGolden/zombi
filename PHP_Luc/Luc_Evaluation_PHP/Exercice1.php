<?php 
//création d'une variable d'affichage :
$affichage = '';  

// Créer un tableau en PHP contenant les infos suivantes :  
$onSepresente = array('prenom' =>'Luc M',
                      'nom'    => 'Joinvil',
                      'adresse' => '25 place le vau',
                      'code_postal' => '92600',
                      'ville' => 'Asniéres sur seine',
                      'emil' => 'lucmerlentzjoinvil@gmail.com',
                      'telephone' => '0753412553',
                      'date_de_naissance' => '1999-11-30');

// Boucle Foreach pour pacourir le tableau "$onSepresente" :
foreach($onSepresente as $cles => $valeurs){
    $affichage .= '<ul class="list-group">';
    
        //Condition pour afficher la date de naissance au format français
        if ($cles == 'date_de_naissance'){
            $date = new DateTime($valeurs);
            $affichage .= '<li class="list-group-item">' . $date->format('d-m-Y') . '</li>';
        }else{
            $affichage .= '<li class="list-group-item">' . $valeurs . '</li>';
        }
    $affichage .= '<ul>';
}





?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 1</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<body>
<div class="container">
<div class="row">
<div class="col-6"> 
<?php  echo $affichage; ?>  
 </div>

</div>
</div>
</body>
</html>