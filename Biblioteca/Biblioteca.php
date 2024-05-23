<?php include '../bases/estructura-base.php' ?>
<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" type="text/css" href="../../Proyecto_SendApp_2024/Biblioteca/biblioteca.css">
    <title>Biblioteca</title>
<?php endblock() ?>
<?php startblock('contenido') ?>
<?php
    // Leer el archivo JSON
    $json_data = file_get_contents('../json/biblioteca.json');
    
    // Decodificar el JSON a un array asociativo
    $data = json_decode($json_data, true);
?>
<section class="Contenido">
    <div class="orden">
        <div class="Primera_Impresion">
            <div class="contn">
                <!-- Mostrar el título de la biblioteca -->
                <h1 class="titulo"><?php echo $data['titulo']; ?></h1>
                <!-- Mostrar la descripción de la biblioteca -->
                <p class="parrafo"><?php echo $data['parrafo']; ?></p>
                <hr>
                <!-- Mostrar el horario de atención -->
                <p><strong>Horario de atención:</strong> <?php echo $data['horario']; ?></p>
            </div>
            <div class="imagen">
                <!-- Mostrar la imagen de la biblioteca -->
                <img src="<?php echo $data['imagen']; ?>" alt="">
            </div>
        </div>
    </div>
    <div class="Contenedor">
        <div class="actividades">
            <h3 class="subtitulos">¿Qué actividades ofrecemos?</h3>
            <p class="p">
                Trabajamos bajo los lineamientos a nivel 
                <br>
                nacional del SENA. Tenemos dos ramas que son:
                <br>
            </p>
            <ol class="l_ordenada">
                <div class="actividad">
                    <div class="actividad1">
                        <li><strong>Actividades de apoyo a la formación:</strong></li>
                        <ul class="l_desordenada">
                            <!-- Mostrar las actividades de apoyo a la formación -->
                            <?php foreach ($data['actividades']['apoyo'] as $item): ?>
                                <li><?php echo $item; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <br>
                    </div>

                    <div class="actividad2">
                        <li><strong>Actividades de extensión cultural:</strong></li>
                        <ul class="l_desordenada">
                            <!-- Mostrar las actividades de extensión cultural -->
                            <?php foreach ($data['actividades']['extension'] as $item): ?>
                                <li><?php echo $item; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </ol>
        </div>
        <div class="tarjetas-contenedor">
            <!-- Mostrar las tarjetas con las normas de la biblioteca y otras informaciones -->
            <?php foreach ($data['tarjetas'] as $tarjeta): ?>
                <div class="tarjeta">
                    <div class="tarj-img">
                        <img src="<?php echo $tarjeta['imagen']; ?>" alt="<?php echo $tarjeta['alt']; ?>">
                    </div>
                    <div class="contenido_tarjeta">
                        <!-- Mostrar el título de la tarjeta -->
                        <h2><?php echo $tarjeta['titulo']; ?></h2>
                        <?php if (isset($tarjeta['items'])): ?>
                            <!-- Mostrar los elementos de la lista si están disponibles -->
                            <ol class="l_ordenada">
                                <?php foreach ($tarjeta['items'] as $item): ?>
                                    <li><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ol>
                        <?php elseif (isset($tarjeta['contenido'])): ?>
                            <!-- Mostrar el contenido si está disponible -->
                            <p class="p1"><?php echo $tarjeta['contenido']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endblock() ?>