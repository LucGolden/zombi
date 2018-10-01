<?php
// Ouverture ou Création d'une session : 
session_start();

echo 'la session est accesible ds tous les scripts du site comme ici : ';
echo '<pre>';
print_r($_SESSION); //on voit les infos de la session crée ds la page session1.php
echo '</pre>';

// Ce fichier n'a rien avoir avec l'autre, il n'y a pas d'inclusion, il pourrait être ds un autre dossier, s'appeler n'importe comment, les infos contenues ds la session restent accessibles grâce au session_start().