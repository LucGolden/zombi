<?php

class Connexion{
    private $pseudo;
    private $mdp;

    public function ConnexionAdmin($pseudo, $mdp ){
          // recuperations des valeurs inserer ds les inputs
        $this->pseudo = strip_tags($pseudo);
        $this->mdp = strip_tags($mdp);

        // Acces a la BDD
        require_once 'connexion.php';

        $requete = $pdo->prepare('SELECT * FROM connexion WHERE pseudo = :pseudo AND mdp = :mdp');

        $requete->execute([
            ':nom' => $this->pseudo,
            ':nom' => $this->mdp

        ]);

    }


}