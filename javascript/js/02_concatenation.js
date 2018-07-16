// alert('Bonjour');
// 2 slashes pour un commentaire sur une ligne en JS

/*
commentaire 
sur plusieurs 
lignes (shift + alt + a)
*/

/*
Le DOM ( Document Object Model) est un programme interne au navigateur qui fait en sorte que 
    -chaque balise HTML
    -chaque attributs des balises (class, id, name...)
    -chaque évènement (clic, double-clic, survol de la souris...)
deviennent des objets que l'on peut cibler, stocker dans une variable et manipuler
*/
 /* 
    1.l'objet WINDOW en JS => le navigateur 
        -alert('Bonjour');est pareil que window.alert('bonjour');
        -window est le seul objet du DOM qui peut s'utiliser implicitement (sans l'écrire)
    2.l'objet DOCUMENT en JS => la page HTML
        -document.getElementby...
 */

 /* ========== 1- Les Varibles =========== */
 /* ========== 2- Les types de données =========== */
 /* ========== 3- Les Constantes =========== */


 /* ========== 1- Les Varibles =========== */
 /* -- 1 - Déclarer une Variable */
 var maVariable;


 /* -- 2 - Affecter une valeur (stocker une valeur) */
 maVariable = "fleur";
var cocou = "bonjour" //déclarer + affecter


 /* -- 3 - Une instruction se termine toujours par un point-virgule(;)  mais je peut écrire plusieurs instructions sur la même ligne*/
/*  instruction_1;
 Instruction_1; instruction_2; instruction_3; instruction_4 */
 /* -- 4 - Afficher une boite de dialogue */
//  window.alert('Hello World');
//  alert('Hello World');


 /* -- 5 - Afficher ds la console /!\ très important pour débuger son code  */
 console.log('Luc');


 /* -- 6 - Afficher du texte dans la page web */
 document.write('VLG 2018 adore le javaScript !!');


 /* -- 7 - demander une info à l'internaute */
//  window.prompt('On mange quand ?');
//  prompt('On mange quoi?');


//  var mangerOu = window.prompt('On mange où?');
//  var mangerQuoi = prompt('On mange quoi?');
//  console.log(mangerOu)
//  console.log(mangerQuoi)


 /* -- 8 - Le JS est sensible à la casse (case sensitive) */
//  mavariable =/= maVariable
//  monPrenom =/= mon_prenom
//  mon_nom =/= mon-mon_nom

//  ecriture camelcase
//  Ecriture snake_case

 /* -- 9 - une variable 
    -ne PEUT PAS commencer par un chiffre
    -ne doit contenir que des caractères alphanumériques (lettres et chiffres - pas caractères spéciaux type accent ou & ou + par ex.) 
    -ne DOIT PAS être un mot résèrvé (var, for ... des eléments natifs du JS)
https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Mots_r%C3%A9serv%C3%A9s
*/

/* -- 10 - une variable puet être déclarée :
    -de façon explicite : var manger = "oui";
    -ou implicite : quand = "13 heures";*/


 /* ========== 2- Les types de données =========== */
/* --1 - Une chaine de caractères (string) */
// var les_meilleurs = "VLG"; ou var les_meilleurs = 'VLG';
// var les_meilleurs = "2018"; ou var les_meilleurs = "2018";

/* -- 2 - Un nombre entier (integer ou int) */
var les_meilleurs = 2018;

/* -- 3 - Un nombre décimal (float) */
var nb_a_virgule = -5.32;
/*/!\ s'écrit avec un point '.' */
/* tous les nombres peuvent être soit positifs soit négatifs */

/* -- 4 - Un booléen (boolean) : VRAI/FAUX (TRUE/FALSE) */
var vrai = true;
var faux = false;

/* -- 5 - Un tableau (array) */
var gateau = ['farine', 'oeuf', 'chocolat', 4, 'true']

/* -- 6 - Un objet */
var voiture = {
    marque:'porsche',
    modele: 991,
    couleur: 'gris',
    vitesse: true,
    option: ['rodio', 'ABS', 'freins', 4]
};
 /* ========== 3- Les Constantes =========== */

/* on déclare une constante avec le mot clé CONST ses particularités :      -elle est accessible uniquement en lecture
    -donc une fois déclarée et une valeur affectée elle ne peut plus changer
    -elle ne peut être déclarée qu'une seul fois dans le même script
    -par convention on écrit son nom en majuscule */
    const PAYS = 'france';


    /* ======= 4- La concaténation ========= */
    var annee = 2018;
    var jo = 6;
    var certificat_dev = "2019";

    var calcul_1 = annee + jo;
    console.log(calcul_1);
    document.write("<hr>" + calcul_1 + "<br>");


var calcul_2 = annee + certificat_dev;
console.log(calcul_2);
document.write("<hr>" + calcul_2 + "<br>");

/* ***** EXO ***** */
var DebutPhrase = "Aujourd'hui ";
var NbStagiaires = 12;
var SuitePhrase = " stagiaires ";
var FinPhrase = "sont présent";

var affiche_1 = DebutPhrase + NbStagiaires + SuitePhrase + FinPhrase;
console.log(affiche_1);
document.write("<hr>" + affiche_1 +"<br>")

/* Nous souhaitons afficher la phrase en un seul morceau avec la concaténation => à vos clavier! /!\ attension aux espaces entre les mots */