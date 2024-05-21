<?php include '../bases/estructura-base.php' ?> <!--Llamo el archivo donde se encuentra la estructura que quiero heredar-->
<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" type="text/css" href="../../Proyecto_SendApp_2024/FabricaSoftware/fabrica.css"> <!-- Estilos de la fabrica -->
    <title>Fabrica De Software</title> 
<?php endblock() ?>

<?php startblock('contenido') ?>

    <section class="Contenido">
        <div class="orden">
            <div class="Primera_Impresion">
                <div class="contn">
                    <?php
                        // Leer el archivo JSON
                        $json_data = file_get_contents('../json/fabrica_software.json');
                        // Decodificar el JSON
                        $data = json_decode($json_data, true);
                    ?>
                    <a href="" target="_blank" style = "color:white; font-size: 2px;">a</a>
                    <h1 class="titulo"><?php echo $data['titulo']; ?></h1>
                    <h2 class="subtitulos"><?php echo $data['subtitulo']; ?></h2>
                    <p class="parrafo"><?php echo $data['parrafo']; ?></p>
                    <hr>
                    <h3><?php echo $data['parrafo2']; ?></h3>
                </div>
                    <div class="imagen">
                        <img src="<?php echo $data['imagen']; ?>" alt="Imagen lugar Servicios Tecnologicos">
                    </div>
            </div>
        </div>

        <?php foreach ($data['tarjetas'] as $tarjeta) { ?>
            <div class="tarjeta">

                <div class="tarj-img">
                    <img src="<?php echo $tarjeta['imagen']; ?>" alt="Icono">
                </div>

                <div class="contenido_tarjeta">
                    <h2><?php echo $tarjeta['titulo']; ?></h2>

                    <p class="contenido-corto"><?php echo $tarjeta['contenido_corto']; ?></p>

                    <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                    <p class="contenido-expansivo" style="display: none;"><?php echo $tarjeta['contenido_expandido']; ?></p>

                    <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>

                </div>
            </div>
        <?php } ?>

    </section>
    <script src="fabrica.js"></script>
<?php endblock() ?>
