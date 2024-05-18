<?php include '../bases/estructura-base.php' ?>

<?php startblock('links-styles') ?>
    <!--ESTILOS-->
    <title>TecnoAcademia</title>
    <link rel="stylesheet" type="text/css" href="../../Proyecto_SendApp_2024/TecnoAcademia/academia.css"> <!--Estilos de Tecno Academia -->
<?php endblock() ?>

<?php startblock('contenido') ?> <!--Inicio bloque contenido-->
<section class="Contenido">
    <div class="orden">
        <div class="Primera_Impresion">
            <div class="contn">
                <?php
                    // Leer el archivo JSON
                    $json_data = file_get_contents('../json/tecno_academia.json');
                    // Decodificar el JSON
                    $data = json_decode($json_data, true);
                ?>

                <h1 class="titulo"><?php echo $data['titulo']; ?></h1>

                <h2 class="subtitulos"><?php echo $data['subtitulo']; ?></h2>

                <p class="parrafo"><?php echo $data['parrafo_inicio']; ?></p>
                <hr>
                <p>
                    <?php echo $data['parrafo2']; ?>
                </p>
            </div>
            <div class="imagen">
                <img src="<?php echo $data['imagen']; ?>" alt="foto1">
            </div>
        </div>
    </div>
    <div class="Contenedor">
        <div class="tarjetas-contenedor">
            <?php foreach ($data['tarjetas'] as $tarjeta) { ?>
                <div class="tarjeta">
                    <div class="tarj-img">
                        <img src="<?php echo $tarjeta['icono']; ?>" alt="Icono">
                    </div>
                    <div class="contenido_tarjeta">
                        <h2><?php echo $tarjeta['titulo']; ?></h2>
                        <?php echo $tarjeta['contenido']; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="contenedor-esferas">
        <?php foreach ($data['esferas'] as $esfera) { ?>
            <div class="esfera esfera-3">
                <h3 class="subtitulo"><?php echo $esfera['titulo']; ?></h3>
                <p class="p"><?php echo $esfera['contenido']; ?></p>
            </div>
        <?php } ?>
    </div>
    <section class="info_Container">
        <div class="info-column">
            <h1 class="subtitulo"><?php echo $data['ubicacion']; ?></h1>
            <br>
            <h4><?php echo $data['titulo_direccion']; ?></h4>
            <p><?php echo $data['direccion']; ?></p>
        </div>
        <div class="info-column">
            <h4><?php echo $data['titulo_horario']; ?></h4>
            <p><?php echo $data['horario']; ?></p>
        </div>
        <div class="info-column">
            <h4><?php echo $data['atencion']; ?></h4>
            <p><?php echo $data['telefono']; ?></p>
            <p><?php echo $data['correo']; ?></p>
            <p><?php echo $data['whatsapp']; ?></p>
            <p><?php echo $data['instagram']; ?></p>
            <p><?php echo $data['facebook']; ?></p>
        </div>
    </section>
</section>

<?php endblock() ?> <!--Fin bloque contenido-->