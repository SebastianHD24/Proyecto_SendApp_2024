//ETIQUETAS OBTENIDAS EN LA PAGINA

//Formulario datos de la cuenta 
const formulario = document.querySelector('.datos_cuenta');

//Guardar valores iniciales de los inputs
let valoresIniciales;

//Guardar valores nuevos ingresados por el usuario
let valoresNuevos = [];

//Mensaje para verificar que se hicieron cambio de valores
const mensajeGeneral = document.querySelector('.inputGeneral');

//Mensaje para el input de Telefono
const mensajeTelefono = document.querySelector('.inputTelefono');

//Mensaje para el input de Correo
const mensajeCorreo = document.querySelector('.inputCorreo');

//Formulario para modificar la contraseña
const formContraseña = document.querySelector('.formCambiarContraseña')

//Mensaje para el estado de la contraseña
const mensajeContraseña = document.querySelector('.mensajeContraseña');

//Contenedor del formulario de la contraseña
const contraseña = document.getElementById('cambiarContraseña');

//contenedor del formulario de los datos
const mainForm = document.getElementById('formularioPrincipal');

//Ventana emergente
const alerta = document.getElementById('alerta');

//boton para ocultar, mostrar y envar formularios 
const botonContraseña = document.querySelectorAll('.btn-cambiar');
const botonConfirmar = document.getElementById('btnConfirmarcontra');

//EVENTOS

//Obtencion de los valores del telefono y el correo
window.addEventListener("load", () => {
    const inputs = formulario.querySelectorAll('#correo, #celular');

    const arrayInputs = Array.from(inputs);
  
    valoresIniciales = arrayInputs.map(input => input.value);
});


//Prevencion del envio del formulario de contraseña de forma automatica, evalua la respuesta del servidor para manejar las respuestas al usuario
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
            },3000);
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
                break;
            }
        }
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


//Prevencion del envio del formulario de perfiles de forma automatica, evalua la respuesta del servidor para manejar las respuestas al usuario
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
            body:  form
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Hubo un error en la solicitud.');
            }
            return response.json();
        })
        .then(data => {
            if (data.success === 0) {
                mainForm.style.display = 'none';
                alerta.style.display = 'flex';
                alerta.style.zIndex = '999';
                setTimeout(function(){
                    location.reload();
                },2000);
            } else {
                switch (data.success) {
                    case 1:
                        mensajeCorreo.classList.remove('oculto');
                        mensajeCorreo.textContent = 'Verifique que su correo cumpla con los siguientes requisitos: contener un símbolo "@", tener al menos un punto "." después del símbolo "@", tener al menos 5 caracteres de longitud';
                        break;
                    case 2:
                        mensajeTelefono.classList.remove('oculto');
                        mensajeTelefono.textContent = 'Los números telefónicos no llevan letras ni caracteres';
                        break;
                    case 3:
                        mensajeTelefono.classList.remove('oculto');
                        mensajeTelefono.textContent = 'Solo se permiten números celulares y fijos de Colombia';
                        break;
                    default:
                        break;
                }
                if (!mensajeGeneral.classList.contains('oculto')) {
                    mensajeGeneral.classList.add('oculto');
                }
            }
        })
        .catch(error => {
            console.error(error);
        });
    }
});