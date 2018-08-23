            /* ------------------------------------------------------ */
            /*                         LES BOUCLES ‍👼                 */
            /* ------------------------------------------------------ */

for( let i = 0 ; i <= 10 ; i++){
    document.write('<h2> Instruction executée : ' + i + '! </h2>');
};

document.write('<hr>');

// -- Avec la boucle while

var j = 0;
while(j <= 10){
    document.write('<h2> Instruction executée : ' + j + '! </h2>');
    // ATTENTION A NE PAS OUBLIER L'INCREMENTATION !
    j++;
};


document.write('<hr>');
/* -----------------------------
            EXERCICE
------------------------------ */

var Prenoms = ['Jean', 'Marc', 'Matthieu', 'Luc', 'Pierre', 'Paul', 'Hugo', 'Jacques'];
console.log('Prenoms');

/**
 * CONSIGNE : Grâce à une boucle FOR, affichez la liste des prénoms
 * du tableau ci-dessus dans la console, ou sur votre page.
 */

 for (let i= 0; i<Prenoms.length; i++){
     document.write('<h2> les noms: ' + Prenoms[i] + '! </h2>');
 };


document.write('<hr>');

 var j = 0;
 while(j<Prenoms.length){
     document.write('<h2> les noms: ' + Prenoms[j] + '! </h2>');
     j++;
 }