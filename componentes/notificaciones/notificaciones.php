<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../CSS/componentes-css/notificaiones.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>notificaciones</title>
</head>
<body>
<!----------------------------Contenedor principal de notificaiones-------------------------------->
    <div class="notifications-container">
        <div class="notifications-box">
            <figure class="figure__icon--schedule">
                <img src="../../Styles/Img/Componentes-img/Schedule.png"/ alt="Imagen de notificaciones">
            </figure>
                <article class="article__text--1">
                    <p>Su cita con Bienestar al Aprendiz fue agendada con éxito, pulse para ver más información</p>
                </article>
            <span></span>
            <figure class="figure__icon--confirm">
                <img src="../../Styles/Img/Componentes-img/check.png" alt="Imagen de confirmación">
            </figure>
        </div>
            <!--Contenedor de notificaiones -->
        <div class="notifications-box">
                <!--Contenedor de la imagen -->
            <figure class="figure__icon--schedule">
                <img src="../../Styles/Img/Componentes-img/Schedule.png"/ alt="Imagen de notificaciones">
            </figure>
                <!--contenedor de texto -->
                <article class="article__text--1">
                    <p>Su cita con Bienestar al Aprendiz no pudo ser agendada</p>
                </article>
                <!--Barra divisoria horizontal/vertical-->
            <span></span>
                <!--Segundo contenedor de imagen-->
            <figure class="figure__icon--confirm">
                <img src="../../Styles/Img/Componentes-img/exclamacion.png" alt="Imagen de exclamación">
            </figure>
        </div>

        <!--CONTENEDOR DE NOTIFICAIONES DE PETICIONES-->
        <div class="notifications-pqr">
                <!--Contenedor de imagen a la izquierda -->
            <figure class="figure__icon--schedule">
                <img src="../../Styles/Img/Componentes-img/qprIcon.png"/ alt="Imagen de PQR">
            </figure>
                <!--Contenedor de texto sobre la petición-->
                <article class="article__text--1">
                    <p>Atención a su solicitud de QPR.</p>
                </article>
            <span></span>
                <button type="button" class="show__details--button" id="showDetailsButton">
                    <span>Ver<br>Detalles</span>
                </button>
        </div>
            <!--*********************Espacio para más notificaciones********************** -->
    </div>
    <!--Contenedor Respuesta QPR-->
    <div class="answer__container" id="answer">
        <!--Contenedor del título y la fecha-->
        <div class="date">
            <!--Título-->
            <article>
                <h1>Atención a su <br>solicitud</h1>
            </article>
            <article>
                <p> 
                    28/05/2024
                </p>
            </article>
        </div>
        <div class="text">
                <p>Estimado usuario en atención a su <b>PQR con Bienestar al aprendiz del día: 25/08/2024 </b> en que fue realizada, nos permitimos informarle que su solicitud ya a sido procesada, teniendo en cuenta lo anterior su cita para el <b> dia 24/08/2024 a  las 10:30 a.m</b> con Bienestar al aprendiz no pudo ser agenda  por motivos de disponibilidad horaria, ya que contamos con un gran número de citas registradas para el mismo día, por lo tanto su cita será reagendada para el <b>día 02/09/2024 a la 11:00 a.m</b> con el funcionario <b>Jorge Padilla</b>.
                </p>
        </div>
        <div class="button__action">
            <button type="button" class="close__button--action" id="closeButton">
                <span>Cerrar</span>
            </button>
        </div>
    </div>
</body>
</html>