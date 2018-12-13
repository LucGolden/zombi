<?php
   require_once 'connexion.php';

        $affichage = '';
        $affichage2 = '';

      
        $requete = $pdo->query('SELECT * FROM formations');
        // $affichage .= '<h3 class="alert alert-dark mt-1">Nombre de formations : ' . $requete->rowCount() . '</h3>' ;


        // $requete2 = $pdo->query('SELECT * FROM contacts  ORDER BY id_contact DESC LIMIT 6 ');

while ($info_contact = $requete->fetch(PDO::FETCH_ASSOC)){
    // echo '<pre class="text-white">';
    // var_dump($info_contact);
    // echo '</pre>';
    
    extract($info_contact);



      $affichage .= '<div class="row">';
    $affichage.= '<div class="col-12 mt-5">';
        $affichage.= '<div class="jumbotron jumbotron-fluid rounded">';
  $affichage.= '<div class="container">';
    $affichage.= '<h2 class="display-4">'. $domaine .'</h2>';
    $affichage.= '<p class="lead">'. $nom_institution .' <br> '. $date_debut . ' ' . $date_fin .'</p>';
  $affichage.= '</div>';
$affichage.= '</div>';
    $affichage.= '</div>';
  $affichage.= '</div>';
}
    


?>


  <body id="bodyFormation">
<nav class="navbar mt-3 effet fixed-top">
  <a class="btn navbar-brand ml-5  border-warning  rounded-circle" href="index.php"><i class="fas fa-home home"></i></a>
  <a class="btn border-warning bg-warning mr-5" href="?lien=formations">Formations</a>
  <a class="btn border-danger mr-5" href="?lien=competences">Compétences</a>
  <a class="btn border-info mr-5" href="?lien=realisations">Réalisations</a>
  <a class="btn border-primary mr-5" href="?lien=luc">A Propos</a>
  <a class="btn border-success  mr-5" href="?lien=contact">Contacts</a>
</nav>
<div class="col-12 mt-5"></div>
  <div class="col-12 mt-5"></div>
<div class="col-12 mt-5"></div>

<div class="container stylef formation effetA">
  <div class="row">
    
  </div>
  <div class="row">
    <div class="col-12 text-center text-white mt-4"><h1>FORMATIONS</h1></div>
  </div>

<div><?php echo $affichage;  ?></div>
  
  
 
</div>
  
</body>
