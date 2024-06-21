<h1 id="mensaje1" style="display: none;">No hay historial</h1>
<h1 id="mensaje" style="display: none;" class="titulos">No hay nuevas PQR</h1>
<div class="contenedor-popup" id="contenedor-popup"> 
    <div class="popup" id="popup">
        <div class="sin-responder" id="sin-responder" style="display: none;">
            <div class="content-img-noti">
                <img class="logo" alt="logo" src="../../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/LogosSena-img/SendApp.png">
            </div>
            <table id="sin_respuesta" class="confirmado">
                <thead class="encabezado">
                    <tr class="encabezado2">
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Rol</th>
                        <th>Documento de Identidad</th>
                        <th>Fecha de Solicitud</th>
                        <th>Asunto</th>
                        <th>Descripción</th>
                        <th>Responder</th>
                    </tr>
                </thead>
                <tbody class="respuestas">
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tbody>
            </table>  
        </div>
        <form style="display: none;" class="formulario" method="post" id="formulario_notificaciones">
            <select name="historial_notificaciones" id="historial_notificaciones">
                <option value="todos">Todos</option>
                <option value="hoy">Hoy</option>
                <option value="ayer">Ayer</option>
                <option value="semana">Última semana</option>
                <option value="mes">Último mes</option>
                <option value="anio">Último Año</option>
            </select>
            <button type="submit" onclick="historialDesde();" class="buscar">Buscar</button>
        </form>
        </div>
        <div class="" id="respondidos" style="display: none;">
        <img class="logo" alt="logo" src="../../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/LogosSena-img/SendApp.png">
            <table id="con_respuesta" class="confirmado">
                <thead class="encabezado">
                    <tr class="encabezado2">
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Rol</th>
                        <th>Documento de Identidad</th>
                        <th>Fecha de Solicitud</th>
                        <th>Fecha de Respuesta</th>
                        <th>Asunto</th>
                        <th>Descripción</th>
                        <th>Respuesta</th>
                    </tr>
                </thead>
                <tbody class="respuestas">
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tbody>
            </table>
        </div>  
    </div>
    <button class="verHistorial"  onclick="verHistorial();" id="Historial" style="display: none;"><a href="#">Ver historial</a></button>
    <button class="salirHistorial"id="volver" onclick="ocultarHistorial();" style="display: none;"><a href="#" >Salir</a></button>
    <!-- contenedor que muestra la descripcion de la pqr -->
    <div class="contenedor_descripcion" id="contenedor_descripcion" style="display: none;">
        <h1>Descripción</h1>
        <p id="descripcion"></p>
        <div class="Noti-cerrar">
        <button class="button1" onclick="cerrarDescripcion();">Cerrar</button>
        </div>
    </div>
    <div class="contenedor_descripcion" id="contenedor_descripcionH" style="display: none; ">
        <h1>Descripción</h1>
        <br>
        <p id="descripcion1"></p>
        <div class="Noti-cerrar">
        <button class="button1" onclick="cerrarSimpleD();">Cerrar</button>
        </div>
    </diV>
    <!-- contenedor que muestra el formulario de respuesta y la respuesta -->
    <div class="contenedor_respuesta" id="contenedor_respuesta" style="display: none; ">
        <h1>Respuesta</h1>
        <form action="../../../../Proyecto_SendApp_2024/interfaces/Administrador/responderPQR.php" method="POST" class="form_respuesta" id="miFormulario">
            <input type="hidden" name="id_peticion" id="id_pqr1">
            <textarea type="text" name="respuesta_pqrs" class="Responder" rows="4" cols="80"></textarea>
            <button type="submit" value="Responder"  class="btnResponder" id="btnEnviar" onclick="enviarIdPQR();">Enviar</button>
        </form>
        <div class="botones-notificar-resúesta">
            <button class="button2" onclick="cerrarDescripcion();">Cancelar</button>
        </div>
        <div class="alerta" id="alerta" >
            <div class="modalA">
                <div class="barra"></div>
                <img src="../../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/cheque.png" alt="check">
                <h1 class="tituloM">success</h1>
                <p class="descripcionM">¡Respuesta enviada con exito!</p>
            </div>
        </div>
    </div>
    
    <div class="contenedor_respuesta" id="contenedor_respuestaH" style="display: none;">
        <h1>Respuesta</h1>
        <p id="respuesta"></p>
        <div class="Boton-noti-respuesta">
            <button class="button2" onclick="cerrarSimpleR();">Cerrar</button>
        </div>
    </div>
</div>  
</main> 
</div>
<script src="../../../../Proyecto_SendApp_2024/interfaces/Administrador/Scripts/notificaciones.js"></script>

