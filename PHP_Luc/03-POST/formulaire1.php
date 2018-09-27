<?php
// -----------------
// La superglobale $_POST
// ---------------
// $_POST est une superglobale qui permet de récupérer les données saisis ds un formulaire.

// $_POST est une superglobale donc un array. Il est disponible ds tous les contextes du script , y compris au sein des fonctions.

// syntaxe de $_POST : $_POST = array('name1' => 'valeur input1', 'nameN' => 'valeur inputN');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formumaire</title>
</head>
<body>
    <h1>Formulaire</h1>
    <form method="post" action=""><!-- un formulaire doit être tjrs ds des balise <form> pour fonctionner. Attribut method définit la méthode d'envoi des saisie vers le serveur. Attribut action définit l'url de destination des saisis -->
    <label for="prenom">Prénom</label>
    <input type="text" id="prenom" name="prenom"><!-- les name des inputs constituent les indices de l'array $_POST qui réceptionne les infos -->

    <br>

    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="10"></textarea> <!-- Les id et les for sont liés : ils permettent de placer le cuseur ds l'input quand on clique sur le label -->

    <br>

    <input type="submit" value="Envoyer">

    </form>
</body>
</html>