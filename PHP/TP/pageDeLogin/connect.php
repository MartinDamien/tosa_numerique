<?php

// connexion à la base de donnée "db"
$dbname = "2_deuxieme";  // nom de la Base de Donnée
$dbhost = "127.0.0.1"; //url de host ou 127.0.0.1
$dbuser = "root";
$password = "";

$pdo = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname . ";charset=UTF8", $dbuser, $password);
// $pdo est la connection à la BDD 3 arguments pour la PDO (host+dbname , user , password)
 