<?php    
        require_once 'connexion.php';

        $affichage = '';
       

      
        
        
        $requete = $pdo->query('SELECT * FROM luc_admin WHERE id_admin = 1');
        

while ($info_realisations = $requete->fetch(PDO::FETCH_ASSOC)){
    // echo '<pre class="text-white">';
    // var_dump($info_realisations);
    // echo '</pre>';
    
    extract($info_realisations);
   

}

?>



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

    <?php if(empty($_GET)) { ?>


<nav class="navbar mt-3 effet">
  <a class="btn navbar-brand ml-5  border-danger rounded-circle" href="index.php"><i class="fas fa-power-off home"></i></a>
  <!-- <a class="btn border-success bg-success mr-5" href="afficheMessage.php">Messages</a>
  <a class="btn border-success bg-success mr-5" href="Competence.php">Add Compétence</a>
  <a class="btn border-success bg-success mr-5" href="Competence.php">Add Formation</a> -->
</nav>
            
            <div class="container text-white text-center">

                <div class="row luc text-center mt-5">
                    <div class="col-12">
                    <h1 id="h1" class="rounded">Bonjour <?php echo $nom;  ?>.</h1>
                    <br>
                    <p class="offset-4">Bienvenue sur ta page <span>Admin</span> </p>
                </div>
                </div>
            </div>


                   <div class="row">
            <div class="col-2 offset-5 p-4 stylef bgcLien ">
                
                
                <p><a class="btn btn-outline-success btn-block" href="afficheMessage.php">Voir mes messages</a></p>
                <p><a class="btn btn-outline-danger btn-block"  href="?lien=Addcompetences">Ajouter une Compétence</a></p>
                <p><a class="btn btn-outline-info btn-block" href="?lien=Addrealisations">Ajouter une Réalisation</a></p>
                <p><a class="btn btn-outline-primary btn-block mt-3" href="?lien=ModifInfos">Modifier mes infos</a></p>
                <p><a class="btn btn-outline-warning btn-block" href="?lien=Addformations"> ajouter une Formation</a></p>
                <!-- <p><a class="btn btn-outline-warning btn-block" href="#"></a></p> -->
                
            </div>
        </div>
    <?php   } elseif(!empty($_GET) && $_GET['lien'] == 'Addrealisations') {
        require_once 'inc_admin/Realisation.php';
    } elseif(!empty($_GET) && $_GET['lien'] == 'Addcompetences'){
        require_once 'inc_admin/Competence.php';
    } elseif(!empty($_GET) && $_GET['lien'] == 'Addformations'){
        require_once 'inc_admin/Formation.php';
    }elseif(!empty($_GET) && $_GET['lien'] == 'ModifInfos'){
        require_once 'inc_admin/UpdateAdmin.php';
    } ?>



   <script

              src="https://code.jquery.com/jquery-3.3.1.min.js"

              integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="

              crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    
    <script src="portfolio.js"></script>

</body>
</html>