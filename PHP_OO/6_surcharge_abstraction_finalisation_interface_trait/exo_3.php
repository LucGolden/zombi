<?php    //http://sharemycode.fr/2no
/*
1.	Faire en sorte de ne pas avoir d'objet Vehicule. // abstract

2. 	Obligation pour la Renault et la Peugeot de posséder la même méthode demarrer() qu'un Véhicule de base . // extends + final

3.	Obligation pour la Renault de déclarer un carburant diesel et pour la Peugeot de déclarer un carburant essence (exemple: return 'diesel'; -ou- return 'essence';). // abstract

4.	La Renault doit effectuer 30 tests de + qu'un véhicule de base. // redefinition + surcharge

5.	La Peugeot doit effectuer 70 tests de + qu'un véhicule de base. // redefinition + surcharge

6.	Effectuer les affichages nécessaire. // echo

*/

abstract class Vehicule
{
	final public function demarrer()
	{
		return 'je demarre';
	}
	abstract public function carburant();
	public function nombreDeTestObligatoire()
	{
		return 100;
	}
}
//-----------------------
class Peugeot extends Vehicule
{
    public function carburant(){
        return 'essence';
    }


    public function nombreDeTestObligatoire()
	{
        $testPlus = parent::nombreDeTestObligatoire();
        return $testPlus + 70;
	}
}
//-----------------------
class Renault extends Vehicule
{
    public function carburant(){
        return 'diesel';
     }


     public function nombreDeTestObligatoire()
	{
        return  parent::nombreDeTestObligatoire() + 30;
	}

}

// ***************************

$peugeot = new Peugeot;
$renault = new Renault;

echo '<em>' . $peugeot->demarrer() . '</em><br>';
echo 'Peugeot carburant : <b>' . $peugeot->carburant() . '</b><br>';
echo 'Nombre de test obligatoire : <b>' . $peugeot->nombreDeTestObligatoire() . '</b><hr>';


echo '<em>' . $renault->demarrer() . '</em><br>';
echo 'Renault carburant : <b>' . $renault->carburant() . '</b><br>';
echo 'Nombre de test obligatoire : <b>' . $renault->nombreDeTestObligatoire() . '</b><br>';