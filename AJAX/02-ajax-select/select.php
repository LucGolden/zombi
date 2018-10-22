



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax - select</title>

</head>
<body>
    <div style="width: 1000px; margin: 0 auto; padding: 20px;">
       <form >
           <label for="">Pays</label><br>
           <select name="" id="pays">

                <option value="">Choisir un Pays...</option>
                <option>HAïti</option>
                <option>France</option>
                <option>Espagne</option>

        </select><br><br>

        <label for="">Ville</label><br>
        <select name="" id="ville">
            <option value="">Veuillez choisir un pays...</option>

        </select>
       </form>
    </div>
    <script>
        //evenement
        document.getElementById('pays').addEventListener('change', function(){

            
        // fichier cible
        var fichier = 'ajax.php';

        //instanciation de l'objet ajax
        var xhttp = new XMLHttpRequest();


        // on recupère la valeur du champs pays
        var valeur = this.value;
        // alert(valeur);
        console.log(valeur);

        // préparation des paramètres pour POST
        var params = 'pays='+valeur;
        console.log(params);

        // préparation de la requete ajax
        xhttp.open("POST", fichier, true);
        // dans .open() 3 arguments:
        // - la methode POST ou GET
        // - le fichier cible 
        // - optionnel, asynchrone ou pas (true / false) c'est un true par defaut.



        // en methode "POST", la ligne suivante est obligatoire et doit se trouver après la ligne .open()
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhttp.onreadystatechange = function() {
            if(xhttp.status == 200 && xhttp.readyState == 4){
                console.log(xhttp.responseText);

                document.getElementById('ville').innerHTML = xhttp.responseText;
            }
        }
        xhttp.send(params);  // on envoie la requete ajax. les parametres de post se placent dans la methode .d$send(parameters)
        });

    </script>
</body>
</html>