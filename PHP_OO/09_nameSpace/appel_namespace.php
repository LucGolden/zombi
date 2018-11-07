<?php require_once('nameSpace_ab.php'); ?>
<?php
// erreur : on ne peut pas déclarer deux function avec le méme nom
// function test(){}
// function test(){}

echo  A\ville(); echo '<br>';
echo  A\strlen(); echo '<hr>';

echo  B\ville(); echo '<br>';
echo  B\strlen(); echo '<hr>';

/* 
    Les namespace permettent de classer mes class
    Pratique pour classerr les fonctions 
    Evite à plusieurs développeurs travaillant sur un même projet de rentrer en collidion lors d'un nomage d'une méthode ou d'une classe.
*/