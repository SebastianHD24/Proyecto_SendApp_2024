function createNotificationBox() {
    // Crear elemento section para display-notificaciones
    var displayNotificaciones = document.querySelector(".display-notificaciones");

    if (!displayNotificaciones) {
        console.error("No se encontró el contenedor '.display-notificaciones'");
        return;
    }

    // Crear elemento div para notifications-container
    var notificationsContainer = document.createElement("div");
    notificationsContainer.classList.add("notifications-container");

    // Crear elemento div para notifications-pqr
    var notificationsPqr = document.createElement("div");
    notificationsPqr.classList.add("notifications-pqr");

    // Contenedor de imagen de PQR
    var pqrFigure = document.createElement("figure");
    pqrFigure.classList.add("figure__icon--schedule");
    var pqrImg = document.createElement("img");
    pqrImg.setAttribute("src", "../Styles/Img/Componentes-img/qprIcon.png");
    pqrImg.setAttribute("alt", "Imagen de PQR");
    pqrFigure.appendChild(pqrImg);
    notificationsPqr.appendChild(pqrFigure);

    // Contenedor de texto
    var textArticle = document.createElement("article");
    textArticle.classList.add("article__text--1");
    var textParagraph = document.createElement("p");
    textParagraph.textContent = "Atención a su solicitud de QPR.";
    textArticle.appendChild(textParagraph);
    notificationsPqr.appendChild(textArticle);

    // Barra divisoria
    var dividerSpan = document.createElement("span");
    notificationsPqr.appendChild(dividerSpan);

    // Botón Ver Detalles
    var detailsButton = document.createElement("button");
    detailsButton.setAttribute("type", "button");
    detailsButton.classList.add("show__details--button");
    detailsButton.setAttribute("id", "showDetailsButton");
    var span = document.createElement("span");
    span.innerHTML = "Ver<br>Detalles";
    detailsButton.appendChild(span);
    notificationsPqr.appendChild(detailsButton);

    // Agregar notificationsPqr al notificationsContainer
    notificationsContainer.appendChild(notificationsPqr);

    // Agregar notificationsContainer al displayNotificaciones
    displayNotificaciones.appendChild(notificationsContainer);
}

function consultar() {
    fetch('aprendiz/mostrarDatos.php')
        .then(response => response.json())
        .then(data => {
            document.querySelector('#notifica #mostrar #mostrar-m').innerHTML = '';
            document.querySelector('#notifica #mostrar #mostrar-n').innerHTML = '';

            data.forEach(usuario => {
                let p = document.createElement('p');
                p.textContent = 'Gracias, ' + usuario.nombres + ', por tu ' + usuario.tipo_pqrs + '. Nos complace informarte que ya ha sido revisada por nuestros administradores. Apreciamos tu contribución y estamos aquí para atender cualquier otra sugerencia o consulta que puedas tener en el futuro';

                if (usuario.vista == 0) {
                    document.querySelector('#notifica #mostrar #mostrar-n').appendChild(p);
                } else {
                    document.querySelector('#notifica #mostrar #mostrar-m').appendChild(p);
                }
            });
        })
        .catch(error => console.error('Error al obtener datos:', error));
}

document.addEventListener("DOMContentLoaded", function() {
    consultar();
});
