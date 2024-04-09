<?php include '../../Proyecto_SendApp_2024/bases/header.php' ?>

<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="fondoEmprender.css"> <!-- Estilos del Fondo Emprender -->
    <link rel="stylesheet" href="../Styles/header.css"> <!-- Estilos del header  -->
    <link rel="stylesheet" href="../Styles/footer.css"> <!-- Estilos del footer -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Inclusión de la biblioteca jQuery -->
<?php endblock() ?>


<?php startblock('contenido') ?>
    <div class="sennova">
        <section>
            <h1 class="titulo">Fondo Emprender</h1>
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

<script src="../Inicio/Scripts/inactividad.js"></script> <!--Script para manejar la inactividad del usuario-->