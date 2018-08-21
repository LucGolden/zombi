// -- Déclarer un tableau indexé
var monTableau = [];
var myArray    = new Array;

monTableau[0] = "Hugo";
monTableau[1] = "jonathan";
monTableau[2] = "Elies";
monTableau[3] = "layla";

console.log(monTableau); //-- Affiche toutes les données de mon tableau
console.log(monTableau[1]); // Jonathan
console.log(monTableau[3]); // Layla

var nosPrenoms = [
    "Luc",
    "Sabuj",
    "Jean-Philippe",
    "Alpha",
    "Kévin"
];

console.log(nosPrenoms);

var Coordonnee = {
    prenom : "Luc",
    nom    : "Joinvil",
    age    : 18
};

console.log(Coordonnee);
console.log(Coordonnee['prenom']);
console.log(Coordonnee.nom);

var annuairedesApprenants = [
    ["Hugo", "LIEGEARD", "0783 97 15 15"],
    ["Luc", "JOINVIL", "0753 41 25 53"],

    {
        prenom : "Arnaud",
        nom    : "DOHOU",
        tel    : "XXXX XX XX XX"
    },
    {
        prenom : "Momo",
        nom    : "AIDOUNI",
        tel    : "XXXX XX XX XX"
    },
];

console.log(annuairedesApprenants);
console.log(annuairedesApprenants[1][0]);
console.log(annuairedesApprenants[1][1]);
// -- Ce n'est pas tres pratique !!!
console.log(annuairedesApprenants[2].prenom);
console.log(annuairedesApprenants[3].nom);

console.clear();


// IMP*
var Contacts = [
    {
        prenom: "Hugo",
        nom: "LIEGEARD",
        coordonnees: {
            email: "wf3@hl-media.fr",
            tel: {
                fixe: "0596 108 328",
                fax: "0596 108 632",
                port: "0783 97 15 15"
            },
            adresse: {
                rue: "35 Rue Jules Michelet",
                cp: "92700",
                ville: "Colombes",
                pays: {
                    code: "FR",
                    nom: "France"
                }
            }
        }
    },
    {
        prenom: "Rodrigue",
        nom: "NOUEL",
        coordonnees: {
            email: "rodrigue@hl-media.fr",
            tel: {
                fixe: "0596 145 569",
                fax: "0596 896 452",
                port: "0696 07 04 34"
            },
            adresse: {
                rue: "Quartier Sainte-Thérèse",
                cp: "97200",
                ville: "Fort-de-France",
                pays: {
                    code: "MQ",
                    nom: "Martinique"
                }
            }
        }
    },
    {
        prenom: "Elies",
        nom: "KEDIM",
        coordonnees: {
            email: "elies.k@hl-media.fr",
            tel: {
                fixe: "",
                fax: "",
                port: "07 89 45 12 56"
            },
            adresse: {
                rue: "Au Paradis",
                cp: "77777",
                ville: "Eden Ville",
                pays: {
                    code: "PA",
                    nom: "3ème Ciel"
                }
            }
        }
    }
];

console.log(Contacts);
console.log(Contacts[0].coordonnees.email);
console.log(Contacts[1].coordonnees.email);
console.log(Contacts[2].coordonnees.email);


// console.log(Contacts[3].coordonnees.ville);


/* ----------------------------
        ~ ~ CONSIGNE ~ ~

    Réaliser une structure JSON
    permettant de stocker des 
    recettes de cuisine.
-----------------------------*/

