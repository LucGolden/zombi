/*------------------------------ 
        Les Fonctions  🤖
--------------------------------*/

/* 
*Déclarer une fonction 
* NB : Cette fonction ne retourne aucune valeur
* et ne prend pas de paramètres.
*/

function bonjour(){
    // alert('Bonjour !');
};

/* 
*Je vais executer ma fonction "bonjour" et 
* déclencher ses instructions.
*/
bonjour();

// function nomDeMaFonction( argument 1, argument 2, argument n){
//     Les instructions
// }

function ditBonjour( prenom, nom){
    document.write('<h2> Bonjour <strong>' + prenom + ' ' + nom + '</strong> ! </h2>');
};

ditBonjour('Luc', 'JOINVIL' );

/* --------------
    EXO :
    Créez une fontion permettant d'effectuer l'addition de deux nombre (nb1 & nb2).
------------------------------*/
 
    
function addition(nb1, nb2){
    var resultat = nb1 + nb2;
    return nb1 + nb2;
   
};
document.write('<h2> L\'addition de nb1 et nb2 est égale à : ' + addition(10, 20) + '! </h2>');
// addition(10, 20);

// 2

function addition2(nb1, nb2){
    return(nb1 + nb2);
    document.write('<h2> L\'addition de nb1 et nb2 est égale à : ' + resultat + '! </h2>');
}