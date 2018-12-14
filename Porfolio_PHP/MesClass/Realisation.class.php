<?php

class Realisation{
    private $image;
    private $nom;
    private $commentaire;
    

    public function insertRealisation($image, $nom, $commentaire){

        // recuperations des valeurs inserer ds les inputs
        $this->image = strip_tags($image);
        $this->nom = strip_tags($nom);
        $this->commentaire = strip_tags($commentaire);
      

        // Acces a la BDD
        require_once 'connexion.php';
        // requete d'insertion ds la BDD 
        $requete = $pdo->prepare('REPLACE INTO realisations (image, nom, commentaire) VALUES (:image, :nom, :commentaire)');

        $requete->execute([
            // association des marquers avec les valeurs
            ':image' => $this->image,
            ':nom' => $this->nom,
            ':commentaire' => $this->commentaire
        ]);

        $requete->closeCursor();

    }



         
}