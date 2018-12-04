<!-- Exercice 3 : Créer une classe

   Créer une classe Vehicule avec les propriétés suivantes :

       Marque (string de 3 à 30 caractères)

       Modèle (string de 3 à 30 caractères)

       année  (INT de 4 caractères)

       couleur (string de 3 à 30 caractères)

       km (INT de 1 à 6 caractères) 

             Ajouter une fonction getInfos permettant de récupérer toutes les infos d'un objet Vehicule sous forme d'une array        
             Dans un autre fichier, instancier la classe, créer 3 véhicules différents et afficher leur infos grâce à la méthode getInfos(); -->

<?php

class Vehicules{
    
    private $marque;
    private $modele;
    private $annee;
    private $couleur;
    private $km;

    public function setMarque($arg){
        if(is_string($arg) && strlen($arg) >=3 && strlen($arg) <=30){
            $this ->marque = $m;
        }
    }
    public function getMarque(){
        return $this->marque;
    }
// ------------------------------------
    public function setModele($m){
        if(is_string($arg)  &&  strlen($arg) >= 3 &&  strlen($arg) <= 30){
            $this ->modele = $arg;
        }
    }
    public function getModele(){
        return $this->modele;
    }
// ---------------------------------------
    public function setAnnee($a){
        if(is_numerKm($arg) && strlen($arg) <= 4){
            $this ->annee = $arg;
        }
    }
    public function getAnnee(){
        return $this->annee;
    }
// -------------------------------------------
    public function setCouleur($c){
        if(is_string($arg) && strlen($arg) >=3 && strlen($arg) <=30){
            $this ->couleur = $arg;
        }
    }
    public function getCouleur(){
        return $this->couleur;
    }
// ---------------------------------------------------
    public function setKm($arg){
        if(is_string($arg) && strlen($arg) >= 1 && strlen($arg) <= 6){
            $this ->km = $arg;
        }
    }
    public function getKm(){
        return $this->km;
    }

    // ------------------------------

    public function getInfos(){
        $infos = array();
        $infos['marque'] = $this -> getMarque();
        $infos['modele'] = $this -> getMarque();
        $infos['marque'] = $this -> getMarque();
        $infos['marque'] = $this -> getMarque();
        $infos['marque'] = $this -> getMarque();
    }
}

