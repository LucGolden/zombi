<?php

class Admin{
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $linkedin;
    private $github;
    

    public function modifAdmin($prenom, $nom, $email, $telephone, $linkedin, $github, $photo){

        // recuperations des valeurs inserer ds les inputs
        $this->prenom = strip_tags($nom);
        $this->nom = strip_tags($prenom);
        $this->email = strip_tags($email);
        $this->email = strip_tags($telephone);
        $this->email = strip_tags($linkedin);
        $this->email = strip_tags($github);
      

        // Acces a la BDD
        require_once 'connexion.php';
        // requete d'insertion ds la BDD 
        $requete = $pdo->prepare('REPLACE INTO luc_admin (nom, prenom, email, telephone, linkedin, github) VALUES (:nom, :prenom, :email, :telephone, :linkedin, :github)');

        $requete->execute([
            // association des marquers avec les valeurs
            ':prenom' => $this->nom,
            ':nom' => $this->prenom,
            ':email' => $this->email,
            ':email' => $this->telephone,
            ':email' => $this->linkedin,
            ':email' => $this->github
        ]);

        $requete->closeCursor();

    }



         
}