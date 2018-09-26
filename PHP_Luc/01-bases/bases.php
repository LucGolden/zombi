<style>
h2 { color: orange;}
</style>

<?php

// ---------------------
echo '<h2> Les balises PHP</h2>';
// ---------------------

?>

<?php
// pour ouvrir un passage en PHP, on utilise la balise précédente
// pour fermer un passage en PHP, on utilise la balise suivante :
?>

<p>Bonjour</p> <!-- en dehors des balises d'ouverture et de fermeture du PHP, nous pouvons écrire du HTML qund on est dans un fichier ayant l'extension .php -->

<?php 
// Vous n'êtes pas obligé de fermer un passage en PHP en fin de script

// ---------------------
echo '<h2> Affichage </h2>';
// ---------------------

echo 'Bonjour <br>'; // echo est une instruction qui permet d'afficher ds le navigateur. Toutes les instructions se termine par un ';' . ds un echo, nous pouvons mettre aussi du HTML.

print 'Nous somme mardi <br>'; // print est une autre instruction d'affichage . pas (ou peu ) de différence avec echo

// Autres instructions d'affichage que nous verrons plus loin : 
// print_r();
// vat_dump();

// pour faire un commentaire sur une seule ligne

/*
commentaire sur plusieurs lignes
*/ 

# autre syntaxe de commentaire

// ---------------------
echo '<h2> Variable : déclaration / affectation / types </h2>';
// ---------------------
// Définition : une variable est un espace mémoire qui porte un nom et permettant de conserver une valeur. 
// en PHP on déclare une variable avec le signe $.

$a = 127; //affectation de la valauer 127 à la variable $a
echo gettype($a); // gettype est une fonction prédéfinie qui indique le type d'une variable. Ici il s'agit d'un integer (entier)

echo '<br>';

$a = 'une chaine de caractères';
echo gettype($a); // affiche string

echo '<br>';

$b = '127';
echo gettype($b); // affiche string car un nbre ecrit entre quotes est interprété comme un string

echo '<br>';

$a = true; // ou false
echo gettype($a); // affiche boolean

// par convention, un nom de variable commence par une lettre minuscule. il peut contenir des chiffres (jamais au debut), ou des "_" (jamais au debut ni à la fin car significationparticulière en objet).

// ---------------------
echo '<h2> Concaténation</h2>';
// ---------------------

$x = 'Bonjour ';
$y = 'tout le monde';

echo $x . $y . '<br>'; // le point de concaténation peut être traduit par 'suivit de'

// Remarque sur echo : 
echo $x, $y, '<br>'; # ds l'instruction 'echo' on peut séparer les éléments à afficher avec une virgule. Cette syntaxe est spécifique au echo pas avec print.

// ------
//Concaténation lors de l'affectation : 

$prenom1 = 'Bruno';
$prenom1 = 'Claire';
echo $prenom1 . '<br>'; //affiche Claire

$prenom2 = 'Nicolas';
$prenom2 .= ' Marie';
echo $prenom2 . '<br>'; // affiche Nicolas "Marie grâce" à l'opération combiné ".= ", la valeur "Marie" vient se concaténer à la valeur "Nicolas" sans le remplacer.

// ---------------------
echo '<h2> Guillemets et Quotes </h2>';
// ---------------------

$message = "aujourd'hui"; // ou bien :
$message = 'aujourd\'hui'; // on échappe les apostrophes dans les quotes simples avec \ ( altGr + 8)

$txt = 'Bonjour';
echo "$txt tout le monde <br>"; // Ds les guillemets, la variables est évaluée : c'est sont contenu qui est affiché, ici "Bonjour"
echo '$txt tout le monde <br> ';// ds des quotes simples, la variable n'est pas évaluée, elle est traitee comme du texte brute. Affiche '$txt'

// ---------------------
echo '<h2> Constante et constante magique </h2>';
// ---------------------
// Une constante permet de conserver une valeur sauf que celle-ci ne peut pas être modifiée durant l'exécution du ou des scripts. Utile pour conserver les paramètres de connextion à la BDD sans pouvoir les modifier une fois définis.

define('CAPITALE','Paris'); // on déclare une constante avec la fonction prédéfinie "define()" qui s'appelle CAPITALE et prend pour valeur "Paris".Par convention les constante sont tjrs écrites en majuscules.
echo CAPITALE . '<br>'; # affiche Paris

