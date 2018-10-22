/* 
Statut de la requête Ajax: (readyState)
-_-_-_-_-_-_-_-_-__-_-_-_-_-_-_-_-_-
0 - L'objet AJAX a étét instancié mais pas encore appelé
1 - On envoie la requête AJAX
2 - la requête est reçue
3 - Le serveur traite la requête et commence à envoyer les données
4 - La requête est finie, nous avons reçu la reponse.

Status http: (status)
---------_______------
200 - tout est OK

ajax.onreadystatechange -> permet de décomposer les différents états de la requete afin de declencher le code une fois la requete finie
ajax.responseText -> contient la totalité de la reponse passée à notre objet ajax
*/

document.getElementById('bouton').addEventListener('click', function(){
    var xhttp = new XMLHttpRequest(); // instanciation de l'objet XMLHttpRequest

    xhttp.onreadystatechange = function() {
        console.log(xhttp.readyState);
        console.log(xhttp.status);

        if (xhttp.readyState == 4 && xhttp.status == 200){
            console.log(xhttp.responseText); // on affiche la reponse dans la console

            // document.getElementById('titre').textContent = xhttp.responseText; // Affiche le text 
            document.getElementById('titre').innerHTML = xhttp.responseText; // balise html
        }
    }
    xhttp.open('GET', 'infos.txt', true); // on prepare la requete ajax
    xhttp.send(); // on l'envoie
});