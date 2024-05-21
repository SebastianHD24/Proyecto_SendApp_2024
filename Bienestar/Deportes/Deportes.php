<?php include '../../bases/estructura-base.php'; ?>

<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" type="text/css" href="../../../Proyecto_SendApp_2024/Bienestar/Deportes/deportes.css"> <!--Estilos de Deportes -->
    <title>Deportes</title>
<?php endblock() ?>
<!--Bloque para el logo sena-->
<?php startblock('logo-sena') ?>
<div class="logo">
    <img src="../../Inicio/Img-home/LogosSena-img/SendApp.png" alt="SendApp Logo"/>
</div>
<?php endblock() ?>
<?php startblock('contenido') ?>
<section class="Contenido">
    <div class="orden">
        <div class="Primera_Impresion">
            <?php
            // Leer el contenido del JSON
            $json_data = file_get_contents("../../json/deportes.json");
            // Decodificar el JSON a un array asociativo
            $data = json_decode($json_data, true);
            // Imprimir dinámicamente el contenido del JSON
            echo '<div class="contn">';
            echo '<h1 class="titulo">' . $data['titulo'] . '</h1>';
            echo '<h2 class="subtitulos">' . $data['subtitulo'] . '</h2>';
            echo '<p class="parrafo">' . $data['parrafo'] . '</p>';
            echo '<hr>';
            echo '</div>';
            ?>
            <div class="imagen">
                <img src="<?php echo $data['imagen']; ?>" alt="">
            </div>
        </div>
    </div>
    <div class="Contenedor">
        <h2 class="sub">Servicios Ofrecidos</h2>
        <div class="tarjetas-contenedor">
            <?php
            // Iterar sobre los servicios y generar las tarjetas dinámicamente
            // Dios esto paso de 250 lineas a 60 si mucho jaja
            foreach ($data['servicios'] as $servicio) {
                echo '<div class="tarjeta">';
                echo '<div class="tarj-img">';
                echo '<img src="' . $servicio['imagen'] . '" alt="Imagen representativa">';
                echo '</div>';
                echo '<div class="contenido_tarjeta">';
                echo '<h2>' . $servicio['titulo'] . '</h2>';
                echo '<p class="p">' . $servicio['contenido'] . '</p>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>
<?php endblock() ?>