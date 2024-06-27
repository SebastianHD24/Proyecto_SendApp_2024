<!------------------------Titulo de los servicios------------------------->
<h1 class="tituloDeInicioH1" id="titulo">Lista de Servicios</h1>

<!-----------------------Parrafo descriptivo del inicio de servicios-->
<article class="articuloContenedorDeParrafos" id="texto" >
    <p>Bienvenido a la sección de servicios, aquí podrás cambiar los administradores de cada área, consultar sus datos personales y cambiar el estado del servicio de <b>Activo o Inactivo</b></p>
</article>

<!-- Tabla con la info sobre los servicios y acciones que se pueden realizar con ellos -->
    <div class="tablaServicios">

        <!--Logo de SendApp del Inicio de servicios-->
        <!-- <figure class="contenedor__imagen-inicio">
            <img src="\Proyecto_SendApp_2024\imagenes\LogosSena-img\SendApp.png" alt="Logo de SendApp">
        </figure> -->

        <?php
        $listaServicios = "SELECT * FROM servicios";
        $ConGod = mysqli_query($conn, $listaServicios);

        // Verificar si hay registros de servicios
        if ($ConGod->num_rows == 0):
            echo "<p> No hay servicios en este momento </p>";
        else:
            $posicion = 0;
            ?>
            <!--Tabla contenedora que muestra la información estraida de la base de datos-->
            <div class="tabla__datos-grid">
            <?php
            while ($servicios = mysqli_fetch_array($ConGod)):
            ?>

            <section class="seccion_informacion_servicios">
                <!-- Articúlo 1 con el contenido del Nombre del servicio -->
                <article class="nombre__servicio">
                    <h3 class="nombre__campo-subtitulo">Nombre Del Servicio</h3>
                        <p class="datos__parrafo" id="nombreServicio">
                        <?= $servicios['nombre_servicio'] ?>
                        </p>
                

                <!-- Articúlo 2 con el contenido del estado del servcio -->
                
                    <h3 class="nombre__campo-subtitulo">Estado Del Servicio</h3>
                        <p class="datos__parrafo" id="nombreServicio">
                            <?php
                                    if ($servicios['estado_servicio'] == 1){
                                        echo "Activo";
                                    } else {
                                        echo "Inactivo";
                                    }
                                ?>
                        </p>
                    <button id="cambiarEstado" onclick="actualizarEstado(<?= $servicios['id_servicio'] ?>);" class="Boton__acciones">Cambiar estado del servicio</button>
                </article>
            </section>
                    <?php $posicion++; ?>
                    <?php endwhile; ?>
            </div>
        <?php endif; ?>     
    </div>
        <!-- Ventana emergente para confirmar accion de cambios. -->
        <div class="fondoPopUp oculto">
            <div class="popUpSeguro">
                <h4>¿Está seguro de realizar los cambios?</h4>
                <div id="botones">
                    <button class="confirmacionAd afir">Si</button>
                    <button class="confirmacionAd nega">No</button>
                </div>
            </div>
        </div>

        <!-- Ventana emergente despues de una actualizacion. -->
        <div class="alerta" id="alerta">
            <div class="modalA">
                <div class="barra"></div>
                <img src="../../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/cheque.png" alt="check">
                <h1 class="tituloM"></h1>
                <p class="descripcionM">¡Actualización exitosa!</p>
            </div>
        </div>
    </main>
</div>
<script src="../../../../Proyecto_SendApp_2024/scripts/componentesJS/actualizarServicios.js"></script>