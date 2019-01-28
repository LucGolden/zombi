
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

<body id="bodyQui">



<nav class="navbar mt-3 effet">
  <a class="btn navbar-brand  border-primary rounded-circle" href="index.php"><i class="fas fa-home home"></i></a>
  <a class="btn border-warning" href="?lien=formations">Formations</a>
  <a class="btn border-danger" href="?lien=competences">Compétences</a>
  <a class="btn border-info" href="?lien=realisations">Réalisations</a>
  <a class="btn border-primary bg-primary" href="?lien=luc">A Propos</a>
  <a class="btn border-success" href="?lien=contact">Contacts</a>
</nav>

<div class="container stylef effetA p-3 mt-5 apropos">
<div class="row mt-5 text-center">
    <div class="col-xl-4 col-sm-4 img mx-auto">
        <img src="<?php  echo $photo; ?>" alt=""  class="rounded-circle img-thumbnail  d-block effetZoom">
    </div>
    <div class="col-xl-12 text-white text-center">
        <!--<h2><?php echo $nom . ' ' . $prenom ; ?></h2>-->
        <p class="apropo"><?php echo $apropos;  ?> </p>
        <a  class="btn ml-xl-5 mt-xl-5" href="img/CV_Luc2.0.pdf" target="_blank" download="">
                      Télécharger mon CV
                   </a>
    </div>
</div>
</div>

<?php include 'passeTemp.inc.php'; ?>



    
</body>