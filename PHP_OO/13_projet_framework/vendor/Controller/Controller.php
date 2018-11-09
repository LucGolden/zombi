<?php 
// Controller général de l'application. Permet d'appler des repository et contient nottament la methode render() qui affiche un rendu à l'ecran, de maniere générique.

namespace Controller;

class Controller{
    protected $table;

    public function __construct(){

    }

    public function getRepository($table){
        $class = 'Repository\\' . $table . 'Repository';

        if (!isset($this->$table )){
            $this->table = new $class; // On instancie un objet "employe" (...)
    }
    return $this->table;
}

// $layout : le design general du site / $template
public function render($layout, $template, $parameters = array()){
    $dirView = __DIR__ . '/../../src/' . str_replace('\\', '/', get_called_class() . '/../../Views')
    // get_called_class() : retourne le nom de la class depuis laquel ine methodee statique a été appelée

    $ex = explode('\\', get_called_class()); // explode() transforme la chaine en array

    $dirFile = str_replace('Controller', '', $ex[2]); // On retire le mot 'Controller' grâce à str_replace car dans le View, il y a un dossier au nom du module "Employe" et non pas "ControllerEmploye".

    $__template__ = $dirView . '/' . $dirFile . '/' . $template; /chemin pour aller au bon endroit du template

    $__layout__ = $dirView . '/' . $layout;// Chemin pour aller au bon endroit du layout

    extract($parameters, EXTR_SKIP);// extract() permet de créer dées variables au moins des indices 
    // EXTR_SKIP : permet lors d'une collision, de ne pas réécrire la variable existant.

    ob_start();
    
    require $__template__; // permet de mettre le contenu ds une variable et avec la ligne du dessous, l'envoie des données est retenue.
    $content = ob_get_clean();
    
    ob_start();
    require $__layout__;// ob_start() va retenir l'envoie des données
    return ob_end_flush(); // Envoie le contenu du tempon de sortie (s'il existe) et ateint la temporisation de sortie  
}
}
