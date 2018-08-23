/* --
    CONSIGNE : 
    
    A partir du tableau fourni, vous devez mettre en place un système d'authentification. 
    Après avoir demandé à votre utilisateur son EMAIL et MOT DE PASSE, 
    et après avoir vérifié ses informations, vous lui souhaiterez la bienvenue 
    avec son nom et prénom (document.write);
            
    En cas d'échec, vous afficherez une ALERT pour l'informer de l'erreur.  
-- */

// var BaseDeDonnees = [
//     { 'prenom': 'Hugo', 'nom': 'LIEGEARD', 'email': 'wf3@hl-media.fr', 'mdp': 'wf3' },
//     { 'prenom': 'Rodrigue', 'nom': 'NOUEL', 'email': 'rodrigue@hl-media.fr', 'mdp': 'wf3' },
//     { 'prenom': 'Nathanael', 'nom': 'DORDONNE', 'email': 'nathanael.d@hl-media.fr', 'mdp': 'wf3' }
// ];

// // -- Demande à, l'utilisateur son EMAIL
// var UserEmail = prompt('email');

// // -- Demande à l'utilisateur son MOT DE PASSE
// var UserMdp = prompt('Mot de passe');

// // -- Vérification des données entrer par l'utilisateur
// function authentification(){
// for(let i=0; i<=BaseDeDonnees.length; i++){
//     if(UserEmail == BaseDeDonnees[i].email && UserMdp == BaseDeDonnees[i].mdp){
//         // -- Souhaite Bienvenue à l'utilisateur avec son nom et prenom
//        document.write('<h2> Bienvenue '+ BaseDeDonnees[i].prenom + ' ' + BaseDeDonnees[i].nom + ' !</h2> ');
//     }
   
//     }; 

// };

// authentification();


/* --------------------------------
            CORRECTION  🤝
----------------------------------- */
/* --
    CONSIGNE : 
    
    A partir du tableau fourni, vous devez mettre en place un système d'authentification. 
    Après avoir demandé à votre utilisateur son EMAIL et MOT DE PASSE, 
    et après avoir vérifié ses informations, vous lui souhaiterez la bienvenue 
    avec son nom et prénom (document.write);
            
    En cas d'échec, vous afficherez une ALERT pour l'informer de l'erreur.  
-- */

var BaseDeDonnees = [
    { 'prenom': 'Hugo', 'nom': 'LIEGEARD', 'email': 'wf3@hl-media.fr', 'mdp': 'wf3' },
    { 'prenom': 'Rodrigue', 'nom': 'NOUEL', 'email': 'rodrigue@hl-media.fr', 'mdp': 'wf3' },
    { 'prenom': 'Nathanael', 'nom': 'DORDONNE', 'email': 'nathanael.d@hl-media.fr', 'mdp': 'wf3' }
];

// -- 1. Demander à l'utilisateur ses identifiants.
var emailUser = prompt("Email", "<Saisissez votre Email>");
var mdpUser = prompt("Mot de passe ?", "<Saisissez votre Mot de Passe>");

/**
 * Vérifie et Identifie un Utilisateur dans le tableau BaseDeDonnes.
 * Retourne l'utilisateur s'il à été trouvé.
 */
function connexion(emailUser, mdpUser) {

    let isUserInArray = false;

    // -- 2. On parcours le tableau d'utilisateurs
    for (let i = 0; i < BaseDeDonnees.length; i++) {

        console.log(BaseDeDonnees[i]);
        // -- 3. Si on trouve une correspondace entre l'email / mdp saisie par l'utilisateur et la BDD.
        if (emailUser === BaseDeDonnees[i].email && mdpUser === BaseDeDonnees[i].mdp) {

            // -- 4. L'utilisateur existe dans mon tableau
            isUserInArray = true;
            return BaseDeDonnees[i];

        }

    }

    return isUserInArray;

    // -- AUTRE METHODE

    // return BaseDeDonnees.find(function(user) {
    //     return emailUser === user.email && mdpUser === user.mdp
    // });

    // return BaseDeDonnees.find( user => emailUser === user.email && mdpUser === user.mdp );

}

// function l(e) {
//     console.log(e);
// }
// https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Fonctions/Fonctions_fl%C3%A9ch%C3%A9es


l = e => console.log(e);

var monUtilisateur = connexion(emailUser, mdpUser);
l(monUtilisateur);

// -- Si la condition retourne faux. ( Je n'ai pas trouvé de correspondance en BDD )
if (monUtilisateur === undefined) {

    alert("ATTENTION, Identifiants incorrects");

} else {

    // -- Tout va bien
    document.write("Bonjour " + monUtilisateur.prenom + " " + monUtilisateur.nom + " !");

}




  


