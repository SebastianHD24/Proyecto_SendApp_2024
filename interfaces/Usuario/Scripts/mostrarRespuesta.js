function mostrarR() {
    const answer = document.getElementById('answer');
    const contenedor_notificacion = document.getElementById('contenedor_n');
    answer.style.display = "block";
    contenedor_notificacion.style.display = "none";

    fetch('../../../../Proyecto_SendApp_2024/interfaces/Usuario/actualizarVista.php')
    .then(response => response.json())
    .then(data => {
        let datosMensaje = document.getElementById('datosMensaje');
        // Iterar sobre los usuarios y agregarlos a las tablas correspondientes
        data.forEach(usuario => {
            if (usuario.id_rol == 3) {
                datosMensaje.innerHTML = "Estimado aprendiz " + usuario.nombres + " " + usuario.apellidos +"<br><br>" +
                  "Le informamos que su " + usuario.tipo_pqrs + " enviada el " + usuario.fecha_solicitud + "<br>" +
                  "Nos complace comunicarle que nuestro equipo de trabajo ha respondido a su " + usuario.tipo_pqrs + " hoy, " + usuario.fecha_respuesta + " La respuesta por parte de nuestro equipo fue: <br>" + usuario.respuesta_pqrs + "<br><br>" +
                  "Quedamos a su disposición para cualquier otra consulta que pueda tener.<br><br>" +
                  "Atentamente,<br>" +
                  "Sendapp";
            }
        });
    })
    .catch(error => console.error("Error al obtener datos: " + error));
}

function ocultarR() {
    location.reload();
}