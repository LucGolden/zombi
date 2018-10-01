<?php   
// -_-_-_-_-_-_-_-_-_-_-_-_-_|
// La superglobale $_Session |
//-_-_-_-_-_-_-_-_-_-_-_-_-_-|
/* Un fichier temporaire appelé session est créé sur le serveur avec un identifiant unique. Cette session est liée à un suel internaute car, ds le même temps, un cookie est déposé sur ,son poste avec l'identifiant à l'intérieur (au nom PHPSESSID). Ce cookie se détruit losrqu'on quitte le navigateur.

Le fichier de sesion peut contenir toutes sorte d'infos, y compris sensbles, car il n'est pas accesible ni modifiable pazr l'internaute. On peut dc y mettre des logins/mdp, paniers d'achat avant paiment, ....

Si l'internaute tente de modifier ce cookie, le lien avec la session est rompu automatiquement, et dc l'internaute est deconecté.

Les données du fichier seswsion sont acccesibles et manipulables à partir de la superglobale $_SESSION.
*/

// Ouverture ou création d'une session  :
session_start(); // Permet de créer une session si elle n'existe pas ou de l'ouvrir si elle existe déjà (on a reçu un cookie avec l'ID de session à l'intérieur)


// Remplissage de la session :
 $_SESSION['pseudo'] = 'Tintin';
 $_SESSION['mdp'] = 'milou'; // $_SESSION étant un array, on utilise la syntaxe avec []

 echo '<br> 1-La session après remplissage : ';

 echo '<pre>';
print_r($_SESSION);
echo '</pre>';

// Pour visualiser le fichier de session : XAMPP > tmp

// Vider une partie de la session :
unset($_SESSION['mdp']);  //Suprime l'indice mdp et la valeur correspondante

echo '<br> 2- la session après supression du mdp : ';
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

// Supprimer entièrement une session :
// session_destroy(); //on demande lma suppression de la session mais il faut savoir que le session_destroy est d'abord lu, puis exécuter seulement à la fin du script
echo '<br>3- La session après session_destroy : '; 
echo '<pre>';
print_r($_SESSION);//on voit encire notre session, car la fin du script se situe après cette ligne, si on regarde ds le dossier tmp, la session est bien supprimée
echo '</pre>';