# Deux constantes magiques
echo __DIR__ . '<br>'; //affiche le chemin complet vers le dossier de notre fichier
echo __FILE__ . '<br>'; // affiche le chemin complet vers le fichier (dossier + nom du fichier)

// ---------------------
echo '<h2> Exercice </h2>';
// ---------------------
//Vous affichez Bleu-Blanc-Rouge (avec les tirets) en mettant le texte de chaque couleur dans des variables.

$bleu = 'Bleu';
$blanc = 'Blanc';
$rouge = 'Rouge';
echo $bleu . '-' . $blanc . '-' .$rouge;
$tiret = '-';
echo '<br>';
echo $bleu . $tiret . $blanc . $tiret .$rouge . '<br>';
echo "$bleu-$blanc-$rouge <br>";


// ---------------------
echo '<h2> Opérateurs arithmétiques </h2>';
// ---------------------

$a = 10;
$b =2;

echo $a + $b . '<br>'; // affiche 12
echo $a - $b . '<br>'; // affiche 8
echo $a * $b . '<br>'; // affiche 20
echo $a / $b . '<br>'; // affiche 5
echo $a % $b . '<br>'; // affiche 0. modulo = reste de la division entières. Exemple 3%2 = si on a 3 billes répartie entre 2 personnes, il nous reste 1 ds la main

// ----------------
// Opération et affectation combinées : 
$a = 10;
$b =2;

$a += $b; // équivaut à $a = $a + $b, $a vaut donc au final 12
$a -= $b; // équivaut à $a = $a - $b, $a vaut donc au final 10
$a *= $b; // équivaut à $a = $a * $b, $a vaut donc au final 20
$a /= $b; // équivaut à $a = $a / $b, $a vaut donc au final 10
$a %= $b; // équivaut à $a = $a % $b, $a vaut donc au final 0.

// Exemple d'utilisation pratique pour faire des calculs de quantités ds les paniers d'achat ( += et -=)

//---------
// Incrémenter et décrémenter :
$i = 0;
$i++;  // on ajoute 1 à $i qui vaut au final 1
$i--; // on retire 1 à $i qui vaut au final 0

$i = 0;
$k = ++$i; // La variable $i est incrémentée de 1, puis elle est retournée : on affecte donc 1 à $k
echo '$i vaut ' . $i . '<br>'; // 1
echo '$k vaut ' . $k . '<br>'; // 1

$i = 0;
$k = $i++; // La varible $i est d'abord retournée puis elle est incrémentée de 1
echo '$i vaut ' . $i . '<br>'; // 1
echo '$k vaut ' . $k . '<br>'; // 0


// ---------------------
echo '<h2> Structures conditionnelles - opérateurs de comparaison </h2>';
// ---------------------

$a = 10;
$b = 5;
$c = 2;

