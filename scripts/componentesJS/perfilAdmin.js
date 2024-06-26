// ETIQUETAS OBTENIDAS EN LA PAGINA

// Formulario datos de la cuenta
const formu = document.querySelector('.datos_cuenta');

// Guardar valores iniciales de los inputs
let valoresInicialesUsuario;

// Mensajes de validación
const mensajePrincipal = document.querySelector('.inputGeneral');
const mensajeTelefonoValidacion = document.querySelector('.inputTelefono');
const mensajeCorreoValidacion = document.querySelector('.inputCorreo');

// Contenedor del formulario de los datos
const contenedorFormulario = document.getElementById('formularioPrincipal');

// Contenedor del formulario de los datos
const mainForm = document.getElementById('formularioPrincipal');

// Ventana emergente
const alertaEmergente = document.getElementById('alerta');

// EVENTOS

// Obtención de los valores del teléfono, correo, nombre y número de documento al cargar la página
window.addEventListener("load", () => {
    const inputsUsuario = formu.querySelectorAll('#correo, #celular, #nombre, #documento, #apellidos, #tipo_documento');
    valoresInicialesUsuario = Array.from(inputsUsuario).map(input => input.value);
});

// Prevención del envío automático del formulario de perfil para administradores y manejo de respuestas
formu.addEventListener('submit', function(e) {
    e.preventDefault();

    const inputsUsuario = formu.querySelectorAll('#correo, #celular, #nombre, #documento, #apellidos, #tipo_documento');
    const nuevosValoresUsuario = Array.from(inputsUsuario).map(input => input.value);

    const sonIgualesUsuario = JSON.stringify(valoresInicialesUsuario) === JSON.stringify(nuevosValoresUsuario);
    console.log(sonIgualesUsuario);

    if (sonIgualesUsuario) {
        mensajePrincipal.classList.remove('oculto');
        mensajePrincipal.textContent = "No se ha realizado ningún cambio";
        if (!mensajeCorreoValidacion.classList.contains('oculto')) {
            mensajeCorreoValidacion.classList.add('oculto');
        }
        if (!mensajeTelefonoValidacion.classList.contains('oculto')) {
            mensajeTelefonoValidacion.classList.add('oculto');
        }
    } else {
        let form = new FormData(formu);
        fetch('../../../Proyecto_SendApp_2024/bases/mainInterfaz/backend/actualizarAdmin.php', {
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
            console.log(data);
            switch (data.success) {
                case 0:
                    contenedorFormulario.style.display = 'none';
                    alertaEmergente.style.display = 'flex';
                    alertaEmergente.style.zIndex = '999';
                    setTimeout(function(){
                        location.reload();
                    }, 2000);
                    break;
                case 1:
                    mensajeCorreoValidacion.classList.remove('oculto');
                    mensajeCorreoValidacion.textContent = 'El correo electrónico debe ser similiar al siguiente formato: usuario@dominio.com';
                    break;
                case 2:
                    mensajeTelefonoValidacion.classList.remove('oculto');
                    mensajeTelefonoValidacion.textContent = 'El número telefónico no debe contener letras ni caracteres especiales';
                    break;
                case 3:
                    mensajeTelefonoValidacion.classList.remove('oculto');
                    mensajeTelefonoValidacion.textContent = 'El número de teléfono debe tener una longitud válida para numeros colombianos (10 o 15 digitos)';
                    break;
                case 4:
                    mensajePrincipal.classList.remove('oculto');
                    mensajePrincipal.textContent = "El número de documento debe contener solo números y tener una longitud de cinco (5) o más digitos";
                    break;
                case 5:
                    mensajePrincipal.classList.remove('oculto');
                    mensajePrincipal.textContent = "Ya existe una cuenta con ese numero de coumento en el sistema";
                    break;
                case 6:
                    mensajePrincipal.classList.remove('oculto');
                    mensajePrincipal.textContent = "Todos los campos son obligatorios";
                    break;
                case 7:
                    alert("No deberías estar aquí");
                    setTimeout(function(){
                        location.reload();
                    }, 2000);                        
                    break;
                case 8:
                    mensajePrincipal.classList.remove('oculto');
                    mensajePrincipal.textContent = "No se realizó ningún cambio";
                    break;
                case 9:
                    mensajeCorreoValidacion.classList.remove('oculto');
                    mensajeCorreoValidacion.textContent = 'El correo electronico y esta registrado en el sistema';
                    break;
                default:
                    console.log("Error inesperado: Código de éxito no reconocido.");
                    break;
            }
        })
        .catch(error => {
            console.error(error);
        });
    }
});