/**
 *      LE CHAINAGE DE METHODE AVEC JQUERY
 */
$(function(){
    console.log($('div'));

    //-- Je cache toutes les DIV de ma page HTML
    $('div').hide('slow', function(){

        /**
         * La methode hide() de JQ :
         * est une animation
         * s-applique sur tout les éléments ciblés acec mon sélecteur
         * =======
         * A la fin du hide( on ajoute pour voir une alert())
         */

         $('div').css('background', 'blue');
         $('div').css('color', 'red');
         $('div').show('slow');

         $('p').hide(1000).css('color', 'red').css('font-size', '30px').delay(2000).show(500);
    }); //-- fin du hide()
    alert('fin du hide() !');


});//-- fin de $()