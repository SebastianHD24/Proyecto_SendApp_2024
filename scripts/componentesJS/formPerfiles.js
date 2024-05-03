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

//
const mainForm = document.getElementById('formularioPrincipal');
const alerta = document.getElementById('alerta');
//BOTOBES
const botonContraseña = document.querySelectorAll('.btn-cambiar');
const botonConfirmar = document.getElementById('btnConfirmarcontra');

//EVENTOS

//Obtencion de los valores del telefono y el correo
window.addEventListener("load", () => {
    const inputs = formulario.querySelectorAll('#correo, #celular');

    const arrayInputs = Array.from(inputs);
  
    valoresIniciales = arrayInputs.map(input => input.value);
});

//Prevencion del envio del formulario de forma automatica, evalua que la respuesta del servidor para manejar las posibles respuestas
formContraseña.addEventListener('submit', function(e) {
    e.preventDefault();
    let formData = new FormData(formContraseña);
    fetch('../../../Proyecto_SendApp_2024/bases/mainInterfaz/backend/actualizarPerfil/actualizarContrasena.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        if (data.success === 0) {
            alert("¡Actualizacion exitosa!");
            location.reload();
          } else {
            switch (data.success) {
              case 1:
                mensajeContraseña.classList.remove('oculto');
                mensajeContraseña.textContent = 'La contraseña nueva es igual a la anterior.';
                break;
              default:
                mensajeContraseña.classList.remove('oculto');
                mensajeContraseña.textContent = jsonData.success;
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
/*botonConfirmar.addEventListener('click',function(e){
    e.preventDefault();
    contraseña.style.display = 'none';
    mainForm.style.display = 'none';
    alerta.style.display = 'block';

        setTimeout(function(){
            alerta.style.display = 'none';
            mainForm.style.display = 'block';
        },2000);
}); */
