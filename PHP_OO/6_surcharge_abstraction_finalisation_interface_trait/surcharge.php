<?php 
// sur charger (override) : une surcharge me permet de prendre le comportement de ma fonction d'origine et d'y ajouter un traitements complémentaire.
class A {
    public function calcul(){
        // traitements 
        return 10;
    }
}
// ************************************************
class B extends A{
    public function calcul(){//Redefinition
        $n = parent::calcul();//On n'utilisera pas $this->calcul() sinon, la fonction sera récursive et la méthode s'appelera en boucle.

        // 'parent::' fonctionne dc pour appeler une méthode d'une classe aprente lors d'une surcharge. (afin d'eviter quelle ne s'appelle elle même avec $this->calcul())

        // self::calcul() ne fonctionnerait pas non plus, car on essayerait d'appeler quelque chose de loa classe courante (alors qu'ici, on a besoin de la classe parente)
        if ($n<=100){
            return "$n est inférieur ou égale à 100";
        }else{
            return "$n supérieur à 100";
        }
    }
    public function autreCalcul(){
        $nb = parent::calcul();// Il est possible d'atteindre une méthode de mon parent, même s'il n'y a pas de surcharge
    }
}
// ***************************************************
$objetB = new B;
echo $objetB->calcul();
// affiche 10 est inferieur à ou égale à 100 - j'ai redéclaré la méthode calcul() dans la classe enfant(B), cela s'appel une surcharge, je modifie légèrement le comportement iinitial contenu ds le parent(A) via son enfant (B)

// Différence entre self:: et parent::
     
            // Lorsque l'on utilise "self::" on demande d'utiliser ce qui est ds la classe courante ou ce que l'on a hérite sans l'avoir redefinie dans notre class. ET il faut que cela appartiennent a la classe.
            // Quand on utilise : "parent::" on demande d'utiliser les élément de la classe dont on a hérité.