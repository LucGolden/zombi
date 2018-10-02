<?php
echo '<h1> Les commerciaux et leur salaire</h1>';

// Exercice : 
// - Afficher dans une liste <ul><li> : le prénom, le nom et le salaire des employés du service commercial (1 commercial par <li>). pour cela, vous use une requête préparée. 
// - Afficher le nombre de commerciaux dans l'entreprise.

// 1-Connexion à la BDD :
$pdo = new PDO('mysql:host=localhost;dbname=societe', 
               'root',
               '',
               array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                     PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8') 

);
// Requête (préparée) :
$service = 'commercial';

$resultat = $pdo->prepare("SELECT prenom, nom, salaire FROM employes WHERE service = :service");

$resultat->bindParam(':service', $service);

$resultat->execute();

echo '<ul>';

while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)){
// echo '<pre>';
//  print_r($donnees);
// echo '</pre>';
echo '<li>';
// echo $donnees['prenom'] . ' ' . $donnees['nom'] . ' ' . $donnees['salaire'];
echo"prénom : <strong> $donnees[prenom] </strong> <br> Nom : $donnees[nom] <br> Salaire : $donnees[salaire]€ <br>-_-_-_-_-_-_-_-_-_-_-_-_- ";
 echo '</li>';
}
echo '<ul>';

 echo '<strong>Le nombre de commerciaux dans l\'entreprise est : ' . $resultat->rowCount() . '</strong><br>';
 


 


