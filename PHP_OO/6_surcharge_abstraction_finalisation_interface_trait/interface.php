<?php
interface Mouvement{
    public function deplacement();
}
// *******************************

class Bateau implements Mouvement{
    public function deplacement(){} // Obligation de recréer les méthodes de l'interface qu'on implemente pour eviter une erreur
}
class Avion implements Mouvement{
    public function deplacement(){} // Obligation de recréer les méthodes de l'interface qu'on implemente pour eviter une erreur
}
// **************************
// new Mouvement; //Erreur, une interface n'est pas instanciable.
// **************************
/* 
    Une interface  : est une liste de méthodes (sans contenu) qui permet de garantir que toutes les classes qui implements l'interface contiendront les méthodes de l'interface avec la même signature ( le même nom !) C'est une sorte de 'contrat' qui garantie un minimum de méthode avec la bonne ortographe.
        Ex: une interface n'est pas un héritage.
        un bateau hérite de Véhicule 
        Un Avion  hérite de Véhicule 
        Mais un Bateau, ou un Avion n'hérite pas de Mouvement, c'est juste un point commun entre ces classe (bateau, Avion.....)

        Le dévloppeur qui réalise Les appels est certain de pouvoir effectuer :
        $bateau->deplacement();
        il sait qu'avec l'interface il ne devra pas faire $bateau->seDeplacer(); donc pas besoin d'ouvrir La class en question.Et il ne devrais pas créer dans la classe Bateau une méthode seDeplacer().
        Une interface permet de créer une formalité.
        Si le code des classes doit changer, cela ne changera pas les appels car la méthide déplacement() devra toujours etre présente.

- class extends class (heritage)
- interface extends interface (heritage)
- class implements interface (implementation)

Les interfaces permettent de créer du code qui spécifie quelles méthodes une classe doit implémenter.
Toutes les méthodes déclrées dans une interface: j'utilise le mot-clé 'implements' (pour une classe on utilise extends*)
Une interface n'est pas instanciable ! 
On sert d'une interface pour représenter un point commun entre deux classes. Cela permet d'exiger un comportement.
        ex: Un bateau et un avion herite de vehicule Mais n'hérite pas de mouvement; Un véhicule et un mouvement n'existe pas.

Il est possible d'implementer plusieur interfaces (on ne peut pas hériter de plusieurs classes) PAS DE POSSIBILITE d'avoir des propriétés ds une interface. (on peut par contre, declarer des constantes ds une interface)
*/
// ***********************************************************************************************************************************************
// Implementation de plusieurs interfaces : 
interface iA {
    public function testA(); //PAs de visibile private car la méthode doivent etre redefinie.
}
interface iB {
    public function testB();
}

class A implements iA, iB { //Implementation de 2 interfaces A CONDITION que celles-ci n'aient aucune méthodes portant le même nom !!!!
    public function testB(){}
    public function testA(){}
}
// *************************
interface iC{
    public function test1();
}
interface iD{
    public function test2();
}
interface iE extends iC, iD{
    
    public function test3();
}

class B implements iE {
    // Pour gerer les erreurs, il faut absolument écrire les méthodes de iE, iC, iD
    public function test1(){}
    public function test2(){}
    public function test3(){}
}

// *****************************
// heritage + implementation :
class C{}
    class D extends C implements iA {
        public function testA(){}
    }