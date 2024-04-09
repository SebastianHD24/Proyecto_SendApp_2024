<?php include '../../bases/header.php' ?>

<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="psicologia.css"> <!-- Estilos de psicologia -->
    <link rel="stylesheet" href="../../Styles/header.css"> <!-- Estilos del header -->
    <link rel="stylesheet" href="../../Styles/footer.css"> <!-- Estilos del footer -->
    <link rel="stylesheet" href="../../Styles/accesibilidad.css"><!--CSS accesibilidad-->
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
        <section>
            <h1 class="titulo">Psicologia</h1>
            <article><img src="" alt="logo"></article>

            <h3 class="subtitulos">Subtitulo</h3>
            <p>
                parrafo
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eum maxime in. Pariatur sed quidem veritatis, ut quaerat nam reprehenderit quam debitis eligendi est! Delectus totam voluptatibus impedit nihil nemo.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi neque, voluptates eaque aliquid accusamus dolore quis, dicta, doloribus saepe ipsum quae ullam architecto exercitationem atque incidunt deleniti? Reiciendis, optio amet.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea autem quibusdam repellat nam perferendis, aut dicta, dolorem, a consequatur fuga voluptatibus? Molestias consequatur delectus esse voluptates porro, quos quas ab.
                parrafo
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eum maxime in. Pariatur sed quidem veritatis, ut quaerat nam reprehenderit quam debitis eligendi est! Delectus totam voluptatibus impedit nihil nemo.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi neque, voluptates eaque aliquid accusamus dolore quis, dicta, doloribus saepe ipsum quae ullam architecto exercitationem atque incidunt deleniti? Reiciendis, optio amet.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea autem quibusdam repellat nam perferendis, aut dicta, dolorem, a consequatur fuga voluptatibus? Molestias consequatur delectus esse voluptates porro, quos quas ab.
                parrafo
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eum maxime in. Pariatur sed quidem veritatis, ut quaerat nam reprehenderit quam debitis eligendi est! Delectus totam voluptatibus impedit nihil nemo.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi neque, voluptates eaque aliquid accusamus dolore quis, dicta, doloribus saepe ipsum quae ullam architecto exercitationem atque incidunt deleniti? Reiciendis, optio amet.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea autem quibusdam repellat nam perferendis, aut dicta, dolorem, a consequatur fuga voluptatibus? Molestias consequatur delectus esse voluptates porro, quos quas ab.
                
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
    <script src="../../ScriptsGenerales/accesibilidad.js"></script><!--Scripts Accesibilidad-->
<?php endblock() ?>