<?php include '../bases/header.php' ?>

<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" type="text/css" href="coordinacion.css"> <!-- Estilos de coordinación -->
    <title>Coordinación Académica</title>
<?php endblock() ?>

<?php startblock('contenido') ?>
    <div class="sennova">
        <section>
            <h1 class="titulo">Coordinacón Academica</h1>
            <article><img src="" alt="logo"></article>

            <h3 class="subtitulos">Subtitulo</h3>
            <p>
                Hola amigos del SendApp
            </p>
            <p>
                Este es una prueba de git
            </p>
            <p>
                Esta es la segunda prueba de git
            </p>
            <button class="button">Reservar cita</button>
            <script>const button = document.querySelector(" .button ");

                button.addEventListener("click", (e) => {
                    e.preventDefault();
                    button.classList.add("animate");

                    setTimeout(() => {
                        button.classList.remove("animate");
                    }, 600);
                });</script>
        </section>
    </div>
<?php endblock() ?>

<?php startblock('scripts') ?>
    <script src="coordinacion.js"> </script>
<?php endblock() ?>
