<?php 
// Une classa permet de produire plusieurs objet. Par convention? un e classe sera nommée avec la première lettre en Majuscule;
class Panier
{
    public $nbProduit; // propriété
    public function ajouterArticle(){ // methode
        // traitements
        return "L'article a bien été ajouter";

    }
    protected function retirerArticle(){
        //traitements
        return "L'article a bien été retiré !";
    }
    private function affichageArticle(){
        // traitements
        return "Voici les articles";
    }

}

// -------------------------------------------

$panier1 = new Panier; // new Panier <=> Instanciation (permet de déployer l'bjet issue de la classe (ici, Panier) permet de passer d'une classe à l'objet.)
// $panier1 représente l'objet issue de la classe
var_dump($panier1);
//type(objet), nom de la classe, référence de l'objet
$panier1->nbProduit = 5;
echo '<br> Panier1 : ' . $panier1->nbProduit . ' produits <br>';// appel de la propriété public
echo 'Panier1 : ' . $panier1->ajouterArticle() . ' <br>';// appel de la méthode public

// echo 'Panier1 : ' . $panier1->retirerArticle() . ' <br>';// appel de la méthode protected
// Error, l'élément est accesible uniquement dans la classe où cela a été déclaré ainsi que les classes héritières.

// echo 'Panier1 : ' . $panier1->affichageArticle() . ' <br>';// appel de la méthode private
// Error, l'élément est accesible uniquement dans la classe où cela a été déclaré .

$panier2 = new Panier;
var_dump($panier2);
$panier2->nbProduit = 10;
echo '<br> Panier2 : ' . $panier2->nbProduit . ' produits <br>';

echo 'Panier1 : ' . $panier1->nbProduit . ' produits <br>';

// ****************************************************************
/* Niveau de visibilité : 
        
        Public : accessible de partout
        protected : accessble uniquement dans la classe où cela a été déclaré Et aussi dans les classes héritières
        private : accessible uniquement ou cela a été déclaré

        new : mot-clé permettant d'effectuer une instanciation (et donc créer un objet)
        Une classe permet de produire plusieurs objets et donc nous pouvons effectuer plusieurs instanciation 'new'
        Ici, $panier1 (et $panier2) représente l'objet issue de la classe Panier

        
        */