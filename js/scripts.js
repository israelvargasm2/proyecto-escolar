$(document).ready(function () {
    $("#btnInicioContinuar").click(function (e){
        e.preventDefault();
        $("#sectionInicio").hide();
        $("#formElectronicInicio").show();
    });

    $("#btnElectronicConfirmRegresar").click(function (e) { 
        e.preventDefault();
        $("#formElectronicInicio").hide();
        $("#sectionInicio").show();
    });

    $("#btnElectronicConfirmContinuar").click(function (e) {
        e.preventDefault();
        if (typeof $("input[name='rdElectronic']:checked").val() === 'undefined'){
            alert("Por favor llene todos los campos.");
        } else {
            if ($("input[name='rdElectronic']:checked").val() == '0' || $("input[name='rdElectronic']:checked").val() == '2'){
                $("#formElectronicInicio").hide();
                $("#formElectronic").show();
            } else {
                $("#rdElectronic1No").prop("checked", true);
                $("#rdElectronic2Si").prop("checked", true);
                $("#rdElectronic3No").prop("checked", true);
                $("#rdElectronic4Si").prop("checked", true);
                $("#formElectronicInicio").hide();
                $("#formMotorInicio").show();
            }
        }
    });

    $("#btnElectronicRegresar").click(function (e) { 
        e.preventDefault();
        $("#formElectronic").hide();
        $("#formElectronicInicio").show();
    });

    $("#btnElectronicContinuar").click(function (e) { 
        e.preventDefault();
        if (typeof $("input[name='rdElectronic1']:checked").val() === 'undefined' || typeof $("input[name='rdElectronic2']:checked").val() === 'undefined' || typeof $("input[name='rdElectronic3']:checked").val() === 'undefined' || typeof $("input[name='rdElectronic4']:checked").val() === 'undefined') {
            alert("Por favor llene todos los campos.");
        } else {
            $("#formElectronic").hide();
            $("#formMotorInicio").show();
        }
    });

    $("#btnMotorConfirmRegresar").click(function (e) { 
        e.preventDefault();
        $("#formMotorInicio").hide();
        $("#formElectronic").show();
    });

    $("#btnMotorConfirmContinuar").click(function (e) { 
        e.preventDefault();
        if (typeof $("input[name='rdMotor']:checked").val() === 'undefined'){
            alert("Por favor llene todos los campos.");
        } else {
            if ($("input[name='rdMotor']:checked").val() == '0' || $("input[name='rdMotor']:checked").val() == '2'){
                $("#formMotorInicio").hide();
                $("#formMotor").show();
            } else {
                $("#rdMotor1No").prop("checked", true);
                $("#rdMotor2No").prop("checked", true);
                $("#rdMotor3No").prop("checked", true);
                $("#rdMotor4No").prop("checked", true);
                $("#formMotorInicio").hide();
                $("#formComputadoraInicio").show();
            }
        }
    });

    $("#btnMotorRegresar").click(function (e) { 
        e.preventDefault();
        $("#formMotor").hide();
        $("#formMotorInicio").show();
    });

    $("#btnMotorContinuar").click(function (e) { 
        e.preventDefault();
        if (typeof $("input[name='rdMotor1']:checked").val() === 'undefined' || typeof $("input[name='rdMotor2']:checked").val() === 'undefined' || typeof $("input[name='rdMotor3']:checked").val() === 'undefined' || typeof $("input[name='rdMotor4']:checked").val() === 'undefined') {
            alert("Por favor llene todos los campos.");
        } else {
            $("#formMotor").hide();
            $("#formComputadoraInicio").show();
        }
    });

    $("#btnComputadoraConfirmRegresar").click(function (e) { 
        e.preventDefault();
        $("#formComputadoraInicio").hide();
        $("#formMotor").show();
    });

    $("#btnComputadoraConfirmContinuar").click(function (e) { 
        e.preventDefault();
        if (typeof $("input[name='rdComputadora']:checked").val() === 'undefined'){
            alert("Por favor llene todos los campos.");
        } else {
            if ($("input[name='rdComputadora']:checked").val() == '0' || $("input[name='rdComputadora']:checked").val() == '2'){
                $("#formComputadoraInicio").hide();
                $("#formComputadora").show();
            } else {
                $("#rdComputadora1No").prop("checked", true);
                $("#rdComputadora2No").prop("checked", true);
                $("#formComputadoraInicio").hide();
                $("#formFrenosInicio").show();
            }
        }
    });

    $("#btnComputadoraRegresar").click(function (e) { 
        e.preventDefault();
        $("#formComputadora").hide();
        $("#formComputadoraInicio").show();
    });

    $("#btnComputadoraContinuar").click(function (e) { 
        e.preventDefault();
        if (typeof $("input[name='rdComputadora1']:checked").val() === 'undefined' || typeof $("input[name='rdComputadora2']:checked").val() === 'undefined') {
            alert("Por favor llene todos los campos.");
        } else {
            $("#formComputadora").hide();
            $("#formFrenosInicio").show();
        }
    });

    $("#btnFrenosConfirmRegresar").click(function (e) { 
        e.preventDefault();
        $("#formFrenosInicio").hide();
        $("#formComputadora").show();
    });

    $("#btnFrenosConfirmContinuar").click(function (e) { 
        e.preventDefault();
        if (typeof $("input[name='rdFrenos']:checked").val() === 'undefined'){
            alert("Por favor llene todos los campos.");
        } else {
            if ($("input[name='rdFrenos']:checked").val() == '0' || $("input[name='rdFrenos']:checked").val() == '2'){
                $("#formFrenosInicio").hide();
                $("#formFrenos").show();
            } else {
                $("#rdFrenos1No").prop("checked", true);
                $("#rdFrenos2No").prop("checked", true);
                $("#formFrenosInicio").hide();
                $("#finalizar").show();
            }
        }
    });

    $("#btnFrenosRegresar").click(function (e) { 
        e.preventDefault();
        $("#formFrenos").hide();
        $("#formFrenosInicio").show();
    });

    $("#btnFrenosContinuar").click(function (e) { 
        e.preventDefault();
        if (typeof $("input[name='rdFrenos1']:checked").val() === 'undefined' || typeof $("input[name='rdFrenos2']:checked").val() === 'undefined') {
            alert("Por favor llene todos los campos.");
        } else {
            $("#formFrenos").hide();
            $("#finalizar").show();
        }
    });
});