<?php 
namespace A {
    function ville(){
        return 'Paris';

    }
    function strlen(){
        return 'Fonction strlen de A';
    }
}
// *************************************
namespace B {
    function ville(){
        return 'Nantes';

    }
    function strlen(){
        return 'Fonction strlen de B';
    }
}
// ****************************
// Il ne faut pas mettre de code aprés avoir defini des '
// echo A\ville();
// echo B\ville();