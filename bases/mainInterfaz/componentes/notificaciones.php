<h1 id="mensaje" style="display: none;">No hay notificaciones</h1>
<section class="display-notificaciones">
    <div class="notifications-container">
        <div class="notifications-box" style="display: none;">
            <figure class="figure__icon--schedule">
                <img src="../Styles/Img/Componentes-img/Schedule.png" alt="Imagen de notificaciones">
            </figure>
                <article class="article__text--1">
                    <p>Su cita con Bienestar al Aprendiz fue agendada con éxito, pulse para ver más información</p>
                </article>
            <span></span>
            <figure class="figure__icon--confirm">
                <img src="../Styles/Img/Componentes-img/check.png" alt="Imagen de confirmación">
            </figure>
        </div>
            <!--Contenedor de notificaiones -->
        <div class="notifications-box" style="display: none;">
                <!--Contenedor de la imagen -->
            <figure class="figure__icon--schedule">
                <img src="../Styles/Img/Componentes-img/Schedule.png" alt="Imagen de notificaciones">
            </figure>
                <!--contenedor de texto -->
                <article class="article__text--1">
                    <p>Su cita con Bienestar al Aprendiz no pudo ser agendada</p>
                </article>
                <!--Barra divisoria horizontal/vertical-->
            <span></span>
                <!--Segundo contenedor de imagen-->
            <figure class="figure__icon--confirm">
                <img src="../Styles/Img/Componentes-img/exclamacion.png" alt="Imagen de exclamación">
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
</section>
<script src="../../../../Proyecto_SendApp_2024/interfaces/Usuario/Scripts/notificacionesPQR.js"></script>
<script src="../../../../Proyecto_SendApp_2024/interfaces/Usuario/Scripts/mostrarRespuesta.js"></script>