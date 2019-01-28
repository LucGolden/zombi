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
   
    $affichage.=' <div class="col-md-4 m-md-2 col-xl-3 col-5   index">';
    $affichage.='<div class="card style">';
    $affichage.='<a href="'. $image . '" target="_blank"><img class="card-img-top mx-auto responsive_image" src="'. $image . '" alt="Card image cap"></a>';
    $affichage.='<div class="card-body">';
    $affichage.='<h5 class="card-title">' . ucfirst($nom) . '</h5>';
    $affichage.='<p class="card-text">' .  ucfirst($commentaire) . '</p>';
    // $affichage.='<!--<a href="#" class="btn btn-info">Go somewhere</a>-->';
    $affichage.='</div>';
    $affichage.='</div>';
    $affichage.='</div>';

}

?>



<body id="bodyRealisation">

<nav class="navbar mt-3 effet">
  <a class="btn navbar-brand  border-info rounded-circle" href="index.php"><i class="fas fa-home home"></i></a>
  <a class="btn border-warning effetlien" href="?lien=formations">Formations</a>
  <a class="btn border-danger" href="?lien=competences">Compétences</a>
  <a class="btn border-info bg-info" href="?lien=realisations">Réalisations</a>
  <a class="btn border-primary" href="?lien=luc">A Propos</a>
  <a class="btn border-success" href="?lien=contact">Contacts</a>
</nav>

<div class="container-fluid  creations" id="jqueryEffet">
  <h1 class="text-center mb-5 h1">Mes Réalisations</h1>

  <div class="row margin-r offset-xl-1">
      <?php echo $affichage; ?>
 
  </div>
</div>
  
</body>
