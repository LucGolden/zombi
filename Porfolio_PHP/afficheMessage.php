<?php    
        require_once 'connexion.php';

        $affichage = '';
        $affichage2 = '';

      
        $requete = $pdo->query('SELECT * FROM contacts');
        $affichage .= '<h3 class="alert alert-dark mt-1">Nombre de Message : ' . $requete->rowCount() . '</h3>' ;


        $requete2 = $pdo->query('SELECT * FROM contacts  ORDER BY id_contact DESC LIMIT 6 ');

while ($info_contact = $requete2->fetch(PDO::FETCH_ASSOC)){
    // echo '<pre class="text-white">';
    // var_dump($info_contact);
    // echo '</pre>';
    
    extract($info_contact);
    
    
    
$affichage2 .= '<div class="card  m-1 " style="width: 20rem;">';
 $affichage2 .= ' <div class="card-body">';
   $affichage2 .= '<h3 class="card-title">'  . $nom . ' ' . $prenom . '<br></h3>' ;

   $affichage2 .= '<h4 class="card-subtitle mb-2 "> Email : ' . $email .  '</h4>';

   $affichage2 .= '<p class="card-text"> Message : <br>'. $message . '</p>';
   $affichage2 .= '<p class="card-text"> Reçu le : '. $date . '</p>';
  $affichage2 .= '</div>';
$affichage2 .= '</div>';


}





?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message</title>

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
<nav class="navbar mt-3 effet">
  <a class="btn navbar-brand ml-5  border-danger rounded-circle" href="index.php"><i class="fas fa-home home"></i></a>
  <a class="btn border-success bg-success mr-5" href="admin.php"><i class="fas fa-arrow-circle-left"></i>Retour</a>

 
</nav>
<div class="container text-center">

<div><?php echo $affichage;  ?></div>

<div class="row m-5">
    
        <?php echo $affichage2; ?>
    
</div>
    </div>
</body>
</html>