<?php
// -_-_-_-_-_-_-_-_-_-_--_--_-_-
// Cas pratique : un formulaire pour poster des commentaires
// -_-_-_-__-_-__-_----__-_-_-_-_-
// Objectif : sécuriser le formulaire.

/* Modélisation de la BDD :
    BDD    : dialogue
    Table  : commentaire
    Champs : id_commentaire      INT(3) PK AI 
             pseudo              VARCHAR(20)
             message             TEXT
             date_enregistrement DATETIME 
             */

// II. Connextion à la BDD et traitement de $_POST :
$pdo = new PDO('mysql:host=localhost;dbname=dialogue', 
               'root',
               '',
               array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                     PDO::MYSQL_ATTR_INIT_$COMMAND => 'set NAMES utf8') 
);

print_r($_POST);

if (!empty($_POST)){

    // Traitement contre les failles JavaScript ou CSS : on parle d'échapper les données ou d'échappement : 
    $_POST['pseudo'] = htmlspecialchars($_POST['pseudo'], ENT_QUOTES); #......
    $_POST['message'] = htmlspecialchars($_POST['message'], ENT_QUOTES); // convertir les caractères spéciaux (<, >, &, '', "") en entités HTML inoffensives (par exemple > devient &gt;). Ainsi les balises <style> ou <script> saisie ds le formulaire deviennent inopérantes.



            // Nous commençons par faire une requête d'insertion qui n'est pas protégée contre les injections et qui n'accepte pas les apostrophes :
    // $resultat = $pdo->query("INSERT INTO commentaire (pseudo, date_enregistrement, message)  VALUES ('$_POST[pseudo]', NOW(), '$_POST[message]' )");        //exemple typique de ce qu'il ne faut pas faire : mettre des entrées utilisateur (ici $_POST) directement ds la requête

    // Nous faisons l'injection SQL suivante : ok');DELETE FROM commentaire;(
        // Elle a pour effet de vider la table commentaire.

        // Pour se préminir des injections SQL, nous faisons la requête préparée suivante :
        $resultat = $pdo->prepare("INSERT INTO commentaire (pseudo, date_enregistrement, message) VALUES (:pseudo, NOW(), :message) ");

        $resultat -> bindParam(':pseudo', $_POST['pseudo']);
        $resultat -> bindParam(':message', $_POST['message']);

        $resultat->execute();

        // Comment ça marche ? le fait de mettre de marqueur ds la requête permet de ne pas concatener les injections SQL les redant directement exécutables. En faisant un bindparam(), les intructions SQL sont automatiquement neutralisées par PDO qui les transforme en string bruts inoffensifs. Ainsi le SGBD attend des valeurs à la place des marqueurs dont il sait qu'elle ne sont du code à exécuter.


}//FIN DU if (!empty($_POST))





// I. Formulaire de saisie des commentaires :
?>
<h1>Votre commentaire</h1>

<form method="post" action="">
    <label for="pseudo">Pseudo</label><br>
    <input type="text" id="pseudo" name="pseudo" value="<?php echo $_POST['pseudo'] ?? ''; ?>"><br>

    <label for="message">Commentaire</label><br>
    <textarea  id="message" name="message" cols="30" rows="10"><?php echo $_POST['message'] ?? ''; ?></textarea><br>
    
    <input type="submit"  name="envoi" value="envoyer"><br>

</form>

<?php

// III. Affichage des commentaires :
$resultat = $pdo->query("SELECT pseudo, message, DATE_FORMAT(date_enregistrement, '%d-%m-%Y') AS datefr,  DATE_fORMAT(date_enregistrement, '%H:%i:%s') AS heurefr FROM commentaire ORDER BY date_enregistrement DESC ");

echo $resultat->rowCount() . ' commentaire postés <br>';

while ($commentaire = $resultat->fetch(PDO::FETCH_ASSOC)){
    echo '<div> Par : ' . $commentaire['pseudo'] . ' le ' . $commentaire['datefr'] . ' à ' . $commentaire['heurefr'] . '</div>';

    echo '<div>' . $commentaire['message'] . '</div><hr>';
}





