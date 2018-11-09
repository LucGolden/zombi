<?php
class Autoload{
    public static $nb = 0; // permet de compter le nombre de fois que l'on passe ici 
    public static function className($className){
        echo '<pre>' . self::$nb . ' - Autoload : ' . $className;
        $tab = explode('\\' , $className); // explode permet de prendre la chaine et la transformer en array. Ici on cherche le caractére '\' MAIS si on met qu'un seul backslash, cest comme si

        if ($tab[0] == 'Backoffice'){
            $path = __DIR__ . '/../src/' . implode('/', $tab) . '.php'; //L'implode nous permet de savoir si l'on doit reculer d'un dossier pour aller chercher un module spécifique (bundle)
           
        }else{
            $path = __DIR__ . '/' . implode('/', $tab) . '.php';
        }
        echo "\n => $path </pre><hr>"; //Nous permet de voir les classes instancié à l'autoload.

        require $path;

        self::$nb++;
    }

}

spl_autoload_register(array('Autoload', 'className')); // Lorsque l'on utilise L'autoLoad sur une class, il faut apsser un array et la méthode doit etre static.