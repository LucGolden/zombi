<?php    
        require_once 'connexion.php';

        $affichage = '';
       

      
        // $requete = $pdo->query('SELECT * FROM contacts');
        
        
        $requete = $pdo->query('SELECT * FROM realisations ORDER BY id_realisations DESC LIMIT 6 ');
        // $affichage .= '<h3 class="alert alert-dark mt-1">Nombre de realisations : ' . $requete->rowCount() . '</h3>' ;

while ($info_realisations = $requete->fetch(PDO::FETCH_ASSOC)){
    // echo '<pre class="text-white">';
    // var_dump($info_realisations);
    // echo '</pre>';
    
    extract($info_realisations);
   
    $affichage.=' <div class="col-3 mb-5 ml-5">';
    $affichage.='<div class="card style" style="width: 25rem; ">';
    $affichage.='<img class="card-img-top" style="height:30rem;" src="'. $image . '" alt="Card image cap">';
    $affichage.='<div class="card-body">';
    $affichage.='<h5 class="card-title">' . $nom . '</h5>';
    $affichage.='<p class="card-text">' .  $commentaire . '</p>';
    // $affichage.='<!--<a href="#" class="btn btn-info">Go somewhere</a>-->';
    $affichage.='</div>';
    $affichage.='</div>';
    $affichage.='</div>';

}

?>



<body id="bodyRealisation">

<nav class="navbar mt-3 effet">
  <a class="btn navbar-brand ml-5  border-info rounded-circle" href="index.php"><i class="fas fa-home home"></i></a>
  <a class="btn border-warning mr-5 effetlien" href="?lien=formations">Formations</a>
  <a class="btn border-danger mr-5" href="?lien=competences">Compétences</a>
  <a class="btn border-info bg-info mr-5" href="?lien=realisations">Réalisations</a>
  <a class="btn border-primary mr-5" href="?lien=luc">A Propos</a>
  <a class="btn border-success mr-5" href="?lien=contact">Contacts</a>
</nav>

<div class="container-fluid creations" id="jqueryEffet">
  <h1 class="text-center mb-5">Mes Réalisations</h1>

  <div class="row offset-1">
      <?php echo $affichage; ?>
 
  </div>
</div>
  
</body>