// if ...... else :
    if ($a > $b) {// si la condition est évaluée à true, on exécute les accolades qui suivent :
        echo '$a est superieur à $b <br>';
    }else{// sinon... si la condition est évaluée à false, on exécute else :
        echo 'Non, c\'est $b qui est supérieur à $a <br>';
    }

    //----------------
    //L'opérateur AND (Et) écrit && :
    if ($a > $b && $b > $c) {// si $a est supérieur à $b et que $b est supérieur à $c, alors on rentre ds les accolades:
        echo 'Ok pour les 2 conditions <br>';
    }

    // -------
    // L'opérateur OR(ou) écrit || :
    if($a == 9 || $b > $c){// Si un des deux conditions sont TRUE on rentre ds les accolades :
        echo 'Ok pour une des 2 conditions <br>';
    }

    // if ...... elseif ... else 
    $a = 10;
    $b = 5;
    $c = 2;
    if($a == 8){
        echo '$a est égal à 8 <br>';
    } elseif ($a != 10){
        echo '$a est différent de 10 <br>';
    }else{
        echo 'Les 2 conditions précédentes sont fausses <br>';
    }

    // Notes : on ne fait jamais suivre un else par une condition (sinon use un elseif). on ne met pas de ";" à la fin d'une condition car il s'agit d'une structure. 


    // -----------
    // L'opérateur XOR :
    $question1 = 'mineur';
    $question2 = 'je vote'; //

    if ($question1 == 'mineur' XOR  $question2 == 'je vote'){//XOR ou OU exclusif : seuleement une des deux conditions doit être vraie (soit l'une ou soit l'autre). Si les 2 sont vraie, alors l'expression complète est fausse : c'est le cas ici, on entre donc dans le else
        echo 'Vos reponses sont cohérentes <br>';
    }else{
        echo 'Vos reponses sont pas cohérentes <br>';
    }

    //----------
    // Forme contractée de la condition, dite ternaire :
    echo ($a == 10)? '$a est égal à 10 <br>' :  '$a est != de 10 <br>' ;// Ds la ternaire le  "?" remplace if, et le ":" remplace else. Ici, si $a égale à 10, je fais echo du 1er string, sinon du second.

    //ou encore : 
    $resultat =($a == 10)? '$a est égal à 10 <br>' :  '$a est != de 10 <br>' ;
    echo $resultat;

    // ---------
    // Comparaison en == et en ===
    $varA = 1; // integer
    $varB = '1'; // string

    if ($varA == $varB) echo '$varA est égale à $varB en valeur uniquement <br>';

    if($varA === $varB){
        echo '$varA est égale à $varB en valeur et en type <br>';
    }else{
        echo '$varA est != de $varB en valeur ou en type <br>';
    }

    /* 
    =   signe d'affectation
    ==  signe de comparaison en valeur
    === signe de comparaison en valeur et en type
    */

    // ---------------
    // isset() et emty() :
    // déf : 
    // isset() teste si c'est défini (si existe) et a une valeur non NULL
    // empty() tyeste si c'est vide, c'est-à-dire 0, string vide '', NULL, false ou encore non defini

    $var1 = 0;
    $var2 = '';

    if (empty($var1)) echo '0, vide, NULL, false ou non defini <br>'; // Ici la condition est vraie car $var1 est vide au sens de empty 
    if (isset($var2)) echo 'existe et non NULL <br>'; // la condition est vraie car $var2 existe et non NULL

    // si on déclare pas les variable $var1 et $var2 ligne 259 et 260, la condition avec empty reste vraie (car non definie), mais la condition avec isset devient fausse (car variable ne se serait pas definie)

    // exemples d'utilisation : empty pour vérifier qu'un champ de formulaire est vide. isset qu'une variable existe bien avant de l'utiliser.

    //------------
    // L'opérateur NOT écrit "!" :
    $var3 = 'une chaine de caractères';

    if (!empty($var3))echo '$var3 n\'est pas vide <br>'; // ! pour NOT il s'agit d'une négation qui transforme false en true et inversement (!false vaut true et !true vaut false). Littéralement on teste ici si $var3 n'est pas vide.

    //---------
    // phpinfo(); //pour vérifier la version de PHP sur notre serveur local

    // PHP7 : entrer une valeur dans une variable si elle existe : 
    $var1 = $variableInconnue ?? $varAutre ?? ' valeur par défaut';// l'opérateur "??" indique qu'il faut prendre la première variable ou valeur qui existe donc ici 'valeur par défaut'
    echo $var1;

    // utilisation : pour pré-remplire les values des formulaires quand l'internaute aura saisie et envoyé des valeurs. 
    


// ---------------------
echo '<h2> Conditions switch </h2>';
// ---------------------
//La condition switch est une autre syntaxe du if | elseif | else quand on veut comparer une multitude de valeurs.
$couleur = 'jaune';

switch ($couleur) {
    case 'bleu': // On compare $couleur à la valeur des 'case' et exécute le code qui suit les ":" si elle correspond
        echo 'Vous aimez le bleu <br>';
        break;
    case 'rouge':
        echo 'Vous aimez le rouge <br>';
        break;
    case 'vert':
        echo 'Vous aimez le vert <br>';
        break;
    
    default: // Cas par défaut si on entre pas ds les ceses précédents (équivalent du else)
        echo 'Vous n\'aimez aucune de ces couleurs <br>';
        break;
}




// ---------------------
echo '<h2>  Exercice2 </h2>';
// ---------------------
// Réécrire le switch précédent en conditions if ... classique. On doit obtenir le même resultat.
$couleur = 'jaune';
if ( $couleur == 'bleu'){
    echo 'Vous aimez le bleu <br>';
}elseif($couleur == 'rouge'){
echo 'Vous aimez le rouge <br>';
}elseif($couleur == 'vert'){
     echo 'Vous aimez le vert <br>';
}else{
    echo 'Vous n\'aimez aucune de ces couleurs <br>';
}


