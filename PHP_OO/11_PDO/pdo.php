<?php
// PDO : PHP Data Object
/* 
Exec() : 
    INSERT, UPDATE, DELETE : Exec() est utilisé pour le formulation de requête ne retourne pas de résultat.
                                                            Exec() renvoie le nombre de ligne afectées par le requête.
                                                            
    Valeur retour :
        echec : False (Boolean)
        succes : 1 (INT). Ce nombre peut bien evidemment etre supérieur tout dépend du nombre de de lignes affectées par la requête
        ***********************************
Query() : 
SELECT : Au contraire de Exec(), Query() est utilisé pour la formulation de requête retournant un ou plusieur resultatS.
    Valeur retour :
        echec : false (Boolean)
        succes : PDOStatement (object)
        
        ***************************************************  
prepare()->execute() : 
INSERT, UPDATE, DELETE, SELECT : prepare() permet de preparer une requête mais ne l'exécute pas */

$pdo =new PDO('mysql:host=localhost;dbname=entreprise_pole_S', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));

var_dump($pdo);

// print('<pre>');
// print_r(get_class_methods($pdo));
// print('</pre>');

// ******************************************************
echo '<h1>SELECT + QUERY() + fetch()</h1>';

$resultat = $pdo->query('SELECT * FROM employes'); //$resultat : PDOStatement

// var_dump($resultat);
// print('<pre>');
// print_r(get_class_methods($resultat));//permet d'afficher les methodes de la classe PDOStatement
// print('</pre><hr>');

// print('<pre>');
// print_r(get_object_vars($pdo));//permet d'afficher les propriétés de la classe PDOStatement
// print('</pre>');

$donnees = $resultat->fetch(); // ou fetch(PDO::FETCH_ASSOC);
// print('<pre>');
// print_r($donnees);
// print('</pre>');

foreach($donnees as $indice => $contenu){
    echo $indice . ' --> ' . $contenu . '<br>';
}
// fetch( ressort la première ligne de resultat et efectuons une boucle dessus affichr toutes les valeurs de chaque champs sur cette même ligne)

echo '<h1>SELECT + fetch() ne renvoie pas un seul resultat si il est dans une boucle </h1>';

$resultat = $pdo->query('SELECT * FROM employes'); //$resultat : PDOStatement

while($contenu = $resultat->fetch()){
    echo '<div>';
    echo $contenu['id_employes'] . '<br>';
    echo $contenu['prenom'] . '<br>';
    echo $contenu['nom'] . '<br>';
    echo $contenu['sexe'] . '<br>';
    echo $contenu['service'] . '<br>';
    echo $contenu['date_embauche'] . '<br>';
    echo $contenu['salaire'] . '<br>';
    echo '</div><hr>';
}

echo '<hr><h1>SELECT + Query() + fetchAll() et PDO::FETCH_ASSOC </h1>';

$r = $pdo->query('SELECT * FROM employes');

$donnees = $r->fetchAll(PDO::FETCH_ASSOC); // fetchAll() retour toutes les lignes de resultats dans un tableau multidimentionnel (sans faire de boucle)

// print('<pre>');
// print_r($donnees);
// print('</pre>');

foreach ($donnees as $indice => $contenu){
    echo '<div>';
    foreach ($contenu as $indice2 => $contenu2) {
        echo "$indice2  : $contenu2 <br>";
    }
    echo '</div><hr>';
}

// FOR
echo '<h2>FOR</h2>';

for ($i=0; $i < count($donnees); $i++) { 
    echo '<div>';
    echo $donnees[$i]['id_employes'] . '<br>';
    echo $donnees[$i]['prenom'] . '<br>';
    echo $donnees[$i]['nom'] . '<br>';
    echo $donnees[$i]['sexe'] . '<br>';
    echo $donnees[$i]['service'] . '<br>';
    echo $donnees[$i]['date_embauche'] . '<br>';
    echo $donnees[$i]['salaire'] . '<br>';
    echo '</div><hr>';
}

echo '<h2>WHILE</h2>';
$i=0;
while ($i < count($donnees)) {
    echo '<div>';
    echo $donnees[$i]['id_employes'] . '<br>';
    echo $donnees[$i]['prenom'] . '<br>';
    echo $donnees[$i]['nom'] . '<br>';
    echo $donnees[$i]['sexe'] . '<br>';
    echo $donnees[$i]['service'] . '<br>';
    echo $donnees[$i]['date_embauche'] . '<br>';
    echo $donnees[$i]['salaire'] . '<br>';
    echo '</div><hr>';
    $i++;
}

echo '<hr><h2>SELECT + Query() + fetchAll() + ColumnCount() </h2>';

$resultat= $pdo->query('SELECT * FROM employes', PDO::FETCH_ASSOC);

echo '<table border="1><tr>';
for ($i=0; $i < $resultat->ColumnCount(); $i++) { 
    $collonne = $resultat->getColumnMeta($i);
    echo '<th>' . $colonne['name'] . '</th>';
}
echo '</tr>';
foreach($resultat as $contenu){
    echo '<tr align="center">';
    foreach($contenu as $indice => $info){
        echo '<td>' . $info . '</td>';
    }
    echo '</tr>';
}
echo '</table>';

