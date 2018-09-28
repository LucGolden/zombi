<?php   
// $resultat1 = require_once 'resultat-1.inc.php';


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Au pois gourmand</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Srisakdi" rel="stylesheet"> 
   <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<div class="container mt-5">
    <nav class="navbar">
        <span>
   <h1><i class="fas fa-kiwi-bird"> </i> Au Pois Gourmand </h1> </span>
</nav>

<?php  if(empty($_GET)){ ?>
<div class="row">
<div class="col_md-4 offset-md-1">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/rome.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Formule Rome</h5>
    <p class="card-text">Tomates buratina 
        <br>
          Rizotto aux asperges
          <br> Panna cotta</p>
    <a href="?action=choisir&formule=rome&prix=25&img=img/rome.jpg" class=" btn btn-block btn-info " >Choisir</a>
  </div>
</div>
</div>

<div class="col_md-4 offset-md-4">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/nyork.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title ">Formule New-York</h5>
    <p class="card-text text-body">César salade
        <br>
         Cheese burger
          <br> Cheesecake</p>
    <a href="?action=choisir&formule=new_york&prix=23&img=img/nyork.jpg" class=" btn btn-block btn-danger " >Choisir</a>
  </div>
</div>
</div>
</div>

<div class="row mt-5">
<div class="col_md-4 offset-md-1">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/delhi.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Formule Delhi</h5>
    <p class="card-text"> Poppadoms 
        <br>
           Agneau byriani
          <br> Lassi mangue</p>
    <a href="?action=choisir&formule=delhi&prix=24&img=img/delhi.jpg" class=" btn btn-block btn-warning " >Choisir</a>
  </div>
</div>
</div>

<div class="col_md-4 offset-md-4">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/hanoi.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title ">Formule Hanoï</h5>
    <p class="card-text text-body">Nems aux crevettes
        <br>
         Poulet saté
          <br> Perles de coco</p>
    <a href="?action=choisir&formule=hanoi&prix=28&img=img/hanoi.jpg" class=" btn btn-block btn-primary " >Choisir</a>
  </div>
</div>
</div>
</div>

<?php }else { ?>

<div class="row">

<div class="col-md-12 btn-block">
    <h2> Merci pour votre commande !</h2>
</div>

<div class="col-md-4 mt-4">
    <img src="<?php echo $_GET['img'] ?>" alt="rome">
</div>

<div class="col-md-8 mt-4">
    <h3>Votre formule <?php
    echo $_GET['formule']; 
     ?>  arrive dans quelques instants...<i class="fas fa-kiwi-bird"> </i></h3>
    <p>
        Nous vous souhaitons une bonne dégustation.
        <br>
     Un café gourmand vous est proposé pour terminer votre pause gourmande en douceur.
    </p>

    <span class="class-md-4">--Votre facture sera de <?php echo $_GET['prix']; ?> €</span>
    <a href="exo_AuPoisGourmand.php" class=" btn btn-block btn-success mt-4" >Choisir un autre menu</a>
</div>

</div>

<div class="row">
    <div class="col-md-4 offset-md-4 img">
        <p>-- Vous avez aimez <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>
        <img src="img/pg.jpg" alt="pg">
    </div>
</div>
<?php } ?> 





<footer class="mt-5">
<div class="row">
    <div class="col-md-6 offset-md-8">
<h5>
    <i class="fas fa-kiwi-bird"></i>..... 
<i class="fas fa-kiwi-bird"></i>.... 
<i class="fas fa-kiwi-bird"></i>... 
<i class="fas fa-kiwi-bird"></i>.. 
<i class="fas fa-kiwi-bird"></i>. Au Pois Gourmand
 </h5>

</div>
</div>
</footer>

</div>

</body>
</html>