// ---------------------
echo '<h2>  Quelques fonction prédéfinies </h2>';
// ---------------------
//Une fonction preédéfinie permet de réaliser un traitement spécifique prédéterminédans le langage PHP.

//---
// strpos :
$email1 = 'prenom@site.fr';
echo strpos($email1, '@');// affiche la position 6 de @ en comptant à partir de 0

echo '<br>';

$email2 = 'Bonjour';
echo strpos($email2, '@');//cette ligne n'affiche rien pourtant la fonction retourne bien qqc : false
// var_dump(strpos($email2, '@'));//grâce au var_dump, on peut apercevoir ce que cette fonction si l'@ n'est pas troouvé. var_dump est une instruction améliorée que l'on i=utilise en phase de développement

//------
// strlen :
$phrase = 'mettez une phrase ici à cet endroit';
echo strlen($phrase);//retourne la taille d'une chaine (nbre d'octets de cette chaine, un caractére accentué valant 2 octets).

echo '<br>';

//------
// substr :
$texte = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci ex, error, repudiandae vero quidem assumenda, doloremque explicabo alias dolore voluptas sunt repellendus doloribus quod rerum! Repellat qui vitae ab sint.';

echo substr($texte, 0, 20) . '... <a href="">lire la suite</a>';// substr retourne une partie du string de la position 0 et sur 20 caractères

echo '<br>';

// -----
// trim :
$message = '     Hello world     ';

echo strlen($message). '<br>';//on compte la taille avec les espaces
echo strlen(trim($message)) . '<br>';// on compte la taille une fois les espaces supprimer avec "trim" au debut et à la fin du string

// ----
// die() et exit() :
//exit('un message');  //quitte le script après avoir affiché le msg
// die('un message 12');  //fait la même chose : die() est un alias de exit()


// ---------------------
echo '<h2>   fonctions utilisateur </h2>';
// ---------------------
// Des fonctions sont des morceaux de codes encapsulés ds des accolades et portant un nom,qu'on appelle au besoin pour executer le code qui s'y trouve.

// Déclaration d'une fonction :
function separation(){// déclaration d'une fonction sans paramètre
    echo '<hr>';
}

//Appel de la fonction :
separation(); //on appelle une fonction en ecrivant son nom suivi d'une paire de ()

// ----------
// Fonction avec paramètre et return :
function bonjour($qui){ //$qui apparaît ici pour la première fois : il permet de recevoir un argument. Il s'agit d'une variable de réception. Notez que l'on peut mettre plusieur paramètres ds les () séparés par une virgule.

    return 'Bonjour' . $qui . '<br>';//return renvoie le string qui le suit à l'endroit où est appelé la fonction
    echo 'cette ligne ne sera pas exécutée car après un return !';

}

echo bonjour(' Pierre');//si une fonction attend un argument, il faut lui envoyer.

// ---------------------
echo '<h2>  Exercice </h2>';
// ---------------------
function appliqueTva($nombre){
    return $nombre * 1.2;
}

// Ecrivez une fonction appliqueTva2 qui calcule un nombre miltiplié par un taux donnés lors de l'appel de la fonction.
function appliqueTva2($nombre, $taux = 1.2){// on peut initialiser par défaut un paramètre ds le cas où on ne reçoit de valeur en argument lors de l'ppal de la fonction. On a renommé notre fonction car on ne peut pas déclarer 2 fonctions qui portent le mêm nom.
    return $nombre * $taux;
}

echo appliqueTva2(10,2) . '<br>';

// ---------
// EXO
function meteo($saison){
    echo "Nous somme en $saison. <br>";
}

meteo('automne');
meteo('printemps');

// Au sein d'une niouvelle fonction exoMeteo, afficher l'article "au" ou "en" selon la saison (en été, en hiver, en automne, au printemps).

function exoMeteo($saison){
    if($saison == 'printemps' ){
        echo "Nous somme au $saison. <hr>";
    }else{
        echo "Nous somme en $saison. <br>";
    }
}

exoMeteo('été');
exoMeteo('hiver');
exoMeteo('automne');
exoMeteo('printemps');

function solusMeteo($saison){
    if($saison === 'printemps'){
        $article = 'au';
    }else{
        $article = 'en';
    }
    echo "nous sommes $article $saison <br>";
}
solusMeteo('printemps');


