<?php 

class Homme {
    private $prenom;
    private $nom;
    public function setPrenom($p){//Par convention, on appel la fonction avec le mot-clé 'set' . On va setter un prenom, cest-à-dire lui attribuer/affecter une propriété.
        // $prenom = $p; => // cette variable est locale, il ne s'agira donc pas de la variable $prenom de l'objet

        if (is_string($p)){

            $this->prenom = $p;
        }
    }
    public function getPrenom(){//Par convention, on appel la fonction avec le mot-clé 'get' . On va getter un prenom, cest-à-dire lui afficher une propriété.
        return $this->prenom;
    }

    public function setnom($p){
       
        $this->nom = $p;
    }
    public function getnom(){
        return $this->nom;
    }
}
// ****************L**********************U**************************C***********
$homme1 = new Homme();
$homme1->setPrenom('Luc');//Je modifie l'élément (dans l'objet dans lequel on se trouve) car ma méthode est public
echo $homme1->getPrenom() . '<br>'; //Acceder à l'élément ds l'objet car ma méthode est public
$homme1->setnom('Joinvil');//Je modifie l'élément (dans l'objet dans lequel on se trouve) car ma méthode est public
echo $homme1->getnom() . '<br>';

var_dump($homme1);
// ********************
$homme2 = new Homme;
echo $homme2->getPrenom


// *************************************************************
/*  Pourquoi des getters et des setteurs : 
        PHP est un langage objet qui ne type pas ses variables, il faut donc prévoir autant de stter et de getter que de propriété afin de contrôler l'intégrité des données.
        Pour 10 propriétés, il y aura 20 méthgodes (10setteurs et 10getteurs)
        
        $this ; represente l'objet en cours, ici l'int'rieur de la classe
                objet rn-cours = objet qui exécute la méthode
                
        Les getteurs : voir / afficher
        Les setteurs ; atribuer / affecter
                => Les deux réunis permettent de controler l'intégrité des données.
                
        Mettre les propriétés en 'private' permet d'eviter qu'elles ne soient pas modifieés de l'extérieur de la classe sans contrôle.*/


