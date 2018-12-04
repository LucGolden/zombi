<?php
// connexion BDD
$pdo = new PDO('mysql:host=localhost;dbname=site_commerce', 'root', '',
array(
PDO::MYSQL_ATTR_INIT_COMMANDE => 'SET NAMES utf8'));

