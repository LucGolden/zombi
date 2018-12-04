<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>P-E exo1</title>

     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

     <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6 mx-auto">
                <form action="" method="POST" id="form">

                <div id="retour" class="mb-4"></div>

                    <div class="form-group">
                    <!-- <label for="prenom">Prénom</label> -->
                        <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom">
                    </div>
                    <div class="form-group">
                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom">
                    </div>
                    <div class="form-group">
                       <select name="sexe" id="sexe" class="form-control">
                        <option value="m">Homme</option>
                        <option value="f">Femme</option>
                       </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="service" id="service" class="form-control" placeholder="Service">
                    </div>
                    <div class="form-group">
                        <input type="text" name="salaire" id="salaire" class="form-control" placeholder="Salaire">
                    </div>
                   
                    <div class="form-group">
                        <button type="submit" id="submit" name="enregistrer" class="form-control btn btn-success">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>









     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="ajax.js"></script>

</body>
</html>