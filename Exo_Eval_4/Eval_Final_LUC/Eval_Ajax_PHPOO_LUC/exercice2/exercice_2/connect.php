<?php

$db = new PDO('mysql:host=localhost;dbname=exo1_userslist', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, //pour afficher les messages d'erreur SQL
                     PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8'
));