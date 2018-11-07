<?php 
// Singleton : est un pattern qui permet de donner une solution à plusieurs problémes récurrents.
class Singleton 
{
    public $numero = 20;
    private static $instance = null;

    private function __construct(){} // La classe N'EST PAS INSTANCIABLE car le constructeur est privé !
    
    private function __clone(){} // permet que l'objet ne soit pas clonable

    public static function getInstance(){
        if(is_null(self::$instance)){ // Si $instance est null, ce qui est le cas la premieres fois.
            //Toutes les autres fois, je ne rentre pas ds le 'if' car il y a mnt un objet dans $instance
                self::$instance = new Singleton(); //Instanciation UNE SEULE FOIS !

        }
        return self::$instance;
    }
}

// $singleton1 = new Singleton; // erreur normal car la fonction __construct()est privé!!

$objet1 = Singleton::getInstance();
var_dump($objet1); echo '<br>';

$objet2 = Singleton::getInstance();
var_dump($objet2); echo '<br>';

$objet3 = Singleton::getInstance();
var_dump($objet3); echo '<br>';

echo $objet1->numero . '<br>';
echo $objet2->numero . '<br>';
echo $objet3->numero . '<br>';

$objet2->numero = 24;//affectation

echo $objet1->numero . '<br>';
echo $objet2->numero . '<br>';
echo $objet3->numero . '<br>';


