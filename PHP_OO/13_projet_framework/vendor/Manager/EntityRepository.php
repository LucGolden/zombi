<?php
//  

namespace Manager;

// on utilise des use lorsque l'on utilise des classes sans faire de 'new' directement dans le fichier courant.
use Manager\PDOManager; //On a besoin de PDOManager car en utilisant ce namespace, on a accès a tout ce qui est static de Manager\PDOManager. Le 'use' déclenche l'autoload pour que la classe soit chargée et ainsi éviter une Erreur.

use PDO; // NOUS utilisons ce namespace car on utilise les constantes et autres propriétés, function static de la classe PDO

class EntityRepository{
    private $bd;
    public function __construct(){}

        public function getBd(){
            if(!$this->bd){
                $this->bd = PDOManager::getInstance()->getPdo(); //getInstance() retourne

            }
            return $this->bd;
        }
        private function getTableName(){
            return 'employes';
        }
        public function find($id){

            $d = $this->getBd()->query('SELECT * FROM ' . $this->getTableName() . 'WHERE id' . ucfirst($this->getTableName() . '= ' . (int) $id) );

            $q->setFetchMode(PDO::FETCH_CLASS, 'Entity\\' . $this->getTableName());
            
            $r = $q->fetch();
            
            if(!$r){
                return false;
            }else{
                return $r;
            }
        }
        
        public function findAll(){ // permet d'aller chercher toutes les infos sur un employe
            
            $q = $this->getBd()->query('SELECT * FROM ' . $this->getTableName() );
            
            
            $q->setFetchMode(PDO::FETCH_CLASS, 'Entity\\' . $this->getTableName());
            
            $r = $q->fetchAll();// On recupere un tableau Array composé d'objet
            
            if(!$r){
                return false;
            }else{
                return $r;
            }
             }
            public function register(){
               $q = $this->getBd()->query('INSERT INTO ' . $this->getTableName() . '(' . implode(',', array_keys($_POST) ) . ') VALUES (' . "'" . implode("','", $_POST). "'" . ')');


                return $this->getBd()->lastInsertId(); // Le dernier identifiant généré
                
            }    
}