<?php 

abstract class Joueur{
    public function seConnecter(){
        return $this->EtreMajeur();
    }
    abstract public function EtreMajeur(); // les méthode abstrates n'ont pas de contenu
    abstract public function Devise();
}
// ******************************************************************

class JoueurFr extends Joueur {
    public function EtreMajeur(){// OBLIGATION de edéfinir la méthode maé classe parente sinon on obtient une Erreur
        return 18;
    }
    public function Devise(){
        return '€';
    }
}

class JoueurUs extends Joueur {
    public function EtreMajeur(){// OBLIGATION de edéfinir la méthode maé classe parente sinon on obtient une Erreur
        return 21;
    }
    public function Devise(){
        return '$';
    }
}
// **************************************
// $joueur = new Joueur; // Erreur, une classe abstraite  n'est pas instanciable !!!

$joueurFr = new JoueurFr; 
echo $joueurFr->seConnecter() . '<hr>';

$joueurUs = new JoueurUs; 
echo $joueurUs->seConnecter() . '<hr>';
// *********************************************************************
/*
   Une classe abstraite (abstract) N'EST PAS INSTANCIABLE !
   Les méthodes abstraites (abstract) N'ONT PAS de contenu !
   Lorsque l'on hérite des méthodes abstraites, il est NECESSAIRE
    que la CLASSE qui les CONTIENT soit ABSTRAITE !!
   Par ailleurs, une classe abstraire peut contenir des méthodes normales

*/