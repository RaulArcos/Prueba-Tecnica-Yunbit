<?php 
//Incluimos el header (Configuración de db y carga de css).
include('assets/header/prueba-yunbit-header.php');
$id = $_GET['id'];

$client = $pdo->prepare("SELECT * FROM test_clients where ID = $id");
$client->execute();
$client = $client->fetch(PDO::FETCH_ASSOC);

?>

<body>

<div class="container">
    <div class="row">
    <div class="col-lg-12">
        <div class="card pos-relative py-3 px-3 mb-3 border-warning">
            <div class="row align-items-center">
            <div class="col-md-8 mb-3 mb-sm-0">
                <h3> <?php echo $client['NAME'] ?></h3>
                <h5> <?php echo $client['DESCRIPTION'] ?></h5>
                <div class="mb-2">
                    <p class="text-sm">Dirección: <?php echo $client['ADDRESS'] ?></p>
                    <p class="text-sm">Teléfono: <?php echo $client['TELF'] ?></p>
                
                    <?php if($c['TYPE'] == "P"){?>
                    <p class="text-sm">Usuario con cuenta de tipo normal.</p>
                    <?php } else { ?>
                    <p class="text-sm">Usuario con cuenta de tipo premium.</p>   
                    <?php } ?>

                    <a href="../index.php" class="btn btn-warning">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>