<?php 
// Pattern : Iterator
// Pattern : permet de proposer une solution commune pour ressoudre des problèmess récurrents.
// Iterator : permet de parcourir des éléments de natures différentes.

$fruit = array (
            'p' => 'pomme',
            'f' => 'fraise',
            'c' => 'cerise'
);

$it1 = new arrayIterator($fruit);

print('<pre>');
print_r(get_class_methods($it1));
print('</pre>');

$it1->rewind(); // permet de se placer au debut du tableau

while( $it1->valid()){ // valide() permet de vérifier s'il y a des informations à parcourir
    echo $it1->key() . ' => ' . $it1->current() . "<br>"; // key() : affiche l'indice / current : affiche la valeur
    $it1->next(); // permet cde passer à l'élément suivant
}
echo '<hr>';

// ******************************

// $it2 = new DirectoryIterator('..');

// // print('<pre>');
// // print_r(get_class_methods($it2));
// // print('</pre>');

// $it2->rewind(); 
// while( $it2->valid() ){
//     echo $it2->key() . ' -> ' . $it2->current() . '<br>';
// }