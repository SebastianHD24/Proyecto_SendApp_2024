<?php include '../../bases/header.php' ?>
    
<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" type="text/css" href="deportes.css"> <!--Estilos de Deportes -->
    <link rel="stylesheet" type="text/css" href="../../Styles/header.css"> <!-- Estilos del header -->
    <link rel="stylesheet" type="text/css" href="../../Styles/footer.css"> <!-- Estilos del footer -->
    <link rel="stylesheet" type="text/css" href="../../Styles/accesibilidad.css"> <!--Estilos de la accesibilida-->
<?php endblock() ?>

<!-- Logo SendApp-->
<!--Bloque para el logo sena-->
<?php startblock('logo-sena') ?>
<div class="logo">
    <img src="../../Inicio/Img-home/LogosSena-img/SendApp.png"
    alt="SendApp Logo"/>
</div>
<?php endblock() ?>


<?php startblock('contenido') ?>
    <div class="sennova">
        <section>
            <h1 class="titulo">Deportes y Cultura</h1>
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

<?php startblock('scripts') ?>
    <script src="../../ScriptsGenerales/accesibilidad.js"></script> 
<?php endblock() ?>