<?php

/* 1- Créer une base de données "contacts" avec une table "contact" :
	  id_contact PK AI INT(3)
	  nom VARCHAR(20)
	  prenom VARCHAR(20)
	  telephone VARCHAR(10)
	  annee_rencontre (YEAR)
	  email VARCHAR(255)
	  type_contact ENUM('ami', 'famille', 'professionnel', 'autre')

	2- Créer un formulaire HTML (avec doctype...) afin d'ajouter un contact dans la bdd. Le champ année est un menu déroulant de l'année en cours à 100 ans en arrière à rebours, et le type de contact est aussi un menu déroulant.
	
	3- Effectuer les vérifications nécessaires :
	   Les champs nom et prénom contiennent 2 caractères minimum, le téléphone 10 chiffres
	   L'année de rencontre doit être une année valide
	   Le type de contact doit être conforme à la liste des types de contacts
	   L'email doit être valide
	   En cas d'erreur de saisie, afficher des messages d'erreurs au-dessus du formulaire

	4- Ajouter les contacts à la BDD et afficher un message en cas de succès ou en cas d'échec.

*/
print_r($_POST);
$pdo = new PDO('mysql:host=localhost;dbname=contacts', 
               'root',
               '',
               array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, 
                     PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8') 
);

$message_erreur = '';

if( $_POST){
	#Validation du formulaire
		if(!isset($_POST['nom']) ||  strlen($_POST['nom']) < 2 || strlen($_POST['nom'] ) > 20){
			$message_erreur .= '<p class=" btn btn-danger "> Le nom doit contenir entre 2 et 20 caractéres.</p> <br>';
		}

		if(!isset($_POST['prenom']) ||  strlen($_POST['prenom']) < 2 || strlen($_POST['prenom'] ) > 20){
			$message_erreur .= '<p class=" btn btn-danger "> Le prenom doit contenir entre 2 et 20 caractéres.</p> <br>';
		}

		if(!isset($_POST['telephone']) ||  strlen($_POST['telephone']) < 2 || strlen($_POST['telephone'] ) > 20){
			$message_erreur .= '<p class=" btn btn-danger "> Le téléphone doit contenir 10 chiffres.</p> <br>';
		}

		if(!isset($_POST['telephone']) || !preg_match('#^[0-9]{10}$#', $_POST['telephone']) ){
			$message_erreur .= '<p class=" btn btn-danger "> Le téléphone doit contenir 10 chiffres.</p> <br>';
		}

		if(!isset($_POST['annee_rencontre']) ||  !strtotime($_POST['annee_rencontre'])) {
			$message_erreur .= '<p class=" btn btn-danger "> L\'année  de rencontre doit être une année valide.</p> <br>';
		}

		if(!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			$message_erreur .= '<p class=" btn btn-danger "> L\'email n\'est pas valide.</p> <br>';
		}

		if (!isset($_POST['type_contact']) || ($_POST['type_contact'] != 'ami' && $_POST['type_contact'] != 'famille' &&  $_POST['type_contact'] != 'professionnel' &&  $_POST['type_contact'] != 'autre'))
    	     $message_erreur .= '<p class="btn-danger btn">Le type de contact n\'est pas valide.</p>';

	


				if(empty($message_erreur)){
					foreach($_POST as $indice => $valeur) {
                			$_POST[$indice] = htmlspecialchars($valeur, ENT_QUOTES);
            			}


$resultat = $pdo->prepare("INSERT INTO contact (nom, prenom, telephone, annee_rencontre, email, type_contact) VALUE (:nom, :prenom, :telephone, :annee_rencontre, :email, :type_contact)");

$resultat->bindParam('nom' , $_POST['nom']);
$resultat->bindParam('prenom' , $_POST['prenom']);
$resultat->bindParam('telephone', $_POST['telephone']);
$resultat->bindParam('annee_rencontre', $_POST['annee_rencontre']);
$resultat->bindParam('email', $_POST['email']);
$resultat->bindParam('type_contact', $_POST['type_contact']);

$succes_requete = $resultat->execute();

if($succces_requete){
	 $message_erreur .= '<p class="btn-success btn">Le contact a bien été enregistré.</p>';
}else{
	$message_erreur .= '<p class="btn-success btn">Erreur lors de l\'enregistrement du contact.</p>';
}
}
}#FIN if( $_POST)
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Contacts</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
	<h3>Ajout contact</h3></div>
	<?php  echo $message_erreur; ?>
	<div class="row">
	<form method="post" action="">
	<label for="nom">Nom</label><br>
	<input type="text" id="nom" name="nom"><br><br>

	<label for="prenom">Prénom</label><br>
	<input type="text" id="prenom" name="prenom"><br><br>

	<label for="telephone">Téléphone</label><br>
	<input type="text" id="telephone" name="telephone"><br><br>

	<label for="annee_rencontre">Année de rencontre</label><br>
	<!-- <select name="annee_rencontre" id="annee_rencontre"> -->
	<?php
	
	$debut = date('Y') ;
echo '<select name="annee_rencontre" id="annee_rencontre" name="annee_rencontre">';
while($debut >= date('Y') - 100){ 
    echo "<option>$debut</option>";
$debut--;
}
echo '</select>';
echo '<br><br>';  
 ?>

<label for="ameil">Email</label><br>
<input type="email" id="email" name="email"><br><br>

<label for="type_contact">Type de contact</label><br>
<select name="type_contact" id="type_contact" >
<option value="ami">Ami</option>
<option value="famille">Famille</option>
<option value="professionnel">Professionnel</option>
<option value="autre">Autre</option>

</select><br><br>
	
	<input type="submit" class="btn btn-success">
	
	
	
	</form>
	</div>
	</div>


</body>
</html>

