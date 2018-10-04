<?php

function debug($param){
    echo '<pre style="background-color: #08bc05; color:white;">';
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
    if (internauteEstConnecte() && $_SESSION['membre']['statut'] == 1){
        return true;
    }else{
        return false;
    }
}

// -_-_-__-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_--_FONCTION DE REQUETE-_-___--_-_-_-_-_---_-_-_-_-_-_-_
function executeRequete($requete, $param = array()){

    if (!empty($param)){// si j'ai bien reçu un array rempli, je peux faire le foreach dessus pour transformer les caractères spéciaux en entités HTML

            foreach($param as $indice => $valeur) {
                $param[$indice] = htmlspecialchars($valeur, ENT_QUOTES); //pour eviter les injections CSS ET JS
            }
        }

       global $pdo; // permet d'avoir accès (à l'interieur de la fonction) a la variable $pdo definie ds l'espace global (à l'extérieur de la fonction)

        $resultat = $pdo->prepare($requete);//on prepare la requête fournie lors de l'appel des la fonction
        $resultat->execute($param);//on exécute en liant les marqueurs aux valeurs qui se trouvent ds l'array $param fournie lors de l'appel des la fonction

        return $resultat; //on retourne l'objet PDOStatement à l'endroit où la fonction executeRequete est appelée

}