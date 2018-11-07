<?php
function recherche($tab, $element){
    if (!is_array($tab)){
        die('Vous devez envoyer un array !'); // die() permet d'arreter les traitements (script)
    }
    $position = array_search($element, $tab);
    return $position;
}

// *******************************************
$liste = array('orange', 'fraise', 'pomme');

    echo recherche($liste, 'fraise') . '<br>'; // affiche 1 (ici, la position de fraise ds mon tableau $liste)
    echo recherche('tableau', 'fraise') . '<br>'; 

    echo 'traitements php......';
