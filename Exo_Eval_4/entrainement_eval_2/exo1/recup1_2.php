<?php  

//  Instancier 3 fois la classe dans un autre fichier. Pour chaque etudiant affecter des valeurs et les afficher. 

require 'Etudiant1_2.php';

$etudiant1 = new Etudiant;
$etudiant1 -> setPrenom('Merlentz') 
           -> setNom('Joinvil')                     
           -> setEmail('luc@gmail.com')                     
           -> setTelephone('0753412553');
$e1 = $etudiant1 -> getInfos(); 

$etudiant2 = new Etudiant;
$etudiant2 -> setPrenom('Merlentz') 
           -> setNom('Joinvil')                     
           -> setEmail('luc@gmail.com')                     
           -> setTelephone('0753412553');
$e2 = $etudiant2 -> getInfos();   

$etudiant3 = new Etudiant;
$etudiant3 -> setPrenom('Merlentz') 
           -> setNom('Joinvil')                     
           -> setEmail('luc@gmail.com')                     
           -> setTelephone('0753412553');
$e3 = $etudiant3 -> getInfos();                   

?>

<h2><?= $e1['prenom'] ?></h2>
<p>Nom : <?= $e1['nom'] ?></p>
<p>Email : <?= $e1['email'] ?></p>
<p>Téléphone : <?= $e1['telephone'] ?></p>

<h2><?= $e2['prenom'] ?></h2>
<p>Nom : <?= $e2['nom'] ?></p>
<p>Email : <?= $e2['email'] ?></p>
<p>Téléphone : <?= $e2['telephone'] ?></p>

<h2><?= $e3['prenom'] ?></h2>
<p>Nom : <?= $e3['nom'] ?></p>
<p>Email : <?= $e3['email'] ?></p>
<p>Téléphone : <?= $e3['telephone'] ?></p>