<form action="../backend/agregarpqrs.php"  method="post" id="formulario">
    <section id="mainContent" class="contenido">
        <div class="titulo">
            <h1>Solicitar PQRS</h1>
        </div>

        <!-- --------------------------------- PQR ------------------------------------- -->
        <div class="type_PQR">
            <label for="opciones">Tipo de PQR:</label>
            <br>
            <select name="tipo_solicitud" id="opciones" class="opcionespqr">
                <option value="peticion">Petición</option>
                <option value="queja">Queja</option>
                <option value="reclamo">Reclamo</option>
                <option value="sugerencia">Sugerencia</option>
            </select>
        </div>
        <!-- ------------------------ Descripcion ------------------------------------ -->
        <div class="description">
            <label for="description-label">Descripción:</label>
            <br>
            <span id="charCount">0/200</span>
            <textarea name="descripcion_pqrs" id="text" cols="30" rows="10" class="descripcion-pqr"></textarea>
        </div>
        <!-- ------------------------------------- Botones -------------------- -->
        <div class="boton">
            <button class="button_pqr" type="submit" id="btnEnviar">Enviar</button>
            <button class="button_pqr" type="reset" id="btnCancelar">Cancelar</button>
        </div>
        <!-- ----------------- menu para ocultar ----------- -->
    </section>
    <div class="myModal" id="myModal">
    <div class="confirmacion" id="confirmacion">
        <p>Enviada con éxito</p>
        <img src="../../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/senal-aprobada.png" alt="imagen de confirmacion del envio de la pqrs">
    </div>
</div>
</form>

<script src="../../../../Proyecto_SendApp_2024/scripts/componentesJS/pqrs.js"></script>
<script>
    // Evento de teclado (input) para el conteo de los caracteres de la descripcion de la cita
document.addEventListener('DOMContentLoaded', (event) => {
    const textarea = document.getElementById('text');
    const charCount = document.getElementById('charCount');

    textarea.addEventListener('input', () => {
        const currentLength = textarea.value.length;
        charCount.textContent = `${currentLength}/200`;

        if (currentLength >= 150) {
            textarea.value = textarea.value.substring(0, 199);
        }
    });
});
</script>