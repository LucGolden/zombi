<?php

/* 
    Transitivité : 

            Si B hérite de A - ET - si C hérite de - Alors - C hérite de A
*/

class A {
    public function test1(){
        return 'test1 <br>';
    }
}

class B extends A {
    public function test2(){
        return 'test2 <br>';
    }
}

class C extends B {
    public function test3(){
        return 'test3 <br>';
    }
}
// **********************************************************

$c = new C;

echo $c->test1(); // méthode de la classde A accessible de la classe C (grace à l'héritage)
echo $c->test2(); // méthode de la classde B accessible de la classe C (grace à l'héritage)
echo $c->test3() . '<hr>'; 

// Retourne toutes les méthodes de la classe C :
print('<pre>');
        print_r(get_class_methods('C'));
print('</pre>');