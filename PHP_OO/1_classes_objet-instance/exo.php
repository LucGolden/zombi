<?php
/* 
EXO1 ; 
Créer une classe Membre, evec les propriétés pseudo et mdp
        class Membre{
            private $pseudo;( le pseudo doit etre inférieur à 15 caractéres et su périeur à 0... et que ce soit un string !!)
            private $mdp;
        }

    Objectif : afficher le pseudo et le mdp
*/

class Membre {
    private $pseudo;
    private $mdp;
        // Pseudo
    public function setPseudo($psd){
       if(is_string($psd) && (strlen($psd) > 0 && strlen($psd) < 15)){
           $this->pseudo = $psd;
       }
    }
    public function getPseudo(){
        return $this->pseudo;
    }
        //Mdp
        public function setMdp($m){
            if (strlen($m) > 0){
                $this->mdp = $m;
            }
        }
        public function getMdp(){
            return $this->mdp;
        }
}

$membre1 = new Membre;
$membre1->setPseudo('ghost') ;
echo '<h3>' . $membre1->getPseudo() . '</h3>';

$membre1->setMdp('ghosthaitian');
echo '<h3>' . $membre1->getMdp() . '</h3>';