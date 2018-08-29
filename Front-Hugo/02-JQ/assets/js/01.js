/**
 *              LA DISPONIBILITE DU DOM 🤑
 * 
 *      A partir du moment , ou le DOM, cest à dire, l'ensemble 
 * de l'arborescence de ma page est complètement chergé ;
 * je peux commencer à utiliser jQuery.
 * 
 * Je vais mettre l'ensemble de mon code dans une fonction, 
 * qui sera appelée AUTOMATIQUEMENT : par jQuery lorsque le DOM sera entièrement défini.
 * 
 * 3 Façons de faire :
 * 
 */

 jQuery(document).ready(function(){
     //-- Ici, le DOM est entièrement chargé; je peux procéder à mon code.
     //--
     //--
     //--
     //--
 });

 // ...2ème méthode
$(document).ready(function () {});


//--3ème méthode
$(function(){
    //---

});

// 4ème méthode en ES6
$(()=>{
// alert('Bienvenue ')

//-- ajouter du texte en JS
    document.getElementById('texteEnJQ').innerHTML = '<strong>Mon texte en JS</strong>';

    //-- ajouter du texte en JQ
    $('#texteEnJQ').html("Mon texte en JQ");
});

