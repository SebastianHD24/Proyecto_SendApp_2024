<?php
// Leer el contenido del archivo JSON
$json_data = file_get_contents("../json/administracion.json");
// Decodificar el JSON a un array asociativo
$data = json_decode($json_data, true);
?>
<?php include '../bases/estructura-base.php' ?>
<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="administracion.css"> <!-- Estilos de Administración -->
    <title>Administración</title>
<?php endblock() ?>
<?php startblock('contenido') ?>
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
        </div>
            <div class="Contenedor">
                <div class="tarjetas-contenedor">
                    <?php foreach ($data['servicios'] as $servicio): ?>
                        <div class="tarjeta">
                            <div class="tarj-img">
                                <img src="<?php echo $servicio['imagen']; ?>" >
                            </div>
                            <div class="contenido_tarjeta">
                                <h2><?php echo $servicio['titulo']; ?></h2>
                                <ol class="l_ordenada">
                                    <?php foreach ($servicio['lista'] as $item): ?>
                                        <li><?php echo $item; ?></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
    </section>
<?php endblock() ?>