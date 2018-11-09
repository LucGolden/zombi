<?php



// if(!empty($_GET) && $_GET['lien'] == 'creation') {
   
//   require_once 'inc/creation.inc.php';
// }















?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon site porfolio</title>

    <!-- Lien de bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <!-- Lien Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <!-- Lien CSS perso -->
    <link rel="stylesheet" href="CSS/Style.css">

    <!-- Lien police -->
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
   
</head>
<body>
    <?php if(empty($_GET)) { ?>
    <div class="contenair-fluid">

    <!-- <nav class="navbar ">
  <a class="navbar-brand offset-1" href="#"><i class="fas fa-home"></i></a>
</nav> -->
    </div>
    
    <!-- <section id="position"> -->
<div class="container-fluid">

<div class="row mt-5">
    <div class="col-lg-6 offset-1  text-white mt-5 luc">
        <p class="offset-2">Je suis</p>
        <h1>LUC M<a href="#">.</a> JOINVIL</h1>
        <p class="junior"><b>développeur intégrateur junoir</b></p>
        <p class="offset-4">et c'est le site de mon <span>PORFOLIO</span></p>
    </div>
</div>
</div>



  
<!--               -->
  <!-- </section> -->
<div class="row">
    <div class="col-1 offset-6  bgcLien">

   
       <p><a class="btn btn-outline-primary btn-block mt-3" href="?lien=luc">Luc M. Joinvil</a></p>
        <p><a class="btn btn-outline-danger btn-block" href="?lien=competences">Compétences</a></p>
        <p><a class="btn btn-outline-info btn-block" href="?lien=creations">Créations</a></p>
        <p><a class="btn btn-outline-warning btn-block" href="?lien=formations">Formations</a></p>
        <p><a class="btn btn-outline-success btn-block" href="?lien=contact">Contact</a></p>
        <!-- <p><a class="btn btn-outline-warning btn-block" href="#"></a></p> -->

    </div>
</div>
  

</div>
<?php   } elseif(!empty($_GET) && $_GET['lien'] == 'creations') {
    require_once 'inc/creation.inc.php';
} elseif(!empty($_GET) && $_GET['lien'] == 'competences'){
     require_once 'inc/competences.inc.php';
    } elseif(!empty($_GET) && $_GET['lien'] == 'formations'){
         require_once 'inc/formations.inc.php';
     }elseif(!empty($_GET) && $_GET['lien'] == 'contact'){
         require_once 'inc/contact.inc.php';
    } elseif(!empty($_GET) && $_GET['lien'] == 'luc'){
         require_once 'inc/luc.inc.php';
     } ?>

     <footer>
         <p class="text-center text-white">&copy Luc M. Joinvil développeur intégrateur junoir</p>
     </footer>
</body>
</html>