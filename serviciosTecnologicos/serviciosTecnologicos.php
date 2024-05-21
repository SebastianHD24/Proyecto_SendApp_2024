<?php
// Leer el contenido del archivo JSON
$json_data = file_get_contents("../json/servicios_tecnologicos.json");
// Decodificar el JSON a un array asociativo
$data = json_decode($json_data, true);
?>
<?php include('../bases/estructura-base.php') ?>
<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" type="text/css" href="../../Proyecto_SendApp_2024/serviciosTecnologicos/tecnologicos.css"> <!--Estilos de servicios Tecnológicos-->
<?php endblock() ?>
<?php startblock('contenido') ?>
    <section class="Contenido">
        <div class="orden">
                <div class="Primera_Impresion">
                    <div class="contn">
                        <h1 class="titulo"><?php echo $data['titulo']; ?></h1>
                        <p class="parrafo"><?php echo $data['parrafo_inicio']; ?></p>
                        <hr>
                        <p class="p"><?php echo $data['parrafo2']; ?></p>
                    </div>
                        <div class="imagen">
                            <img src="<?php echo $data['imagen']; ?>" alt="Imagenes lugar Servicios Tecnologicos">
                        </div>
                </div>
            </div>
        <?php foreach ($data['tarjetas'] as $tarjeta): ?>
            <div class="tarjeta">
                <div class="tarj-img">
                    <img src="<?php echo $tarjeta['icono']; ?>" alt="Icono-pregunta">
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
    <script src="Scripts/tecnologicos.js"></script>
<?php endblock() ?>