
let modal = document.getElementById("myModal");
let form = document.getElementById("formularioo");
let btnEnviar = document.getElementById("btnEnviar");

    // Agregar un evento de escucha para al botón enviar del formulario
    btnEnviar.addEventListener('click', function() {
        // Redirigir a la página especificada en la respuesta del servidor
        form.style.display = "none";
        modal.style.display = "block";
        setTimeout(function () {
            window.location.href = "../../interfaces/Usuario/usuarioSesion.php"; 
        }, 3000);
    });