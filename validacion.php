<?php
    session_start();

    $_SESSION['rdElectronic1'] = $_POST['rdElectronic1'];
    $_SESSION['rdElectronic2'] = $_POST['rdElectronic2'];
    $_SESSION['rdElectronic3'] = $_POST['rdElectronic3'];
    $_SESSION['rdElectronic4'] = $_POST['rdElectronic4'];

    $_SESSION['rdMotor1'] = $_POST['rdMotor1'];
    $_SESSION['rdMotor2'] = $_POST['rdMotor2'];
    $_SESSION['rdMotor3'] = $_POST['rdMotor3'];
    $_SESSION['rdMotor4'] = $_POST['rdMotor4'];

    $_SESSION['rdComputadora1'] = $_POST['rdComputadora1'];
    $_SESSION['rdComputadora2'] = $_POST['rdComputadora2'];

    $_SESSION['rdFrenos1'] = $_POST['rdFrenos1'];
    $_SESSION['rdFrenos2'] = $_POST['rdFrenos2'];

    header('Location: resultados.php');
?>