// ---------------------
echo '<h2>  Variables locales et variables globales </h2>';
// ---------------------

// De l''espace local à l'espace global :
function jourSemaine(){
    $jour = 'mardi';//variable local à la fonction.
    return $jour;//return permet de sortir une valeur de la fonction.
}

// echo $jour;//erreur car cette variable n'et connue qu'à l'interieur de la fonction.
echo jourSemaine();// on recupère ici la valeur "mardi" grâce au return qui se situe dans la fonction.

echo '<br>';
// De l'espace global à l'espace local :
$pays = 'France'; // variable global

function affichePays(){
    global $pays ; //le mot clé global permet de récupérer une variable globale au sein de l'espace local de la fonction
    echo $pays;//affiche France
}
affichePays();


// ---------------------
echo '<h2>  Structures itératives : les boucles </h2>';
// ---------------------
// les boucles sont destinées à répéter des lignes de codes de façons automatique.

// Boucle "while"
 $i = 0;// valeur de départ de la boucle 
while($i < 3){ // tant que $i est inférieur à 3 nous entrons ds la boucles
    echo "$i---"; //affiche 0---1---2---
    $i++;   //on oublie pas d'incrémenter à chaque tour de boucle our ne pas avoir une boucle infinie
}
// Note : pas de ";" à la fin des structures itératives

echo '<br>';


// ---------------------
echo '<h2>  Exercice </h2>';
// ---------------------
// à l'aide du boucle "while",affiche dans un selecteur les années de 1918 à 2018.
$debut = 1918;
$fin = 2018;
echo '<select>';
while($debut <= $fin){
    
    // echo "<option>$debut</option>";
    echo '<option>' . $debut . '</option>';

$debut++;
}
echo '</select>';
echo '<br>';

// correction :
$debut = date('Y') - 100;

echo '<select>';
while($debut <= date('Y')){ // date() fournit la date du jour au format indiqué, ici 'Y' pour year sur 4 chiffres
    
    echo "<option>$debut</option>";

$debut++;
}
echo '</select>';
echo '<br>';


echo '<select>';
    echo '<option>1</option>';
    echo '<option>2</option>';
    echo '<option>3</option>';
    echo '<option>4</option>';

echo '</select>' .'<br>';

//-------
// Boucle do while :
    // La boucle do while à la particularité de s'exécuter au moins une fois ( correspondant à "do"), puis tant que la condition while est vraie. 
    $j = 1;

    do{
        echo 'Je fais un tour de boucle <br>';
        $j++;
    }while ($j > 10 ); // La condition renvoie false ici, pourtant la boucle a bien tourné une fois. Attention au ";" après le while de cette boucle. 

    //  Exemple :poser une question à l'internaute une première fois avec le do, puis tant qu'il n'a pas répondu avec le "while". 

    // ---------
    // Boucles FOR :
    // La boucle for est une autre syntaxe de la boucle while.

    for($i = 0; $i < 10; $i++){//on trouve ds les () : valeur de depart; condition d'entrée ds la boucle; variation de $i (incrémentation décrémentation ou autre chose)

        echo $i . '<br>';//affiche 0 à 9 en 10 tours
    }

    // Rappel : si on veut faire varier $i de 10 en 10, on écrit $i += 10 à la place de $i++

    // Exercice : afficher 12 <option>  de 1 à 12 à l'aide de la boucle for.

    echo '<select>';

    for($i = 1; $i <= 12; $i++){
        echo "<option>$i</option>";
    }

echo '</select>' .'<br>';


// ----------
// Boucle foreach :
    // il existe aussi la boucle foreach pour parcourir les arrays et les objets.


    // ---------------------
echo '<h2> Exercice </h2>';
// ---------------------
// Exercice : Afficher avec une boucle for les chiffres de 0 à 9 sur la meme ligne dans une table HTML.

?>

<table border="1">
<tr>
<td>1</td>
<td>2</td>
<td>...</td>
</tr>


</table>

<?php
echo '<table border="1">';
echo '<tr>';
for($i = 0; $i <= 9; $i++){
    echo "<td>$i</td>";
}

echo '</tr>';
echo '</table>';


// Exercice : Faite une boucle for qui  affiche de 0 à 9 sur la même ligne, répété sur 10 lignes ds une table HTML.

