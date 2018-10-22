<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax - form</title>

</head>
<body>
    <div style="width: 1000px; margin: 0 auto; padding: 20px;">
        <form>
            <select onchange="monAjax()" id="personne">
                <option>...</option>
                <option>chevel</option>
                <option>cottet</option>
                <option>grand</option>
                <option>fellier</option>
                <option>lafaye</option>
                <option>durand</option>
            </select>
        </form>
        <hr>
        <div id="resultat"></div>

        <?php
        // $fichier = file_get_contents('fichier.json');
        // $tableau = json_decode($fichier); // format array / object
        // $tableau = json_decode($fichier, true); // format array / array
        // echo '<pre>';
        // var_dump($tableau);
        // echo '</pre>';
        ?>

        <script>
            function monAjax(){
                var fichier = 'ajax.php';
                var valeur = document.getElementById('personne').value;
                var params = 'choix='+valeur;
                console.log(params);

                // instanciation de l'objet ajax avec prise en compte d'internet explorer
                if (window.XMLHttpRequest) {
                    var xhttp = new XMLHttpRequest();
                  
                }else {
                    // pour internet explorer
                    var xhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xhttp.open("POST", fichier, true);
                xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

                xhttp.onreadystatechange = function() {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        console.log(xhttp.responseText); 
                        //  alert('ok');

                        // on transform la reponse (string) en objet JSON
                        var reponse = JSON.parse(xhttp.responseText);


                         document.getElementById('resultat').innerHTML = reponse.contenu;
                    }
                }
                xhttp.send(params); // on envoie

            }
        </script>
    </div>
</body>
</html>