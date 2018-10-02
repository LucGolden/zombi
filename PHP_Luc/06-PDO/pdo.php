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

// --------
// On peut aussi transformer l'objet PDOStatement $result selon les méthodes fetch suivantes :
    $result = $pdo->query("SELECT * FROM employes WHERE prenom = 'daniel' ");
    $employe = $result->fetch(PDO::FETCH_NUM); //transforme l'objet $result en un array indicé numériquement 
    debug($employe);
    echo $employe[1] . '<br>'; //on passe par l'indice numérique 1 pour afficher le prénom

            $result = $pdo->query("SELECT * FROM employes WHERE prenom = 'daniel' ");
            $employe = $result->fetch(); // transforme l'objet $result en un array associatif et numérique
            debug($employe);
            echo $employe['prenom'] . '<br>'; 
            echo $employe[1] . '<br>';

                    $result = $pdo->query("SELECT * FROM employes WHERE prenom = 'daniel' ");
                    $employe = $result->fetch(PDO::FETCH_OBJ); // transforme l'objet $result en un autre objet stdClass ds lequel on accède aux information de Daniel Chevel : les propriétés de cet objet carrespondent aux champs de la requête SQL
                    debug($employe);
                    echo $employe->prenom . '<br>';

        // Note : on répète le requête SQL avant chaque fetch(), car on ne peut pas réaliser PLUSIEUR fetch() sur le même résultat.


            // ----------
            // Exercice : afficher le service de l'employé dont l'id_employes est 417.

            $requete = $pdo->query("SELECT service FROM employes WHERE id_employes = 417");
            $service = $requete->fetch(PDO::FETCH_ASSOC);
            debug($service);
            echo 'Le service de l\'employe 417 est : ' . $service['service'] . '<br>';


        // -_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_--_-__-_ |
echo '<h2> 04 -la méthode query() et boucle while </h2>';            
// _-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-|
// Quand on est certain d'avoir un seul resultat ds notre requête : pas de boucle. Si on peut avoir potentiellement plusieurs : on fait une boucle.

$resultat = $pdo->query("SELECT * FROM employes"); 
echo "nombre d'employes dans l'entreprise : " . $resultat->rowCount() . '<br>'; // rowCount() compte le nombre de lignes retournées par la requête. On peut ainsi compter le nombre de produits, de membres inscrits...

while($employe = $resultat->fetch(PDO::FETCH_ASSOC)){// fetch() retourne la ligne suivante du jeu de resultat en un array associatif. La boucle while permet de faire avancer le curseur ds le jeu de reslutat, et s'arrête qnd le curseur est à la fin des resultats.


    // debug($employe);// $employe est un array associatif qui contient les données d'une ligne du jeu de resultat contenu ds $resultat pour chaque tour tour de boucle

    echo '<div>';
        echo '<p>' . $employe['id_employes'] . '</p>';
        echo '<p><strong>' . $employe['prenom'] . '</strong</p>';
        echo '<p><strong>' . $employe['nom'] . '</strong</p>';
       

    echo '</div> <hr>';
}
// Conclusion : on fait une boucle si on a potensiellement plusieur resultats


 // -_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_--_-__-_ |
echo '<h2> 05 -la méthode fetchAll() </h2>';            
// _-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-|
$resultat = $pdo->query("SELECT * FROM employes"); 

$donnees = $resultat->fetchAll(PDO::FETCH_ASSOC); // retourne toutes les lignes de resultats ds un array multidimensionnel : on a 1 sous-array associatif à chaque indice numérique de $donnees. on peut mettre aussi FETCH_NUM pour des sous-arrays indicés numériquement, ou fetchAll() pour des sous arrays numériques ET associatifs
debug($donnees);
echo '<hr>';
// On parcour $donneesavec une boucle foreach pour en afficher le contenu : 
    foreach($donnees as $employe){
        // debug($employe); // $emplotye correspond à chaque sous-array associatif contenu ds $donnees
        echo '<div>';
            echo '<p>' . $employe['id_employes'] . '</p>';
            echo '<p>' . $employe['prenom'] . '</p>';
            echo '<p>' . $employe['nom'] . '</p>';
        echo '</div><hr>';
    }


    // -_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_--_-__-_ |
