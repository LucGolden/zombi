<?php 
class A{
    public function direBonjour(){
        return 'Bonjour';
    }
}

class B { // la classe B n'hérite pas de la classe A
    public $maVariable;

    public function __construct(){
        $this->maVariable = new A; //Je crée un objet A que je palce dans ma propriété '$maVariable' de mon objet B

    }
    public function maMethode(){
        return $this->maVariable->direBonjour(); // Ds mon objet B ($this), je peux appeler la méthodes sur mon objet A ($this->maVariable)
        // objet B -> objet A -> direBonjour();
    }
}
// ***************************************************
$b = new B;

echo $b->maVariable->direBonjour() . "<br>";
echo $b->maMethode();