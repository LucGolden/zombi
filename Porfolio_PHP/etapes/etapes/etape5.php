<?php

/* on rajoute ce qui suit avant la balise DOCTYPE de index.html */


// on requiert notre classe Contact
require('Contact.class.php');

// on vérifie que le formulaire a bien été posté
if (!empty($_POST)) {
    // on éclate le tableau avec la méthode EXTRACT(), ce qui nous permet d'accéder directement aux champs par des variables
    extract($_POST);

    // on effectue une validation des données du formulaire et notamment on vérifie la validité de l'email
    $valid = (empty($nom) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($sujet) || empty($message)) ? false : true; // écriture ternaire pour if / else
    $erreurnom = (empty($nom)) ? 'Indiquez votre nom.' : null;
    $erreuremail = (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) ? 'Entrez un email valide.' : null;
    $erreursujet = (empty($sujet)) ? 'Renseignez votre sujet.' : null;
    $erreurmessage = (empty($message)) ? 'Indiquez votre message.' : null;

    // si tous les champs sont correctement renseignés
    if ($valid) {
        // on crée un nouvel objet (ou une instance) de la classe Contact.class.php
        $contact = new Contact();
// on utilise la méthode insertContact de la classe Contact.class.php
        $contact->insertContact($nom, $email, $sujet, $message);
    }
}
?>