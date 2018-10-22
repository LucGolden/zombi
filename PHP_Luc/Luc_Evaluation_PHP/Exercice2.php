<?php 

// Créer une fonction permettant de convertir un montant en euros vers un montant en dollars américains. 

function onPartEnVoyage($montant , $devise){
    //Condition pour afficher  en Euros :
    if ($devise == 'EUR'){
        $resultat = $montant * 1.085965; 
    }elseif($devise == 'USD'){ // condition pour afficher en dollars américains :
        $resultat = $montant / 1.085965;
    }else{ // condition si il y a erreur sur la devise :
        $resultat = 'Erreur sur  la devise de sortie ';
    }
    return  $resultat . ' ' . $devise;
}

//Affichage de la conversion "EUR", "USD", et quand il y a erreur sur la devise
echo onPartEnVoyage(20.33 , 'EUR');
echo '<br>';
echo onPartEnVoyage(20 , 'USD');
echo '<br>';
echo onPartEnVoyage(20 , 'UD');







