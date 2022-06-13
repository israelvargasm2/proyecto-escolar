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
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/f77fa81769.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php require 'php/header.php'?>
    <!-- Header-->
    <header class="py-5">
        <div class="container px-lg-5" style="">
            <div class="p-4 p-lg-5 rounded-3 text-center"
                style="background-image: url('assets/png-2.png'); background-size: cover; background-repeat:no-repeat; background-position: 0% 10%;">
                <div class="m-4 m-lg-5">
                    <h1 class="display-5 fw-bold text-light">¿Qué le preocupa sobre el funcionamiento de su auto?</h1>
                    <p class="fs-4 text-light">Revise los problemas y averigue qué podría ser la causa del problema. Es
                        rápido, gratis y anónimo.</p>
                    <button type="button" class="btn btn-info btn-lg" id="btnStart" onclick="btnIniciar()">Empezar diágnostico ahora.</button>
                </div>
            </div>
        </div>
    </header>
    <!-- Page Content-->
    <?php require 'php/footer.php' ?>
    <script>
    function btnIniciar() {
        <?php if(!empty($user)): ?>
        window.location.href = "test.php";
        <?php else: ?>
        alert("Por favor inicie sesion primero.");
        <?php endif; ?>
    }
    </script>
</body>

</html>