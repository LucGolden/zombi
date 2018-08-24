/**--------------------------------------------
 * -----------👽LES EVENEMENT👽--------------
 */
/**
 * Les évènement vont me me permettre de déclencher une fonction, 
 * c'est-à-dire, une série d'instruction ;
 * suite à une action de mon utilisateur.
 * 
 * OBJECTIF : Etre en mesure de capture ces évènements
 * afin d'exécuter une fonction.
 * 
 * Les Evènements : MOUSE (souris)
 * 
 *      click      : au clic sur l' élément ;
 *      dblclick   : au double click ;
 *      mouseenter : la souris passe au dessus d'une élément ;
 *      mousdeleave: la souris sors de l'élément ;
 *      mouseover  : au passage de la souris.
 * 
         https://developer.mozilla.org/fr/docs/Web/API/MouseEvent

*Les Evènements : Keyboard ( clavier )

        keyup   : une touche du clavier a été relachée ; 
        Keydown : une touche est enfoncée.

        https://developer.mozilla.org/fr/docs/Web/API/KeyboardEvent

*les Evènements : WINDOW ( Fenêtre )

        scroll   : Défilement de la fenêtre ;
        resize   : redimentionnement de la fenêtre.


*Les Evènement : FORM ( formulaire )

        change   : pour les éléments <input>, <select>, et <textarea> ;
        submit   : à l'envoie ( soumission ) du formulaire ;
        input    : pour capter la saisie d'un utilisateur sur un champ <input>.

*Les Ecouteurs d'évènements

        pour attacher un évènement à un éléments, ou autrement dit,
        pour déclarer un ecouteur d'évènement qui se chargera de 
        déclencher une fonction , je vais utiliser la syntaxe suivante :
 *      -------------------------------------------------------
 */
var p = document.getElementById('monParagraphe');

function changerLaCouleurEnRouge() {
    p.style.color = 'red';
};
p.addEventListener('mouseover', changerLaCouleurEnRouge);



1
/* -------------------------------------------------------------\
2
|                       EXERCICE PRATIQUE                       |
3
| A l'aide de javascript, créez un champ "input" type text avec |
4
| un ID unique. Affichez ensuite dans une alerte, la saisie de  |
5
| l'utilisateur.                                                |
6
|______________________________________________________________*/

document.getElementsByTagName('p');

var input = document.createElement('input');
p.appendChild(input);

input.type = 'text';
input.id ='inputUnique';
input.setAttribute("placeholser", "Saisissez un contenu...");
console.log(input);

var saisie = document.getElementById('inputUnique');

function alerte() {
    alert(input.value);
}

saisie.addEventListener('change' , alerte);



