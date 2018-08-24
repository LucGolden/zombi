            /* ------------------------------------------------------ */
            /*          👉  LA MANIPULATION DES CONTENUS ‍👈          */
            /* ------------------------------------------------------ */
            l = e => console.log(e);
            var l = function(e) {console.log(e)};

            // Je souhaite récupérer mon lien Google... Comment ça procédere ?

            const google = document.getElementById('google');
            l(google);

            // Maintenant, je souhaite  accéder aux informations de ce lien...


            // -- A : Le lien vers lequel pointe la balise
            l(google.href);
            // -- B : l' ID de la balise
            l(google.id);

            // -- B : La classe de la balise
            l(google.className);
           
            // -- B : Le texte de la balise
            l(google.textContent);

            /**
             * Maintenant, je souhaite modifier le texte de mon lien !
             */
                google.textContent = "Mon lien vers GoOoOoOoOoOoOoOoOgle‍👈";

                /**
                 * AJOUTER UN ELEMENT  DANS MA PAGE
                 * ---------------------------------‍👈
                 * 
                 * Nous allons procéder en deux étapes :
                 * 
                 * 1. La fonction document.createElement() va permettre
                 * de générer un nouvel élément dans le DOM ; que je pourrai
                 * modifier par la suite avec les methodes que nous venons
                 * de voir...
                 * 
                 * PS : ce nouvel élément est placé en memoire !
                 * 
                 * 2. L'ajouter à la page.
                 */
                // -- Définition de lélément
                var span = document.createElement('span');
                
                //-- Si je souhaite lui donner ubn ID
                span.id = "monSpan";

                //-- Si je souhaite lui attribuer du contenu
                span.textContent = 'Mon beau texte en JS 😎 ';

                // -- je lajoute à la page
                google.appendChild(span);


                /* -------------------------------
            EXERCICE
En partant du travail déjà réalisé sur la page.
Créez directement dans la page une balise <h1></h1> ayant comme contenu : 
"Titre de mon Article".

Dans cette balise, vous créerez un lien vers une url de votre choix.
BONUS : Ce lien sera de couleur Rouge et non souligné.
-------------------------------- */

var h1 = document.createElement('h1');
var a = document.createElement('a');
a.textContent = "le poles c'est génial !";
a.href = "#";
h1.appendChild(a);
document.body.appendChild(h1);
a.style.color = "red";
a.style.textDecoration = 'none';




