<?php
// connexion à la BDD :
$pdo = new PDO('mysql:host=localhost;dbname=exercice_3', 
               'root',
               '',
               array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                     PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8') 
);
// variable d'affichage
$contenu = '';

// requete sql pour selectionner les film en BDD

$resultat = $pdo->query("SELECT * FROM movies");
// $iformationsDuBdd = $resultat->fetch(PDO::FETCH_ASSOC);

// print_r($iformationsDuBdd);

$contenu .='<table border="2" class="table mt-4 alert alert-info ">';
        // Affichage de la ligne des entêtes dynamiquement avec des "AS" pour la modification des noms:
        $contenu .= '<tr>';
        $contenu .= '<th>';
        $contenu .= 'Title';
        $contenu .= '</th>';
        $contenu .= '<th>';
        $contenu .= 'Director';
        $contenu .= '</th>';
        $contenu .= '<th>';
        $contenu .= 'Year of product';
        $contenu .= '</th>';
        
          $contenu .= '<th>Actions</th>'; 
                 
        
        $contenu .= '</tr>';
       
      
    
                

while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)){
    $contenu .= '<tr>';

    // debug($ligne['photo']);
        //$ligne étant un array je peux faire une for foreach pour le parcourir
        foreach($ligne as $indice => $information){
            // debug($indice);
            if ($indice == 'title' || $indice == 'director' || $indice == 'year_of_prod' ){
                $contenu .= "<td> $information </td>";
                // debug($information);
            }
           
        }       
        $contenu .= '<td><a href="exo5_plusInfos.php&id_produit=' . $ligne['id_movies'] . '">Plus d\'infos</a> ';
                        
                        
        $contenu .= '<td></td>';
    $contenu .= '</tr>';
}
$contenu .='</table>';




?>

<!DOCTYPE html>
<html lang="f'r">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste de film</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    
    <div class="row">
    <?php  echo $contenu; ?>
    </div>
    
    </div>
</body>
</html>