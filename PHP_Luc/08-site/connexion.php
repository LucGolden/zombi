<?php   
require_once 'inc/init.inc.php';

//  2- déconnexion de l'internaute :
if (isset($_GET['action']) && $_GET['action'] == 'deconnexion'){ //si on reçoit en $_GET ds l'url l'indice "action" et la valeur "deconnexion", c'est que le membre veut se déconnecté

    unset($_SESSION['membre']); // on supprime les infos du membre ds la session
    
     $contenu .= '<div class="btn btn-block btn-info text-center text-white">Vous avez été déconnecté.</div>';
    
}


// 3- L'internaute connecté est redirigé vers son profil : il n'y a pas de raison qu'il puisse se reconnecter une segonde fois :
if (internauteEstConnecte()){
    header('location:profil.php');
    exit();
}



// 1- Traitement du formulaire de connexion :
    // debug($_POST);
    if ($_POST) {
        //contrôle sur le formulaire :
            if (empty($_POST['pseudo'])){// empty vérifie si c'est vide (0, NULL, '', false ou non défini )
                $contenu .= '<div class="bg-danger text-center text-white">Le pseudo est requis.</div>';
            }

               if (empty($_POST['mdp'])){// empty vérifie si c'est vide (0, NULL, '', false ou non défini )
                $contenu .= '<div class="bg-danger text-center text-white">Le mot de passe est requis.</div>';
            }

            if(empty($contenu)){ // si $contenu est vide c'est qu'il n'y a pas d'erreur sur le formulaire : on peut donc interroger la BDD

                $resultat = executeRequete("SELECT * FROM membre WHERE pseudo = :pseudo AND mdp = :mdp", array(':pseudo' => $_POST['pseudo'], ':mdp' => $_POST['mdp']));
                
               if( $resultat->rowCount() > 0){ // si il y a 1 (ou plusieur) lignes ds "$resultat", le pseudo et le mdp existent pour le même membre
                    $membre = $resultat->fetch(PDO::FETCH_ASSOC); // pas de boucle while car il n'y a qu'une seule ligne de resultat ds la requête (les pseudos sont uniques)

                    $_SESSION['membre'] = $membre; //nous créons une session appelée membre qui contient les informations provenant de la BDD

                    header('location:profil.php'); // on redirige (redirection) l'internaute située à l'url profil.php
                    exit();// et on quitte le script

               }else{
                //    sinon il n'y a pas de correspondance entre le login et le mdp pour le même membre :
                $contenu .= '<div class="bg-danger text-center text-white">Erreur sur les identifiants.</div>';
               }

            }




    }//FIN DU if ($_POST)










// -_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-AFFICHAGE-_-_-_-_-_-_-_-_-__-_-_-_-_-_-_-_-_-_-_
require_once 'inc/haut.inc.php';
?>
<h1 class="mt-4">Connexion</h1>
<p>Veuillez indiquer vos identifiants pour vous connecter.</p>

<?php echo $contenu; ?>

<form action="" method="post">

        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo"><br><br>

        <label for="mdp">Mot de passe</label><br>
    <input type="password" id="mdp" name="mdp" value="<?php echo $_POST['mdp'] ?? '';  ?>"><br><br>

    <input type="submit" value="Se connecter" class="btn btn-success">

</form>





<?php
require_once 'inc/bas.inc.php';