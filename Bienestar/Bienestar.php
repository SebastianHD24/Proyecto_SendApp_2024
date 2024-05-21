<?php include '../bases/estructura-base.php' ?>

<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" type="text/css" href="../../Proyecto_SendApp_2024/Bienestar/Styles-Bienestar/bienestar.css"> <!-- Estilos de Bienestar -->
    <title>Bienestar Al Aprendíz</title>
<?php endblock() ?>

<?php startblock('contenido') ?>
    <?php
    // Leer el archivo JSON
    $json_data = file_get_contents('../json/bienestar.json');
    
    // Decodificar el JSON a un array asociativo
    $data = json_decode($json_data, true);
    ?>
    <section class="Contenido">
        <div class="orden">
            <div class="Primera_Impresion">
                <div class="contn">
                    <h1 class="titulo"><?php echo $data['titulo']; ?></h1>
                    <h2 class="subtitulos"><?php echo $data['subtitulo']; ?></h2>
                    <p class="parrafo"><?php echo $data['parrafo']; ?></p>
                    <hr>
                </div>
                <div class="imagen">
                    <img src="<?php echo $data['imagen']; ?>" alt="">
                </div>
            </div>
            <div class="botones-bienestar">
                <?php foreach ($data['botones'] as $boton): ?>
                    <a href="<?php echo $boton['enlace']; ?>"><button class="btn"><?php echo $boton['titulo']; ?></button></a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="Contenedor">
            <h2 class="subtitulos">Servicios Ofrecidos</h2>
            <div class="tarjetas-contenedor">
                <?php foreach ($data['servicios'] as $servicio): ?>
                    <div class="tarjeta">
                        <div class="tarj-img">
                            <img src="<?php echo $servicio['imagen']; ?>" alt="imagen servicios que se ofrece">
                        </div>
                        <div class="contenido_tarjeta">
                            <h2><?php echo $servicio['titulo']; ?></h2>
                            <p class="p"><?php echo $servicio['contenido']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="contenedor-esferas">
                <div class="esfera esfera-1">
                    <h3 class="subtitulo"><?php echo $data['enfoque']['titulo']; ?></h3>
                    <p><?php echo $data['enfoque']['contenido']; ?></p>
                </div>
                <div class="esfera esfera-2">
                    <h3 class="subtitulo"><?php echo $data['equipo']['titulo']; ?></h3>
                    <p><?php echo $data['equipo']['contenido']; ?></p>
                </div>
                <div class="esfera esfera-3">
                    <h3 class="subtitulo"><?php echo $data['contacto']['titulo']; ?></h3>
                    <p><?php echo $data['contacto']['contenido']; ?></p>
                </div>
            </div>
        </div>
    </section>
<?php endblock() ?>
