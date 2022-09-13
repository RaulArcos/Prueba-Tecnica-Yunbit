<?php

define('USER', 'pruebajr');
define('PASSWORD', 'pruebajr');
define('HOST', 'localhost');
define('DATABASE', 'pruebas_practicas');
 
try {
    $pdo = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>