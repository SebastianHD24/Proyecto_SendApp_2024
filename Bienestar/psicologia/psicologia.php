<?php include '../../bases/estructura-base.php' ?>

<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="../../../Proyecto_SendApp_2024/Bienestar/psicologia/psicologia.css"> <!-- Estilos de psicologia -->
    <title>Psicologia</title>
<?php endblock() ?>
<!--Bloque para el logo sena-->
<?php startblock('logo-sena') ?>
<div class="logo">
    <img src="../../Inicio/Img-home/LogosSena-img/SendApp.png"
    alt="SendApp Logo"/>
</div>
<?php endblock() ?>
<?php startblock('contenido') ?>
<?php
    // Leer el archivo JSON
    $json_data = file_get_contents('../../json/psicologia.json');
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
                <img src="<?php echo $data['imagen']; ?>" alt="logo"> 
            </div>
        </div>
        <button class="button">Reservar cita</button>
    </div>
    <div class="Contenedor">
        <h2 class="sub">Servicios Ofrecidos</h2>
        <div class="tarjetas-contenedor">
            <?php foreach ($data['servicios'] as $servicio): ?>
                <div class="tarjeta">
                    <div class="tarj-img">
                        <img src="<?php echo $servicio['imagen']; ?>" alt="Imagen representativa de <?php echo $servicio['titulo']; ?>">
                    </div>
                    <div class="contenido_tarjeta">
                        <h2><?php echo $servicio['titulo']; ?></h2>
                        <p><?php echo $servicio['contenido']; ?></p>
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