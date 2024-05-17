<?php
// Lee el contenido del archivo JSON
$json_file = file_get_contents('../json/coordinacion.json');
// Decodifica el JSON a un array asociativo
$data = json_decode($json_file, true);
// Incluye la estructura base de la página
include '../bases/estructura-base.php';
// Inicia el bloque de estilos
startblock('links-styles');
?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" type="text/css" href="../../Proyecto_SendApp_2024/coordinaccion/coordinacion.css"> <!-- Estilos de coordinación -->
    <title>Coordinación Académica</title>
<?php
// Termina el bloque de estilos
endblock();
// Inicia el bloque de contenido
startblock('contenido');
?>
    <section class="Contenido">
        <div class="orden">
            <div class="Primera_Impresion">
                <div class="contn">
                    <h1 class="titulo"><?= $data['titulo'] ?></h1>
                    <h2 class="subtitulos"><?= $data['subtitulo'] ?></h2>
                    <p class="parrafo"><?= $data['parrafo'] ?></p>
                    <hr>
                </div>
                <div class="imagen">
                    <img src="<?= $data['imagen'] ?>" alt="">
                </div>
            </div>     
        </div>
        <div class="Contenedor">
            <h2 class="sub">Funciones de la coordinación académica:</h2>
            <div class="tarjetas-contenedor">
                <?php foreach ($data['funciones'] as $funcion): ?>
                <div class="tarjeta">
                    <div class="tarj-img">
                        <img src="<?= $funcion['imagen'] ?>">
                    </div>
                    <div class="contenido_tarjeta">
                        <h2><?= $funcion['titulo'] ?></h2>
                        <p class="p"><?= $funcion['contenido'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <hr>
        <p class="parrafo">
            <?= $data['parrafo_final'] ?>
        </p>
    </section>
<?php
// Termina el bloque de contenido
endblock();
?>