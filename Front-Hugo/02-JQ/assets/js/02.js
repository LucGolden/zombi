/**
 *              LES SELECTEURS JQUERY
 * 
 * Format => $('selecteur');
 * --En JS => document.getElementsByxxx('selecteur');=> en JQ => $('XXXX')
 * 
 * 
 * --En JS => document.querySelector('Balise'); => en JQ => $('Balise');
 * --En JS => document.querySelector('.classe');=> en JQ => $('.classe');
 * --En JS => document.querySelector('#id'); => en JQ => $('#id');
 */
$(function() {
    log = e => console.log(e);
    log('Hello');

    //-- Sélectionner les SPAN
    log(document.getElementsByTagName('span'));
    //--en JQ
    log($('span'));

    //-- Sélectionner le menu par son ID
    // en JS
    log(document.getElementById('menu'));

    //-- En JQ
    log($('#menu'));

    //-- Sélectionner par la classe
    //-- en JS
    log(document.getElementsByClassName('MaClasse'));
    //--En JQ
    log($('.MaClasse'));

    //-- Sélectionner un élément de ma page par son attribut
    log($('[href="#"]'));
    log($('[action="home.php"]'));
    


});