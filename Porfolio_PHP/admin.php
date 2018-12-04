<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
     <!-- Lien de bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <!-- Lien Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <!-- Lien CSS perso -->
    <link rel="stylesheet" href="CSS/Style.css">

    <!-- Lien police -->
 <!--<link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico" rel="stylesheet">  -->
 <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Lobster|Pacifico" rel="stylesheet"> 
</head>
<body>
<nav class="navbar mt-3 effet">
  <a class="btn navbar-brand ml-5  border-danger rounded-circle" href="index.php"><i class="fas fa-home home"></i></a>
 
</nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center text-white mb-5">
                        <h1>page Admin</h1>
                    </div>
                </div>
                <div class="row text-white text-center">

                    <div class="col-5 offset-1">
                        <h2>Ajouter une formation</h2>
                        <form method="POST">
  <div class="form-group">
   
    <input type="text" class="form-control mt-3" id="institution" aria-describedby="emailHelp" placeholder="Nom de l'intitution">
    
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="domaine" placeholder="Domaine">
  </div>
  <div class="form-group">
    <textarea type="text" class="form-control" id="commentaire" placeholder="commentaire"></textarea>
    
  </div>
  <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
</form>
                    </div>


                    <div class="col-5">
                        <h2>Ajouter une compétence</h2>
                    <form method="POST">
                        <div class="form-group">
                        <input type="text" class="form-control mt-3" id="institution" aria-describedby="emailHelp" placeholder="Nom ">
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control mt-3" id="institution" aria-describedby="emailHelp" placeholder="Icone">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
                    </form>
                    </div>
                </div>
            </div>


            <div class="row mt-5 offset-4">
                <div class="col-5 text-center text-white">
                    <h2>Ajouter une Réalisation</h2>
                    <form method="POST">
                     <div class="form-group">
   
                        <input type="text" class="form-control mt-3" id="institution" aria-describedby="emailHelp" placeholder="image">
    
                    </div>

                     <div class="form-group">
   
                        <input type="text" class="form-control mt-3" id="institution" aria-describedby="emailHelp" placeholder="Nom">
    
                    </div>
                     <div class="form-group">
   
                        <textarea type="text" class="form-control mt-3" id="institution" aria-describedby="emailHelp" placeholder="Nom"></textarea>
    
                    </div>
                        <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
                    </form>
                </div>
            </div>


</body>
</html>