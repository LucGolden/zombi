<?php

require_once 'connect.php';
// Je require le fichier connect.php qui gère la connexion à la BDD "exo1_userslist"


$order = '';
$errors = '';
if(isset($_GET['order']) && isset($_GET['column'])){
	
	if($_GET['column'] == 'lastname'){
		$order .= ' ORDER BY lastname';
	}elseif($_GET['column'] = 'firstname'){
		$order .= ' ORDER BY firstname';
		
	}elseif($_GET['column'] == 'birthdate'){
		$order = ' ORDER BY birthdate';
	}
	
	if($_GET['order'] == 'asc'){
		$order .= ' ASC';
	}elseif($_GET['order'] == 'desc'){
		$order .= ' DESC';
	}
}

// requête pour selectionner dans l'ordre (ASC, DESC)
$queryUsers = $db -> prepare('SELECT * FROM users' .$order);

if($queryUsers->execute()){	
$users = $queryUsers ->fetchAll(PDO::FETCH_ASSOC);

}


if($_POST){

	foreach($_POST as $key => $value){
		$_POST[$key] = strip_tags(trim($value));
	

	if(strlen($_POST['firstname']) > 3){
		$errors .= 'Le prénom doit comporter au moins 3 caractères';
	}
	if(strlen($_POST['lastname']) < 3){
		$errors .= 'Le nom doit comporter au moins 3 caractères';
	}
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		$errors .= 'L\'adresse email est invalide';
	}
	if(empty($_POST['birthdate'])){
		$errors .= 'La date de naissance doit être complétée';
	}
	if(empty($_POST['city'])){
		$errors .= 'La ville ne peut être vide';
	}
	}
}
	
	if($errors > 0){ 
	// error n'existe pas donc on peut insérer

	// requête (prepare) pour plus de sécuriter
	$insertUser = $db -> prepare("INSERT INTO users (gender, firstname, lastname, email, birthdate, city) VALUES(:gender, :firstname, :lastname, :email, :birthdate, :city");
	extract($_POST);

	$insertUser->bindValue(':gender', $_POST['gender']);
	$insertUser->bindValue(':firstname', $_POST['firstname']);
	$insertUser->bindValue(':lastname', $_POST['lastname']);
	$insertUser->bindValue(':email', $_POST['email']);
	$insertUser->bindValue(':birthdate', $_POST['birthdate']);
	$insertUser->bindValue(':city', $_POST['city']);
	
	if($insertUser -> execute()){
		$createUser = true;
	}else { 
		$errors .= 'Erreur SQL';
	}
	}


?>


<!DOCTYPE html>
<html>
<head>
<title>Exercice 1</title>
<meta charset="utf-8">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">

	<h1>Liste des utilisateurs</h1>
	
	<p>Trier par : </p>
		<a href="?column=firstname&order=asc">Prénom (croissant)</a> 
		<a href="?column=firstname&order=desc">Prénom (décroissant)</a> 
		<a href="?column=lastname&order=asc">Nom (croissant)</a> 
		<a href="?column=lastname&order=desc">Nom (décroissant)</a> 
		<a href="?column=birthdate&order=desc">Âge (croissant)</a>
		<a href="?column=birthdate&order=asc">Âge (décroissant)</a>
	<br>

	<div class="row">
<?php
if(isset($createUser) && $createUser == true){
	echo '<div class="col-md-6 col-md-offset-3">';
	echo '<div class="alert alert-success">Le nouvel utilisateur a été ajouté avec succès.</div>';
	echo '</div><br>';
}
if(isset($errors)){
	echo '<div class="col-md-6 col-md-offset-3">';
	echo '<div class="alert alert-danger"><br>'.  $errors .'</div>';
	echo '</div><br>';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Formulaire</title>
</head>
<body>
	 <div class="row">
	<div class="col-md-7">
		<table class="table">
			<thead>
				<tr>
					<th>Civilité</th>
					<th>Prénom</th>
					<th>Nom</th>
					<th>Email</th>
					<th>Age</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($users as $user):?>
				<tr>
					<td><?= $user['gender'];?></td>
					<td><?= $user['firstname'];?></td>
					<td><?= $user['lastname'];?></td>
					<td><?= $user['email'];?></td>
					<td><?= DateTime::createFromFormat('Y-m-d', $user['birthdate'])->diff(new DateTime('now'))->y;?> ans</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<div class="col-md-5">

		<form method="post" class="form-horizontal well well-sm">
			<fieldset>
			<legend>Ajouter un utilisateur</legend>

				<div class="form-group">
				<label class="col-md-4 control-label" for="gender">Civilité</label>
				<div class="col-md-8">
					<select id="gender" name="gender" class="form-control input-md" required>
					<option value="Mlle">Mademoiselle</option>
						<option value="Mme">Madame</option><option value="M">Monsieur</option>
					</select>
			</div>
			</div>
				<div class="form-group">
				<label class="col-md-4 control-label" for="firstname">Prénom</label>
				<div class="col-md-8">
				<input id="firstname" name="firstname" type="text" class="form-control input-md" required>
					</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="lastname">Nom</label>  
				<div class="col-md-8">
					<input id="lastname" name="lastname" type="text" class="form-control input-md" required>
				</div>
			</div>

				<div class="form-group">
				<label class="col-md-4 control-label" for="email">Email</label>  
			<div class="col-md-8">
			<input id="email" name="email" type="email" class="form-control input-md" required>
			</div>
			</div>

			<div class="form-group">
			<label class="col-md-4 control-label" for="city">Ville</label>  
			<div class="col-md-8">
				<input id="city" name="city" type="text" class="form-control input-md" required>
			</div>
			</div>

			<div class="form-group">
			<label class="col-md-4 control-label" for="birthdate">Date de naissance</label>  
			<div class="col-md-8">
			<input id="birthdate" name="birthdate" type="text" placeholder="JJ-MM-AAAA" class="form-control input-md" required>
			<span class="help-block">au format JJ-MM-AAAA</span>  
			</div>
			</div>

			<div class="form-group">
			<div class="col-md-4 col-md-offset-4"><button type="submit" class="btn btn-primary">Envoyer</button></div>
			</div>
			</fieldset>
		</form>
	</div>
	</div>
	</div>
</div> 
</body>
</html>