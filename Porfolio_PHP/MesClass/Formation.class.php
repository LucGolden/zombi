<?php

class Formation{
    private $nom_institution;
    private $domaine;
    private $date_debut;
    private $date_fin;
   

    public function insertFormation($nom_institution, $domaine, $date_debut, $date_fin){

        // recuperations des valeurs inserer ds les inputs
        $this->nom_institution = strip_tags($nom_institution);
        $this->domaine = strip_tags($domaine);
        $this->date_debut = strip_tags($date_debut);
        $this->date_fin = strip_tags($date_fin);
      

        // Acces a la BDD
        require_once 'connexion.php';
        // requete d'insertion ds la BDD 
        $requete = $pdo->prepare('INSERT INTO formations (nom_institution, domaine, date_debut, date_fin) VALUES (:nom_institution, :domaine,  :date_debut, :date_fin) ');

        $requete->execute([
            // association des marquers avec les valeurs
            ':nom_institution' => $this->nom_institution,
            ':domaine' => $this->domaine,
            ':date_debut' => $this->date_debut,
            ':date_fin' => $this->date_fin
            
        ]);

        $requete->closeCursor();
    }
   
}