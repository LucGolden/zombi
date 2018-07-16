// alert('test')

/* --  - Structure de base IF */
/* --  - Structure IF ... ELSE */
/* --  - Structure IF... ESLE IF ... ELSE */


/* --  - Structure de base IF */
if (true) { // par défaut le IF vérifie si la condition est VRAIE (true)
    /* ... code ... */
}

var nb1 = 99;
if (nb1< 100) {
    console.log(nb1 + ' est plus petit que 100');
}

/* --  - Structure IF ... ELSE */
if (true){
}else{
    /* ... code si condition FAUSSE */
}
var nb2 = 399;
if ( nb2 > 200) {
    console.log(nb2 + ' est plus grand que 200');
}else{
    console.log(nb2 + ' est plus petit que 200');
}

/* --  - Structure IF... ESLE IF ... ELSE */
if (true) {// par défaut le IF vérifie si la condition est VRAIE (true)
} else if (true) {
    /* ... code si les conditions 1 est fausse et la 2 est vraie */
} else {/* code si la condition 1 et 2 sont fausses */
}

var nb4 = 50;
if (nb4 < 50) {
    console.log(nb4 + ' plus grand que 50');
} else if (nb4 > 50) {
    console.log(nb4 + ' plus grand que 50');
} else {
    console.log(nb4 + ' est égale à 50')
}

/* --- EXO --- */
var affiche = prompt('vôtre âge');

var majeur = 18;

if ( affiche > 18) {
    // console.log('Bienvenue');
    alert('Bienvenue');
} else if (affiche < 18) {
    // console.log('Interdit');
    alert('Interdit'); 
    alert("va rediriger vers: " + "https://www.facebook.com/mickeysfanclubpage");
} else {
    // console.log('Bienvenue'); 
    alert('Bienvenue');
}