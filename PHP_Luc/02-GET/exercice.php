<?php
//Exercice :
/* 
    1-Vous créez une page "profil" avec un nom et un prenom.
    2-Vous y ajoutez 1 lien "modifier mon profil". Ce lien passe ds l'url à la page extérieur.php elle-même que l'action demandée est la modification du compte.
    3- Si la modification est démandée, c'est-à-dire que vous avez reçu cette info en GET, vous affichez "Vous avez demandé la modification de votre profil !".
*/
// echo '<pre>';
// var_dump($_GET);
// echo '</pre>';

    $message = '';
        if (isset($_GET['action']) && $_GET['action'] == 'modification'){
    $message = '<p> <strong> Vous avez demandé la modification de votre profil ! </strong> </p>';
}
   
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profil</title>
    <style>
    strong {
        color: green;
    }
    </style>
</head>
<body>
    <h1>Profil</h1>
    <?php
    echo $message;
    ?>
    <p> Prénom : Merlentz
    <br>
        Nom : JOINVIL
        </p>
        <a href="?action=modification">modifier mon profil</a>
</body>
</html>
<!--------------------------------------------------->



