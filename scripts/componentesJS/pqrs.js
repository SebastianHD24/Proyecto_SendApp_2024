let btnEnviar = document.getElementById("btnEnviar");

let modal = document.getElementById("myModal");
let formPQR = document.getElementById('mainContent');

document.addEventListener("DOMContentLoaded", function() {
    // Obtener referencia al formulario
    let form = document.getElementById("formulario");

    // Agregar un evento de escucha para el evento submit del formulario
    form.addEventListener('submit', function(e) {
        // Prevenir el comportamiento por defecto del formulario (enviar y recargar la página)
        e.preventDefault();

        // Obtener datos del formulario
        let formData = new FormData(form);

        // Realizar una solicitud POST al servidor
        fetch('../../bases/mainInterfaz/backend/agregarpqrs.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json()) // Convertir la respuesta a JSON
        .then(data => {
            // Manejar la respuesta del servidor aquí
            if (data.success == 1) {
                alert('Debes agregar una descripcion de tu PQRS')
            }else if (data.success == 2) {
                // Redirigir a la página especificada en la respuesta del servidor
                modal.style.display = "block";
                formPQR.style.display = "none";

                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
        })
        .catch(error => console.error('Error:', error));
    });
});