echo '<h2> 06 -Exercice </h2>';            
// _-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-|
// Afficher la liste des differents service de l'entreprise; ds un liste <ul><li>.
$resultat = $pdo->query("SELECT DISTINCT service FROM employes");

echo '<ul>';

while($services = $resultat->fetch(PDO::FETCH_ASSOC)){
// debug($services);

echo '<li>'  . $services['service'] . '</li>';

}
echo '</ul>';
echo '<hr>';
// AVEC fetchAll
$resultat = $pdo->query("SELECT DISTINCT service FROM employes ORDER BY service");

$donnees = $resultat->fetchAll(PDO::FETCH_ASSOC);
echo '<ul>';
foreach($donnees as $services){
    echo '<li>' . $services['service'] . '</li>';
}
echo '</ul>';



// -_-_-_-_-_-_-_-_-_-_-_-_-_-_--_-_ |
echo '<h2> 07 -Table HTML </h2>';            
// _-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-|
$resultat = $pdo->query("SELECT *  FROM employes");

echo '<table border="2">';
        // Affichage de la ligne des entêtes dynamiquement :
        echo '<tr>';
        for($i = 0; $i < $resultat->columnCount(); $i++){
            debug($resultat->getColumnMeta($i)); //la méthod getColumnMeta() retourne un array qui contient notamment l'indice "name" avec le champs de chaque colonne (= champsde la table)

            $colonne = $resultat->getColumnMeta($i);
            echo '<th>' . $colonne['name'] . '</th>'; //l'indice "name" contient le nom du champs à chaque tour de boucle
        }
        echo '<th>actions</th>';

        echo '</tr>';

// Affichage des lignes :
while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)){
    echo '<tr>';
        //$ligne étant un array je peux faire une for foreach pour le parcourir
        foreach($ligne as $information){
            echo "<td> $information </td>";
        }

        echo '<td><a href="?action=suppression&id=' . $ligne['id_employes'] . '">Supprimer</a></td>';

    echo '</tr>';
}


echo '</table>';
// :Pour voir les méthodes dispo ds $resultat :
debug(get_class_methods($resultat));


// -_-_-_-_-_-_-_-_-_-_-_-_-_-_--_-_ |
echo '<h2> 08 -Requête préparée et bindParam() </h2>';            
// _-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-|
$nom = 'sennard';

// Une requête préparée se réalise en 3 étapes :
// Etape 1 : prépaer la requête :
$resultat = $pdo->prepare("SELECT * FROM employes WHERE nom = :nom");// :nom est un marqueur nominatf qui est en attente d'une valeur
// Etape 2 : lier les marqueurs aux valeurs
$resultat->bindParam(':nom', $nom); //bindParam() reçoit exclusivement une variable vers laquelle pointe le marqueur (on ne peut pas y mettre une valeur directement). Ainsi, si le contenu de la variable change, la valeur du marqueur changera automatiquement.

// Etape 3 : exécuter la requête :
$resultat->execute();

// Puis on fait un fetch sur $resultat pour obtenir le jeu de resultat qu'il contient :
$donnees = $resultat->fetch(PDO::FETCH_ASSOC); //pas de boucle while car il y a un seul resultat
debug($donnees);

/* 
prepare() permet de preparer une requête mais ne l'exécute pas .
execute() permet d'exécuter une requête préparée.

Valeurs de retour :
    prepare() renvoie tjrs un objet PDOStatement
    execute() :
            Succès : TRUE
            Echec : FALSE
Les requêtes préparées sont préconisées si vous exécutea plusieurs fois la même requête, et ainsi vouloir éviter de répéter le cycle analyse / interprétation / exécution réalisé par le SGBD (gain de performance).

Les requêtes préparées sont souvent utiliséespour assainir les données et éviter les injections SQL 
*/

