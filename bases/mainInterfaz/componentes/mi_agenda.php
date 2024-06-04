<div class="calendar">
            <h1 class= "Titulo-calendario">Calendario</h1>
            <p class="parrafo_calendario">Citas solicitadas de los usuarios.</p>
            <header>
                <h3></h3>
                <nav>
              <button id="prev"></button>
              <button id="next"></button>
            </nav>
            </header>
            <section class="week">
                <ul class="days">
                    <li>Dom</li>    
                    <li>Lun</li>
                    <li>Mar</li>
                    <li>Mier</li>
                    <li>Jue</li>
                    <li>Vier</li>
                    <li>Sab</li>
                    
                </ul>
                <ul class="dates"></ul>
            </section>
            <div class="eventos" id="eventos"></div>
        </div>
        <div class="info oculto" id="infoPopup">
            <div class="encabezado">
                <h1>Sin escoger cita</h1>
                <button class="close-button" onclick="cerrar()">X</button>
            </div>
            <div class="contenido">
                <p>Nombre completo del Aprendiz: <span id="nombreAprendiz">Sin información</span></p>
                <p>Curso: <span id="curso">Sin información</span></p>
                <p>Ficha: <span id="ficha">Sin información</span></p>
                <p>Descripción: <span id="descripcionCita">Sin información</span></p>
            </div>
        </div>
    </main>
</div>
<script src="../../../../Proyecto_SendApp_2024/scripts/componentesJS/calendario.js"></script>
