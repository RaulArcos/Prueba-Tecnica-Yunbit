<?php 
include('assets/header/prueba-yunbit-header.php');

$client = $connection->prepare("SELECT NAME,ADDRESS,TELF FROM test_clients");
$client->execute();

?>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php foreach ($client as $c){ ?>
                <div class="card pos-relative py-3 px-3 mb-3 border-warning">
                    <div class="row align-items-center">
                        <div class="col-md-12">
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