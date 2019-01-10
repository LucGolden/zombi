<?php

class Competence{
    private $titre;
    private $icone;
  
   

    public function insertCompetence($titre, $icone){

        // recuperations des valeurs inserer ds les inputs
        $this->titre = strip_tags($titre);
        $this->icone = strip_tags($icone);
      

        // Acces a la BDD
        require('connexion.php');
        // requete d'insertion ds la BDD 
        $requete = $pdo->prepare('INSERT INTO competences (titre, icone) VALUES (:nom_institution, :icone)');

        $requete->execute([
            // association des marquers avec les valeurs
            ':nom_institution' => $this->titre,
            ':icone' => $this->icone
        ]);

        $requete->closeCursor();
    }
   
}