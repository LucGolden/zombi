<?php  
// Exception : version procédural et tendance Orienté Objet.
// L'avantage des exception c'est de centraliser un traitement à effectuer ds le catch en cas d'erreur.

function recherche($tab, $element){
    if (!is_array($tab)){
        Throw new Exception("Error Processing Request", 1);
         new exception('Vous devez envoyer un array !'); // Trow permet de nous envoyer dans le bloc catch et d'arréter l'exécution du code.
    }
    if( sizeof($tab) <= 0){
        Throw new exception('Vous devez envoyer un array avec du contenu.');
    }
    $position = array_search($element, $tab);
    return $position;
}
// ****************************************
$tab = array();
$liste = array('orange', 'fraise', 'pomme');

try {//Bloc d'essai (On essaie d'effectuer les instructions suivante dans le try)

    echo recherche($liste,'pomme') . '<br>';
    echo recherche($tab, 'pomme') . '<br>';
    echo recherche('tableau', 'pomme') . '<br>';
    echo 'traitements;;;;;;;;;;;;;;;;';

}
catch(Exception $e){ // Bloc de capture. On va attraper les exception 'Exception' s'il y en a une qui est relevée. $e represente l' 'Exception' car en renseignant 'throw'

    echo "Message d'erreur : " . $e->getMessage() . '<br>';
    echo "taritement conforme ds le cas où l'argument ne soit pas un array, OU que l'argument est un array vide. <br>";
    echo "Information : " . $e->getCode() . '<br>Message : ' . $e->getMessage() . '<br>Fichier : ' . $e->getFile() . '<br>Ligne : ' . $e->getLine() . '<br>';
}

/* 
    
*/