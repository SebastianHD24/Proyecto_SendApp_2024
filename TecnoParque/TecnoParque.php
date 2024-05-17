<?php include '../../Proyecto_SendApp_2024/bases/estructura-base.php' ?> <!--Llamo el archivo base-->
<?php startblock('links-styles') ?>
    <link rel="stylesheet" type="text/css" href="../../Proyecto_SendApp_2024/TecnoParque/tecnoParque.css"> <!-- Estilos de Tecno Parque--> 
    <title>Tecno Parque</title>
<?php endblock() ?>
<?php startblock('contenido') ?> <!--Inicio bloque contenido-->
<?php
// Lee el contenido del archivo JSON
$json_string = file_get_contents('../json/tecno_parque.json');
// Decodifica el JSON a un array asociativo
$data = json_decode($json_string, true);
// Comprueba si la decodificación fue exitosa
if ($data === null) {
    // Ocurrió un error al decodificar el JSON
    echo "Error al decodificar el JSON.";
} else {
    // El JSON se decodificó correctamente, puedes acceder a sus elementos como un array asociativo
    ?>
    <section class="Contenido">
        <div class="orden">
            <div class="Primera_Impresion">
                <div class="contn">
                    <h1 class="titulo"><?php echo $data['titulo']; ?></h1>
                    <h2 class="subtitulos"><?php echo $data['subtitulo']; ?></h2>
                    <p class="parrafo"><?php echo $data['parrafo_inicio']; ?></p>
                    <hr>
                    <p><?php echo $data['parrafo2']; ?></p>
                </div>
                <div class="imagen">
                    <img src="<?php echo $data['imagen']; ?>" alt="foto1">
                </div>
            </div>
        </div>
        <div class="contenedor-esferas">
            <?php foreach ($data['esferas'] as $esfera) { ?>
                <div class="esfera esfera-3">
                    <h3 class="subtitulo"><?php echo $esfera['titulo']; ?></h3>
                    <p><?php echo $esfera['contenido']; ?></p>
                </div>
            <?php } ?>
        </div>
        <div class="tarjetas-contenedor">
            <div class="imagen">
                    <img src="<?php echo $data['tecno_imagen']; ?>" alt="logo TecnoParque">
            </div>
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
        <div class="contenido_lineas">
            <h3 class="subtitulos"><?php echo $data['titulo_tarjetas']; ?></h3>
            <div class="lineas">
                <?php foreach ($data['lineas'] as $linea) { ?>
                    <div class="linea1">
                        <div class="logo_lineas">
                            <img src="<?php echo $linea['icono']; ?>" alt="Icono línea">
                        </div>
                        <strong><?php echo $linea['titulo']; ?></strong>
                        <p><?php echo $linea['contenido']; ?></p>
                        <ol class="l_ordenada">
                            <?php echo $linea['lista']; ?>
                        </ol>
                    </div>
                <?php } ?>
            </div>
        </div><!-- de 250 lineas a 100-->
        <section class="info_Container">
            <div class="info-column">
                <h3 class="subtitulos"><?php echo $data['ubicacion']; ?></h3>
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
            </div>   
        </section>
    </section>
    <?php
}
?>
<?php endblock() ?>