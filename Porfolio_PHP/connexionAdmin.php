



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
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
    <?php if(empty($_POST)){ ?>
<nav class="navbar mt-3 effet">
  <a class="btn navbar-brand ml-5  border-danger rounded-circle" href="index.php"><i class="fas fa-home home"></i></a>
 
</nav>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-white mb-5">
                        <h1>Connexion</h1>
                    </div>
                </div>
                <div class="row text-white text-center">

                    <div class="col-8 offset-1">
                        <form method="post">
  <div class="form-group ">
   
    <input type="text" class="form-control mt-3" id="nom" name="nom" placeholder="Nom">
    
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="mdp" name="mdp" placeholder="Mot de passe">
  </div>
 
  <input type="submit" class="btn btn-primary btn-block">
</form>
</div>
</div> <?php }else{ include 'admin.php'; ?>



<?php } ?>