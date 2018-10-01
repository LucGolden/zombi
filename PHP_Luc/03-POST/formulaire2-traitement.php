<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';


if(!empty($_POST)){
echo 'Ville : ' . $_POST['ville'] . '<br>';
echo 'Code postal : ' . $_POST['code_postal'] . '<br>';
echo 'Adresse : ' . $_POST['adresse'] . '<br>';
}