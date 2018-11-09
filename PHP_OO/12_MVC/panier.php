<?php 
session_start();

if (isset($_GET['action']) && $_GET['action'] == 'create' || isset($_SESSION['panier'])){
    $_SESSION['panier'] = array(26, 30, 54,);
    echo 'Produits présents dans le panier : ' . implode($_SESSION['panier'], ' - ') . '<br>';
    echo '<a href="?action=vider">Vider le panier</a>';
} else{
    
    echo '<a href="?action=create">Creér le panier</a>';
}