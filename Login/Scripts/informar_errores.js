// Espera a que el documento HTML esté completamente cargado
$(document).ready(function() {
    // Cuando se envía el formulario con la clase 'form-login'
    $('.form-login').submit(function(e) {
        // Previene el comportamiento por defecto del formulario (enviar y recargar la página)
        e.preventDefault();
        // Realiza una solicitud AJAX al archivo 'val.php'
        $.ajax({
            type: "POST",
            url: '../login-aprendices/validacion/val.php',
            data: $(this).serialize(), // Datos del formulario serializados
            success: function(response) { // Función que se ejecuta si la solicitud es exitosa
                // Analiza la respuesta JSON recibida
                let jsonData = JSON.parse(response);
                // Dependiendo del valor de 'success' en la respuesta
                if (jsonData.success == "1") { // Si el éxito es igual a "1"
                    // Muestra un mensaje de error en rojo
                    const error = document.getElementById('mensaje_error');
                    error.textContent = "Complete todos los campos";
                } else if (jsonData.success == "2") { // Si es igual a 2 redirigir a otro pagina
                    location.href = "../../coordinaccion/index.html";
                } else if (jsonData.success == "3") {
                    location.href = "../../index.php";
                } else if (jsonData.success == "4") {
                    const error = document.getElementById('mensaje_error');
                    error.textContent = "Tu cuenta está suspendida. Comunícate con el administrador";
                } else if (jsonData.success == "5") { // Si el éxito es igual a "3"
                    // Muestra un mensaje de error en rojo y limpia los campos de usuario y contraseña
                    const error = document.getElementById('mensaje_error');
                    const limpiarU = document.getElementById('login-input-user');
                    const limpiarC = document.getElementById('login-input-password');
                    error.textContent = "El usuario o la contraseña están incorrectos";
                    limpiarU.value = "";
                    limpiarC.value = "";
                }
            }
        });
    });
});
