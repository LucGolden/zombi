<?php

// require du fichier Chat.php

require 'Chat.php';

// instancier la classe afin de pouvoir afficher 3 chats différents
$chat1 = new Chat;
$chat1  -> setPrenom('Mimi') 
        -> setAge(3) 
        -> setCouleur('gris')
        -> setSexe('male')
        -> setRace('chat');
$c1 = $chat1 -> getInfos();

$chat2 = new Chat;
$chat2 -> setPrenom('Minou') 
        -> setAge(3) 
        -> setCouleur('blanc')
        -> setSexe('femelle')
        -> setRace('chat');
$c2 = $chat2 -> getInfos();

$chat3 = new Chat;
$chat3  -> setPrenom('Grinch') 
        -> setAge(3) 
        -> setCouleur('noir')
        -> setSexe('male')
        -> setRace('chat');
$c3 = $chat3 -> getInfos();
?>
 <!-- afficher le résultat -->

 <h2>Les infos pour Chat 1</h2>
    <ul>
        <li><b>Prénom : </b> <?= $c1['prenom'] ?></li>
        <li><b>Age : </b> <?= $c1['age'] ?> mois</li>
        <li><b>Couleur : </b> <?= $c1['couleur'] ?> </li>
        <li><b>Sexe : </b> <?= $c1['sexe'] ?></li>
        <li><b>Race : </b> <?= $c1['race'] ?></li>
    </ul>
 <h2>Les infos pour Chat 2</h2>

    <ul>
        <li><b>Prénom : </b> <?= $c1['prenom'] ?></li>
        <li><b>Age : </b> <?= $c1['age'] ?> mois</li>
        <li><b>Couleur : </b> <?= $c1['couleur'] ?> </li>
        <li><b>Sexe : </b> <?= $c1['sexe'] ?></li>
        <li><b>Race : </b> <?= $c1['race'] ?></li>
    </ul>

 <h2>Les infos pour Chat 3</h2>
    <ul>
        <li><b>Prénom : </b> <?= $c1['prenom'] ?></li>
        <li><b>Age : </b> <?= $c1['age'] ?> mois</li>
        <li><b>Couleur : </b> <?= $c1['couleur'] ?> </li>
        <li><b>Sexe : </b> <?= $c1['sexe'] ?></li>
        <li><b>Race : </b> <?= $c1['race'] ?></li>
    </ul>

