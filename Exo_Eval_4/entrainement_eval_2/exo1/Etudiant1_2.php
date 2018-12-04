<?php   
/* 
Exercice 1 : PHPOO
    - Créer une classe Etudiant
    - Créer les propriétés   private
        - prenom (string de 5 à 30 caracteres)
        - nom (string de 5 à 30)
        - email(email)
        - telephone (INT de 10 caracteres)
        
        - Créer une fonction getInfos() qui retourne un array avec toutes les infos
        - Instancier 3 fois la classe dans un autre fichier. Pour chaque etudiant affecter des valeurs et les afficher. 
*/

class Etudiant{
    private $prenom;
    private $nom;
    private $email;
    private $telephone;

    


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
      if(is_string($prenom) && strlen($prenom) >= 5 && strlen($prenom) <= 30){

            $this->prenom = $prenom;
        }

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        if(is_string($nom) && strlen($nom) >= 5 && strlen($nom) <= 30){

            $this->nom = $nom;
        }

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$this -> email = $email;
		}

        return $this;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        if(is_numeric($telephone) && strlen($telephone) == 10){

            $this->telephone = $telephone;
        }

        return $this;
    }

    public function getInfos(){
        $infos = array();
        $infos['prenom'] = $this -> getPrenom(); 
        $infos['nom'] = $this -> getNom(); 
        $infos['email'] = $this -> getEmail(); 
        $infos['telephone'] = $this -> getTelephone(); 
        return $infos;
    }
}