echo '<hr><h2>Arg Array + prapare() + execute() + fetch() </h2>';

$resultat= $pdo->prepare('SELECT * FROM employes WHERE nom = ?'); // On prepare notre requête, ici, le '?' est un marqueur

$resultat->execute(array("durand")); // "Durand" va remplacer mon marqueur ('?');

print('<pre>');
print_r($resultat->errorInfo() ); // Si je fais une erreur sur prepare() ou execute() on demande l'erreur via l'objet PDOStatement
print('</pre>');
// var_dump($resultat);

$donnees = $resultat->fetch( PDO::FETCH_ASSOC);
var_dump($donnees);echo '<br>';

// **********************************************************

echo '<hr><h2>Arg binParam + prapare() + execute() + fetch() </h2>';
$nom = 'Sennard';
$resultat= $pdo->prepare('SELECT * FROM employes WHERE nom = :nom'); // On prepare notre requête, ici, le ':nom' est un marqueur

$resultat->bindParam(':nom', $nom, PDO::PARAM_STR); // On précise que bindParam doit recevoir exclusivement une variable
$resultat->execute();

$donnees = $resultat->fetch( PDO::FETCH_ASSOC);
var_dump($donnees);echo '<br>';
// ***************************************************
echo '<hr><h2>Arg binValue + prapare() + execute() + fetch() </h2>';
$nom = 'Sennard';
$resultat= $pdo->prepare('SELECT * FROM employes WHERE nom = :nom'); // On prepare notre requête, ici, le ':nom' est un marqueur

// $resultat->bindValue(':nom', $nom, PDO::PARAM_STR); // On précise que bindValue peut recevoir une variable ou une chaine de caractères
$resultat->bindValue(':nom', 'Thoyer', PDO::PARAM_STR); // On précise que bindValue peut recevoir une variable ou une chaine de caractères
$resultat->execute();

$donnees = $resultat->fetch( PDO::FETCH_ASSOC);
var_dump($donnees);echo '<br>';

// ***********************$*****************************$**********************$**********************$***********

echo '<hr><h2>Arg binParam + prapare() + execute() + fetch() + PDO::FETCH_OBJ </h2>';
$nom = 'perrin';
$resultat= $pdo->prepare('SELECT * FROM employes WHERE nom = :name'); // On prepare notre requête, ici, le ':name' est un marqueur

$resultat->bindParam(':name', $nom, PDO::PARAM_STR); 
$resultat->execute();

echo '<ul>';
$donnees = $resultat->fetch( PDO::FETCH_OBJ); //Retourne des objets
print('<pre>');
var_dump($donnees);echo '<br>';
print('</pre>');
echo $donnees->prenom;
echo '</ul>';
// ********************************************$***********$*************$*$**********$$$***********
echo '<hr><h2>Plusieurs execution d\' une requête</h2>';

$pdostatement = $pdo->prepare("INSERT INTO employes(prenom, nom, sexe, service, date_embauche, salaire) VALUES ('test', 'test', 'm', 'test', '2012-01-01', '1111')");
for ($i=0; $i < 3; $i++) { 
    $pdostatement->execute();
}

// ********************************************$***********$*************$*$**********$$$***********
echo '<hr><h2>Transaction + requête et annulation </h2>';
// ATTENTION : si la transaction ne passe pas , il faut supprimer la BDD 'entreprise_pole_S'

$pdo->beginTransaction();// Demarre une transaction (desactivé l'auto-commit)


$resultat = $pdo->query('SELECT * FROM employes', PDO::FETCH_NUM); 

echo '<table border="1><tr>';
for ($i=0; $i < $resultat->ColumnCount(); $i++) { 
    $collonne = $resultat->getColumnMeta($i);
    echo '<th>' . $colonne['name'] . '</th>';
}
echo '</tr>';
foreach($resultat as $contenu){
    echo '<tr align="center">';
    foreach($contenu as $indice => $info){
        echo '<td>' . $info . '</td>';
    }
    echo '</tr>';
}
echo '</table>';

var_dump($pdo->inTransaction()); // renvoie true si nous sommes dans une trasaction à cet instant précis, sinon false

// Si on s'apercoit que l'on a fait une erreur et que l'on veut annuler une modification : 
    $pdo->rollBack();
    
    // ****************$**************$************$$***********$*$******************
    echo '<hr><h2>FETCH_CLASS</h2>';
    
    class Employes {
        public $id_employes;
        public $prenom;
        public $nom;
        public $sexe;
        public $service;
        public $date_embauche;
        public $salaire;
    }
    
    $r = $pdo->query('SELECT * FROM employes'); 

    $objet = $r->fetchAll(PDO::FETCH_CLASS, 'Employes');

    foreach ($objet as $employe ) {
        echo $employe->prenom . '<br>';
    }