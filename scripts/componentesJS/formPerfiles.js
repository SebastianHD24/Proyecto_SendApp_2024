// ETIQUETAS OBTENIDAS EN LA PÁGINA

// Formulario datos de la cuenta
const formulario = document.querySelector('.datos_cuenta');

// Guardar valores iniciales de los inputs
let valoresIniciales;

// Mensaje para verificar que se hicieron cambios de valores
const mensajeGeneral = document.querySelector('.inputGeneral');

// Mensaje para el input de Telefono
const mensajeTelefono = document.querySelector('.inputTelefono');

// Mensaje para el input de Correo
const mensajeCorreo = document.querySelector('.inputCorreo');

// Contenedor del formulario de los datos
const mainForm = document.getElementById('formularioPrincipal');

// Ventana emergente
const alerta = document.getElementById('alerta');

// EVENTOS

// Obtencion de los valores del telefono y el correo
window.addEventListener("load", () => {
    const inputs = formulario.querySelectorAll('#correo, #celular');
    const arrayInputs = Array.from(inputs);
  
    valoresIniciales = arrayInputs.map(input => input.value);
});

// Prevencion del envio del formulario de perfiles de forma automatica, evalua la respuesta del servidor para manejar las respuestas al usuario
formulario.addEventListener('submit', function(e) {
    e.preventDefault();

    const inputs = formulario.querySelectorAll('#correo, #celular');
    const nuevosValores = Array.from(inputs).map(input => input.value);

    const sonIguales = JSON.stringify(valoresIniciales) === JSON.stringify(nuevosValores);

    if (sonIguales) {
        mensajeGeneral.classList.remove('oculto');
        mensajeGeneral.textContent = "No se ha realizado ningún cambio";
        if (!mensajeCorreo.classList.contains('oculto')) {
            mensajeCorreo.classList.add('oculto');
        }
        if (!mensajeTelefono.classList.contains('oculto')) {
            mensajeTelefono.classList.add('oculto');
        }
    } else {
        let form = new FormData(formulario);
        fetch('../../../Proyecto_SendApp_2024/bases/mainInterfaz/backend/actualizarPerfil.php', {
            method: 'POST',
            body: form
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Hubo un error en la solicitud.');
            }
            return response.json();
        })
        .then(data => {
            switch (data.success) {
                case 0:
                    mainForm.style.display = 'none';
                    alerta.style.display = 'flex';
                    alerta.style.zIndex = '999';
                    setTimeout(function(){
                        location.reload();
                    }, 2000);
                    break;
                case 1:
                    mensajeCorreo.classList.remove('oculto');
                    mensajeCorreo.textContent = 'El correo electrónico debe ser similiar al siguiente formato: usuario@dominio.com';
                    break;
                case 2:
                    mensajeTelefono.classList.remove('oculto');
                    mensajeTelefono.textContent = 'El número telefónico no debe contener letras ni caracteres especiales.';
                    break;
                case 3:
                    mensajeTelefono.classList.remove('oculto');
                    mensajeTelefono.textContent = 'Solo se permiten números celulares y fijos de Colombia.';
                    break;
                case 4:
                    mensajeCorreo.classList.remove('oculto');
                    mensajeCorreo.textContent = 'Correo ya registrado.';
                    break;
                default:
                    console.log("Error inesperado: Código de éxito no reconocido.");
                    break;
            }
            if (!mensajeGeneral.classList.contains('oculto')) {
                mensajeGeneral.classList.add('oculto');
            }
        })
        .catch(error => {
            console.error('Error en la solicitud:', error);
        });
    }
});