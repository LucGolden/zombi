$(document).ready(function(){
    // Le code suivant sera éxécuté après chargement de la page

    $("#submit").click(function(event){
        event.preventDefault();//Bloque le fonctionnement initial 
        insertEmploye(); // On exécute une function
    });

    function insertEmploye(){
            // 1 : récupérer les infos du formulaire (Tableau json)
            var params = {
                'prenom' : $("#prenom").val(),
                'nom' : $("#nom").val(),
                'service' : $("#service").val(),
                'salaire' : $("#salaire").val(),
                'sexe' : $("#sexe").val()
            };
            console.log(params);

            $.post('ajax.php', params, function(response){
                console.log(response);
                if (response.validation == "OK"){

                    $("#retour").html('<span class="alert alert-success ">Félicitations, l\'employé est enregistré</span>');

                    $("#prenom").val("");
                    $("#nom").val("");
                    $("#salire").val("");
                    $("#sexe").val("m");
                    $("#service").val("");

                }else{
                    
                    $("#retour").html('<span class="alert alert-success">Un problème est survenu lors de l\'enregistrement</span>');
                }
            }, 'json');

            // 2 : Lancer un fichier php (ajax;php) et lui transmettre les données
            // 3 : Afficher la reponse et vider le formulaire.
    }

});// Fin du $(document).ready(function()