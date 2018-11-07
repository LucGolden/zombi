<?php 
class Plombier {
    public function getSpecialiste(){
        return 'tuyaux, robinets, compteurs, etc... <br>';
    }
    public function getHoraires(){
        return '8h00-19h00 <br>';
    }
}
// ***********************************
class Electricien{
    public function getSpecialiste(){
        return 'Disjoncteurs, pose de cables, tableaux electriques, etc... <br>';
    }
    public function getHoraires(){
        return '10h00-18h00 <br>';
    }
}
// ****************************************
class Entreprise{
    public $numero = 0;

    public function appelEmploye($employe){
        $this->numero++;
        $this->{"monEmploye" . $this->numero } = new $employe;
        // 1er appel : je déclare la variable $this->monEmploye1 = new Plombier

        return $this->{"monEmploye" . $this->numero };
    }
}

// ****************************************
$entreprise = new Entreprise;

$entreprise->appelEmploye('Plombier');
var_dump($entreprise); echo '<hr>';
echo $entreprise->monEmploye1->getSpecialiste();

$entreprise->appelEmploye('Electricien');
echo $entreprise->monEmploye2->getSpecialiste();