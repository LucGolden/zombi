<?php 
require_once '../inc/init.inc.php';

/* -------------------------TRAITEMENT---------------------- */

# 1- On verifie que le membre est administrateur :
   if(!internauteEstConnecteEtAdmin()){
       header('location:../connexion.php'); //je remonte ds le fichier parent pour acceder au fichier connexion.php
       exit(); //pour quitter le script
   }



//    7-Suppression d'un produit :
// debug($_GET);
if (isset($_GET['action']) && $_GET['action'] == 'suppression' && isset($_GET['id_produit'])){ //si exxiste l'indice "action" ds $_GET et que sa valeur est "seppression" et que existe aussi l'indice "id_produit", alors je peux traiter la suppression demandé

    $resultat = executeRequete("DELETE FROM produit WHERE id_produit = :id_produit", array(':id_produit' => $_GET['id_produit']));

    if ($resultat->rowCount() == 1){ // si le DELETE retourne 1 ligne, c'est que l'id_produit existait et qu'il a pu être supprimé :
        $contenu .= '<div class="alert alert-success mt-1">Le produit N° ' . $_GET['id_produit']. ' a bien été supprimé.</div>' ;

    }else{
        $contenu .= '<div class="alert alert-danger mt-1">erreur lors de la suppression du produit n° ' . $_GET['id_produit']. '.</div>' ;

    }

}

//    6- Affichage des produits ds une table HTML :
// Exercice : afficher tout les produits sous forme de tables html. cette table est stockée ds la variable $contenu. Tous les champs doivent etre affichés. Pour la photo, vous affichez l'image (90px de largeur).


$resultat = $pdo->query("SELECT id_produit , reference AS 'Reférence', categorie AS 'Catégorie', titre AS 'Titre', description AS 'Description', couleur AS 'Couleur', taille AS 'Taille', public AS 'Public', photo AS 'Photo', prix AS 'Prix', stock AS 'Stock' FROM produit");

$contenu .= '<h3 class="alert alert-info mt-1">Nombre de produit dans la boutique : ' . $resultat->rowCount() . '</h3>' ;

$contenu .='<table border="2" class="table mt-4 alert alert-info ">';
        // Affichage de la ligne des entêtes dynamiquement avec des "AS" pour la modification des noms:
        $contenu .= '<tr>';
        for($i = 0; $i < $resultat->columnCount(); $i++){
           
            $colonne = $resultat->getColumnMeta($i);
            $contenu .= '<th>' . $colonne['name'] . '</th>'; //l'indice "name" contient le nom du champs à chaque tour de boucle
        }
    
                $contenu .= '<th>Actions</th>'; //on ajoute cette colonne en plus des autres afichées dynamiquement
        $contenu .= '</tr>';

while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)){
    $contenu .= '<tr>';

    // debug($ligne['photo']);
        //$ligne étant un array je peux faire une for foreach pour le parcourir
        foreach($ligne as $indice => $information){
            // debug($indice);
            if ($indice == 'Photo' ){
                $contenu .= ' <td><img style="width: 90px" src=" ../'. $information .' " alt="'. $ligne['Titre'] .'"> </td>';
            }else{
                $contenu .= "<td> $information </td>";
                // debug($information);
            }

        }       
        $contenu .= '<td><a href="ajout_modif_produit.php?action=modification&id_produit=' . $ligne['id_produit'] . '">Modifier</a> 
                         <br> 
                        <a href="?action=suppression&id_produit=' . $ligne['id_produit'] . '"onclick="return(confirm(\' Etes vous certain de vouloir supprimmer ce produit ? \'))">Supprimer</a></td>';
        $contenu .= '<td></td>';
    $contenu .= '</tr>';
}
$contenu .='</table>';

/* -------------------------AFFICHAGE---------------------- */
require_once '../inc/haut.inc.php';
?>

<h1 class="mt-4">Gestion Boutique</h1>
<ul class="nav nav-tabs">
    <li><a href="gestion_boutique.php" class="nav-link active alert-info">Affichage des produits</a></li>
    <li><a href="ajout_modif_produit.php" class="nav-link">ajout d'un produit</a></li>
</ul>




<?php
echo $contenu; //Pour affiche la table des produits







require_once '../inc/bas.inc.php';
