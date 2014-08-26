<?php


$hostname = "localhost";
$usernameDb = "username";
$passwordDb = "password";
$dbName = "database";

$pdo = new PDO('mysql:host=' . $hostname . ';port=21;dbname=' . $dbName, $usernameDb, $passwordDb, array( PDO::ATTR_PERSISTENT => false));


?>