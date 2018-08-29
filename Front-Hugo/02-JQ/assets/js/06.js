/**
 *      LES SELECTEURS D'ENFANTS JQUERY 👦
 */

$(function(){
    l=e=> console.log(e);

    //-- Je souhaite selectionner toutes les balises div de ma page
    l($('div'));

    // -- Je souhaite sélectionner la balise nav de ma page
    l($('#menu')); //-- l($('nav'));

    // -- En partant du menu, je souhaite récupérer tout les éléments descendant direct (enfants) qui sont dans la balise "nav"
    l($('#menu').children() );

    // --Parmi ces descendent, uniquement l'élément "ul"
    l($('#menu').children("ul"));

    // --En partant du "ul", je souhaite récupérer tous les éléments "li"
    l($('#menu').children("ul").find("li"));
    l($('#menu').find("li"));

    // Je souhaite récupérer uniquement le 2ème élément "li"
    l($('#menu').find("li").eq(1));

    // Je souhaite connaitre le voisin immediat de mon "menu"
    l($('#menu').next());//le voisin

    l($('#menu').next());//le voisin du voisin

    l($('#menu').prev());//le voisin avant

    l($('#menu').parent());//le parent

})