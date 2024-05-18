<h1 id="mensaje" style="display: none;">No hay notificaciones</h1>
<h1 id="mensaje1" style="display: none;">No hay Historial</h1>
<section class="display-notificaciones">
    <div class="notifications-container">
        <div class="notifications-box" style="display: none;">
            <figure class="figure__icon--schedule">
                <img src="../../../Proyecto_SendApp_2024/imagenes/Componentes-img/Schedule.png" alt="Imagen de notificaciones">
            </figure>
                <article class="article__text--1">
                    <p>Su cita con Bienestar al Aprendiz fue agendada con éxito, pulse para ver más información</p>
                </article>
            <span></span>
            <figure class="figure__icon--confirm">
                <img src="../../../Proyecto_SendApp_2024/imagenes/Componentes-img/check.png" alt="Imagen de confirmación">
            </figure>
        </div>
            <!--Contenedor de notificaiones -->
        <div class="notifications-box" style="display: none;">
                <!--Contenedor de la imagen -->
            <figure class="figure__icon--schedule">
                <img src="../../../Proyecto_SendApp_2024/imagenes/Componentes-img/Schedule.png" alt="Imagen de notificaciones">
            </figure>
                <!--contenedor de texto -->
                <article class="article__text--1">
                    <p>Su cita con Bienestar al Aprendiz no pudo ser agendada</p>
                </article>
                <!--Barra divisoria horizontal/vertical-->
            <span></span>
                <!--Segundo contenedor de imagen-->
            <figure class="figure__icon--confirm">
                <img src="../../../Proyecto_SendApp_2024/imagenes/Componentes-img/exclamacion.png" alt="Imagen de exclamación">
            </figure>
        </div>

        <!--CONTENEDOR DE NOTIFICAIONES DE PETICIONES-->

        <!--*********************Espacio para más notificaciones********************** -->
    </div>


    <!--Contenedor Respuesta QPR-->
    <div class="answer__container" id="answer" style="display: none;">
        <!--Contenedor del título y la fecha-->
        <div class="date">
            <!--Título-->
            <article>
                <h1>Atención a su <br>solicitud</h1>
            </article>
            <article>
                <p>fecha</p>
            </article>
        </div>
        <div class="text">
            <p id="datosMensaje"></p>
        </div>
        <div class="button__action">
            <button type="button" class="close__button--action" id="closeButton" onclick="ocultarR(); ocultarH();">
                <span>Cerrar</span>
            </button>
        </div>
    </div>
    <div class="answer__container" id="answerH" style="display: none;">
        <!--Contenedor del título y la fecha-->
        <div class="date">
            <!--Título-->
            <article class="tituloAtencion">
                <h1>Atención a su <br>solicitud</h1>
            </article>
            <article>
                <p>fecha</p>
            </article>
        </div>
        <div class="text">
            <p id="datosMensajeH"></p>
        </div>
        <div class="button__action">
            <button type="button" class="close__button--action" id="closeButtonH" onclick="ocultarH();">
                <span>Cerrar</span>
            </button>
        </div>
    </div>
</section>
<a href="#" onclick="consultarHistorial();" id="historial" style="display: none;">Ver historial</a>
<a href="#" onclick="salir();" id="salir" style="display: none;">Salir</a>
</main>
</div>


<script src="../../../../Proyecto_SendApp_2024/interfaces/Usuario/Scripts/notificacionesPQR.js"></script>
<script src="../../../../Proyecto_SendApp_2024/interfaces/Usuario/Scripts/historial.js"></script>
<script src="../../../../Proyecto_SendApp_2024/interfaces/Usuario/Scripts/mostrarRespuesta.js"></script>
<script src="../../../../Proyecto_SendApp_2024/interfaces/Usuario/Scripts/mostrarRepuestaH.js"></script>