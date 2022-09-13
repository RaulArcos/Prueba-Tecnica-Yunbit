<?php 
include('assets/header/prueba-yunbit-header.php');
$client = $pdo->prepare("SELECT ID,NAME,ADDRESS,TELF,TYPE FROM test_clients");
$client->execute();

if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $telf = $_POST['telf'];
    $type = $_POST['type'];

    $insert = "INSERT INTO TEST_CLIENTS (NAME,ADDRESS,DESCRIPTION,TELF,TYPE) VALUES (?,?,?,?,?)";
    $insertConsult= $pdo->prepare($insert);

    try {
        $insertConsult->execute([$name, $address, $description, $telf, $type]);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }

    $client->execute();
}

if (isset($_POST['details'])) {
    $id= $_POST['details'];
    header("Location: details.php?id=$id");
}

?>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <?php foreach ($client as $c){ 
                if($c['TYPE'] == "P"){ ?>
                    <div class="card pos-relative py-3 px-3 mb-3 premium-highlight">
                <?php } else {?>
                    <div class="card pos-relative py-3 px-3 mb-3 border-warning">
                <?php }?>
                        <div class="row align-items-center">
                            <div class="col-md-8 mb-3 mb-sm-0">
                                <h5> <?php echo $c['NAME'] ?></h5>
                                <p class="text-sm"><?php echo $c['ADDRESS'] ?></p>
                                <p class="text-sm"><?php echo $c['TELF'] ?></p>
                            </div>
                            <form method="post">
                                <button class="btn btn-dark" name="details" value="<?php echo $c['ID']?>" type="submit">Detalles</button>
                            </form>
                        </div>
                    </div>
                <?php } ?>
        </div>
        
        <div class="col-lg-6">
            <div class="container">
                <div class="row justify-content-center align-items-center ">
                    <div class="card card-registration border-warning" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4">Registro Clientes</h3>
                            <form method ="post" id ="register">
                                <div class="mb-4"><input type="text" name="name" id="name" class="form-control form-control-lg" placeholder="Nombre"/></div>
                                <div class="mb-4"><input type="text" name="address" id="address" class="form-control form-control-lg" placeholder="Dirección"/></div>
                                <div class="mb-4"><input type="text" name="description" class="form-control form-control-lg" id="description" placeholder="Descripción"/></div>
                                <div class="row">
                                    <div class="col-md-6"><input type="tel" name="telf" id="telf" class="form-control form-control-lg" placeholder="Teléfono"/></div>
                                    <div class="col-md-6">
                                        <h6 class="mb-2 pb-1">Tipo: </h6>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="type"
                                            value="N" checked/>
                                            <label class="form-check-label" for="type">Normal</label>
                                        </div>  
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="type"
                                            value="P" />
                                            <label class="form-check-label" for="type">Premium</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4"><input class="btn btn-warning btn-lg" name="register" type="submit" value="Registrar"/></div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/register-validation.js"></script>
</body>