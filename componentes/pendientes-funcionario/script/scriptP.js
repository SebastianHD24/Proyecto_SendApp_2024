let ventana = document.getElementById('ventana'); //contenido ventana emergente de confirmar agendamiento
let modal = document.getElementById("myModal"); //contenido ventana emergente de rechazo

let formulario1 = document.getElementById('form1');
let formulario2 = document.getElementById('form2');

// mostrar contenido confirmar agendamiento
function confirmar() {
    document.getElementById('datosA').style.display = "none";
    document.getElementById('conf-agen').style.display = "block";
}

// volver a datos del aprendiz desde confirmar agendamiento
function volver(){
    document.getElementById('conf-agen').style.display = "none";
    document.getElementById('datosA').style.display = "block";
    document.getElementById('ventana').style.display = "none";
}

// mostrar contenido de rechazar agendamiento
function mostrar(){
    document.getElementById('datosA').style.display = "none";
    document.getElementById('contenedor').style.display = "block";
}

// volver a datos del aprendiz de rechazo agendamiento
function volver2(){
    document.getElementById('contenedor').style.display = "none";
    document.getElementById('datosA').style.display = "block";
}

// mostrar ventana emergente al dar click en enviar en confirmar agendamiento
function ver1(){
    formulario1.addEventListener("submit", function (e) {
        e.preventDefault();
        ventana.style.display = "block";
    });

    setTimeout(function () {
        ventana.style.display = "none";
    }, 3000);
}

function ver2() {
    formulario2.addEventListener("submit", function (e) {
        e.preventDefault();
        modal.style.display = "block";
    });

    setTimeout(function () {
        modal.style.display = "none";
    }, 3000);
}