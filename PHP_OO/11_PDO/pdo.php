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
print('<pre>');
print_r($donnees);
print('</pre>');

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

