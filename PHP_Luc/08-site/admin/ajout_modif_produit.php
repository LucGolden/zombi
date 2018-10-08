<?php 
require_once '../inc/init.inc.php';

/* -------------------------TRAITEMENT---------------------- */

# 1- On verifie que le membre est administrateur :
   if(!internauteEstConnecteEtAdmin()){
       header('location:../connexion.php'); //je remonte ds le fichier parent pour acceder au fichier connexion.php
       exit(); //pour quitter le script
   }

   /* ---- 4- Traitement du formulaire : enregistrement du produit */
//    debug($_POST);
   if ($_POST) { // si le formulaire est posté

    // ICI il faudrait mettre tous les controles sur le formulaire...

    $photo_bdd = ''; //pour pouvoir insérer catte valeur par défaut en BDD

    //... 5- suite de la PHOTO :
    debug($_FILES);
    if(!empty($_FILES['photo']['name'])){ // si il existe l'indice name à l'interieur de l'indice photo, c'est que je suis en train de d'uploader un fichier

        $nom_photo = 'ref' . $_POST['reference'] . '_' . $_FILES['photo']['name']; // on concatène la référence du produit avec le nom du fichier pour obtenir un nom de fichier unique (et ne pas écraser une photo existant)
        $photo_bdd = 'photo/' . $nom_photo;  //cette varible est le chemin relatif de la photo enresgidtré en BDD et utilisé par les balise <img> du site

        copy($_FILES['photo']['tmp_name'], '../' . $photo_bdd); // copie le fichier temporaire qui se trouve à l'adresse $_FILES['photo']['tmp_name'] ds le repertoire dont le chemin est "../photo/nomdelaphoto.jpg 
    }


    //  4- suite : enregistrement du produi :
    executeRequete("REPLACE INTO produit VALUES (:id_produit, :reference, :categorie, :titre, :description, :couleur, :taille, :public, :photo, :prix, :stock)", array(':id_produit' => $_POST['id_produit'],
                            ':reference' => $_POST['reference'],
                            ':categorie' => $_POST['categorie'],
                            ':titre' => $_POST['titre'],
                            ':description' => $_POST['description'],
                            ':couleur' => $_POST['couleur'],
                            ':taille' => $_POST['taille'],
                            ':public' => $_POST['public'],
                            ':photo' => $photo_bdd,
                            ':prix' => $_POST['prix'],
                            ':stock' => $_POST['stock']
                            ));
# REPLACE INTO se comporte comme un INSERT INTO quand l'id_produit fourni n'existe pas en BDD (=création d'un proiduit). Il se comporte en comme un UPDATE quand l'id_produit fournie existe en BDD (=modification de produit).

$contenu .= '<div class="alert alert-info text-center "> Le produit a bien été enregistré.</div>';

   }//Fin du if ($_POST)




/* -------------------------AFFICHAGE---------------------- */
require_once '../inc/haut.inc.php';
?>

<h1 class="mt-4">Gestion Boutique</h1>
<ul class="nav nav-tabs">
    <li><a href="gestion_boutique.php" class="nav-link ">Affichage des produits</a></li>
    <li><a href="ajout_modif_produit.php" class="nav-link active">ajout d'un produit</a></li>
</ul>


<?php
echo $contenu; //Pour affiche la table des produits
?>
<!-- 3- FORMULAIRE D'AJOUT D4UN PRODUIT -->

<form action="" method="post" enctype="multipart/form-data"> <!-- enctype="multipart/form-data" spécifie que le formulaiire envoie des données binaires (correspondants au fichier uploader) et des données textes (correspondants aux autres champs). il est obligatoire pour pouvoir uploader des fichiers.  -->

    <input type="hidden" name="id_produit" value="0"><!-- champ utile pour la modification d'un produits existant, car on a besoin de le connaitre pour la requête SQL REPLACE INTO qui se comporte comme un UpDATE en presence d'un id existant. La value à 0 permet de spècifier que l'id n'existe pas, dc que  -->

    <label for="reference">Référence</label><br>
    <input type="text" id="reference" name="reference" value=""><br><br>

    <label for="categorie">Catégorie</label><br>
    <input type="text" id="categorie" name="categorie" value=""><br><br>


    <label for="titre">Titre</label><br>
    <input type="text" id="titre" name="titre" value=""><br><br>

     <label for="description">Description</label><br>
    <textarea type="text" id="description" name="description" ></textarea><br><br>

     <label for="couleur">Couleur</label><br>
    <input type="text" id="couleur" name="couleur" value=""><br><br>

    <label>Taille</label><br>
    <select name="taille" id="taille">
    <option value="S">S</option>
    <option value="M">M</option>
    <option value="L">L</option>
    <option value="XL">XL</option>
    </select><br><br>

    <label for="public">Public</label><br>
    <input type="radio" name="public" value="m" checked>Homme <br>
    <input type="radio" name="public" value="f">Femme
    <br><br>

    <label for="photo">Photo</label><br>
    <!-- 5-PHOTO -->
    <input type="file" id="photo" name="photo"> <!-- ne pas oublier l'attribut enctype de la balise form pour pouvoir uploader des fichiers -->
    <br><br>

    <label for="prix">Prix</label>
    <input type="text" id="prix" name="prix" value="0">
    <br><br>

    <label for="stock">Stock</label>
    <input type="text" id="stock" name="stock" value="0">
    <br><br>

    <input type="submit" value="enregistrer" class="btn btn-info"><br>

</form>


<?php
// debug($_POST);
require_once '../inc/bas.inc.php';

