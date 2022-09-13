<?php
//config.php para que, en caso de tener que utilizar la bd en otros archivos no repetir código.
//Definimos los datos de nuestra base de datos.
define('USER', 'pruebajr');
define('PASSWORD', 'pruebajr');
define('HOST', 'localhost');
define('DATABASE', 'pruebas_practicas');
 
//Realizamos la conexión, en caso de error se devuelve una excepción.
try {
    $pdo = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>