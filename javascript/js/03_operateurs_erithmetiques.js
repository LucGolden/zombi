// alert('luc');

/* ======= 1 - Les opérateurs ======= */

/* ======= 2 - Les écritures simplifiées ======= */


/* ======= 1 - Les opérateurs ======= */
// Je déclare mes variables / constantes en début de fichier 
// Je oeux en déclarer plusieur à la volée :
var nb1, nb2, resultat;

// J'affecte des valeurs à certaines variables
nb1 = 10;
nb2 = 5;

/* -- 1 - Additionner avec " + " */
resultat = nb1 + nb2;
console.log(resultat)

/* -- 2 Soustraire avec '-'*/

resultat = nb1 - nb2;

console.log(resultat);

/* -- 3 Multiplier abec '*' */

resulat = nb1 * nb2;

console.log(resultat);

/* -- 4 Diviser avec '/' */

resulat = nb1 / nb2;

console.log(resultat);

/* -- 5 Le reste d'une division avec le Modulo '%' */

resulat = nb1 % nb2;

console.log(resultat);

// je réafecte un chiffre à nb1

nb1 = 11;

resulat = nb1 % nb2;

console.log('le reste de la division de ' + nb1 + ' par ' + nb2 + 'est égal à : ' + resultat)

/* ======== 2 - Les écritures simplifiées ======== */
var ex = 15;
ex = ex + 5;
console.log(ex);

ex += 5;
console.log(ex);

nb1 -= 5;
console.log(nb1);


/* ======== 2 - l'incrémentationet la décrémentation ======== */
var nb1 = 1;
nb1 = nb1 + 1; //nb1 += 1;

nb1++; // ++ = +1
nb1+2; // +2 = + 2

/* /*\ selon l'ordre le calcul n'est pas fais au même moment */
resultat_1 = --nb1;
resultat_2 = nb1--;
resultat_1 == resultat_2; // => true uniquement à la fin des calculs

/* 
--nb1 => calcul tout de suite 
nb1-- => commence à la valeur de nb1 PUIS calcule

pareil avac ++ 
*/

var ht = prompt('hors taxe');

var tva = 1.20;

console.log(ht);

console.log(tva);


// var bonjour =ht * tva;
alert(ht * tva);
// console.log(bonjour);



