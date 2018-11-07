<?php 

class Compteur {
    public static $nbInstanceClass = 0;
    public $nbInstanceObjet = 0;

    public function __construct(){
        ++self::$nbInstanceClass; // => self::$nbInstanceClass + 1
        ++$this->nbInstanceObjet; // => self::$nbInstanceObjet + 1
     }
}

$c1 = new Compteur; //nbInstanceClass à 1 - nbInstanceObjet à 1
$c2 = new Compteur; //nbInstanceClass à 2 - nbInstanceObjet à 2
$c3 = new Compteur; //nbInstanceClass à 3 - nbInstanceObjet à 3
$c4 = new Compteur; //nbInstanceClass à 4 - nbInstanceObjet à 4
$c5 = new Compteur; //nbInstanceClass à 5 - nbInstanceObjet à 5 
echo '<b>Nombre de fois que la classe a instancié : ' . Compteur::$nbInstanceClass . '</b><hr>'; //Je peux accéder à une propriétéde ma classe via ma class //affiche 5
echo '<b>Nombre de fois que l\'objet a instancié : ' . $c5->nbInstanceObjet . '</b><hr>'; //Je peux accéder à une propriétéde mon objet via mon objet //affiche 1 

// ***************************
/* 
    La classe a 'produit' 5 objets
    Chaque a été 'produit' 1 fois
*/