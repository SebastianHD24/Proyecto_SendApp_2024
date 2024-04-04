<?php include '../bases/header.php' ?>

<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="administracion.css"> <!-- Estilos de Administración -->
    <link rel="stylesheet" type="text/css" href="../Styles/header.css"> <!-- Estilos del header -->
    <link rel="stylesheet" type="text/css" href="../Styles/footer.css"> <!-- Estilos del footer -->
<?php endblock() ?>


<?php startblock('contenido') ?>
    <div class="sennova">
        <section>
            <h1 class="titulo">Administración Educativa</h1>
            <article><img src="" alt="logo"></article>

            <h3 class="subtitulos">Subtitulo</h3>
            <p>
                parrafo
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