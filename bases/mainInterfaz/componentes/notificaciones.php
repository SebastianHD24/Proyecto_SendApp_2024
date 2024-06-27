<h1 id="mensaje" style="display: none;">No hay notificaciones</h1>
<h1 id="mensaje1" style="display: none;">No hay Historial</h1>
<section class="display-notificaciones">
    <div class="notifications-container">
    </div>
    <div class="citas" id="citas"></div>

    <!--Contenedor Respuesta QPR-->
    <div class="answer__container" id="answer" style="display: none;">
        <!--Contenedor del título y la fecha-->
        <div class="date">
            <!--Título-->
            <article>
                <h1>Atención a su <br>solicitud</h1>
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
<button class="verHistorial" onclick="consultarHistorial();" id="historial" style="display: none;"><a href="#" >Ver historial</a></button>

<button class="salirHistorial" onclick="salir();" id="salir" style="display: none;"><a href="#" >Salir</a></button>

</main>
</div>


<script src="../../../../Proyecto_SendApp_2024/interfaces/Usuario/Scripts/notificacionesPQR.js"></script>
<script src="../../../../Proyecto_SendApp_2024/interfaces/Usuario/Scripts/notificacionesCitas.js"></script>
<script src="../../../../Proyecto_SendApp_2024/interfaces/Usuario/Scripts/notificacionesCitasR.js"></script>
<script src="../../../../Proyecto_SendApp_2024/interfaces/Usuario/Scripts/historial.js"></script>
<script src="../../../../Proyecto_SendApp_2024/interfaces/Usuario/Scripts/mostrarRespuesta.js"></script>
<script src="../../../../Proyecto_SendApp_2024/interfaces/Usuario/Scripts/mostrarRepuestaH.js"></script>