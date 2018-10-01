<?php
// -------------------------|
// la superglobale $_COOKIE |
// -------------------------|

/* Un COOKIE est petit fichier (4 Ko max) déposé par le serveur du site sur le poste de l'internaute, et qui peut contenir des infos. Les COOKIE sont automatiquement renvoyés au serveur web par le navigateur lorsque l'internaute navigue ds la page concernées par les cookie. PHP permetde récupérer très facilement les données contenus ds un cookie : elles sont stockées ds la superglobal $_COOKIE .

Précaution à prendre avec les cookies : Le cookie etant sauvegardé sur le poste de l'internaute, il peut être volé ou détorné. On y mettre donc pas informations sensibles (mots de passe, carte bancaire, ......), mais des infos relative aux préférence ou aux traces de visite*/



echo '<pre>';
print_r($_GET);
echo '</pre>';

// 2- On détermine la langue à afficher ds la variable $langue
if(isset($_GET['langue'])){
    $langue = $_GET['langue'];//Si existe l'indice "langue", c'est qu'on a cliqué sur un lien. On affecte donc sa valeur à la variable $langue.
}elseif(isset($_COOKIE['langue'])){
    $langue = $_COOKIE['langue'];//$_COOKIE est une superglobale sont indice correspond au nom du cookie reçu. Si $_COOKIE['langue] existe, c'est qu'on a reçu un cookie de nom "langue". On affecte donc sa valeur à la variable $langue
}else{
    $langue = 'fr'; //par défaut si on n'a pas cliqué sur un lien et si le cookie langue existe pas on choisit "fr".
}

// 3- Création du COOKIE :
$un_an = 365 * 24 * 60 * 60 ; //exprime un an en seconde
setcookie('langue', $langue, time() + $un_an);//on envoie un cookie chez l'internaute avec un nom, une valeur, une date d'expiration exprimée en timestamp (maintenant + un an)

// il n'existe pas de fonction prédefinie pour suprimer un COOKIE. Ds ce cas, on le met à jour avec une date périmée ou à zéro, ou encore en mettant que le nom du cookie ds leq () de setcookie

// 4- Afficahge de la langue :
echo 'Le site est affiché en : ' . $langue . '<br>';

echo '<pre>';
print_r($langue);
echo '</pre>';

?>
<h1>Votre langue :</h1>
<ul>
    <li><a href="?langue=fr">Français</a></li>
    <li><a href="?langue=es">Espagnol</a></li>
    <li><a href="?langue=it">Italien</a></li>
    <li><a href="?langue=en">Anglais</a></li>
   
</ul>