var recettes = [
   
   { 
       nom: "Crepe de la chandeleur",

       
       ingredients: [ 
        "250 g de farine tamisee",
        "4 oeufs", 
        "450 ml de lait légèrement tiède", 
        "50 g de beurre fondu"   
   ],
       preparation: {
           etape1: "Mettre la farine dans une terrine et former un puits.",
           etape2: "Y déposer les oeufs entiers, le sucre, l'huile et le beurre. ",
           etape3: "Mélanger délicatement avec un fouet en ajoutant au fur et à mesure le lait. La pâte ainsi obtenue doit avoir une consistance d'un liquide légèrement épais. ",
           etape4: "Parfumer de rhum. ",
       },
       ustensiles : [
            "1 louche",
            "1 cuillère en bois"
        ],
       temps : {
           preparation: "15 min",
           cuisson: " 15 min"
       },
       difficulté: "Très facile",
       type : [
           "petit déjeuner ", 
           "goûter"
       ]

   },



    {
        nom: "Crème Anglaise",


        ingredients: [
            "4 jaune d'oeuf",
            "50 g de sucre",
            "50 cl de lait demi-écrémé",
            "1 gousse de vanille",
            "1 cuillère à soupe de maïzena"
        ],
        preparation: {
            etape1: "Porter à ébullition le lait en ayant pris soin d'y plonger la gousse de vanille fendue en deux dans sa longueur.",

            etape2: "Laisser ensuite infuser pendant 10 min, puis retirer la gousse de vanille, et récupérer les grains en la grattant. Délayer ceux ci dans le lait. ",

            etape3: "Dans une seconde casserole, fouetter activement les jaunes d'oeuf et le sucre afin que le mélange blanchisse.  ",

            etape4: "Incorporer ensuite petit à petit le lait et rendre l'appareil bien homogène avec le fouet. . ",
        },
        ustensiles: [
            "1 louche",
            "1 cuillère en bois"
        ],
        temps: {
            preparation: "25 min",
            cuisson: " 15 min"
        },
        difficulté: "moyen",
        type: [
            "petit déjeuner ",
            "goûter"
        ]

    }
  
];

// ------Correction---------

/* -----------------------------
        ~ ~ CONSIGNE ~ ~

    Réaliser une structure JSON
    permettant de stocker des
    recettes de cuisine.
----------------------------- */

var receipes = [
    {
        name: 'Tiramisu',
        category: 'Desserts',
        subCategory: 'Gateaux',
        price: 'Abordable',
        difficulty: 'Facile',
        plate: 8,
        starRating: 4.98462123,
        photoUrl: 'https://www.monlien.fr/verslaphoto.jpg',
        videoUrl: 'https://www.monlien.fr/verslavideo.mp4', cooking: {
            preparation: '30min',
            time: '',
            temp: ''
        },
        ingredients: [
            {
                name: 'Sucre',
                quantity: 80,
                unit: 'g',
                imgUrl: 'https://www.monlien.fr/versingredient.jpg'
            },
            {
                name: 'Café Expresso',
                quantity: 15,
                unit: 'cl',
                imgUrl: 'https://www.monlien.fr/versingredient.jpg'
            },
            {
                name: 'Chocolat Cacao Amer',
                quantity: '1',
                unit: 'cuillère à soupe',
                imgUrl: 'https://www.monlien.fr/versingredient.jpg'
            },
            {
                name: 'Canelle',
                quantity: '1',
                unit: 'pincée',
                imgUrl: 'https://www.monlien.fr/versingredient.jpg'
            }
        ],
        instructions: [
            {
                name: 'Séparer les blancs des jaunes d\'oeufs.',
                imgUrl: 'https://www.monlien.fr/versletape.jpg'
            },
            {
                name: 'Mélanger les jaunes avec le sucre roux et le sucre vanillé.',
                imgUrl: 'https://www.monlien.fr/versletape.jpg'
            },
            {
                name: 'Ajouter le mascarpone au fouet.',
                imgUrl: 'https://www.monlien.fr/versletape.jpg'
            }
        ]
    },
];


/* --------------------------------
            AJOUTER UN ELEMENT
----------------------------------- */

var Couleurs = ["Rouge", "Jaune", "Vert"];

console.clear();
console.log(Couleurs);

// --- La fonction PUSH me permet d'jouter un element à la fin de mon tableau
Couleurs.push("Orange");
console.log(Couleurs);

// UNSHIFT le rajoute au début.
Couleurs.unshift("Bleu");
console.log(Couleurs);

/* --------------------------------
        RECUPERER ET SORTIR LE DERNIER ELEMENT
----------------------------------- */

/* 
* La fontion POP() me permet de supprimer un ou plusieurs éléments de mon tableau et d'en récupérer la valeur.
*/
var monDernierElement = Couleurs.pop();
console.log(Couleurs);
console.log(monDernierElement);

/* 
*La même chose est possible avec le premier élélment en utilisant *SHIFT()

*La fonction SPLICE() vous permet de faire sortir un ou plusieurs éléments.
*/

