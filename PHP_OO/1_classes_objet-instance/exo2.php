<!-- UML:
---------------------
|    Vehicule		|               
---------------------
|	$litresEssence	|
---------------------
|setlitresEssence() |
|getlitresEssence()	|
---------------------

---------------------
|    Pompe   		|
---------------------
|	$litresEssence	|
---------------------
|setlitresEssence() |
|getlitresEssence()	|
|donnerEssence()	|
---------------------

1. Création d'un véhicule 1
2. Attribuer un nombre de litres d'essence au vehicule 1 : 5
3. Afficher le nombre de litres d'essence du vehicule 1

4. Création d'une pompe
5. Attribuer un nombre de litres d'essence à la pompe : 800
6. Afficher le nombre de litres d'essence de la pompe

7. la pompe donne de l'essence en faisant le plein (50L) à la voiture1
8. Afficher le nombre de litres d'essence pour la voiture1 après ravitaillement
9. Afficher nombre de litres d'essence restant pour la pompe

10. Faire en sorte que le véhicule ne puisse pas contenir plus de 50L d'essence (limite reservoir). -->

<?php  

class Vehicule {
    private $litresEssence;

    public function setlitresEssence($litreV) {
        if (is_int($litreV)){
            $this->litresEssence = $litreV;
        }
        }
    public function getlitresEssence() { 
            return $this->litresEssence;
    }
}

$vehicule1 = new Vehicule;
$vehicule1->setlitresEssence(5);
echo 'nombre de litres d\'essence au vehicule : <b>' . $vehicule1->getlitresEssence() . 'L</b><br>';

class Pompe {
    private $litresEssence;

    public function setlitresEssence($litreP) {
        if (is_int($litreP)){
            $this->litresEssence = $litreP;
        }
    }
    public function getlitresEssence() { 
            return $this->litresEssence;
        }
        //-----------------------------------------------
        public function donnerEssence(Vehicule $litreV){//on exige un argument de type Vehicule
             $this->setlitresEssence($this->getlitresEssence() - (50 - $litreV->getlitresEssence()));
            //  $litreV représente le  véhicule reçu, $this represente le véhivule à partir de laquelle la méthode est appelée
            // 800 - (50 - 5) = 800 - 45 = 755
            $litreV->setlitresEssence($litreV->getlitresEssence() + (50 - $litreV->getlitresEssence()) );

    }
}
$pompe1 = new Pompe;
$pompe1->setlitresEssence(800);
echo 'nombre de litres d\'essence de la pompe : <b>' . $pompe1->getlitresEssence() . 'L</b><br>';

//------------------------------  -------------------  -------------------  ---------------
$pompe1->donnerEssence($vehicule1);
echo 'Après ravitaillement, le vehicule posede : <b>' . $vehicule1->getlitresEssence() . 'L</b><br>';
echo 'Après ravitaillement, la pompe posede : <b>' . $pompe1->getlitresEssence() . 'L</b><br>';
// ***********************************************
echo '<hr>';
$vehicule2 = new Vehicule;
$vehicule2->setLitresEssence(30);
echo 'Le véhicule2 possède : <b>' . $vehicule2->getLitresEssence() . ' litres d\'essences</b><br>';

$pompe1->donnerEssence($vehicule2);
echo 'Après ravitaillement, le véhicule2 possède : <b>' . $vehicule2->getLitresEssence() . ' litres d\'essences</b><br>';
// -9-
echo 'Aprés ravitaillement, la pompe possède : <b>' . $pompe1->getLitresEssence() . ' litres d\'essences</b><br>';
