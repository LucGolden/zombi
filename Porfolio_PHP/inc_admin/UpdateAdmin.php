<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter une Compétence</title>
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
  <a class="btn navbar-brand ml-5  border-primary rounded-circle" href="index.php"><i class="fas fa-home home"></i></a>
  <!-- <a class="btn border-success bg-success mr-5" href="afficheMessage.php">Messages</a> -->
  <a class="btn bg-primary mr-5" href="admin.php"><i class="fas fa-arrow-circle-left"></i>Retour</a>


 
</nav>


<div class="container">
    <div class="row">

     <div class="col-12 m-5 p-5 text-center text-white">
            <h2>Modifier mes infos</h2>
            <form method="POST">
                <div class="form-group">
                    <input type="text" class="form-control mt-5" id="nom" aria-describedby="emailHelp"
                        placeholder="Nom">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mt-5" id="prenom" aria-describedby="emailHelp"
                        placeholder="Prénom">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mt-5" id="telephone" aria-describedby="emailHelp"
                        placeholder="Téléphone">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mt-5" id="email" aria-describedby="emailHelp"
                        placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-5 mt-5" id="linkedin" aria-describedby="emailHelp"
                        placeholder="LinkedIn">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-5 mt-5" id="github" aria-describedby="emailHelp"
                        placeholder="GitHub">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Modifier</button>
            </form>
        </div>
    </div>
</div>
</div>
    
</body>
</html>