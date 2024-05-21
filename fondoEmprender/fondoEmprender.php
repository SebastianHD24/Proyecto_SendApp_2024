<?php
// Leer el contenido del archivo JSON
$json_data = file_get_contents("../json/fondo_emprender.json");
// Decodificar el JSON a un array asociativo
$data = json_decode($json_data, true);
?>
<?php include '../../Proyecto_SendApp_2024/bases/estructura-base.php' ?> <!--Llamo el archivo base-->
<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="../../Proyecto_SendApp_2024/fondoEmprender/fondoEmprender.css"> <!-- Estilos del Fondo Emprender -->
    <title>Fondo Enprender </title>
<?php endblock() ?>
<?php startblock('contenido') ?>
<section class="Contenido">
        <div class="orden">
            <div class="Primera_Impresion">
                <div class="contn">
                    <h1 class="titulo"><?php echo $data['titulo']; ?></h1>

                    <h2 class="subtitulos"><?php echo $data['subtitulo']; ?></h2>

                    <p class="parrafo"><?php echo $data['parrafo']; ?></p>
                </div>
                        <div class="imagen">
                            <img src="<?php echo $data['imagen']; ?>" alt="foto1">
                        </div>
            </div>
        </div>




        <div class="contenedor-esferas">
            <?php foreach ($data['esferas'] as $esfera): ?>
            <div class=" esfera esfera-2">
                <h3 class="subtitulo"><?php echo $esfera['titulo']; ?></h3>
                <p class="p"><?php echo $esfera['contenido']; ?></p>
            </div>
            <?php endforeach; ?>
        </div> 
        <?php foreach ($data['preguntas_frecuentes'] as $pregunta): ?>
            <div class="tarjeta">
                    <div class="tarj-img">
                        <img src="<?php echo $pregunta['icono']; ?>" alt="Icono-pregunta">
                    </div>
                <div class="contenido_tarjeta">
                        <h2><?php echo $pregunta['pregunta']; ?></h2>
                        <p class="contenido-corto"><?php echo $pregunta['respuesta_corta']; ?></p>
                        <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>
                        <p class="contenido-expansivo" style="display: none;"><?php echo $pregunta['respuesta_expandida']; ?></p>
                        <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>
                </div>
            </div>
        <?php endforeach; ?>
    <div class="tarjeta">
        <div class="contenido_tarjeta">
            <h2><?php echo $data['modelo_4k']['titulo']; ?></h2>
            <p><?php echo $data['modelo_4k']['contenido']; ?></p>
        </div>
    </div>
</section>
<script src="fondoEmprender.js"></script>
<?php endblock() ?>