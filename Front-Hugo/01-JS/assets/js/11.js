// BENCHMARK - BOUCLES JS
//http://jsbench.github.io/#6bdfcd2692ba80c16a68c88554281570

/*
 I. Créer un Tableau 3D "PremierTrimestre" contenant la moyenne d'un étudiant pour plusieurs matières.

    Nous auront donc pour un étudiant, sa moyenne à plusieurs matières.
    
    Par exemple : Hugo LIEGEARD : [ Francais : 12, Math : 19, Physique 4], ... etc
    
    **** Vous allez créez au minimum 5 étudiants ****

II. Afficher sur la page (à l'aide de document.write) pour chaque étudiant, la liste (ul et li) 
de sa moyenne à chaque matière, puis sa moyenne générale. 
*/


// var PremierTrimestre = [
//     {
//         prenom: "Hugo",
//         nom: "LIEGEARD",
//         moyenne: {
//             francais: 4,
//             math: 6,
//             physique: 18
//         }
//     },
//     {
//         prenom: "Luc",
//         nom: "JOINVIL",
//         moyenne: {
//             francais: 4,
//             math: 5,
//             physique: 16,
//             eps: 18,
//             chimie: 17
//         }
//     },
//     {
//         prenom: "Layla",
//         nom: "LAHCENE",
//         moyenne: {
//             francais: 17,
//             math: 2,
//             physique: 10,
//             svt: 18,
//             arabe: 10
//         }
//     },
//     {
//         prenom: "Alpha",
//         nom: "DIALLO",
//         moyenne: {
//             francais: 12,
//             math: 8,
//             physique: 14,
//             philo: 5,
//             eps: 19
//         }
//     },
//     {
//         prenom: "Elies",
//         nom: "KEDIM",
//         moyenne: {
//             francais: 2,
//             math: 18,
//             physique: 17,
//             informatique: 15
//         }
//     }
// ];


var PremierTrimestre = [
    {nom : 'Joinvil', prenom : 'Luc',
   matieres : { 
    francais : 15 , 
    math :  18, 
    biologie : 19, 
    chimie : 19 } 
    },
    {
        nom: 'Charles', prenom: 'Steeve',
        matieres: { 
        anglais: 16,
        espagnol: 13,
        physique: 18,
        chimie: 15, 
        geologie : 13,  
    }
    },
    {
        nom: 'Junoir', prenom: 'Paul',
        matieres: { 
            Economie: 15, 
            Gestion: '18', 
            chimie: 'chimie 19', 
            optique: '11', 
            philosophie : 13, 
            Creole : 19 }
    },
    {
        nom: 'Jean', prenom: 'Clara',
        matieres: { Francais: 15, 
            Math: 18, 
            Biologie : 19, 
            chimie: 19 
        }
    },
    {
        nom: 'Rumanov', prenom: 'Barbara',
        matieres: { Russe: 19, 
            Math: 12, 
            Biologie: 18, 
            Physique: 16, 
            Anglais : 12
        }
    }
];
w = a => document.write(a);

var luc = "";

w('<ol>');
for(let i = 0; i<PremierTrimestre.length; i++){
    // PremierTrimestre[i];
   
    w('<h2> <li>' + PremierTrimestre[i].nom + ' ' + PremierTrimestre[i].prenom + '</li> </h2>')

    for (var matieres in PremierTrimestre[i]) {
       console.log(PremierTrimestre[i].matieres)
       w('<ul> <li> ' + PremierTrimestre[i].matieres + '</li> </ul>')
    }
}


w('</ol>')

// for (let i = 0; i < PremierTrimestre.length; i++){
//     w('<h2> 1° ' + PremierTrimestre[0].nom + ' ' + PremierTrimestre[0].prenom + ' </h2>');
    
//     w('<h2>  <ul> <li> Français : ' + PremierTrimestre[0].matieres.francais + '</li>' + ' <li> Math :' + PremierTrimestre[0].matieres.math + '</li>' +  ' <li> Biologie :' + PremierTrimestre[0].matieres.biologie + '</li>' + '</ul>' +'</h2>');
   
//     break;
    
// }
