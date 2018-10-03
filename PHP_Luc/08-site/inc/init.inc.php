<?php 
// Fichier de configuration du site

// connextion à la BDD :
$pdo = new PDO('mysql:host=localhost;dbname=site_commerce', 
               'root',
               '',
               array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                     PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8') 
);

// session :
session_start();

// constante qui contient le chemin du site :
define('RACINE_SITE', '/zombi/PHP_Luc/08-site/'); // indiquer le dossier ds lequel se situe le site sans "localhost". Permet de créer des chemins absolus utilisés noamment ds le header du site inclus dans différents sous-dossiers : par conséquent les chemins relatifs vers les sources chagent selon le sous dossier, ce qui n'est pas les cas en chemin absolu.

// Variable d'affichage $contenu :
$contenu = '';
$contenu_gauche = '';
$contenu_droite = '';

// inclusions du fichier qui contient les fonctions du site :
require_once 'fonctions.inc.php';

