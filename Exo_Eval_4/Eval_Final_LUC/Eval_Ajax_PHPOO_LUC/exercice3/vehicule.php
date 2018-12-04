<?php

// require du fichier connexion.php 

require 'connexion.php';
// Récupérer les données transmise par le JS
extract($_POST);

// requête permettant d'ajouter un nouveau véhicule
$resultat = $pdo -> prepare("INSERT INTO vehicles (marque, modele, annee, couleur) VALUES (:marque, :modele, CURDATE(), :couleur)");

$resultat -> bindParam(':marque', $marque, PDO::PARAM_STR);
$resultat -> bindParam(':modele', $modele, PDO::PARAM_STR);
$resultat -> bindParam(':couleur', $couleur, PDO::PARAM_STR);

if($resultat -> execute()){
    // Si le requête retourne TRUE tout va bien
    $reponse['validation'] = 'OK';
}else{
    
    $reponse['validation'] = 'Erreur';
}

// Retourner une reponse

echo json_encode($reponse);