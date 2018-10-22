<?php 

$pdo = new PDO('mysql:host=localhost;dbname=employees', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));

// query
$query = "SELECT * FROM employees ORDER BY emp_no LIMIT 50";

$listeEmployes = $pdo->query($query);

$tab = array();
$tab['nombre'] = '<div><h2>Nombre d\'employés : ' . $listeEmployes->rowCount() . '</h2></div>';
$tab['contenu'] = '';

while($employe = $listeEmployes->fetch(PDO::FETCH_ASSOC)) {
    $tab['contenu'] .= '<div class="block">';
    foreach($employe as $indice => $valeur){
        if ($indice == 'gender') {
            $tab['contenu'] .= ($valeur == 'M') ? 'Sexe: Masculin <br>' : 'Sexe: Feminin<br>';
        } elseif ($indice == 'bith_date' || $indice == 'hire_date'){
            $dateFormat = new DateTime($valeur);
            $tab['contenu'] .= ucfirst($indice) . ': ' . $dateFormat->format('d/m/Y') . '<br>';
        }else{
            $tab['contenu'] .= ucfirst($indice) . ': ' . $valeur . '<br>';
        }
    }


    $tab['contenu'] .= '</div>';
}
echo json_encode($tab);