<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter Vehicule</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

     <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="vehicule.js"></script>
</head>
<body>
<div class="container">
<div class="col-6">
<!-- div pour afficher le message -->
    <div id="message" class="mb-3"></div>

<!-- Le formulaire permettra d’ajouter un nouveau véhicule en base de données et contiendra les champs suivant :  - Marque - Modèle - Année - Couleur   -->
    <form method="post" id="form">
        <div class="form-group">
            <label for="marque">Marque</label>
            <input type="text" class="form-control" id="marque"  placeholder="Marque">
        </div>
        <div class="form-group">
            <label for="modele">Modèle</label>
            <input type="text" class="form-control" id="modele" placeholder="Modèle">
        </div>
        <div class="form-group">
            <label for="annee">Année</label>
            <input type="text" class="form-control" id="annee" placeholder="Année">
        </div>
        <div class="form-group">
            <label for="couleur">Couleur</label>
            <input type="text" class="form-control" id="couleur" placeholder="Couleur">
        </div>
        
        <button type="submit" id="submit" class="btn btn-primary">Enregistrer</button>
    </form>
    </div>
</div>

    






    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="vehicule.js"></script>
</body>
</html>