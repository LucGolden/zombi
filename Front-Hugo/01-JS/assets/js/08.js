/* --------------------------------
            LES CONDITIONS  🤝
----------------------------------- */

var majoriteLegaleFr = 18;

if (14 >= majoriteLegaleFr) {
    alert('Bienvenue');
}

//  -- LE ELSE N4EST PAS OBLIGATOIRE !
else {
    alert('Va voir chez Goolle si.....')
};


/* -------------------------------
             EXERCICE

    Créer une fonction permettant de vérifier l'age d'un visiteur (prompt).
    S'il a la majorité légale, alors je lui souhaite la bienvenue, 
    sinon, je fait une redirection sur Google après lui avoir signalé le soucis.

-------------------------------- */



// -- Correctionn -- //

// -- 1. Déclarer la majorité
const MAJORITELEGALEFR = 18;

// -- 2. Vérifier si l'utilisateur est majeur (fonction)
function monUtilisateurEstMajeur(age) {
    if (age >= MAJORITELEGALEFR) {
        return true;
    } else {
        return false;
    }
}

// -- 3. Je demande à l'utilisateur son age
var age = parseInt(prompt("Bonjour, Quel age avez-vous ?", "<Saisissez votre Age>"));

// -- 4. Vérification
if (monUtilisateurEstMajeur(age)) {

    alert("Bienvenue sur mon site internet réservé aux majeurs");
    document.write("0_0 !!!");

} else {
    // -- 5. Redirection
    document.location.href = "http://fr.lmgtfy.com/?q=Majorit%C3%A9+L%C3%A9gale+en+France";

};

/* --------------------------------------------------------------------------------------------------------------------------------------- */

//                  LES OPARATEURS DE COMPARAISON                   |
/*                                                                  |
| l'Opérateur de comparaison " == " signifie : égal à.              |
| Il permet de vérifier que 2 variables sont identiques.            |
|                                                                   |
|  l'Opérateur de comparaison " === " signifie : Strictement égal à.|
|  Il permet la valeur, mais aussi le type !                        |
|                                                                   |
| L'Opérateur " != " Différent de                                   |                                | 
| L'Opérateur " !== " Strictement Différent de                      | 
|                                                                   /
------------------------------------------------------------------*/


/* -------------------------------
            EXERCICE :
J'arrive sur un Espace Sécurisé au moyen 
d'un email et d'un mot de passe.

Je doit saisir mon email et mon mot de passe afin d'être authentifié sur le site.

En cas d'échec une alert m'informe du problème.
Si tous se passe bien, un message de bienvenue m'accueil.
-------------------------------- */

// // -- BASE DE DONNEES
var email, mdp;

email = "wf3@hl-media.fr";
mdp = "wf3";

// je verifie l'email et le mot de passe
var nom = prompt('Nom d\'utilisateur')
var monEmail = prompt('entrer ton email');
var monMdp = prompt('entrer ton mot de passe');

// je pose la condition
// if(monEmail === email && monMdp === mdp){
// si tous se passe bien
    // alert('Bienvenue ' + nom + '!' );
    // document.write('<h2> JOINVIL Luc Merlentz the HAÎTIAN');
// } else {
    // -- en cas d'echec
    // alert('mot de passe ou email incorrect');
    
// };

//  Exemple avec la fonction

function login( monEmail, monMdp){
    return monEmail === email && monMdp === mdp;
}
if (login(monEmail, monMdp)) {
    alert("Bienvenue " + nom + " !");
} else {
    alert("ATTENTION, email / mot de passe incorrect.");
}

            /* ------------------------------------------------------ */
            /*             LES OPARATEURS LOGIQUES                    */
            /* ------------------------------------------------------ */
            
            /* l'Opérateur ET : &&. Si la combinaison email et email monEmail
             correspond, Et la combinaison mdp et monMdp correspond. 
             
             --> Dans cette condition, les 2 doivent OBLIGATOIREMENT
             correspondre pour être validée.
             ex : if(monEmail === email && monMdp === mdp){......};
             
             l'Opérateur OU : ||. Si la combinaison email et email monEmail
             coorspond, ET/OU la combinaison mdp et monMdp correspond.
             
              --> Dans cette condition, l'une ders deux doit
             correspondre pour être validée.
             ex : if(monEmail === email || monMdp === mdp){......};


             l'Opérateur " ! " : ou encore NOT.
              Il signifie le CONTRAIRE DE.
             
             var monUtilisateurEstApprouve = true;
             if( !monUtilisateurEstApprouve ) {.....};
             Si mon utilisateur est approuvé.
             
             Reviens à écrire
             if( monUtilisateurEstApprouve === false) {.....};*/



