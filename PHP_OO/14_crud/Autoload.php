<?php 

class Autoload{
    public static $nb=0; //permet de compter le nmbre de fois où l'on passe ds l'autoload.

    public static function className($className){

        $tab = explode('\\', $className);

        if($tab[0] == 'BackOffice'){
            $path = __DIR__ . '/../src/' . implode('/', $tab) . '.php';
        }else{
            $path = __DIR__ . '/' . implode('/', $tab) . '.php';
        }
        require $path;

        self::$nb++;
    }

}
spl_autoload_register(array('Autoload', 'className'));