<?php  
// connexion à la BDD :  
$pdo = new PDO('mysql:host=localhost;dbname=exercice_3', 
               'root',
               '',
               array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                     PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8') 
);

// variable d'affichage 
$contenu = '';

// requête SQL permettant de selectionner les infos du BDD :
$resultat = $pdo->query("SELECT * FROM movies WHERE id_movies =  ");

// 

$contenu .= "<ul>";
while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)){
    
    $contenu .= '<li>' 
}
    
    
    $contenu .= "</ul>";

?>