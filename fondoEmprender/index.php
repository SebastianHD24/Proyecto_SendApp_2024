<?php include '../../Proyecto_SendApp_2024/bases/header.php' ?> <!--Llamo el archivo base-->

<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="fondoEmprender.css"> <!-- Estilos del Fondo Emprender -->
    <title>Fondo Enprender </title>
<?php endblock() ?>


<?php startblock('contenido') ?>
    <div class="empreder">
        <section>
            <h1 class="titulo">Fondo Emprender</h1>
            <article>
                <img src="" alt="logo">
            </article>
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

<?php startblock("script")?>
    <script src="fabrica.js"></script>
<?php endblock()?>
