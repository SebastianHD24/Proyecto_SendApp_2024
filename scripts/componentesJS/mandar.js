document.addEventListener('DOMContentLoaded', function() {

    //Ventana emergente
    const alerta = document.getElementById('alerta');

    //formulario para aceptar las citas
    const form = document.getElementById('myForm');
    
    //prevencion del envio del formulario de forma automatica, lo envia mediante fetch y dependiendo de la respuesta del servidor actua en el cliente
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evitar que el formulario se envíe automáticamente
        
        const formData = new FormData(form); // Obtener los datos del formulario
        const newUrl = 'http://localhost/Proyecto_SendApp_2024/interfaces/Funcionario/funcionario.php?p=citaspendiente';
        
        fetch('../../../Proyecto_SendApp_2024/bases/mainInterfaz/backend/mandar.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json()) // Convertir la respuesta a JSON
        .then(data => {
            // Verificar si la actualización fue exitosa
            if (data.success) {
                form.classList.add('oculto');
                alerta.style.display = 'block';
                alerta.style.zIndex = '999';
                // Si fue exitosa, recargar la página después de 2 segundos
                setTimeout(function() {
                    window.location.href = newUrl; // Recargar la página
                }, 2000);
            } else {
                // Si hubo un error, mostrar el mensaje de error en la consola
                console.error(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});