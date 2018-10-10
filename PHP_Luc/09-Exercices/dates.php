<?php
/*
  1- Créer une fonction qui retourne la conversion d'une date FR en date US ou inversement.
  Cette fonction prend 2 paramètres : une date et le format de conversion de sortie "US" ou "FR". Pour faire cette conversion, vous utilisez la classe DateTime.
	  
  2- Vous validez que le paramètre de format est bien "US" ou "FR". La fonction retourne un message si ce n'est pas le cas.
  
  3- Vous validez que la date fournie est bien une date. La fonction retourne un message si ce n'est pas le cas.
  
*/

function conversion_date($date_modif, $format){
  // On contrôle d'abord les valeurs reçus :
  if (!strtotime($date_modif)){
    return 'la date est invalide !'; //return nous fait quitter la fonction le reste du code qui suit n'est donc pas exécuté.
  }

  if($format != 'US' && $format != 'FR'){
    return 'Le format est invalide';
  }


  // Traitement de l'affichage de la date :
 $date = new DateTime($date_modif);
  if ( $format == 'US'){ 
      return $date->format('Y-m-d') . '<br>';

  }elseif($format == 'FR'){

      return $date->format('d-m-Y');

}
}

echo  conversion_date('12-06-2018', 'US');
echo  conversion_date('2012-13-11', 'FR');