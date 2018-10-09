<?php   
require_once 'inc/init.inc.php';
// -----------------TRAITEMENT------------------------
#variables d'affichage ;
$panier = '';
$suggestion = '';

# 1- contrôle de l'existence du produit demandé :
if (isset($_GET['id_produit'])){ # si un produit à été selectionné :
    $resultat = executeRequete("SELECT * FROM produit WHERE id_produit = :id_produit", array(':id_produit' => $_GET['id_produit']));

    if ($resultat->rowCount() == 0){
        // s'il n'y a pas de lignes ds $resultat, c'est que le produit n'existe pas
        header('location:boutique.php');
    }
    
    # 2- affichage des infos du produit :
        $produit = $resultat->fetch(PDO::FETCH_ASSOC); # on ne fait pas de boucle car ici on est certain de n'avoir qu'un seul produit par id_produit

            extract($produit); // crée autanty de varible qu'il y a d'indice ds l'array $produit. Celle-ci on pour nom le nom de l'indice et pour valeur la valeur associée à cet indice

            # 3- affichage du formulaire d'afout au panier si stock est positif :
                if ($stock > 0){ # si le stock existe, on ajoute le bouton panier
                    $panier .= '<form method="post" action="panier.php">';

                        $panier .= '<input type="hidden" name="id_produit" value="'. $id_produit .'">'; #pour donner l'id du produit selectionné au panier

                        # Sélecteur de quantité dfe produit :
                        $panier .= '<select name="quantite" class="custom-select col-sm-2">';
                        for($i=1; $i<= $stock && $i <= 5; $i++) {
                            $panier .= '<option>' . $i . '</option>';
                        }

                        $panier .= '</select>';

                        $panier .= '<input type="submit" name="ajout_panier" value="Ajouter au panier" class="btn btn-info col-sm-6 ml-5">';

                    $panier .= '</form>';
                    $panier .= '<p class="text-success"> Nombre de produit(s) disponible(s) : '. $stock .' </p>';

                }else{ # si le stock est nul on met le message suivant :
                    $panier .= '<h5 class="text-danger"> produit en rupture de stock ! </h5>';

                }


}else{
    # sinon l'indice id_produit n'existe pas ds l'url, ce qui signifie que l'on a accédé à la page directement sans choisir de produit on redirige donc vers la boutique
    header('location:boutique.php');
    exit();

}
// ------------
# Exercice : 
// créer des suggestion de produits : afficher 2 produits (photo et titre) aleatoirement appartenant à la même categorie que le produit affiché, et != du produit affiché. Vous utilisez la variable $suggestion pour afficher le contenu. La photo est cliquable et mène à la fiche du produit.

$sugges_produit = executeRequete("SELECT  * FROM produit WHERE categorie = '$categorie' AND id_produit != '$id_produit' ORDER BY RAND() LIMIT 2");


while ($produit_sugg = $sugges_produit->fetch(PDO::FETCH_ASSOC)) {
    // debug($suggestion);
   
    
      $suggestion .= '<div class="col-sm-2 mb-2">';
        $suggestion .= '<div class="card">';

            // image cliquable :
            $suggestion .= '<a href="fiche_produit.php?id_produit='.$produit_sugg['id_produit']  .'"> <img src="'. $produit_sugg['photo']  .'"  alt="'. $produit_sugg['titre']  .'" class="card-img-top"> </a>';

            // info du produit :
                $suggestion .= '<div class="card-body">';
                    $suggestion .= '<h4> '.ucfirst($produit_sugg['titre'] )  .' </h4>';
                    $suggestion .= '<h5> '. number_format($produit_sugg['prix'] , 2, ',', ' ')  .' €</h5>'; 
                  
                $suggestion .= '</div>';
        $suggestion .= '</div>';
    $suggestion .= '</div>';

}







// -----------------AFFICHAGE------------------------
require_once 'inc/haut.inc.php';
?>
<div class="row">
    <div class="col-12">
    <h1><?php echo $titre; ?></h1>
    </div>
     <div class="col-md-8">
     <img src=" <?php echo $photo; ?>" alt="<?php echo $titre; ?>" class="img-fluid">
     </div>
      <div class="col-md-4"> 
        <h3>Description</h3>
        <p><?php echo $description; ?></p>
            <h3>Détails</h3>
            <ul>
                <li><?php echo $categorie; ?></li>
                <li><?php echo $couleur; ?></li>
                <li><?php echo $taille; ?></li>
              
            </ul>
            <h4>Prix : <?php echo number_format($prix, 2, ',', ' '); ?> €</h4>

            <?php  echo $panier; ?>
            <p><a href="boutique.php?categorie=<?php echo $categorie; ?>">Retour vers la catégorie ' <?php echo $categorie; ?> '</a></p>

      </div>
</div> <!--<div class="row"> -->
<!-- Execice : suggestion de produits -->
<hr>
<div class="row">
<div class="col-12">
<h3>Suggestion de produits</h3>
</div>

<?php echo $suggestion;  ?>

</div>
<?php
require_once 'inc/bas.inc.php';