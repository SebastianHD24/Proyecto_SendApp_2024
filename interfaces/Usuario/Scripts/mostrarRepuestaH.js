function mostrarH(id) {
    const answer = document.getElementById('answerH');
    const contenedores_notificacion = document.querySelectorAll('[id^="contenedor_h"]');
    answer.style.display = "block";
    contenedores_notificacion.forEach(contenedor => {
        contenedor.style.display = "none";
    });

    fetch('../../../../Proyecto_SendApp_2024/interfaces/Usuario/mostrarHistorial.php?id=' + id)
    .then(response => response.json())
    .then(data => {
        let datosMensaje = document.getElementById('datosMensajeH');
        // Mostrar los datos obtenidos
        if (data.id_rol == 3) {
            datosMensaje.innerHTML = "Estimado aprendiz " + data.nombres + " " + data.apellidos +",<br><br>" +
              "Nos dirigimos a usted con respecto a su " + data.tipo_pqrs + " enviada el " + data.fecha_solicitud + ". " +
              "Nos complace comunicarle que nuestro equipo de trabajo ha respondido a su " + data.tipo_pqrs + " hoy, " + data.fecha_respuesta + ". La respuesta por parte de nuestro equipo fue: <br>" + data.respuesta_pqrs + "<br><br>" +
              "Quedamos a su disposición para cualquier otra consulta que pueda tener.<br><br>" +
              "Atentamente,<br>" +
              "Sendapp";
        } else if (data.id_rol == 2) {
            datosMensaje.innerHTML = "Estimado funcionario " + data.nombres + " " + data.apellidos +",<br><br>" +
              "Nos dirigimos a usted con respecto a su " + data.tipo_pqrs + " enviada el " + data.fecha_solicitud + ". " +
              "Nos complace comunicarle que nuestro equipo de trabajo ha respondido a su " + data.tipo_pqrs + " hoy, " + data.fecha_respuesta + ". La respuesta por parte de nuestro equipo fue: <br>" + data.respuesta_pqrs + "<br><br>" +
              "Quedamos a su disposición para cualquier otra consulta que pueda tener.<br><br>" +
              "Atentamente,<br>" +
              "Sendapp";
        }
    })
    .catch(error => console.error("Error al obtener datos: " + error));
}

function ocultarH() {
    const answer = document.getElementById('answerH');
    answer.style.display = "none";
    const contenedores_notificacion = document.querySelectorAll('[id^="contenedor_h"]');
    contenedores_notificacion.forEach(contenedor => {
        contenedor.style.display = "flex";
    });
}