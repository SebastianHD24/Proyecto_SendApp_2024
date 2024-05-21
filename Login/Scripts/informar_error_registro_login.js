//Espera a que el documento HTML esté completamente cargado
document.addEventListener("DOMContentLoaded", function() {
    //Obtener el formulario con la clase asignada
    let form = document.querySelector('.form2');
    //Evento de escucha para el evento submit del formulario
    form.addEventListener('submit', function(e) {
        //Prevenir el comportamiento por defecto del formulario (enviar y recargar la página)
        e.preventDefault();
        //Obtener datos del formulario
        let formData = new FormData(form);
        //Realizar una solicitud POST al servidor
        fetch('../../../Proyecto_SendApp_2024/Login/login-aprendices/agregandoregistro.php', {
            method: 'POST',
            body: formData
        })
        //Trasforma las respuesta en un JSON
        .then(response => response.json())
        .then(jsonData => {
            //Manejar la respuestas que manda el PHP
            if (jsonData.success == "1") {
                const error = document.getElementById('mensaje_errord');
                const limpiarC = document.getElementById('login-input-user-d');
                error.textContent = "El numero de documento debe ser mayor a 5 digitos.";
                limpiarC.value = "";

                const error2 = document.getElementById('mensaje_errore');
                error2.textContent = "No se pudo registrar, verifique los campos.";
            } else if (jsonData.success == "2") {
                const error = document.getElementById('mensaje_errorc');
                const limpiarC = document.getElementById('login-input-password-p');
                error.textContent = "La contraseña debe ser mayor a 6 digitos.";
                limpiarC.value = "";

                const error2 = document.getElementById('mensaje_errore');
                error2.textContent = "No se pudo registrar, verifique los campos.";
            } else if (jsonData.success == "3") {
                const error = document.getElementById('mensaje_errorc');
                const limpiarC = document.getElementById('login-input-password-p');
                error.textContent = "La contraseña debe tener una mayuscula, un numero y un caracter especial.";
                limpiarC.value = "";

                const error2 = document.getElementById('mensaje_errore');
                error2.textContent = "No se pudo registrar, verifique los campos.";
            } else if (jsonData.success == "4") {
                const error = document.getElementById('mensaje_errord');
                const limpiarC = document.getElementById('login-input-user-d');
                error.textContent = "El numero de documento debe ser mayor a 5 digitos.";
                limpiarC.value = "";

                const error2 = document.getElementById('mensaje_errorc');
                const limpiarC2 = document.getElementById('login-input-password-p');
                error2.textContent = "La contraseña debe ser mayor a 6 digitos, debe tener una mayuscula, un numero y un caracter especial.";
                limpiarC2.value = "";


                const error3 = document.getElementById('mensaje_errore');
                error3.textContent = "No se pudo registrar, verifique los campos.";
            } else if (jsonData.success == "5") {
                const error = document.getElementById('mensaje_errord');
                error.textContent = "Documento ya registrado.";
                
            } else if (jsonData.success == "6") {
                alert('Se ha registrado correctamente')
                window.location.href = "login.php";

            } else if (jsonData.success == "7") {
                alert('Por favor llenar todos los campos');
            }
        })
        .catch(error => console.error('Error:', error));
    });
});
