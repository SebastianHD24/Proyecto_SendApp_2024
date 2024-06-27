// ETIQUETAS OBTENIDAS EN LA PÁGINA

// Formulario para modificar la contraseña
const formContraseña = document.querySelector('.formCambiarContraseña');

// Mensaje para el estado de la contraseña
const mensajeContraseña = document.querySelector('.mensajeContraseña');

// Contenedor del formulario de la contraseña
const contraseña = document.getElementById('cambiarContraseña');

// Botón para ocultar, mostrar y enviar formularios
const botonContraseña = document.querySelectorAll('.btn-cambiar');
const botonConfirmar = document.getElementById('btnConfirmarcontra');

// EVENTOS

// Prevencion del envio del formulario de contraseña de forma automatica, evalua la respuesta del servidor para manejar las respuestas al usuario
formContraseña.addEventListener('submit', function(e) {
    e.preventDefault();
    let formData = new FormData(formContraseña);
    fetch('../../../Proyecto_SendApp_2024/bases/mainInterfaz/backend/actualizarContrasena.php', {
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
        console.log(data);
        if (data.contra === 0) {
            contraseña.style.display = 'none';
            alerta.style.display = 'flex';
            alerta.style.zIndex = '999';
            setTimeout(function(){
                location.reload();
            }, 3000);
        } else {
            switch (data.contra) {
                case 1:
                    mensajeContraseña.classList.remove('oculto');
                    mensajeContraseña.textContent = 'Contraseña actual incorrecta.';
                    break;
                case 2:
                    mensajeContraseña.classList.remove('oculto');
                    mensajeContraseña.textContent = 'La contraseña debe tener al menos 6 caracteres, una mayúscula, un número y un carácter especial.';
                    break;
                case 3:
                    mensajeContraseña.classList.remove('oculto');
                    mensajeContraseña.textContent = 'Digite la contraseña nueva correctamente';
                    break;
                case 4:
                    mensajeContraseña.classList.remove('oculto');
                    mensajeContraseña.textContent = 'La contraseña nueva es igual a la anterior';
                    break;
                default:
                    console.log("Error inesperado: Código de éxito no reconocido.");
                    break;
            }
        }
    })
    .catch(error => {
        console.error('Error en la solicitud:', error);
    });
    
});

// Se crea la función para que el botón de cambiar contraseña muestre el formulario de cambio de contraseña y oculte el formulario principal.
botonContraseña.forEach(boton => {
    boton.addEventListener('click', function(){
        if (contraseña.style.display === 'block'){
            mainForm.style.display = 'block';
            contraseña.style.display = 'none';
        } else {
            mainForm.style.display = 'none';
            contraseña.style.display = 'block';
        }
    }); 
});