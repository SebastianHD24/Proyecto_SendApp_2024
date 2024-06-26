function createNotificationBoxR(nombreServicio) {
    let displayNotificaciones = document.querySelector(".citas");

    if (!displayNotificaciones) {
        console.error("No se encontró el contenedor '.display-notificaciones'");
        return;
    }

    let notificationsContainer = document.createElement("div");
    notificationsContainer.classList.add("notifications-container");

    let notificationsBox = document.createElement("div");
    notificationsBox.classList.add("notifications-box");

    let boxFigure = document.createElement("figure");
    boxFigure.classList.add("figure__icon--schedule");
    let boxImg = document.createElement("img");
    boxImg.setAttribute("src", "../../../Proyecto_SendApp_2024/imagenes/Componentes-img/Schedule.png");
    boxImg.setAttribute("alt", "Imagen de notificaciones");
    boxFigure.appendChild(boxImg);
    notificationsBox.appendChild(boxFigure);

    let boxTextArticle = document.createElement("article");
    boxTextArticle.classList.add("article__text--1");
    let boxTextParagraph = document.createElement("a");
    let url = '../../../Proyecto_SendApp_2024/interfaces/Usuario/usuarioSesion.php?p=citas';
    boxTextParagraph.href = url;
    boxTextParagraph.textContent = `Su cita con ${nombreServicio} fue rechazada, si desea conocer el motivo dirígete al apartado de Mis citas`;
    boxTextArticle.appendChild(boxTextParagraph);
    notificationsBox.appendChild(boxTextArticle);

    let boxDividerSpan = document.createElement("span");
    notificationsBox.appendChild(boxDividerSpan);

    let confirmFigure = document.createElement("figure");
    confirmFigure.classList.add("figure__icon--confirm");
    let confirmImg = document.createElement("img");
    confirmImg.setAttribute("src", "../../../Proyecto_SendApp_2024/imagenes/Componentes-img/exclamacion.png");
    confirmImg.setAttribute("alt", "Imagen de confirmación");
    confirmFigure.appendChild(confirmImg);
    notificationsBox.appendChild(confirmFigure);

    notificationsContainer.appendChild(notificationsBox);
    displayNotificaciones.appendChild(notificationsContainer);
}