<?php include '../bases/header.php' ?>

<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="biblioteca.css">    
    <link rel="stylesheet" href="../Styles/header.css">
    <link rel="stylesheet" href="../Styles/footer.css">
<?php endblock() ?>

<?php startblock('contenido') ?>
    <div class="sennova">
        <section>
            <h1 class="titulo">Biblioteca</h1>
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