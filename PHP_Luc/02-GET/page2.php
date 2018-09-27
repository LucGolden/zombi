<style>
p{color:red;
font-size: 50px;
}
</style>
<?php

// ---------------
// La superglobale "$_GET" represente l'url. il s'agit d'une super gliobale, et comme toutes les superglobales, il s'agit d'un array. Superglobale signifie que ce tableau est disponible ds tous les contextes du script, y compris ds l'espace locol des fonctions.

// Ds notre exemple, les ,informations transitent ds l'url de la manière suivante : ?article=jean&couleur&=bleu&prix=30

// La syntaxe de l'url est donc : page.php?indice1=valeur1&indiceN=valeurN
// La superglobale $_GET transforme les information passées ds l'url en cet array : $_GET = array('indice1' => 'valeur1', 'indiceN' => valeurN,);

echo '<pre>';
var_dump($_GET);
echo '</pre>';


if (isset($_GET['articles']) && isset($_GET['couleur']) && isset($_GET['prix'])){//si existent les indices "article", "couleur" et "prix", alors on peut afficher leur valeur :
echo '<h1> Détail du produit</h1>';
echo '<p> Article : '   . $_GET['article']  . '</p>';
echo '<p> Couleur : '   . $_GET['couleur']  . '</p>';
echo '<p> Prix : '      . $_GET['prix']     . '€ </p>';
}else{//sinon, on met un msg à l'internaute
    echo '<p>Ce produit n\'existe pas !</p>';
}