            /* ------------------------------------------------------ */
            /*                         LE DOM ‍👼                 */
            /* ------------------------------------------------------ */
            /**     
             *   Le  DOM est une interface de développement en JS pour Html.
             *   Grace ay Dom, je vais être en mesure d'acceder / modifier mon
             *   code HTML.
             * 
             *   L'objet "document" : c'est le point d'entrée vers mon contenu
             *   HTML.
             * 
             *   Chaque page chargée dans mon navigateur à un objet "document"
             */

/**
 * Comment puis-je faire pour récupérer
 * les différentes informations de ma page HTML ?
 */

            /* ------------------------------------------------------ */
            /*           👉  document.getElementById() ‍👈            */
            /* ------------------------------------------------------ */
            /**
             * document.getElementById() est une fonction qui va permettre
             * de recupérer un élément HTML à partir de son identifiant unique : ID
             
             */
                const bonjour = document.getElementById("bonjour");
                console.log(bonjour);

            /* ------------------------------------------------------ */
            /*          👉  document.getElementsByClassName() ‍👈     */
            /* ------------------------------------------------------ */
            /**
             * document.getElementsByClassName() : C'est une fonction
             * qui va permettre de récupérer un ou plusieurs éléments (une liste) HTML
             * à partir de leur classe
             * 
             
             */
                const contenu = document.getElementsByClassName("contenu");
                console.log(contenu);


// ✋ Me renvoi un tableau JS avec mes elements HTML. ✋ 

            /* ------------------------------------------------------ */
            /*          👉  document.getElementsTagName() ‍👈         */
            /* ------------------------------------------------------ */
            /**
             * document.getElementsTagName() : c'est une fonction qui va permettre 
             * de récupérer un ou plusieurs éléments (une liste) HTML
             * à partir de leur Balisse.
             */

            //  NOTA BENE : 👉https://developer.mozilla.org/fr/docs/Web/API/Document/querySelector
