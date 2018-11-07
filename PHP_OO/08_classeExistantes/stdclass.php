<?php

$tab = array('orange', 'fraise', 'poire');

$objet = (object) $tab; //transformation (cast)

var_dump($objet);

// Un objet fais partie de STDCLASS (classe standard de PHP) lorsque celui-ci est 'orphelin' et n'a pas été instancié par "new".
echo '<br>';

$objet2 = new StdClass();
$objet2->titre = 'PoleS';
var_dump($objet2);

