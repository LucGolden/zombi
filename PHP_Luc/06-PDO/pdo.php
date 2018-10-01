<?php   
// -_-_-_-_-_-_-_-_-_-_ |
//      PDO             |
// _-_-_-_-_-_-_-_-_-_-_|
// PDO pour PHP Data Objects, définit une interface pour acceder à une base de données depuis PHP.

function debug($param){
    echo '<pre>';
    print_r($param);
    echo '</pre>';
}

// -_-_-_-_-_-_-_-_-_-_-_-_-_-_- |
echo '<h2>01 -connextion</h2>';            
// _-_-_-_-_-_-_-_-_-_-_-_-_-_-_-|
$pdo = new PDO('mysql:host=localhost;dbname=societe', //driver mysql (pourrrait être oracle, IBM, ODBC...) + nom du serveur de la BDD + nom de la BDD
               'root',//pseudo de la BDD
               '',//mdp de la BDD
               array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, //pour afficher les messages d'erreur SQL
                     PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8') // définition du jeu de caracteres des echanges avec la BDD
);

// $pdo ci-dessus est un objet issu de la cdlasse prédéfinie PDO. Il représente la connexion à la base de données "societe".

// -_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_ |
echo '<h2> 02 -la méthode exec() </h2>';            
// _-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_|
// exec() est use pour la formulation de requêtes ne retournant pas de résultat : INSERT, DELETE, UPDATE.

$resultat = $pdo->exec("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('test', 'test', 'm', 'test', '2016-02-08', 500) ");

/* Valeur de retour :
    -succes : renvoie le nombre de lignes affectés par la requête
    -echec  : retourne false */
    echo 'Nombre des lignes affectées par le INSERT : ' . $resultat . '<br>';
    echo 'dernier ID généré par la BDD : ' . $pdo->lastInsertId();

    // -_-_-_-__-_-_
    $resultat = $pdo->exec("DELETE FROM employes WHERE prenom  = 'test' ");

    echo "<br> Nombre de ligne affectées par le DELETE : $resultat <br>";


    // -_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_ |
echo '<h2> 03 -la méthode query() et les différents fetch </h2>';            
// _-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_|
// Au contraire de exec(), query() s'utilise pour la formulation de requêtes retournant un ou plusieur résultats : SELECT.

$result = $pdo->query("SELECT * FROM employes WHERE prenom = 'daniel' ");

debug($pdo);
debug($result);

/* Valeur de retour de la methode query() :
            -succès : elle nous fournit un objet issu de la classe prédéfinie PDOStatement qui contient 1 ou plusieur jeux de résultats
            -echec : false
            
            Notez que query() peut être aussi utilisée INSERT, DELETE, et UPDATE.
            */

            // $result est le resultat de la requête sous forme inexploitable directement : en  effet, on ne voit pas le jeu de résultat consernant Daniel à l'intérieur....
            // Il faut donc transformer $result avec la méthode fetch() :

                $employe = $result->fetch(PDO::FETCH_ASSOC); //La méthode fetch() avec l paramètre PDO::FETCH_ASSOC permet de transformer l'objet $result en un array associatif dont les indices correspondent aux noms des champs (*) de la requête SQL
                debug($employe);
                echo "Je suis $employe[prenom] $employe[nom] du service $employe[service] <br>";// n'oublie pas qu'un array écrit ds des quotes ou des guillemets perd ses quotes à son indice

                // résumé des 4 etapes principales pour afficher Daniel Chevel :
                // 1- connexion à la BDD
                // 2-on fait la requête : on obtient un objet PDOStatement
                // 3-on fait un fetch sur cet objet pour le transformer
                // 4-on affiche le résultat final
