/* alert('Mon fichier js fonctionne');// deuc slash popur un commentaire uniligne/*

ici je peux faire un commentaire sur plusieurs lignes.

*/// -- 1 : Déclarer une variable JS

var Prenom;// --2 : Affecter une Valeur

Prenom = "Layla";/*-----------------------------------------------------------

|~ ~ ~ ~ ~ ~ ~ ~ ~ ~ Les Types de Variables ~ ~ ~ ~ ~ ~ ~ ~ ~|

------------------------------------------------------------*/// --typeof, me permet de connaitre le type de ma variable.

console.log(typeof Prenom);// --Déclaration et affectation d'un nombre.

var Age = 40;// connaitre son type

console.log(typeof Age);/*-----------------------------------------------------------\

|                   LA PORTEE DES VARIABLES                  |

| Les variables déclarées directement à la racine du fichier |

| JS sont appelés : variables GLOBALES.                      |

|                                                            |

| Elles sont disponible dans l'ensemble de votre document,   |

| y compris dans les fonctions.                              |

|                                                            |

| ####                                                       |

|                                                            |

| Les variables à l'intérieur d'une fonction sont appelées : |

| variables LOCALES.                                         |

|                                                            |

| Elles sont disponible UNIQUEMENT dans le scope de la       |

| fonction.                                                  |

\-----------------------------------------------------------*/
// --LEs variables de type FLOAT

var uneDecimale = -2.984;

console.log(uneDecimale);

console.log(typeof uneDecimale);

// --Les Booléens (VRAI / FAUX)

var unBoolean = false; //true

console.log(unBoolean);

console.log(typeof unBoolean);

// -- Les Constantes

/*

* La déclaration CONST permet de créer une constante accessible

*UNIQUEMENT en lecture. Sa valeur ne pourra pas être modifiée

*par de réaffectation ultérieures. Une constante ne peut pas

*être déclarée à nouvveau...

*/
const HOST = "localhost";

const USER = "root";

const PASSWORD = "mysql";

// je ne peux pas faire cela ..

// USER = "Layla";

// typeError : Assignment to constant variable.var unNombre = "24";

console.log(unNombre);

console.log(typeof unNombre);/*

* La fonction ParsInt () pour retpurner un entier

* à partir de mon string.

*/unNombre = parseInt(unNombre);

console.log(unNombre);

console.log(typeof unNombre);// -- Pour convertir un float

unNombre = "12.55";

unNombre = parseInt(unNombre);

console.log(unNombre);

console.log(typeof unNombre);
// -- Pour convertir un nombre en string

unNombre = 10;

var monString = unNombre.toString();

console.log(monString);

console.log(typeof monString);