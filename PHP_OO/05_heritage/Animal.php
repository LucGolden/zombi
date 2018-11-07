<?php

class Animal {
    protected function deplacement(){
        return 'Je me déplace <br>';
    }

    public function manger(){
        return 'Je mange <br>';
    }
}
// ***************************************
class Elephant extends Animal{
    public function quiSuisJe(){

        return 'je suis un Elephant et ' . $this->deplacement() . '<br>';
        // On utilise la fonction deplacement() issue de ma classe Animal par héritage et qui est 'protected'. Et cette fonction protected est UNIQUEMENT exécutable ds le parent ou ds l'enfant. Je n'utilise pas Animal:: seulement ds le cas où je l'aurais redéfinir
    }
}
// **************************
    class Chat extends Animal{
        public function quiSuisJe(){

            return 'je suis un chat <br>';
        }

        public function manger(){

            return  'Je mange comme un chat <br>';
        }
    }

    // **************************
    $elephant1 = new Elephant;
    echo 'Elephant : ' . $elephant1->manger();
    echo 'Elephant : ' . $elephant1->quiSuisJe() . '<hr>';
// *********************************

$chat1 = new Chat;

echo 'chat : ' . $chat1->quiSuisJe();
echo 'chat : ' . $chat1->manger();// L'interpreteur cherche d'abord ds la class Chat, et seulement si la methode n'exisre pas il aurait cherché la méthode ds la classe dont j'hérite.

