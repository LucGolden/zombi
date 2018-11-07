<?php 
class Membre { 
    public $id = 10;
    public $pseudo;
    public $mdp;

    public function __construct() {
        echo 'Internaute ! <br>';
    }
    public function inscription(){
        //traitements
        return "Je m'inscris ! <br>";
    }
    public function seConnecter(){
        //traitements
        return "Je me connecte ! <br>";
    }
}
// ************************************************

class Admin extends Membre { // extends = heritage, comme include, ici on a un copier/coller du code de la classe Membre

    public function accesBackOffice() {
        return 'Acces BackOffice ! <br>';
    }
}
// ************************
$admin1 = new Admin; // Je crée un objet admin qui herite de la classe Membre

echo $admin1->seConnecter();
echo $admin1->accesBackOffice();
echo $admin1->id . '<hr>';
// ****************************************
$membre1 =new Membre;

echo $membre1->seConnecter();//J'accède à la méthode par l'objet membre1
echo $membre1->id;//J'accède à la propriété par l'objet membre1
echo $membre1->accesBackOffice();//Erreur !! La méthode accesBackOffice() n'est pas ds ma classe Membre et je n'ai pas d'héritage de ma classe admin dc je ne peux pas accéder à cette méthode