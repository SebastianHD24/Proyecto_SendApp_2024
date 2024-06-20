let form = document.getElementById("formularioo"); // Formulario
let alerta = document.getElementById("alerta"); // Ventana emergente de éxito
let alerta2 = document.getElementById("alerta2"); // Ventana emergente de error
let text = document.getElementById("descrip-solicitarCitas"); // Texto de descripción

// Agregar un evento de escucha para el envío del formulario
form.addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar el envío por defecto del formulario

    // Realizar la solicitud AJAX para enviar los datos
    let formData = new FormData(form);

    fetch('../../../../Proyecto_SendApp_2024/bases/mainInterfaz/backend/guardarCita.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success === 1) {
            // Mostrar mensaje de éxito y recargar la página después de 2 segundos
            alerta.style.display = 'flex';
            setTimeout(function () {
                window.location.reload();
            }, 2000);
        } else {
            // Mostrar mensaje de error y recargar la página después de 2 segundos
            alerta2.style.display = 'flex';
            setTimeout(function () {
                window.location.reload();
            }, 2000);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Ocurrió un error al procesar la solicitud.');
    });
});