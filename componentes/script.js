let text = document.getElementById("descrip-solicitarCitas");//texto encima del formulario de agendar cita
let modal = document.getElementById("alerta");
let form = document.getElementById("formularioo");
let btnEnviar = document.getElementById("btnEnviar");

// Agregar un evento de escucha para al botón enviar del formulario
btnEnviar.addEventListener('click', function() {
    // Redirigir a la página especificada en la respuesta del servidor
    text.style.display = "none";
    form.style.display = "none";
    modal.style.display = "flex";
    setTimeout(function () {
        window.location.href = "../../interfaces/Usuario/usuarioSesion.php"; 
    }, 2000);
});