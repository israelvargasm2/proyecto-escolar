<?php

  require 'php/database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = '!Registrado correctamente! Por favor inicie sesión';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Signup</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
    <?php require 'php/header.php'?>

    <div class="container">
        <div class="mx-auto" style="max-width: 450px; padding: 100px 0 0 0;">
            <h1>Registrarme</h1>
            <form action="signup.php" method="post">
                <div class="form-group" style="padding-top: 20px">
                    <label for="exampleInputEmail1">Dirección de email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="example@correo.com">
                </div>
                <div class="form-group" style="padding-top: 20px">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Contraseña">
                </div>
                <div class="form-group" style="padding-top: 20px">
                    <label for="exampleInputPassword2">Confirmar contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword2" name="passwordConf" placeholder="Confirmar contraseña">
                </div>
                <div class="form-group d-flex justify-content-end" style="padding: 20px 0 20px 0;">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
                <?php if(!empty($message)): ?>
                    <div class="alert alert-success" role="alert">
                    <?= $message ?>
                    </div>
                <?php endif; ?>
            </form>
        </div>
    </div>
    <?php require 'php/footer.php' ?>
</body>
</html>