const mensaje = document.getElementById('mensaje');
const historial = document.getElementById('historial');

function createNotificationBoxP() {
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
    notificationsPqr.setAttribute("id", "contenedor_n");

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
    detailsButton.setAttribute("onclick", "mostrarR();");
    var span = document.createElement('span');
    span.innerHTML = "Ver<br>Detalles";
    detailsButton.appendChild(span);
    notificationsPqr.appendChild(detailsButton);

    // Agregar notificationsPqr al notificationsContainer
    notificationsContainer.appendChild(notificationsPqr);

    // Agregar notificationsContainer al displayNotificaciones
    displayNotificaciones.appendChild(notificationsContainer);
}

function consultarTodo() {
    let totalRegistros = 0;

    function consultar() {
        return fetch('../../../../Proyecto_SendApp_2024/interfaces/Usuario/mostrarCitas.php')
            .then(response => response.json())
            .then(data => {
                if (data.num_registros > 0) {
                    totalRegistros += data.num_registros;
                    for (let i = 0; i < data.num_registros; i++) {
                        const cita = data.datos[i];
                        createNotificationBox(cita.hora, cita.fecha, cita.nombre_servicio);
                    }
                }
            })
            .catch(error => console.error("Error:", error));
    }

    function consultarR() {
        return fetch('../../../../Proyecto_SendApp_2024/interfaces/Usuario/mostrarCitasR.php')
            .then(response => response.json())
            .then(data => {
                if (data.num_registros > 0) {
                    totalRegistros += data.num_registros;
                    for (let i = 0; i < data.num_registros; i++) {
                        const cita = data.datos[i];
                        createNotificationBoxR(cita.nombre_servicio);
                    }
                }
            })
            .catch(error => console.error("Error:", error));
    }

    function consultarP() {
        return fetch('../../../../Proyecto_SendApp_2024/interfaces/Usuario/mostrarPQR.php')
            .then(response => response.json())
            .then(data => {
                if (data.num_registros > 0) {
                    totalRegistros += data.num_registros;
                    for (let i = 0; i < data.num_registros; i++) {
                        createNotificationBoxP();
                    }
                }
            })
            .catch(error => console.error("Error:", error));
    }

    // Ejecutar todas las funciones y verificar si hay registros en ninguna de ellas
    Promise.all([consultar(), consultarR(), consultarP()]).then(() => {
        if (totalRegistros === 0) {
            mensaje1.style.display = "block";
        }
        historial1.style.display = "block";
    }).catch(error => console.error("Error en alguna de las consultas:", error));
}

document.addEventListener("DOMContentLoaded", function() {
    consultarTodo();
});