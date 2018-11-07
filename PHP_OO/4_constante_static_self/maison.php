<?php 

class Maison {
    public static $espaceTerrain = '500m²'; //Appartient à la classe
    public $couleur = 'blanc'; //Appartient à l'objet
    const HAUTEUR = '10m';

    private static $nbPiece = 7; // Appartient a la classe
    private $nbPorte = 10;// Appartient à l'objet

    public static function getNbPiece(){
        return  self::$nbPiece; // lors d'un self::, il faut mettre le $ devant la propriété
    }

    public function getNbPorte(){
        return $this->nbPorte;
    }
}
// ******************************************
echo '<b>nbPiece : ' . Maison::getNbPiece() . '</b><hr>'; // j'appel une méthode de ma classe

echo '<b>espaceTerrain : ' . Maison::$espaceTerrain . '</b><hr>'; // j'appel une propriété de ma classe par ma classe

$maison1 = new Maison;
echo '<b>couleur : ' . $maison1->couleur . '</b><hr>'; //j 'appel une propriété de mon objet

echo '<b>nbPorte : ' . $maison1->getNbPorte() . '</b><hr>'; //j 'appel une méthode de mon objet par mon objet

echo '<b>Hauteur : ' . Maison::HAUTEUR . '</b><hr>'
// *********************************************************************
