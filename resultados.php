<?php
  session_start();

  require 'php/database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Inicio</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="bg-secondary bg-opacity-10">
    <?php require 'php/header.php'?>
    <div class="container" style="overflow-y: scroll;">
        <section id="resultados" style="">
            <div class="p-5 mx-auto bg-white text-dark" style="height: 68vh;">
                <div class="text-center">
                    <h3>Soluciones</h3>
                </div>
                <hr>
                <div class="accordion" id="accordionExample">
                    <?php
                        if ($_SESSION['rdElectronic1'] == '0' || $_SESSION['rdElectronic2'] == '1' || $_SESSION['rdElectronic3'] == '0' || $_SESSION['rdElectronic4'] == '1') {
                            echo('<div class="accordion-item">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Estado Actual de la Bateria
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Primero abra el cofre y ubique la bateria del coche verifique si estan bien conctados
                                    los cables, arranque el coche, si no arranca entonces la bateria esta puerta para esto
                                    recarguela pase corriente con otro coche, en caso de no tener exito debera reemplazar
                                    la bateria.
                                </div>
                            </div>
                        </div>');
                        }
                    
                
                  
                        if ($_SESSION['rdMotor1'] == '0' || $_SESSION['rdMotor2'] == '0' || $_SESSION['rdMotor3'] == '0' || $_SESSION['rdMotor4'] == '0') {
                            echo('<div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    Cambio de Aceite
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Primero abra el cofre y ubique la figura del carter, el motor debe estar tibio antes de
                                    proceder, despues ubicar la valvula de purgacion debajo del motor y colocar una cubeta
                                    debajo, abrir la valvula y drenar el aceite antiguo, vea su manual de usuario para saber
                                    cuantos litros de aceite necesita su coche despues de drenar el aceite cierre la valvula
                                    y abra el carter para rellenar con el nuevo aceite y tapar el carter.
                                </div>
                            </div>
                        </div>');
                        }
                        
                    
                        if ($_SESSION['rdComputadora1'] == '0' || $_SESSION['rdComputadora2'] == '0') {
                            echo('<div class="accordion-item">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    Sistema de la ECU
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Las pricipales son fallas de sensores, servicio de motor, catalizador, etc. si se cuenta
                                    con un escaner automotriz puede borrarse la falla pero esto no arregla el problema, para
                                    ello acuda con su mecanico.
                                </div>
                            </div>
                        </div>');
                        }
                    
                
                        if ($_SESSION['rdFrenos1'] == '0' || $_SESSION['rdFrenos2'] == '0') {
                            echo('<div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Llego la Hora de Cambiar tus Pastillas de Freno
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Si se escucha un chillido agudo al frenar es tiempo de cambiar las pastillas de los
                                    frenos,
                                    para ello hay que levantar con un gato hidráulico el lado del freno donde se va a
                                    cambiar,
                                    con una llave inglesa y una matraca aflojar los cubre pastillas y sacar las patillas
                                    antiguas
                                    y reponerlas con las nuevas, colocar todo en su lugar.
                                </div>
                            </div>
                        </div>');
                        }
                    ?>
                    <!--<div class="accordion-item">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Alineación y Balanceo
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                La solución para esto es llevar el auto a un taller para que alineen y balanceen las
                                llantas del auto.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                Seguro Subes Demasiado el Volumen
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Primero debes ubicar la bocina que no se escucha después quitar o desatornillar el caparcete 
                            que protege la bocina y verificar que la bocina este bien conectado o tenga un cable quemado, 
                            dado uno de los casos deberas cambiar el cable o remplazar la bocina. Otro caso es verificar 
                            el estéreo del auto si estan bien conectados los cables.
                            </div>
                        </div>
                    </div>-->

                </div>
            </div>
        </section>
        </form>
    </div>
    <?php require 'php/footer.php' ?>
</body>

</html>