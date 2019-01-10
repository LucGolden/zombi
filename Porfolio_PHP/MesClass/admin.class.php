<?php

class Admin{
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $linkedin;
    private $github;
    private $photo;
    private $apropos;
    

    public function modifAdmin($prenom, $nom, $email, $telephone, $linkedin, $github, $photo, $apropos){

        // recuperations des valeurs inserer ds les inputs
        $this->prenom = strip_tags($nom);
        $this->nom = strip_tags($prenom);
        $this->email = strip_tags($email);
        $this->telephone = strip_tags($telephone);
        $this->linkedin = strip_tags($linkedin);
        $this->github = strip_tags($github);
        $this->photo = strip_tags($photo);
        $this->apropos = strip_tags($apropos);
      

        // Acces a la BDD
        require('connexion.php');
        // requete d'insertion ds la BDD 
        $requete = $pdo->prepare('REPLACE INTO luc_admin (nom, prenom, email, telephone, linkedin, github, photo, apropos) VALUES (:nom, :prenom, :email, :telephone, :linkedin, :github, :photo, :apropos)');

        $requete->execute([
            // association des marquers avec les valeurs
            ':prenom' => $this->nom,
            ':nom' => $this->prenom,
            ':email' => $this->email,
            ':telephone' => $this->telephone,
            ':linkedin' => $this->linkedin,
            ':github' => $this->github,
            ':photo' => $this->photo,
            ':apropos' => $this->apropos
        ]);

        $requete->closeCursor();

    }



         
}