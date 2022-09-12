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
        <div class="col-lg-6 mb-3">
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
        <div class="col-lg-6 mb-4 mb-lg-0 px-lg-0 mt-lg-0">
    
  <div class="container">
    <div class="row justify-content-center align-items-center ">

        <div class="card card-registration border-warning" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registro Clientes</h3>
            <form>

                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Nombre completo</label>
                  </div>

        
                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Dirección</label>
                  </div>

 

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                    <label for="birthdayDate" class="form-label">Birthday</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-lg" />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                
              </div>

              <div class="row">
                
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>

                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                      value="option1" checked />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                      value="option2" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                      value="option3" />
                    <label class="form-check-label" for="otherGender">Other</label>
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