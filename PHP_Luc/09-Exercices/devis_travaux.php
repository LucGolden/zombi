<?php
/* 
	1- Vous réalisez un formulaire "Votre devis de travaux" qui permet de saisir le montant des travaux de votre maison en HT et de choisir la date de construction de votre maison (bouton radio) : "plus de 5 ans" ou "5 ans ou moins". Ce formulaire permettra de calculer le montant TTC de vos travaux selon la période de construction de votre maison.

	2- Vous créez une fonction montantTTC qui calcule le montant TTC à partir du montant HT donné par l'internaute et selon la période de construction : le taux de TVA est de 10% pour plus de 5 ans, et de 20% pour 5 ans ou moins. La fonction retourne  "Le montant de vos travaux est de X euros TTC." où X est le montant TTC calculé. Vous affichez le résultat au-dessus du formulaire.

*/
// print_r($_POST);
$aff = '';
function montantTTC($montant, $date){
	if ($date == 'moins'){
		$montantTTC = $montant * 1.1;
	}else{
		$montantTTC = $montant * 1.2;

	}

return "Le montant de vos travaux est de $montantTTC euros TTC.";
}
if ($_POST){
	// print_r($)
$aff .= montantTTC($_POST['montant'], $_POST['date']);
	}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Votre devis de travaux</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
</head>
<body>
	
<div class="container">
<h2>Votre devis de travaux</h2>

<?php echo $aff;  ?>

<form method="post" action="">

<label for="montant">Montant des travaux</label><br>
<input type="text" id="montant" name="montant" value=""><br><br>

<label for="date_construction">DAte de construction de votre maison</label><br>
<input type="radio" id="date" name="date" value="plus" checked> Plus de 5 ans <br>
<input type="radio" id="date" name="date" value="moins"> 5 ans ou moins <br><br>

<input type="submit" class="btn btn-info">

</form>


</div>

	
</body>
</html>