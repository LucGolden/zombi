<?php

class Contact{
    private $nom;
    private $prenom;
    private $email;
    private $message;
    private $date;


    public function insertContact($nom, $prenom, $email, $message){

        // recuperations des valeurs inserer ds les inputs
        $this->nom = strip_tags($nom);
        $this->prenom = strip_tags($prenom);
        $this->email = strip_tags($email);
        $this->message = strip_tags($message);
    

        // Acces a la BDD
        require('connexion.php');
        // requete d'insertion ds la BDD 
        $requete = $pdo->prepare('INSERT INTO contacts (nom, prenom, email, message, date) VALUES (:nom, :prenom, :email, :message, NOW()) ');

        $requete->execute([
            // association des marquers avec les valeurs
            ':nom' => $this->nom,
            ':prenom' => $this->prenom,
            ':email' => $this->email,
            ':message' => $this->message
        
        ]);

        $requete->closeCursor();

    }



         
}