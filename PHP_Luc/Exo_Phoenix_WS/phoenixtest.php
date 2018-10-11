<?php

// connexion à la BDD
$pdo = new PDO('mysql:host=localhost;dbname=phoenix', 
               'root',
               '',
               array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                     PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8') 
);

$contenu = '';

$resultat = $pdo->query("SELECT * FROM  voyage");


  $affichage = '';
//   while ($infoDeBdd = $resultat->fetch(PDO::FETCH_ASSOC)){
// // var_dump($infoDeBdd);

// $affichage .= '<div class="col-4 mt-3" >';
// $affichage .= '<div class="card border-info" style="width: 18rem;">';
//    $affichage .= '<img class="card-img-top" src=" ' . $infoDeBdd['photo'] . '" alt="Card image cap" >';
//     $affichage .= '<div class="card-body">';
//      $affichage .= '<h4 class="card-title">' . $infoDeBdd['destination'] . '</h4>';
//      $affichage .= '<p class="card-text">' . $infoDeBdd['presentation'] . ' </p>';
//    $affichage .= '<a href="?action=reserver&id_voyage='. $infoDeBdd['id_voyage'] .'" class="btn btn-primary">reserver maintenant !</a>';
//   $affichage .= '</div>';
// $affichage .= '</div>';
// $affichage .= '</div>';
// }

// if (!empty($_GET) &&  $_GET['id_voyage'] == $infoDeBdd['id_voyage']  ){
//   $affichage .= '';
// }


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pheonix</title>
<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<!----- fontawesome ------>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">


</head>
<body>
<div class="container-fluid">

