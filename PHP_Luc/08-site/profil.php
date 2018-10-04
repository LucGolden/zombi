<?php   
require_once 'inc/init.inc.php';
// -_-_-_-_-_-_-_-_-_-_-_-_-_ TRAITEMENT_-_-_-_-_-_-_-_-_-_-

if (!internauteEstConnecte()){
    header('location:connextion.php');
    exit();
}



// 1- Préparation des variable d'affichage :
extract($_SESSION['membre']); //extrait tous les indices pour en faire des variables qui reçoivent la valeur qui leur correspondent.

















// -_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-AFFICHAGE-_-_-_-_-_-_-_-_-__-_-_-_-_-_-_-_-_-_-_
require_once 'inc/haut.inc.php';
?>
<h1 class="mt-4">Profil</h1>
<h2>
    Bonjour <strong><?php echo $prenom; ?></strong>
</h2>
<?php 
if (internauteEstConnecteEtAdmin ()) echo '<p>Vous êtes un administrateur.';
?>

<hr>

<h3>Voici vos information de profil</h3>

<p>Votre email : <?php echo $email; ?></p>
<p>Votre Adresse : <?php echo $adresse; ?></p>
<p>Votre Ville : <?php echo $ville; ?></p>







<?php
require_once 'inc/bas.inc.php';