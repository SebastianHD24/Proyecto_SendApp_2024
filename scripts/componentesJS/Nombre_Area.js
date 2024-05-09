function capturar_id(idServicio) {
    // Establecer el campo de ID del servicio
    const campoServicio = document.getElementById("id_servicio");
    campoServicio.value = idServicio;
    
    // Hacer una solicitud AJAX para obtener el nombre del servicio
    fetch(`../../../../Proyecto_SendApp_2024/bases/mainInterfaz/backend/nombreServicio.php?id_servicio=${idServicio}`)
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                console.error("Error:", data.error);
            } else {
                // Actualizar el input con el nombre del servicio
                const inputNombreServicio = document.querySelector('input[name="nombre_servicio"]');
                inputNombreServicio.value = data.nombre_servicio;
            }
        })
        .catch(error => console.error("Error al obtener el nombre del servicio:", error));
}