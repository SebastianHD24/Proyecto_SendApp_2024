<?php include '../bases/estructura-base.php' ?>

<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" type="text/css" href="coordinacion.css"o> <!-- Estilos de coordinación -->
    <title>Coordinación Académica</title>
<?php endblock() ?>

<?php startblock('contenido') ?>
<section class="Contenido">

        <h1 class="titulo">Coordinacón Academica</h1>

        <h3 class="subtitulos">Subtitulo</h3>

        <div class="tarjeta">

            <div class="tarj-img">
                <img src="" >
            </div>

            <div class="contenido_tarjeta">

                <h2>subtitulo</h2>

                <p class="contenido-corto"></p>

                <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                <p class="contenido-expansivo"></p>

                <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>

            </div>

        </div>

        <div class="tarjeta">

            <div class="tarj-img">
                <img src=""  >
            </div>

            <div class="contenido_tarjeta">

                <h2>subtitulo</h2>

                <p class="contenido-corto">contenido </p>

                <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                <p class="contenido-expansivo">contenido</p>

                <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>

            </div>

        </div>

        <div class="tarjeta">

            <div class="tarj-img">
                <img src="" >
            </div>

            <div class="contenido_tarjeta">

                <h2>subtitulo</h2>

                <p class="contenido-corto">contenido </p>

                <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                <p class="contenido-expansivo">contenido</p>

                <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>
            </div>

        </div>

        <div class="tarjeta">

            <div class="tarj-img">
                <img src="" >
            </div>

            <div class="contenido_tarjeta">

                <h2>subtitulo</h2>

                <p class="contenido-corto">Contenido</p>

                <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                <p class="contenido-expansivo">Contenido</p>

                <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>

            </div>

        </div>
        <button class="button">Reservar cita</button>
    </section>
    <script src="coordinacion.js"> </script>
<?php endblock() ?>