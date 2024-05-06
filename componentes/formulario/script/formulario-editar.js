// FORMULARIOS
contraseña = document.getElementById('cambiarContraseña');
mainForm = document.getElementById('formularioPrincipal');
alerta = document.getElementById('alerta');
//BOTOBES
botonContraseña = document.getElementById('btnCambiar');
botonConfirmar = document.getElementById('btnConfirmarcontra');
//EVENTOS

// Se crea la función para que el botón de cambiar contraseña muestre el formulario de cambio de contraseña y oculte el formulario principal.
botonContraseña.addEventListener('click', function(){
    contraseña.style.display = 'block';
    mainForm.style.display = 'none';
});
botonConfirmar.addEventListener('click',function(e){
    e.preventDefault();
    contraseña.style.display = 'none';
    mainForm.style.display = 'none';
    alerta.style.display = 'block';

        setTimeout(function(){
            alerta.style.display = 'none';
            mainForm.style.display = 'block';
        },2000);
});
