<?php

/*
 * Une classe c'est en fait un plan à partir duquel on va pouvoir créer plusieurs objets
 * un peu comme un moule dont on en obtient comme objets des gâteaux
 *
 * Une classe peut contenir plusieurs méthodes (ou fonctions)
 * par ex. une classe voiture peut avoir comme méthodes 'freiner' et 'accélerer'
 * et quand je créé un objet de la classe voiture, par ex. un 308 ou une porsche qui auront les
 * fonctionnalités de la classe voiture comme 'freiner' et 'accélerer'
 */

class Contact {
    /* private $nom;
      //variable privée, on ne peut modifier la variable qu'en passant par les méthodes de la class Contact
      private $email;
      private $sujet;
      private $message; */

    // Bonus - pour l'email
    private $to;
    private $headers;

    /*
      // fonction d'insertion dans la BDD
      public function insertContact($nom, $email, $sujet, $message) {

      // on récupère les données rentrées par l'utilisateur
      $this->nom = strip_tags($nom);
      $this->email = strip_tags($email);
      $this->sujet = strip_tags($sujet);
      $this->message = strip_tags($message);

      // on requiert le fichier connexion.php qui contient l'accès à la BDD
      require('connexion.php');

      // on créé une requête puis on l'exécute
      $req = $bdd->prepare('INSERT INTO contact (nom, email, sujet, message) VALUES (:nom, :email, :sujet, :message)');
      $req->execute([
      ':nom' => $this->nom, // on attribue à ma variable la valeur de l'objet instancié, le nom de l'auteur du message qui vient d'être posté
      ':email' => $this->email,
      ':sujet' => $this->sujet,
      ':message' => $this->message]);
      // on ferme la requête (protection c/ les injections)
      $req->closeCursor();
      } */

    // Bonus - envoi d'un email
    public function sendEmail($sujet, $email, $message) {
        $this->to = 'mhng75@gmail.com';
        $this->email = strip_tags($email);
        $this->sujet = strip_tags($sujet);
        $this->message = strip_tags($message);
        $this->headers = 'De : ' . $this->email . "\r\n"; //retours à la ligne
        $this->headers .= 'MIME-version: 1.0' . "\r\n";
        $this->headers .= 'Content-type : text/html; charset=utf-8' . "\r\n";

        // on utilise la fonction mail() de PHP
        mail($this->to, $this->sujet, $this->message, $this->headers);
    }

}