echo '<table border="1">';
$a99 = 0;
for($i = 0; $i <= 9; $i++){
    echo '<tr>';

    for($j = 0; $j <= 9; $j++){

    echo "<td>$a99</td>";

    $a99++;
}
    echo '</tr>';
    
}
echo '</table>';//nous avons ici le principe des boucles imbriquées. Quand la 1ere boucle fait 1 tour, la boucle inférieur en  fait 10.


    // ---------------------
echo '<h2> Les Tableaux ou Array </h2>';
// ---------------------
// Un tableau ou array , est déclarée comme une variable améliorée ds laquelle on stocke une miltitude de valeurs. C'est valeurs peuvent être de n'importe quel type . Elles possedent un indice dont la numérotation par défaut commence à 0.

// Déclaration d'un Array (méthode 1) :

$liste = array('grégoire','nathalie','émilie','françois','georges');

echo 'le type de $liste est : ' . gettype($liste) . '<br>'; 

// echo $liste; // erreur de type "array to string conversion" car on ne peut pas afficher directement un array avec un echo.

echo '<pre>';
var_dump($liste); //Affiche le contenu du tableau plus certaines infos comme les types 
echo '</pre>';// pre est une balise html qui permet de formater l'affichage de var_dump

echo '<pre>';
print_r($liste);//Le print_r est plus synthétique que var_dump : il n'affiche pas le type des éléments contenus ds l'array
echo '</pre>';

// Fonction d'affichage d'un print_r avec une balise <pre> : 
function debug($param){
    echo '<pre>';
    print_r($param);
    echo '</pre>';
}
// debug($liste);


// Autre méthode de déclaration d'un array :
$tab = ['France', 'Italie', 'Espagne', 'portugal'];

$tab[]='Haïti'; // les [] vides permettent d'ajouter une valeur à la fin de notre array

debug($tab);

// afficher "Italie" à partir de notre tableau $tab :
 echo $tab[1] . '<br>';


//  ----------
// Tableau associatif :
    // C'est un tableau ds lequel on choisit le nom les indices.

$couleur = array(
    'j' => 'jaune',
    'b' => 'bleu',
    'v' => 'vert'
);

// pour accéder à un élément du tableau associatif :
    echo 'la seconde couleur de notre tableau est le ' . $couleur['b'] . '<br>';

    echo "la seconde couleur de notre tableau est le $couleur[b] <br>";//affche bleu. Un array écrit ds des "" ou des quotes perd les quotes autour de son indice

    // -----Mesurer la taille d'un array :
    echo 'taille du tableau $couleur : ' . count($couleur) . '<br>';
    echo 'taille du tableau $couleur : ' . sizeof($couleur) . '<br>';//count() et sizeof() font la même chose : ils comptent le nombre d'éléments contenus ds l'array indiqué. 



        // ---------------------
echo '<h2> Boucle "foreach" </h2>';
// ---------------------
// La boucle foreach est un moyen simple de passer en revue un tableau ou un objet. Elle retourne une erreur si vous tentez de l'utiliser sur autre chose.

debug($tab);

foreach ($tab  as $valeur){//Le mot clé "as" fais partie de la structure syntaxique de la foreach : il est obligatoire. $valeur vient parcourir la colonne des valeurs de l'array. Notez qu'on peut l'appeler comme on veut : cest sa place aprés le "as" qui determine qu'elle parcourt les valeurs.

    echo $valeur . '<br>';//on affiche succesivement les éléments du tableau à chaque tour de boucle. La foreach s'arrête automatiquement à la fin du tableau.
}

foreach($tab as $indice => $valeur){ //Quand il y a deux variable après "as" la 1ere parcourt la colonne des indices (quelque soit son nom), et la seconde la colonne des valeurs (quelque soit son nom)
    echo $indice . ' correspond à ' . $valeur . '<br>';
}


// Exercice : écrivez un array associatif avec les indices prenom, nom, email et telephone, et mettez y des infos pour une seul personne. Puis avec une boucle foreach, affichez les valeurs dans des <p>, sauf pour le prenom qui doit être dans un <h3>.

$contact = array(
    'prenom' => 'Luc',
    'nom' => 'Joinvil',
    'email' => 'luc@gmail.com',
    'telephone' => '0753412553'
);

foreach($contact as $indice => $info){
    if( $indice == 'prenom'){
        echo '<h3>' . $info . '</h3>';
    }else{
        echo '<p>'  . '<strong>'. $info .  '</strong>' . '</p>';
    }
}