<?php

// créer une class Chat()​ ​qui aura les ​propriétés privées suivantes : - Prénom (string de 3 à 20 caractères) - Age (int) - Couleur (string de 3 à 10 caractères) - Sexe (string : male ou femelle) - Race (string de 3 à 20 caractères) 

class Chat{
    private $prenom;
    private $age;
    private $couleur;
    private $sexe;
    private $race;


    // Faire les getters/setters permettant de valider le type de données ci-dessus

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        if (is_string($prenom) && strlen($prenom) >= 3 && strlen($prenom) <= 20){

            $this->prenom = $prenom;
        }

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {

            return $this->age;
        
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        if (is_numeric($age)){

            $this->age = $age;
        }

        return $this;
    }

    /**
     * Get the value of couleur
     */ 
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */ 
    public function setCouleur($couleur)
    {
        if (is_string($couleur) && strlen($couleur) >= 3 && strlen($couleur) <= 10){

            $this->couleur = $couleur;
        } 

        return $this;
    }

    /**
     * Get the value of sexe
     */ 
    public function getSexe()
    {

        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */ 
    public function setSexe($sexe)
    {
        if ($sexe == 'male' || $sexe == 'femelle')
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get the value of race
     */ 
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set the value of race
     *
     * @return  self
     */ 
    public function setRace($race)
    {
         if (is_string($race) && strlen($race) >= 3 && strlen($race) <= 20){
             $this->race = $race;

         }

        return $this;
    }

    // Ajouter une méthode ​getInfos()​ permettant de retourner la totalité des propriétés sous forme de tableau.

    public function getInfos(){
        $infos = array();
        $infos['prenom'] = $this -> getPrenom();
		$infos['age'] = $this -> getAge();
		$infos['couleur'] = $this -> getCouleur();
		$infos['sexe'] = $this -> getSexe();
		$infos['race'] = $this -> getRace();
		return $infos;
    }

} // Fin class Chat{