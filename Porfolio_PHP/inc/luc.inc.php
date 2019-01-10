
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



<nav class="navbar mt-3 effet fixed-top mb-5">
  <a class="btn navbar-brand ml-5  border-primary rounded-circle" href="index.php"><i class="fas fa-home home"></i></a>
  <a class="btn border-warning mr-5" href="?lien=formations">Formations</a>
  <a class="btn border-danger mr-5" href="?lien=competences">Compétences</a>
  <a class="btn border-info mr-5" href="?lien=realisations">Réalisations</a>
  <a class="btn border-primary bg-primary mr-5" href="?lien=luc">A Propos</a>
  <a class="btn border-success mr-5" href="?lien=contact">Contacts</a>
</nav>
<div class="col-12 mt-5"></div>
<div class="col-12 mt-5"></div>
<div class="container stylef effetA p-3 mt-5 apropos">
<div class="row mt-5 ">
    <div class="col-6 img">
        <img src="<?php  echo $photo;  ?>" alt="lion"  class="rounded-circle img-thumbnail">
    </div>
    <div class="col-6 text-white">
        <h3><?php echo $nom . ' ' . $prenom ; ?></h3>
        <p><?php echo $apropos;  ?> </p>
        <a  class="btn ml-5 mt-5" href="img/CV_Luc2.0.pdf" target="_blank" download="">
                      Télécharger mon CV
                   </a>
    </div>
</div>
</div>

<?php include 'passeTemp.inc.php'; ?>



    
</body>