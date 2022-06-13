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
        <section id="sectionInicio">
            <div class="progress" style="margin: 20px 0 20px 0">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
            </div>
            <div class="p-5 mx-auto bg-white text-dark" id="divInicio" style="height: 68vh;">
                <div>
                    <div class="d-flex justify-content-end pt-2">
                        <img src="assets/jpg-1.jpg" class="img-fluid"
                            style="width: 256px; height: 256px; border-radius: 100%">
                    </div>
                    <div>
                        <p class="h2">¡Hola!</p>
                        <p class="h4">El test esta a punto de comenzar. Por favor llene todos los campos.</p>
                    </div>
                    <div class="d-flex justify-content-between" style="bottom: 20px">
                        <div class="pt-5 d-flex justify-content-start">
                            <a type="button" href="index.php" class="btn btn-secondary"
                                id="btnInicioCancelar">Cancelar</a>
                        </div>
                        <div class="pt-5 d-flex justify-content-end">
                            <button type="button" class="btn btn-success" id="btnInicioContinuar">Continuar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <form action="validacion.php" method="post">
            <section id="formElectronicInicio" style="display: none">
                <div class="progress" style="margin: 20px 0 20px 0">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 12%"></div>
                </div>
                <div class="p-5 mx-auto bg-white text-dark" style="height: 68vh;">
                    <h3>Por favor, responda todas las preguntas.</h3>
                    <div class="pt-4">
                        <p>Seleccione una respuesta en cada fila</p>
                        <hr>
                        <div>
                            <div class="d-flex justify-content-center">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <p class="h5 text-dark">¿Tiene problemas electricos?</p>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdElectronic" id="rdElectronicSi"
                                        value="0">
                                    <label class="form-check-label me-3" for="flexRadioDefault1">
                                        <p class="h5 text-dark">Si</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdElectronic" id="rdElectronicNo"
                                        value="1">
                                    <label class="form-check-label me-3" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdElectronic"
                                        id="rdElectronicNoLoSe" value="2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No lo sé</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <button type="button" class="btn btn-outline-secondary"
                                    id="btnElectronicConfirmRegresar">Regresar</button>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-success"
                                    id="btnElectronicConfirmContinuar">Continuar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="formElectronic" style="display: none;">
                <div class="progress" style="margin: 20px 0 20px 0">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                </div>
                <div class="p-5 mx-auto bg-white text-dark" style="height: 68vh;">
                    <h3>Por favor, responda todas las preguntas.</h3>
                    <div class="pt-4">
                        <p>Seleccione una respuesta en cada fila</p>
                        <hr>
                        <div>
                            <div class="d-flex justify-content-center">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <p class="h5 text-dark">¿Sus faros titilan o encienden con poca fuerza?</p>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdElectronic1"
                                        id="rdElectronic1Si" value="0">
                                    <label class="form-check-label me-3" for="flexRadioDefault1">
                                        <p class="h5 text-dark">Si</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdElectronic1"
                                        id="rdElectronic1No" value="1">
                                    <label class="form-check-label me-3" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdElectronic1"
                                        id="rdElectronic1NoLoSe" value="2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No lo sé</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <div class="d-flex justify-content-center">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <p class="h5 text-dark">¿El estereo enciende?</p>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdElectronic2"
                                        id="rdElectronic2Si" value="0">
                                    <label class="form-check-label me-3" for="flexRadioDefault1">
                                        <p class="h5 text-dark">Si</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdElectronic2"
                                        id="rdElectronic2No" value="1">
                                    <label class="form-check-label me-3" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdElectronic2"
                                        id="rdElectronic2NoLoSe" value="2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No lo sé</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <div class="d-flex justify-content-center">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <p class="h5 text-dark">¿El auto emite un crack cuando lo enciende?</p>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdElectronic3"
                                        id="rdElectronic3Si" value="0">
                                    <label class="form-check-label me-3" for="flexRadioDefault1">
                                        <p class="h5 text-dark">Si</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdElectronic3"
                                        id="rdElectronic3No" value="1">
                                    <label class="form-check-label me-3" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdElectronic3"
                                        id="rdElectronic3NoLoSe" value="2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No lo sé</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <div class="d-flex justify-content-center">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <p class="h5 text-dark">¿El tablero tiene energía?</p>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdElectronic4"
                                        id="rdElectronic4Si" value="0">
                                    <label class="form-check-label me-3" for="flexRadioDefault1">
                                        <p class="h5 text-dark">Si</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdElectronic4"
                                        id="rdElectronic4No" value="1">
                                    <label class="form-check-label me-3" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdElectronic4"
                                        id="rdElectronic4NoLoSe" value="2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No lo sé</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <button type="button" class="btn btn-outline-secondary"
                                    id="btnElectronicRegresar">Regresar</button>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-success"
                                    id="btnElectronicContinuar">Continuar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="formMotorInicio" style="display: none">
                <div class="progress" style="margin: 20px 0 20px 0">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 38%"></div>
                </div>
                <div class="p-5 mx-auto bg-white text-dark" style="height: 68vh;">
                    <h3>Por favor, responda todas las preguntas.</h3>
                    <div class="pt-4">
                        <p>Seleccione una respuesta en cada fila</p>
                        <hr>
                        <div>
                            <div class="d-flex justify-content-center">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <p class="h5 text-dark">¿Tiene problemas con el motor?</p>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdMotor" id="rdMotorSi"
                                        value="0">
                                    <label class="form-check-label me-3" for="flexRadioDefault1">
                                        <p class="h5 text-dark">Si</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdMotor" id="rdMotorNo"
                                        value="1">
                                    <label class="form-check-label me-3" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdMotor" id="rdMotorNoLoSe"
                                        value="2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No lo sé</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <button type="button" class="btn btn-outline-secondary"
                                    id="btnMotorConfirmRegresar">Regresar</button>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-success"
                                    id="btnMotorConfirmContinuar">Continuar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="formMotor" style="display: none;">
                <div class="progress" style="margin: 20px 0 20px 0">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                </div>
                <div class="p-5 mx-auto bg-white text-dark" style="height: 68vh;">
                    <h3>Por favor, responda todas las preguntas.</h3>
                    <div class="pt-4">
                        <p>Seleccione una respuesta en cada fila</p>
                        <hr>
                        <div>
                            <div class="d-flex justify-content-center">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <p class="h5 text-dark">¿Su automovil gasta mas combustible de lo debido?</p>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdMotor1" id="rdMotor1Si"
                                        value="0">
                                    <label class="form-check-label me-3" for="flexRadioDefault1">
                                        <p class="h5 text-dark">Si</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdMotor1" id="rdMotor1No"
                                        value="1">
                                    <label class="form-check-label me-3" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdMotor1" id="rdMotor1NoLoSe"
                                        value="2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No lo sé</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <div class="d-flex justify-content-center">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <p class="h5 text-dark">¿El motor se escucha muy ruidoso?</p>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdMotor2" id="rdMotor2Si"
                                        value="0">
                                    <label class="form-check-label me-3" for="flexRadioDefault1">
                                        <p class="h5 text-dark">Si</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdMotor2" id="rdMotor2No"
                                        value="1">
                                    <label class="form-check-label me-3" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdMotor2" id="rdMotor2NoLoSe"
                                        value="2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No lo sé</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <div class="d-flex justify-content-center">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <p class="h5 text-dark">¿Tiene problemas para arrancar el automovil en frio?</p>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdMotor3" id="rdMotor3Si"
                                        value="0">
                                    <label class="form-check-label me-3" for="flexRadioDefault1">
                                        <p class="h5 text-dark">Si</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdMotor3" id="rdMotor3No"
                                        value="1">
                                    <label class="form-check-label me-3" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdMotor3" id="rdMotor3NoLoSe"
                                        value="2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No lo sé</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <div class="d-flex justify-content-center">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <p class="h5 text-dark">¿Siente que su motor tiene menos fuerza que antes?</p>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdMotor4" id="rdMotor4Si"
                                        value="0">
                                    <label class="form-check-label me-3" for="flexRadioDefault1">
                                        <p class="h5 text-dark">Si</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdMotor4" id="rdMotor4No"
                                        value="1">
                                    <label class="form-check-label me-3" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdMotor4" id="rdMotor4NoLoSe"
                                        value="2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No lo sé</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <button type="button" class="btn btn-outline-secondary"
                                    id="btnMotorRegresar">Regresar</button>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-success" id="btnMotorContinuar">Continuar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="formComputadoraInicio" style="display: none;">
                <div class="progress" style="margin: 20px 0 20px 0">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 63%"></div>
                </div>
                <div class="p-5 mx-auto bg-white text-dark" style="height: 68vh;">
                    <h3>Por favor, responda todas las preguntas.</h3>
                    <div class="pt-4">
                        <p>Seleccione una respuesta en cada fila</p>
                        <hr>
                        <div>
                            <div class="d-flex justify-content-center">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <p class="h5 text-dark">¿Nota problemas en la computadora?</p>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdComputadora"
                                        id="rdComputadoraSi" value="0">
                                    <label class="form-check-label me-3" for="flexRadioDefault1">
                                        <p class="h5 text-dark">Si</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdComputadora"
                                        id="rdComputadoraNo" value="1">
                                    <label class="form-check-label me-3" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdComputadora"
                                        id="rdComputadoraNoLoSe" value="2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No lo sé</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <button type="button" class="btn btn-outline-secondary"
                                    id="btnComputadoraConfirmRegresar">Regresar</button>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-success"
                                    id="btnComputadoraConfirmContinuar">Continuar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="formComputadora" style="display: none">
                <div class="progress" style="margin: 20px 0 20px 0">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                </div>
                <div class="p-5 mx-auto bg-white text-dark" style="height: 68vh;">
                    <h3>Por favor, responda todas las preguntas.</h3>
                    <div class="pt-4">
                        <p>Seleccione una respuesta en cada fila</p>
                        <hr>
                        <div>
                            <div class="d-flex justify-content-center">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <p class="h5 text-dark">¿La luz check engine se encendio en tu tablero?</p>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdComputadora1"
                                        id="rdComputadora1Si" value="0">
                                    <label class="form-check-label me-3" for="flexRadioDefault1">
                                        <p class="h5 text-dark">Si</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdComputadora1"
                                        id="rdComputadora1No" value="1">
                                    <label class="form-check-label me-3" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdComputadora1"
                                        id="rdComputadora1NoLoSe" value="2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No lo sé</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <div class="d-flex justify-content-center">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <p class="h5 text-dark">¿La luz se mantiene encendida todo el tiempo?</p>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdComputadora2"
                                        id="rdComputadora2Si" value="0">
                                    <label class="form-check-label me-3" for="flexRadioDefault1">
                                        <p class="h5 text-dark">Si</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdComputadora2"
                                        id="rdComputadora2No" value="1">
                                    <label class="form-check-label me-3" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdComputadora2"
                                        id="rdComputadora2NoLoSe" value="2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No lo sé</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <button type="button" class="btn btn-outline-secondary"
                                    id="btnComputadoraRegresar">Regresar</button>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-success"
                                    id="btnComputadoraContinuar">Continuar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="formFrenosInicio" style="display: none">
                <div class="progress" style="margin: 20px 0 20px 0">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 87%"></div>
                </div>
                <div class="p-5 mx-auto bg-white text-dark" style="height: 68vh;">
                    <h3>Por favor, responda todas las preguntas.</h3>
                    <div class="pt-4">
                        <p>Seleccione una respuesta en cada fila</p>
                        <hr>
                        <div>
                            <div class="d-flex justify-content-center">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <p class="h5 text-dark">¿Tienes problemas con tus frenos?</p>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdFrenos" id="rdFrenosSi"
                                        value="0">
                                    <label class="form-check-label me-3" for="flexRadioDefault1">
                                        <p class="h5 text-dark">Si</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdFrenos" id="rdFrenosNo"
                                        value="1">
                                    <label class="form-check-label me-3" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdFrenos" id="rdFrenosNoLoSe"
                                        value="2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No lo sé</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <button type="button" class="btn btn-outline-secondary"
                                    id="btnFrenosConfirmRegresar">Regresar</button>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-success"
                                    id="btnFrenosConfirmContinuar">Continuar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="formFrenos" style="display: none">
                <div class="progress" style="margin: 20px 0 20px 0">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                </div>
                <div class="p-5 mx-auto bg-white text-dark" style="height: 68vh;">
                    <h3>Por favor, responda todas las preguntas.</h3>
                    <div class="pt-4">
                        <p>Seleccione una respuesta en cada fila</p>
                        <hr>
                        <div>
                            <div class="d-flex justify-content-center">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <p class="h5 text-dark">¿Cuando frenas escuchas un chillido agudo?</p>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdFrenos1" id="rdFrenos1Si"
                                        value="0">
                                    <label class="form-check-label me-3" for="flexRadioDefault1">
                                        <p class="h5 text-dark">Si</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdFrenos1" id="rdFrenos1No"
                                        value="1">
                                    <label class="form-check-label me-3" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdFrenos1" id="rdFrenos1NoLoSe"
                                        value="2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No lo sé</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <div class="d-flex justify-content-center">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <p class="h5 text-dark">¿Al frenas siente que tarda mas?</p>
                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdFrenos2" id="rdFrenos2Si"
                                        value="0">
                                    <label class="form-check-label me-3" for="flexRadioDefault1">
                                        <p class="h5 text-dark">Si</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdFrenos2" id="rdFrenos2No"
                                        value="1">
                                    <label class="form-check-label me-3" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdFrenos2" id="rdFrenos2NoLoSe"
                                        value="2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <p class="h5 text-dark">No lo sé</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <button type="button" class="btn btn-outline-secondary"
                                    id="btnFrenosRegresar">Regresar</button>
                            </div>
                            <div class="">
                            <button type="button" class="btn btn-success"
                                    id="btnFrenosContinuar">Continuar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="finalizar" style="display: none">
                <div class="progress" style="margin: 20px 0 20px 0">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                </div>
                <div class="p-5 mx-auto bg-white text-dark" style="height: 68vh;">
                    <h3>Por favor, presione finalizar.</h3>
                    <div class="pt-4">
                        <hr>
                        <div>
                            <div class="d-flex justify-content-center">
                                <input class="btn btn-success" type="submit" value="Finalizar">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
    <?php require 'php/footer.php' ?>
</body>

</html>