<?php

// Les méthodes magiques s'exécute automatiquement. 
Class Societe {
    public $adresse;
    public $ville;
    public $cp;

    public function __construct(){}
    public function __set($nom, $valeur){//Se declenche uniquement en cas de tentative d'affectation sur une propriéte inexistante.
            echo "La propriété <b>$nom</b> n'existe pas, la valeur<b> $valeur</b> n'a donc pas été effectée!<br>";
    }

    public function __get($name){
         echo "La propriété<b> $name </b>n'existe pas, on ne peut pas l'afficher ! <br>";
    }

    public function __call($nom, $argument){// Se declenche uniquement en de tentative d'exécutation sur une méthode qui n'existe pas.
        echo "Tentative d'exécuter la méthodes $nom mais elle n'existe pas.<br>Les arguments étaient : " . implode('-', $argument) . 'br>';

    }


}
// ************************************
$societe1 = new Societe;
// $societe1->villes = 'Paris'; // test - lorsque l'on tente d'affecter une valeur à une propriété inexistante, ça fonctionne et ajoute donc la propriété et sa valeur à l'objet.

// echo $societe1->titre; // erreur undefine, la propriété n'existe pas !
//  $societe1->methode(); // erreur fatal, la methode n'existe pas !
// ************************************************************************
$societe1->pays = 'France'; // Declenchement de la méthode __set() au lieu de la création d'une nouvelle propriété
$societe1->ville = 'Paris';

echo $societe1->titre; // Declenchement de la méthode __get() au lieu d'une erreur undefine

echo $societe1->methode1(1,2,3);// Declechement de la méthode __call() au lieu d'une erreur fatale.

print('<pre>');
print_r($societe1);
print('</pre>');

// ************************************************
/* 
*Il existe plusieurs autres méthodes magiques.
__callStatic($nom, $argument) => pour les methodes 'static'
__isset($nom) => se lance lors d'une condition iseet/empty sur une propriété
__destruct() => se lance a la fin de l'execution du script. ( pratique pour fermer la connextion à la BDD par exemple)
etc...Voir la DOC
 */