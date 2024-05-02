// FORMULARIOS
contraseña = document.getElementById('cambiarContraseña');
mainForm = document.getElementById('formularioPrincipal');
alerta = document.getElementById('alerta');
//BOTOBES
botonContraseña = document.getElementById('btnCambiar');
botonConfirmar = document.getElementById('btnConfirmarcontra');
//EVENTOS
botonContraseña.addEventListener('click', function(){
    contraseña.style.display = 'block';
    mainForm.style.display = 'none';
});
botonConfirmar.addEventListener('click',function(){
    contraseña.style.display = 'none';
    mainForm.style.display = 'none';
    alerta.style.display = 'block';
        setTimeout(function(){
            alerta.style.display = 'none';
            mainForm.style.display = 'block';
        }, 30000);
})
