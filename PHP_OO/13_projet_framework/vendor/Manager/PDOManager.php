<?php
//  Cette classe represente la connexion à la BDD.L'approche Singleton nous permettra d'etre certain qu'il n'y ait pas plusieurs connexion initialisées.

namespace Manager;
class PDOManager{
    private static $instance = null; // contiendra l'instance de notre classe
    protected $pdo; //contiendra l'instance PDO

    private function __construct(){}
    private function __clone(){}

    public static function getInstance(){
        // Si on a pas encore instancié notre classe 
        if (is_null(self::$instance)){
            self::$instance = new self; // rzevient à faire un new PDOManager
        }
        return self::$instance; // on retourne tjr le même objet( avec la référence [1])
    }

    public function getPdo(){
        include __DIR__ . '/../../app/Config.php'; //on ressort pour se diriger au bon endroit

        $config = new \Config();// Config() a été déclaré sans namespace ds l'espace global, d'où l'utilisation du '\' devant Config()

        $connect = $config->getParametersConnect(); // On récupère les parametres de connexion à travaers la config

        try{
            $this->pdo = new \PDO("mysql:dbname=" . $connect['dbname'] . ";host=" . $connect['host'], $connect['user'], $connect['password'], array (\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION));
            // PDO est une classe existante déclaré ds l'espace global d'où là encore l'utilisation du '\'
        }
        catch(\PDOException $e){
            echo 'La connexion a echoué : ' . $e->getMessage();
        }
        return $this->pdo;
    }
}
