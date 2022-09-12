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
    <div class="col-lg-6">
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
    <!-- Columna Derecha de registro -->
    <div class="col-lg-6">
        <div class="container">
            <div class="row justify-content-center align-items-center ">
                <div class="card card-registration border-warning" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registro Clientes</h3>
                        <form>
                            <div class="form-outline">
                                <input type="text" id="name" class="form-control form-control-lg" />
                                <label class="form-label" for="name">Nombre completo</label>
                            </div>
                            <div class="form-outline">
                                <input type="text" id="address" class="form-control form-control-lg" />
                                <label class="form-label" for="address">Dirección</label>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-10 d-flex align-items-center">
                                    <div class="form-outline datepicker w-100">
                                        <input type="text" class="form-control form-control-lg" id="description" />
                                        <label for="description" class="form-label">Descripción</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-outline">
                                        <input type="tel" id="telf" class="form-control form-control-lg" />
                                        <label class="form-label" for="telf">Teléfono</label>
                                    </div>  
                                </div>
                                <div class="col-md-6 mb-4">
                                    <h6 class="mb-2 pb-1">Tipo: </h6>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                                        value="option1" checked />
                                        <label class="form-check-label" for="femaleGender">Normal</label>
                                    </div>  
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                                        value="option2" />
                                        <label class="form-check-label" for="maleGender">Premium</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 pt-2">
                                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
</body>