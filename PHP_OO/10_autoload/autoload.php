<?php
function inclusionAutomatique($nomDelaClasse){
    include_once($nomDelaClasse .'.class.php');

    echo 'On passe dans inclusionAutomatique ! <br>';
    echo "require($nomDelaClasse.class.php); <br>";
}

spl_autoload_register('inclusionAutomatique');

// *****************************
// spl_autoload_register() : permet d'executer une fonction lorsque l'interupteur voit passer un 'new' dans le code
// Le nom à coté du 'new' est récupéré et transmis automatiquement à la fonction 
// ATTENSION !!