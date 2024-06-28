let btnEnviar = document.getElementById("btnEnviar");
let modal1 = document.getElementById("alerta");
let modal2 = document.getElementById("alerta2");
let formPQR = document.getElementById('mainContent');
let tituloModal = document.querySelector(".tituloM");
let descripcionModal = document.querySelector(".descripcionM");

document.addEventListener("DOMContentLoaded", function() {
    // Obtener referencia al formulario
    let form = document.getElementById("formulario");

    // Agregar un evento de escucha para el evento submit del formulario
    form.addEventListener('submit', function(e) {
        // Prevenir el comportamiento por defecto del formulario (enviar y recargar la página)
        e.preventDefault();

        // Obtener el valor del campo de descripción
        let descripcion = document.getElementById("text").value.trim();

        // Verificar si la descripción está vacía
        if (descripcion === "") {
            // Mostrar el modal con el mensaje de error
            // tituloModal.textContent = "Error";
            // descripcionModal.textContent = "Debes agregar una descripción de tu PQRS";
            modal2.style.display = "flex";
            
            setTimeout(function () {
                location.reload();
            }, 2000);
        } else {
            // Si la descripción no está vacía, continuar con el envío del formulario

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
                if (data.success == 2) {
                    // Mostrar el modal con el mensaje de éxito
                    // tituloModal.textContent = "¡Éxito!";
                    // descripcionModal.textContent = "¡PQR enviada con éxito!";
                    modal1.style.display = "flex";
                    formPQR.style.display = "none";

                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }
            })
            .catch(error => console.error('Error:', error));
        }
    });
});
