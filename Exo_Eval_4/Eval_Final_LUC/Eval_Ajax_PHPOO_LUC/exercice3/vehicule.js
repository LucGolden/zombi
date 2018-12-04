$(document).ready(function () {

    $("#submit").click(function (event) {
        event.preventDefault();//Bloque le fonctionnement initial
        
        insertVehicule();// on execule une fonction

    });//Fin du $("#submit").click(function (event) {


        function insertVehicule(){
              // 1 : récupérer les infos du formulaire (Tableau json)
              var params = {
                  'marque' : $("#marque").val(),
                  'modele' : $("#modele").val(),
                  'annee' : $("#annee").val(),
                  'couleur' : $("#couleur").val(),
              };
              console.log(params);

              $.post('vehicule.php', params, function(verif){
                //   console.log(verif);
                if(verif.validation == 'OK'){
                    // message de reussite
                    $("#message").html('<span class="alert alert-success ">Félicitations, le véhicule est enregistré</span>')

                    $("#marque").val("");
                    $("#modele").val("");
                    $("#annee").val("");
                    $("#couleur").val("");
                }else{
                    // message d'echec
                    $("#message").html('< span class= "alert alert-success" > Un problème est survenu lors de l\'enregistrement</span>')
                }

              }, 'json');
        }
});//Fin du $(document).ready(function () {