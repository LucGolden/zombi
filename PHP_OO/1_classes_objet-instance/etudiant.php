<?php 

class Etudiant {
    private $prenom;

    public function __construct($arg){
        // __construct : méthode appelée automatiquement lors d'une instanciation de la classe ('new'). On ne peuty pas déclarer deux constructeurs en PHP.
        echo "Instanciation, nous avons reçu l'information suivante : $arg";
        $this->setPrenom($arg); // il est préferable de passer par le setteur, comme ça, on passe dans les controles.
    }
    public function setPrenom($arg){
        $this->prenom = $arg;
    }
    public function getPrenom(){
       return $this->prenom;
    }

}
// -*-*-*-*-*-*-**-*--*_*_*_*_*_*_**-*-*-*-*-*-*-*-*-*--**-*-*-**--*-*-*-*--**
$etudiant1 = new Etudiant('Merlentz');// __construct est appelée automatiquement, nous avaons mis un argument après le nom de la cvlasse qui attérit ds le constucteur.
echo '<br>Prenom : ' . $etudiant1->getPrenom();

$etudiant1->__construct();//Le constructeur peut tout de meme etre appelé comme méthode 'classique'.

// -----------plus : 
//  __construct : sera équivalent du init avec session_start(), connexion à la BDD, autoload, etc...
//  __construct : methode magique qui s'exévute automatiquement