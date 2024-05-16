<?php
// Leer el contenido del archivo JSON
$json_data = file_get_contents("../json/relaciones_corporativas.json");
// Decodificar el JSON a un array asociativo
$data = json_decode($json_data, true);
?>
<?php include '../../Proyecto_SendApp_2024/bases/estructura-base.php' ?> <!--Llamo el archivo base-->
<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" type="text/css" href="../../Proyecto_SendApp_2024/relacionesCorporativas/coorporativas.css"> <!-- Estilos de relaciones coorporativas -->
    <title><?php echo $data['titulo']; ?></title>
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
                        <img src="<?php echo $data['imagen']; ?>" alt="Ima">
                    </div>
            </div>
                <button class="button"><?php echo $data['boton']; ?></button>
        </div>
        <div class="Contenedor">
            <h2 class="sub"><?php echo $data['contenido_adicional']['titulo']; ?></h2>
            <p class="p">
                <?php echo $data['contenido_adicional']['parrafo']; ?>
            </p>
            <div class="tarjetas-contenedor">
                <?php foreach ($data['tarjetas'] as $tarjeta): ?>
                    <div class="tarjeta">
                        <?php echo $tarjeta['imagen']; ?>
                        <div class="contenido_tarjeta">
                            <h2><?php echo $tarjeta['titulo']; ?></h2>
                            <?php echo $tarjeta['contenido']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endblock() ?>