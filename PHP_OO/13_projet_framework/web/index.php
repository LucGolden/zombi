<?php

require_once(__DIR__ . '/../vendor/Autoload.php');

// var_dump(__DIR__);

// exemple de test :
// $emp = new Entity\Employe;
// var_dump($emp);

// $emp->setPrenom('marco');
// echo '<br>';
// echo $emp->getPrenom();

// exemple de test2 :
// $pdom = Manager\PDOManager::getInstance();
// var_dump($pdom);
// echo '<br>';
// $pdom = Manager\PDOManager::getInstance();
// var_dump($pdom);

// exemple de test3 :
$er = new Manager\EntityRepository;

$resultat = $er->findAll();
var_dump($resultat);
