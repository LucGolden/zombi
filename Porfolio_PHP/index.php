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
 <!--<link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico" rel="stylesheet">  -->
 <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Lobster|Pacifico" rel="stylesheet"> 
 
</head>
<body>
    

    
    <?php if(empty($_GET)) { ?>

        <div id="jqueryEffet">

        <div class="container-fluid" >
            
            <div class="row mt-5">
                <div class="col-7  offset-1  text-white mt-5 luc ">
                    <p class="offset-2">Je suis</p>
                    <h1 class="text-center rounded-circle" id="h1"><?php echo $prenom;  ?><a href="connexionAdmin.php"><i class="fab fa-medium petit"></i></i></a> <?php echo $nom;  ?></h1>
                    <p class="junior ml-5"><b>développeur intégrateur <span> junior</span></b></p>
                    <p class="offset-4" id="typeText">& c'est le <span> site</span> de mon <span>PORTFOLIO</span></p>
                </div>
            </div>
        </div>
        
        
        
        
        
        <!--               -->
        <!-- </section> -->
        <div class="row">
            <div class="col-2 offset-8 p-4 stylef bgcLien mt-5">
                
                
                <p><a class="btn btn-outline-warning btn-block" href="?lien=formations">Formations</a></p>
                <p><a class="btn btn-outline-danger btn-block"  href="?lien=competences">Compétences</a></p>
                <p><a class="btn btn-outline-info btn-block" href="?lien=realisations">Réalisations</a></p>
                <p><a class="btn btn-outline-primary btn-block mt-3" href="?lien=luc">A Propos</a></p>
                <p><a class="btn btn-outline-success btn-block" href="?lien=contact">Contacts</a></p>
                <!-- <p><a class="btn btn-outline-warning btn-block" href="#"></a></p> -->
                
            </div>
        </div>
    </div>
    
    
    
    
    
    <?php   } elseif(!empty($_GET) && $_GET['lien'] == 'realisations') {
        require_once 'inc/realisations.inc.php';
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
         <p class="text-center text-white "><span>Luc M. Joinvil développeur intégrateur junior</span></p>
        </footer>
    </div>
    </div>
    

   <script

              src="https://code.jquery.com/jquery-3.3.1.min.js"

              integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="

              crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    
    <script src="JS/portfolio.js"></script>
</body>
    </html>