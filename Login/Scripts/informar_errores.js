//Espera a que el documento HTML esté completamente cargado
document.addEventListener("DOMContentLoaded", function() {
    //Obtener el formulario con la clase asignada
    let form = document.querySelector('.form1');
    //Evento de escucha para el evento submit del formulario
    form.addEventListener('submit', function(e) {
        //Prevenir el comportamiento por defecto del formulario (enviar y recargar la página)
        e.preventDefault();
        //Obtener datos del formulario
        let formData = new FormData(form);
        //Realizar una solicitud POST al servidor
        fetch('../login-aprendices/validacion/val.php', {
            method: 'POST',
            body: formData
        })
        //Trasforma las respuesta en un JSON
        .then(response => response.json())
        .then(jsonData => {
            //Manejar la respuestas que manda el PHP
            if (jsonData.success == "1") {
                const error = document.getElementById('mensaje_error');
                error.textContent = "Complete todos los campos";
            } else if (jsonData.success == "2") {
                location.href = '../../../../Proyecto_SendApp_2024/interfaces/Administrador/Administrador.php';
            } else if (jsonData.success == "3") {
                location.href = '../../../../Proyecto_SendApp_2024/interfaces/Funcionario/funcionario.php';
            } else if (jsonData.success == "4") {
                location.href = '../../../../Proyecto_SendApp_2024/interfaces/Usuario/usuarioSesion.php';
            } else if (jsonData.success == "5") {
                const error = document.getElementById('mensaje_error');
                error.textContent = "Tu cuenta está suspendida. Comunícate con el administrador";
            } else if (jsonData.success == "6") {
                const error = document.getElementById('mensaje_error');
                const limpiarU = document.getElementById('login-input-user');
                const limpiarC = document.getElementById('login-input-password');
                error.textContent = "El usuario o la contraseña son incorrectos";
                limpiarU.value = "";
                limpiarC.value = "";
            }
        })
        .catch(error => console.error('Error:', error));
    });
});
