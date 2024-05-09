
<h1 id="mensaje1" style="display: none;">No hay historial</h1>

<h1 id="mensaje">No hay nuevas PQR</h1>
<div class="contenedor-popup" id="contenedor-popup"> 
    <div class="popup">
        <div class="sin-responder" id="sin-responder" style="display: none;">
        <img class="logo" alt="logo" src="../../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/LogosSena-img/SendApp.png">
            <table id="sin_respuesta" class="confirmado">
                <thead class="encabezado">
                    <tr class="encabezado2">
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Documento de Identidad</th>
                        <th>Fecha de Dolicitud</th>
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
                    </tr>
                </tbody>
            </table>  
        </div>
        <div class="respondidos" id="respondidos" style="display: none;">
        <img class="logo" alt="logo" src="../../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/LogosSena-img/SendApp.png">
            <table id="con_respuesta" class="confirmado">
                <thead class="encabezado">
                    <tr class="encabezado2">
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
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
                    </tr>
                </tbody>
            </table>
        </div>  
    </div>
</div>
<a href="#" onclick="verHistorial();" id="Historial">Ver historial</a>
<a href="#" class="salir" id="volver" onclick="ocultarHistorial();" style="display: none;">Salir</a>
</main> 
</div>
<script src="../../../../Proyecto_SendApp_2024/interfaces/Administrador/Scripts/notificaciones.js"></script>