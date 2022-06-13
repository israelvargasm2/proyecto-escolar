var sectionInicio = document.getElementById("sectionInicio");
var formElectronicInicio = document.getElementById("formElectronicInicio");
var formElectronic = document.getElementById("formElectronic");
var formMotorInicio = document.getElementById("formMotorInicio");
var formMotor = document.getElementById("formMotor");

var btnInicioContinuar = document.getElementById("btnInicioContinuar");
var btnElectronicConfirmRegresar = document.getElementById("btnElectronicConfirmRegresar");
var btnElectronicConfirmContinuar = document.getElementById("btnElectronicConfirmContinuar");
var btnElectronicRegresar = document.getElementById("btnElectronicRegresar");
var btnElectronicContinuar = document.getElementById("btnElectronicContinuar");
var btnMotorConfirmRegresar = document.getElementById("btnMotorConfirmRegresar");
var btnMotorConfirmContinuar = document.getElementById("btnMotorConfirmContinuar");
var btnMotorRegresar = document.getElementById("btnMotorRegresar");
var btnMotorContinuar = document.getElementById("btnMotorContinuar");

btnInicioContinuar.addEventListener("click", function() {
    sectionInicio.style.display = 'none';
    formElectronicInicio.style.display = 'block';
});

btnElectronicConfirmRegresar.addEventListener("click", function() {
    sectionInicio.style.display = 'block';
    formElectronicInicio.style.display = 'none';
});

btnElectronicConfirmContinuar.addEventListener("click", function() {
    var rdElectronic = document.querySelector('input[name="rdElectronic"]:checked').value;
    //code
    if (rdElectronic == '0'){
        formElectronicInicio.style.display = 'none';
        formElectronic.style.display = 'block';
    }
});

btnElectronicRegresar.addEventListener("click", function() {
    formElectronic.style.display = 'none';
    formElectronicInicio.style.display = 'block';
});

btnElectronicContinuar.addEventListener("click", function() {
    var rdElectronic1 = document.querySelector('input[name="rdElectronic1"]:checked').value;
    var rdElectronic2 = document.querySelector('input[name="rdElectronic2"]:checked').value;
    var rdElectronic3 = document.querySelector('input[name="rdElectronic3"]:checked').value;
    var rdElectronic4 = document.querySelector('input[name="rdElectronic4"]:checked').value;

    if (rdElectronic1 === null || rdElectronic2 === null || rdElectronic3 === null || rdElectronic4 === null){
        alert("Por favor llene todos los campos.");
    } else {
        formElectronic.style.display = 'none';
        formMotorInicio.style.display = 'block';
    }
});

btnMotorConfirmRegresar.addEventListener("click", function() {
    formMotorInicio.style.display = 'none';
    formElectronic.style.display = 'block';
});

btnMotorConfirmContinuar.addEventListener("click", function() {
    var rdMotor = document.querySelector('input[name="rdMotor"]:checked').value;
    if (rdMotor == '0'){
        formMotorInicio.style.display = 'none';
        formMotor.style.display = 'block';
    }
});

btnMotorRegresar.addEventListener("click", function() {
    formMotor.style.display = 'none';
    formMotorInicio.style.display = 'block';
});

btnMotorContinuar.addEventListener("click", function() {

});