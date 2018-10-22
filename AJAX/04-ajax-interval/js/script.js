setInterval('monAjax()', 5000);
// setInterval() permet de répéter la fonction fournie en premier argument selon un timer fourni en deuxieme argument (en miliseconde). tci la fonction monAjax() toutes les 5 secondes

function monAjax() {
    var fichier = "ajax.php";

    var xhttp = new XMLHttpRequest();

    xhttp.open("POST", fichier, true);
    xhttp.setRequestHeader('content-type', 'application/x-www-form-urlencoded');

    xhttp.onreadystatechange = function() {
        if (xhttp.status == 200 && xhttp.readyState == 4){
            console.log(xhttp.responseText);

            var retour = JSON.parse(xhttp.responseText);
            document.getElementById('resultat').innerHTML = retour.nombre + retour.contenu;
        }   
    }
    xhttp.send();
}