<?php
/*
	1- Afficher dans une table HTML la liste des contacts avec les champs nom, prénom, téléphone, et un champ supplémentaire "autres infos" avec un lien qui permet d'afficher le détail de chaque contact.

	2- Afficher sous la table HTML le détail d'un contact quand on clique sur le lien "autres infos".
*/


$pdo = new PDO('mysql:host=localhost;dbname=contacts', 
               'root',
               '',
               array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, 
                     PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8') 
);
$affichage = '';
$affichage2 = '';

$resultat = $pdo->query("SELECT * FROM contact");

$affichage .= '<h3 class="alert alert-dark mt-1">Nombre de contact : ' . $resultat->rowCount() . '</h3>' ;
$affichage .='<table  class="table mt-4 alert alert-info text-center">';
        $affichage .= '<tr>';
        for($i = 0; $i < $resultat->columnCount(); $i++){
			$colonne = $resultat->getColumnMeta($i);
			if ($colonne['name'] == 'nom' || $colonne['name'] == 'prenom' || $colonne['name'] == 'telephone')
			$affichage .= '<th>' . $colonne['name'] . '</th>';
			
        }
                $affichage .= '<th>Action</th>'; 
        $affichage .= '</tr>';

while ($info_contact = $resultat->fetch(PDO::FETCH_ASSOC)){

	// echo '<pre>';
	// print_r($info_contact);
	// echo '</pre>';
		$affichage .= '<tr>';

		foreach ($info_contact as $indice => $information){
			if ($indice == 'nom' || $indice == 'prenom' || $indice == 'telephone')

			$affichage .= '<td>' . $information . '</td>';
		}
		  $affichage .= '<td><a href="?action=autre_info&id_contact=' . $info_contact['id_contact'] . '">Autres infos</a> </td>';
        // $contenu .= '<td></td>';
    $affichage .= '</tr>';

		$affichage .= '</tr>';
}

$affichage .= '</table>';

// echo '<pre>';
// 	print_r($_GET);
// echo '</pre>';
if (isset($_GET['action']) && $_GET['action'] == 'autre_info' && isset($_GET['id_contact'])){


$_GET['id_contact'] = htmlspecialchars($_GET['id_contact'], ENT_QUOTES);
            			

$resultat = $pdo->prepare("SELECT * FROM contact WHERE id_contact = :id_contact");
$resultat->bindParam(':id_contact' , $_GET['id_contact']);
$execute_requete = $resultat->execute();

	$info_contact = $resultat->fetch(PDO::FETCH_ASSOC);	
if($info_contact['id_contact'] == $_GET['id_contact']){

	$affichage2 .= '<h3> Détail du contact </h3>';
	$affichage2 .= '<ul>';
	$affichage2 .= '<li> Nom : ' . $info_contact['nom'] . '</li>';
	$affichage2 .= '<li> Prenom : ' . $info_contact['prenom'] . '</li>';
	$affichage2 .= '<li> Téléphone : ' . $info_contact['telephone'] . '</li>';
	$affichage2 .= '<li> Année de rencontre : ' . $info_contact['annee_rencontre'] . '</li>';
	$affichage2 .= '<li> Email : ' . $info_contact['email'] . '</li>';
	$affichage2 .= '<li> Type de contact : ' . $info_contact['type_contact'] . '</li>';
	$affichage2 .= '</ul>';
}else{
	$affichage2 .= '<p class="text-danger text-center">Erreur lors de l\'affichage du contact.</p>';
}		
}
$affichage2 .= '<hr>';
/* ---------------------------                 -----------------------------------          ------------------------------------ */

$contenu = ''; //variable d'afichage.// on selection tous les contact

$query = $pdo->prepare("SELECT * FROM contact");

$query->execute();  // les méthodes prepare() et execute() vont toujours ensemble.// on prépare le tableau HTML

$contenu .= '<table class="table">';

    $contenu .= '<tr>';	
		$contenu .= '<th>Nom</th>';	
		$contenu .= '<th>Prénom</th>';	
		$contenu .= '<th>Téléphone</th>';
		$contenu .= '<th>Autres infos</th>';
	$contenu .= '</tr>';

// Tant qu'il y a un resultat ds $query, on prepare la ligne de la table HTML correspondant au contact :
while ($contact = $query->fetch(PDO::FETCH_ASSOC)){
	$contenu .= '<tr>';
	$contenu .= '<th>' . $contact['nom'] . '</th>';
	$contenu .= '<th>' . $contact['prenom'] . '</th>';
	$contenu .= '<th>' . $contact['telephone'] . '</th>';


	$contenu .= '<td><a href="?id_contact=' . $contact['id_contact'] . '">Plus d\'infos</a> </td>';
	$contenu .= '</tr>';
}

$contenu .= '</table>';

// Si on clique sur un lien "olus d'infos"
// if (isset($_GET['id_contact'])){ //si l'indice "id_contact" est ds $_GET, donc dans l'url, c'est qu'on a demandé le detail d'un contact
	// die('ligne 113');  // on peut faire un echo ou un exit ou un exit ou un die pour vérifier que l'on passe bien dans cette condition

			// $_GET['id_contact'] = htmlspecialchars($_GET['id_contact'], ENT_QUOTES); // permet de transformer les caractères spéciaux en entités Html por se premunir des risques JS (XSS) et CSS

			// On fait une requête préparée de selection du contact ds la BDD : 

			// $query = $pdo->prepare("SELECT * FROM contact WHERE id_contact = :id_contact");
			// $query->bindParam(':id_contact' , $_GET['id_contact']);
			// $query->execute(); // avec une requête préparée tjrs un ->execute()

			// on transforme le resutat de la requête en un array associatif : 
				// $contact = $query->fetch(PDO::FETCH_ASSOC);	// pas de "while" car on est certain de n'avoir qu'un seul résultat

				// on affiche les infos du contact : 
				// $contenu .= '<h2>Détail du contact</h2>';
				// var_dump($contact);
				
				// if ($contact == false){
					// $contenu .= '<p>Ce contact n\'existe pas</p>';

				// }else{
					
						// $contenu .= '<ul class="list-group">';
							// $contenu .= '<li class="list-group-item"> Nom : ' . $info_contact['nom'] . '</li>';
							// $contenu .= '<li class="list-group-item"> Prenom : ' . $info_contact['prenom'] . '</li>';
							// $contenu .= '<li class="list-group-item"> Téléphone : ' . $info_contact['telephone'] . '</li>';
							// $contenu .= '<li class="list-group-item"> Année de rencontre : ' . $info_contact['annee_rencontre'] . '</li>';
							// $contenu .= '<li class="list-group-item"> Email : ' . $info_contact['email'] . '</li>';
							// $contenu .= '<li class="list-group-item"> Type de contact : ' . $info_contact['type_contact'] . '</li>';
						// $contenu .= '</ul>';
					


				// }
				



// }


?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Liste de contact</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
</head>
<body>
	
<div class="container">
<h1>Liste des cotacts</h1>
<?php echo $affichage; ?>

<div class="row">
<div class="col-4 alert alert-info offset-4">
<?php   echo $affichage2; ?>
</div>
</div>
</div>


<div class="container">
<div class="row">

<?php //echo $contenu; ?>

</div>
</div>
</body>
</html>