<?php
// Leer el contenido del archivo JSON
$json_data = file_get_contents("../json/senova.json");

// Decodificar el JSON a un array asociativo
$data = json_decode($json_data, true);
?>
<?php include '../bases/estructura-base.php' ?>
<?php startblock('links-styles') ?>
    <link rel="stylesheet" href="../../Proyecto_SendApp_2024/senova/senova.css"> <!-- Estilos de Senova -->
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
                    <p class="p"><?php echo $data['parrafo2']; ?></p>
                </div>
                    <div class="imagen">
                        <img src="<?php echo $data['imagen']; ?>" alt="">
                    </div>
            </div>
            <button class="button"><?php echo $data['boton']; ?></button>
        </div>
        <?php foreach ($data['tarjetas'] as $tarjeta): ?>
            <div class="tarjeta">
                <div class="tarj-img">
                    <img src="<?php echo $tarjeta['imagen']; ?>" alt="">
                </div>
                <div class="contenido_tarjeta">
                    <h2><?php echo $tarjeta['titulo']; ?></h2>
                    <p class="contenido-corto"><?php echo $tarjeta['contenido_corto']; ?></p>
                    <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>
                    <p class="contenido-expansivo" style="display: none;"><?php echo $tarjeta['contenido_expandido']; ?></p>
                    <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
    <script src="Scripts/senova.js"> </script>
<?php endblock() ?>