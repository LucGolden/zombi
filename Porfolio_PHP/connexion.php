<?php

// $pdo = new PDO('mysql:host=db766617694.hosting-data.io;dbname=db766617694', 'dbo766617694', 'Joinvil&1999', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));


$pdo = new PDO('mysql:host=localhost;dbname=luc_portfolio',

               'root',

               '',

               array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,

                     PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8')

);


?>