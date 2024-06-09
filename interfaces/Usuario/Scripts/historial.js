function createNotificationBoxH(id) {
    // Crear elemento section para display-notificaciones
    let displayNotificaciones = document.querySelector(".display-notificaciones");

    if (!displayNotificaciones) {
        console.error("No se encontró el contenedor '.display-notificaciones'");
        return;
    }

    // Crear elemento div para notifications-container
    let notificationsContainer = document.createElement("div");
    notificationsContainer.classList.add("notifications-container");

    // Crear elemento div para notifications-pqr
    let notificationsPqr = document.createElement("div");
    notificationsPqr.classList.add("notifications-pqr");
    notificationsPqr.setAttribute("id", "contenedor_h_" + id); // Asignar ID al contenedor

    // Contenedor de imagen de PQR
    let pqrFigure = document.createElement("figure");
    pqrFigure.classList.add("figure__icon--schedule");
    let pqrImg = document.createElement("img");
    pqrImg.setAttribute("src", "../../../../Proyecto_SendApp_2024/imagenes/Componentes-img/qprIcon.png");
    pqrImg.setAttribute("alt", "Imagen de PQR");
    pqrFigure.appendChild(pqrImg);
    notificationsPqr.appendChild(pqrFigure);

    // Contenedor de texto
    let textArticle = document.createElement("article");
    textArticle.classList.add("article__text--1");
    let textParagraph = document.createElement("p");
    textParagraph.textContent = "Atención a su solicitud de QPR.";
    textArticle.appendChild(textParagraph);
    notificationsPqr.appendChild(textArticle);

    // Barra divisoria
    let dividerSpan = document.createElement("span");
    notificationsPqr.appendChild(dividerSpan);

    // Botón Ver Detalles
    let detailsButton = document.createElement("button");
    detailsButton.setAttribute("type", "button");
    detailsButton.classList.add("show__details--button");
    detailsButton.setAttribute("id", "showDetailsButton");
    detailsButton.setAttribute("onclick", "mostrarH(" + id + ");");
    let span = document.createElement('span');
    span.innerHTML = "Ver<br>Detalles";
    detailsButton.appendChild(span);
    notificationsPqr.appendChild(detailsButton);

    // Agregar notificationsPqr al notificationsContainer
    notificationsContainer.appendChild(notificationsPqr);

    // Agregar notificationsContainer al displayNotificaciones
    displayNotificaciones.appendChild(notificationsContainer);
}

function consultarHistorial() {
    const mensaje = document.getElementById('mensaje');
    const mensaje1 = document.getElementById('mensaje1');
    const historial = document.getElementById('historial');
    const salir = document.getElementById('salir');
    const citas = document.getElementById('citas');

    citas.style.display = "none";

    function ocultar_QPR() {
        const contenedores_notificacion = document.querySelectorAll('[id^="contenedor_n"]');
        contenedores_notificacion.forEach(contenedor => {
            contenedor.style.display = "none";
        });
    }
    ocultar_QPR();

    fetch('../../../../Proyecto_SendApp_2024/interfaces/Usuario/consultaHistorial.php')
    .then(response => response.json())
    .then(data => {
        if (data.num_registros > 0) {
            // Si hay registros, ejecutar un ciclo basado en el número de registros
            for (let i = 0; i < data.num_registros; i++) {
                // Aquí puedes realizar las operaciones que necesites dentro del ciclo
                createNotificationBoxH(data.id_peticion[i]); // Pasar el ID al crear el box
            }
        } else {
            // Si no hay registros, puedes mostrar un mensaje o realizar otras operaciones
            mensaje1.style.display = "block";
        }
        mensaje.style.display = "none";
        historial.style.display = "none";
        salir.style.display = "block";
    })
    .catch(error => console.error("Error:", error));
}
function salir(){
    location.reload();
}
