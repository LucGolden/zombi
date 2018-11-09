<?php 
// cette classe contiendra les méthodes de 'Employe.php' et demendra l'exécution à EntityRepository

namespace Repository;

use Manager\EntityRepository; // l'utilisation du namespace permet d'extends la classe lors de l'heritage alors qu'il n'y a pas eu l'instanciation

class EmployeRepository extends EntityRepository{
    public function getALLEmploye(){
        return $this->findAll();
    }
    public function getFindEmploye($id){
        return $this->find($id);
    }
    public function registerEmploye(){
        return $this->register();
    }
}