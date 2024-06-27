// Obtener el formulario de recuperación de contraseña
const form = document.querySelector('.formularioContra');

// Obtener el elemento donde se mostrarán los mensajes de error o éxito
const mensajeError = document.getElementById('mensaje_error');

// Escuchar el evento de envío del formulario
form.addEventListener('submit', function(e) {
    // Prevenir el comportamiento por defecto del formulario (enviar y recargar la página)
    e.preventDefault();

    // Obtener los datos del formulario
    let formData = new FormData(form);

    // Realizar una solicitud POST al servidor
    fetch('../../../Proyecto_SendApp_2024/scripts/email/recuContra.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Hubo un error en la solicitud.');
        }
        return response.json();
    })
    .then(data => {
        console.log(data.success)
        // Manejar la respuesta del servidor
        switch (data.success) {
            case 0:
                // Éxito: redirigir o mostrar mensaje de éxito
                mensajeError.textContent = 'Se ha enviado un correo con una contraseña temporal (el correo puede tardar en llegar, por favor sea paciente)';
                mensajeError.style.color = "green";
                break;
            case 1:
                // No existe una cuenta con esos datos
                mensajeError.textContent = 'No existe una cuenta en el sistema con esos datos';
                break;
            case 2:
                // Error inesperado
                mensajeError.textContent = 'Ocurrió un error inesperado. Por favor, inténtelo más tarde';
                break;
            default:
                break;
        }
    })
    .catch(error => {
        console.error('Error en la puto:', error);
    });
});