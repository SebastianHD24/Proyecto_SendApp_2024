<div class="container">
    <section id="mainContent">
        <div class="titulo">
            <h1>Solicitar PQR</h1>
        </div>
        <!-- --------------------------------- PQR ------------------------------------- -->
        <div class="type_PQR">
            <form id="formulario">
                <label for="opciones">Tipo de PQR:</label>
                <br>
                <select name="opciones" id="opciones">
                  <option value="opcion1">Reporte de Problemas Técnicos</option>
                  <option value="opcion2">Queja sobre Servicio</option>
                  <option value="opcion3">Solicitud de Información Adicional</option>
                  <option value="opcion4">Opción 4</option>
                </select>
            </form>
        </div>
        <!-- ------------------------ Descripcion ------------------------------------ -->
        <div class="description">
            <form action="" id="formDes"> 
                <label for="description-label">Descripción:</label>
                <br>
                <textarea name="text" id="text" cols="30" rows="10"></textarea>
            </form>
        </div>
        <!-- ------------------------------------- Botones -------------------- -->
        <div class="button">
            <a href="" id="btnEnviar"><button onclick="">Enviar</button></a>
            <a href=""><Button>Cancelar</Button></a>
        </div>
        <!-- ----------------- menu para ocultar ----------- -->
    </section>
    <div class="myModal">
        <div class="confirmacion" id="confirmacion">
            <p>PQR enviada con éxito</p>
            <img src="../../Styles/Img/Componentes-img/senal-aprobada.png" alt="">
        </div>
    </div>
</div>
</main> 
</div>