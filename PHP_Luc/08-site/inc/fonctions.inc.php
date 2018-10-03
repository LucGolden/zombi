<?php

function debug($param){
    echo '<pre style="background-color: red; color:white;">';
        var_dump($param);
    echo '</pre>';
}

/* ---------------------------------------FONCTIONS MEMBRES------------------------------------------- */
// fonction m'indique si l'internaute est connecté
function internauteEstConnecte(){
    if(isset($_SESSION['membre'])){
        return true; // si l'indice "membre" existe ds la session, c'est que l'internaute est passé par le formulaire de connexion avec le login/mdp. On trouve donc "true"
    }else{
        return false; //ds le cas contraire (il n'est pas connecté) on retourne false
    }

    // OU :
    return (isset($_SESSION['membre']));
}

// fonction qui indique que le membre est un administrateur et est connecté :
function internauteEstConnecteEtAdmin (){
    if (internauteEstConnecte() && $_SESSION['membre']['status'] == 1){
        return true;
    }else{
        return false;
    }
}