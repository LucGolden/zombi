<?php

// Exercice :
//      -créer un formulaire avec les champs ville, code postal et une zone de texte adresse.
//      -vous afficher les données saisies par l'internaute dans la page formulaire2-traitement.php.


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire2</title>
</head>
<body>
<h1>Formulaire 2</h1>
    <form method="post" action="formulaire2-traitement.php">
    <label for="ville">Ville</label>
    <input type="text" id="ville" name="ville">

    <br>

    <label for="code_postal">Code postal</label>
    <input type="text" id="code_postal" name="code_postal">
    <br>
    <label for="adresse">Adresse</label>
    <textarea name="adresse" id="adresse" cols="30" rows="10"></textarea>

    <br>

    <input type="submit" values="Envoyer">
    </form>
</body>
</html>