<?php 
//Incluimos el header (Configuración de db y carga de css).
include('assets/header/prueba-yunbit-header.php');

//Seleccionamos nombre, dirección y teléfono de todos los clientes en la db.
$client = $connection->prepare("SELECT NAME,ADDRESS,TELF FROM test_clients");
$client->execute();

?>
<body>

<div class="container">
      <div class="row">
        <!-- Columna Izquierda de Clientes -->
        <div class="col-lg-12 mb-3">
          <!-- Cliente individual -->
          <?php foreach ($client as $c){ ?>
            <div class="card  pos-relative py-3 px-3 mb-3 border-warning">
                <div class="row align-items-center">
                <div class="col-md-8 mb-3 mb-sm-0">
                    <h5> <?php echo $c['NAME'] ?></h5>
                    <p class="text-sm"><?php echo $c['ADDRESS'] ?></p>
                    <p class="text-sm"><?php echo $c['TELF'] ?></p>
                </div>
                </div>
            </div>
          <?php } ?>
        </div>
    </div>
</body>