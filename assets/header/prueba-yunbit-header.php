<?php 
session_start();
/*
Utilizo un header para que, en el caso de contar con varias páginas diferentes
no tenga que reescribir código relacionado con la configuración de la db y/o el css.
*/

//Incluimos la configuración de la db.
include('config.php');
?>

<!-- Configuración sencilla de CSS para html -->
<!DOCTYPE html>
<head> 
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/prueba-yunbit.css" rel="stylesheet">
</head>
</html>