<?php
 if(empty($_GET)){ ?>  
<div class="row fixed-top">
<div class="col-md-8 offset-md-3">
    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light  ">

  <a class="navbar-brand" href="phoenixtest.php"><i class="fab fa-phoenix-framework"></i>
    Phoenix</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="">Choisir une destination <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Payer</a>
      </li>
    </ul>
  </div>

</nav>
</div>
    </div>
   


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  <div class="carousel-item active">
      <img class="d-block w-100" src=" img/maurice.jpg" alt="First slide">
    </div>

<?php 

while( $infoDeBdd=$resultat->fetch(PDO::FETCH_ASSOC)){
  
    echo '<div class="carousel-item">';
      echo '<img class="d-block w-100 img-fluid" src=" ' . $infoDeBdd['photo'] . '" alt="">';
    echo '</div>';
  }
?>
</div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<div class="row">
<div class="col-md-8 offset-md-2 mt-5">
<a href="?action=choisir" class="btn btn-outline-info btn-block">Choisir mon sejour tout de suite !</a>
</div>
</div>
 <?php }elseif(!empty($_GET) && $_GET['action'] == 'choisir'){?>

<div class="container-fluid">

<div class="row bg-info">
<div class="col-md-8 offset-md-3">
    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">

  <a class="navbar-brand" href="phoenixtest.php"><i class="fab fa-phoenix-framework "></i>
    Phoenix</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Choisir une destinetion <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Payer</a>
      </li>
    </ul>
  </div>

</nav>
</div>
    </div>


</div>




<div class="container">

 <div id="carouselExampleControls" id="carouselElse" class="carousel slide mt-3" data-ride="carousel" >
  <div class="carousel-inner" style="height:20em;">
    <div class="carousel-item active">
      <img class="d-block w-100 img-fluid" src="img/maurice.jpg" alt="First slide" >
    </div>
    <?php
    while( $photos=$resultat->fetch(PDO::FETCH_ASSOC)){
    echo '<div class="carousel-item">';
      echo '<img class="d-block w-100 img-fluid" src=" ' . $photos['photo'] . '" alt="" >';
    echo '</div>';
  }
?>
  
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<!--------------------- card dynamique ----------------------------------->
<section>
<div class="row"> 
<?php 

  $resultat = $pdo->query("SELECT * FROM  voyage");
while ($infoDeBdd=$resultat->fetch(PDO::FETCH_ASSOC)){
  echo '<div class="col-4 mt-3 ">';                   
  echo '<div class="card border-info" >';
  echo '<img class="card-img-top " src="' . $infoDeBdd['photo'] . '" alt="Card image cap" style="height: 12rem;">';
  echo '<div class="card-body">';
  echo '<h5 class="card-title">' . $infoDeBdd['destination'] . '</h5>';
  echo '<p class="card-text">' . $infoDeBdd['presentation'] . '</p>';
  echo '<a href="?action=reserver&idvoyage='. $infoDeBdd['id_voyage'] .'" class="btn btn-primary">reserver maintenant !</a>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
}

 //print_r($_GET['idvoyage']);

?>
</div> 
</section>


<!--------------------------------------- fin ------------------------------>
 <?php //} elseif(!empty($_GET) &&  $_GET['idvoyage'] == $infoDeBdd['id_voyage'] && $_GET['action'] == 'reserver') { var_dump($infoDeBdd);?>
 <?php } elseif(!empty($_GET) &&  $_GET['idvoyage'] && $_GET['action'] == 'reserver') { var_dump($_GET);?>
      
<div class="container-fluid">

<div class="row bg-info">
<div class="col-md-8 offset-md-3">
    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">

  <a class="navbar-brand" href="phoenixtest.php"><i class="fab fa-phoenix-framework "></i>
    Phoenix</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Choisir une destinetion <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Payer</a>
      </li>
    </ul>
  </div>

</nav>
</div>
    </div>


</div>

<!----------------------------      -----------------------------   ------------------------------------------------------>
<div class="container">

 <div id="carouselExampleControls" id="carouselElse" class="carousel slide mt-3" data-ride="carousel" >
  <div class="carousel-inner" style="height:20em;">
    <div class="carousel-item active">
      <img class="d-block w-100 img-fluid" src="img/maurice.jpg" alt="First slide" >
    </div>
    <?php
    while( $photos=$resultat->fetch(PDO::FETCH_ASSOC)){
    echo '<div class="carousel-item">';
      echo '<img class="d-block w-100 img-fluid" src=" ' . $photos['photo'] . '" alt="" >';
    echo '</div>';
  }
?>
  
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!--------------------------------   --------------------------------------   -------------------------------------   ----------------->
      <?php 
      $resultat = $pdo->query("SELECT * FROM  voyage WHERE id_voyage = '$_GET[idvoyage]'"); 
      $infoDeBdd=$resultat->fetch(PDO::FETCH_ASSOC);

      ?>

      <div class="row mt-4">

            <div class="col-md-4">

                <div class="card border-info " style="width: 22rem;">

                    <img class="card-img-top luc" src="<?php echo $infoDeBdd['photo']; ?>" alt="maldives fino" style="height: 12rem;">

                    <div class="card-body">

                        <h5 class="card-title text-center"><?php echo $infoDeBdd['destination']; ?></h5>

                    </div>

                    <div class="card-footer alert-info">

                        <p class="card-text text-info">1 Semaine / personne : <?php echo $infoDeBdd['prix'] . '€'; ?></p>

                    </div>

                </div><!--fin .card -->

            </div>

            <div class="col-md-8">

                    <div class="card border-info " style="width: 100%;">

                        <div class="card-header alert-info">

                             <p class="card-text text-info">Je complète mes informations de reservation<i class="fab fa-phoenix-framework"></i></p>

                        </div>

                        <div class="card-body">



                        <form action="" method="post">

                            <div class="row mt-2 mb-4">

                                <div class="col">

                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email de confirmation">

                                </div>

                            </div>

                            <div class="row mb-4">

                                <div class="col">

                                    <input type="text" name="nb_semaines" id="nb_semaines" class="form-control" placeholder="Je pars combien de semaine ?">

                                </div>

                                <div class="col">

                                    <input type="text" name="nb_vacanciers" id="nb_vacanciers" class="form-control" placeholder="Nombre de vacanciers">

                                </div>

                            </div>

                            <button type="submit" class="btn btn-info btn-block">Confirmer ma reservation</button>

                        </form>

                    </div>

                </div><!--fin .card -->

            </div><!--fin .col -->

        </div><!--fin .row -->
<div class="row mt-5">
<?php  
  $resultat = $pdo->query("SELECT * FROM  voyage ORDER BY RAND()");
  
 while( $photos=$resultat->fetch(PDO::FETCH_ASSOC)){
       echo '<div class="col-md-2">';

                    echo  '<img class="img-thumbnail" src="'. $photos['photo'] .'" alt="maldives fino" style="height: 10rem;">';

          echo '</div>';
  }
?>
</div>    
<?php 
// $resultat = $pdo->query("SELECT * FROM  voyage");
// $infoDeBdd = $resultat->fetch(PDO::FETCH_ASSOC);
//

?>
      
      <?php } ?>
</div>
 <footer class="btn btn-block btn-info mt-5">
<div class="row">
<div class="col-md-8 offset-md-2">
<p><i class="fas fa-umbrella-beach"></i><span> Vos vacances de rêve ... </span> <i class="fas fa-sun"></i> <span> Plage ...</span> <i class="fas fa-city"></i> <span>Urbaine ...</span> <i class="fas fa-ship"></i> <span> Croisière ...</span> <i class="fas fa-image"></i> <span> Montagne ...</span> <i class="fas fa-euro-sign"></i> <span> A prix tout doux ... </span> <i class="fas fa-umbrella-beach"></i></p>
</div>
</div>

</footer>
</div><!-- Fin du container-fluid -->









<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>