// Si on change la valeur contenu ds $nom sans refaire un bindParam() le marqueur de la requête pointe automatiquement vers la nouvelle valeur. On peut dc faire une execute() directement :
$nom = 'durand';
$resultat->execute();
$donnees = $resultat->fetch(PDO::FETCH_ASSOC);
debug($donnees);// on accède aux données de Durand sans avoir refait un bindParam().



// -_-_-_-_-_-_-_-_-_-_-_-_-_-_--_-_ |
echo '<h2> 09 -Requête préparée et bindValue() </h2>';            
// _-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-|
$nom = 'thoyer';
// Etape 1 : prépaer la requête :
$resultat = $pdo->prepare("SELECT * FROM employes WHERE nom = :nom");
// 2- Lier les marqueurs aux valeurs :
$resultat ->bindValue(':nom', $nom);//bindValue() reçoit une variable ou une valeur directement. Le marqueur point uniquement vers la valeur : si celle-ci change, il faudra refaire un bindValue() lors d'un nouvel execute() pour tenir compte de cette nouvelle valeur (sinon le marqueur conserve l'ancienne valeur).

// /3-Exécuter la requête :
$resultat->execute();
//Puis on affiche le resultat : 
$donnees = $resultat->fetch(PDO::FETCH_ASSOC);
debug($donnees);

// Si on change la valeur de $nom, sans le nouveau bindValue(), le marqueur de la requête continue de pointer vers "thoyer" :
$nom = 'durand';
$resultat->execute();
$donnees = $resultat->fetch(PDO::FETCH_ASSOC);
debug($donnees); // On continue d'accéder aux valeurs de "thoyer" si on ne refait pas notre bindValue().


// -_-_-_-_-_-_-_-_-_-_-_-_-_-_- |
echo '<h2>10 -requête préparée et points complémentaires</h2>';            
// _-_-_-_-_-_-_-_-_-_-_-_-_-_-_-|

echo '<h3>Le marqueur "?" </h3>';
$resultat = $pdo->prepare("SELECT * FROM employes WHERE nom = ? AND prenom = ? ");//On prepare la requête avec les parties variables représentées par des marqueurs sous forme de "?".

$resultat->bindValue(1, 'durand'); //Le chiffre 1 represente le premier marqueur "?" de la requête
$resultat->bindValue(2, 'damien');//Le chiffre 2 represente le second
$resultat->execute();
// On peut aussi utiliser cete syntaxe directement
$resultat->execute(array('durand', 'damien'));// On peut remplacer les 2 bindValue et l'execute() précédents par cette ligne, en passant par un array à la méthode execute(). Les valeurs sont ds le même ordre que les marqueurs ds la requête SQL.

$donnees =$resultat->fetch(PDO::FETCH_ASSOC);
debug($donnees);

echo '<h3>execute() sans bindParam() ni bindValue() </h3>';
// -_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-__-_-_-_-_-_-_-_-_-_

$resultat = $pdo->prepare("SELECT * FROM employes WHERE nom = :nom AND prenom = :prenom ");

$resultat->execute(array(':nom' => 'chevel', ':prenom' => 'daniel'));://On associe les marqueurs à leur valeur directement ds un array passé à la méthode execute()

$donnees =$resultat->fetch(PDO::FETCH_ASSOC);
debug($donnees);


echo '<h3>11 - L\'extension Mysqli </h3>';
// -_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-__-_-_-_-_-_-_-_-_-_

// connexion à la BDD :
// $mysqli = new Mysqli('localhost', 'root', '', 'societe');

// exemple de requête
// $resultat = $mysqli->query("SELECT * FROM employes");



/* -----------------------------------------------FIN DU FICHIER ------------------------------------------ */
