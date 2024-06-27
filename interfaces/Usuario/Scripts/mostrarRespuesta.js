function mostrarR() {
    const citas = document.getElementById('citas');
    const historial = document.getElementById('historial');
    const answer = document.getElementById('answer');
    const contenedores_notificacion = document.querySelectorAll('[id^="contenedor_n"]');
    answer.style.display = "block";
    contenedores_notificacion.forEach(contenedor => {
        contenedor.style.display = "none";
    });
    const con = document.querySelectorAll('.notifications-container');
    con.forEach(container => {
        container.style.display = "none";
    });

    historial.style.display = "none";
    citas.style.display = "none";

    fetch('../../../../Proyecto_SendApp_2024/interfaces/Usuario/actualizarVista.php')
    .then(response => response.json())
    .then(data => {
        let datosMensaje = document.getElementById('datosMensaje');

        function convertirFecha(fecha) {
            let partes = fecha.split('-');
            return `${partes[2]}/${partes[1]}/${partes[0]}`;
        }
        // Iterar sobre los usuarios y agregarlos a las tablas correspondientes
        data.forEach(usuario => {

            let fechaSolicitudFormateada = convertirFecha(usuario.fecha_solicitud);
            let fechaRespuestaFormateada = convertirFecha(usuario.fecha_respuesta);
            if (usuario.id_rol == 3) {
                datosMensaje.innerHTML = "Estimado aprendiz " + usuario.nombres + " " + usuario.apellidos +",<br><br>" +
                  "Nos dirigimos a usted con respecto a su " + usuario.tipo_pqrs + " enviada el " + fechaSolicitudFormateada + ". " +
                  "Nos complace comunicarle que nuestro equipo de trabajo ha respondido a su " + usuario.tipo_pqrs + " hoy, " + fechaRespuestaFormateada + ". La respuesta por parte de nuestro equipo fue: <br>" + usuario.respuesta_pqrs + "<br><br>" +
                  "Quedamos a su disposición para cualquier otra consulta que pueda tener.<br><br>" +
                  "Atentamente,<br>" +
                  "Sendapp";
            } else if (usuario.id_rol == 2) {
                datosMensaje.innerHTML = "Estimado funcionario " + usuario.nombres + " " + usuario.apellidos +",<br><br>" +
                  "Nos dirigimos a usted con respecto a su " + usuario.tipo_pqrs + " enviada el " + usuario.fecha_solicitud + ". " +
                  "Nos complace comunicarle que nuestro equipo de trabajo ha respondido a su " + usuario.tipo_pqrs + " hoy, " + usuario.fecha_respuesta + ". La respuesta por parte de nuestro equipo fue: <br>" + usuario.respuesta_pqrs + "<br><br>" +
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