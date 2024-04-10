<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Img/LogosSena-img/Sena-Logo.png"> <!-- Icono de la ventana -->
    <title>SendApp</title>
    <!-- WORK SANS FONT INSTITUCIONAL IMPORTACIÓN DESDE GOOGLE FONTS-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

=======
<?php include '../../bases/header.php' ?>

<?php startblock('links-styles') ?>
>>>>>>> 45235734228586b5233670e3d1131f3aeed96e30
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="psicologia.css"> <!-- Estilos de psicologia -->
    <link rel="stylesheet" href="../../Styles/header.css"> <!-- Estilos del header -->
    <link rel="stylesheet" href="../../Styles/footer.css"> <!-- Estilos del footer -->
    <link rel="stylesheet" href="../../Styles/accesibilidad.css"><!--CSS accesibilidad-->
<<<<<<< HEAD
</head>

<body>
    <header id="main-header">
        <!-- Logo SendApp-->
        <div class="logo">
            <img src="Img/LogosSena-img/SendApp.png"
            alt="SendApp Logo"/>
        </div>
        <!--Nav Container--> 
        <nav class="navbar">
            <!-- Logo sena -->
            <div class="logo-header">
                <img src="Img/LogosSena-img/LogoSenaVerde.png" alt="Logo Sena" />
            </div>
            <ul class="links">
                <li><i class="fa-solid fa-house"></i><a href="/index.html">Inicio</a></li>
                <li>
                    <i class="fa-solid fa-cubes"></i><a href="/Areas/index.html">Areas</a>
                    <ul class="areas-mas">
                        <li><a href="/Biblioteca/index.html">Biblioteca</a></li>
                        <li>
                            <a href="/Bienestar/index.html" id="bienestar">Bienestar al aprendiz</a>
                            <ul class="areas-bienestar">
                                <li><a href="../psicologia/index.html">Psicologia</a></li>
                                <li><a href="../Deportes/index.html">Deportes y cultura</a></li>
                            </ul>
                        </li>
                        <li><a href="/coordinaccion/index.html">Cordinacion academica</a></li>
                        <li><a href="/administracion/index.html">Administracion educativa</a></li>
                        <li><a href="/senova/index.html">Sennova</a></li>
                        <li><a href="/fondoEmprender/index.html">Fondo emprender</a></li>
                        <li><a href="/relacionesCorporativas/index.html">Relaciones corporativas</a></li>
                        <li><a href="/serviciosTecnologicos/index.html">Servicios tecnologias</a></li>
                        <li><a href="/TecnoParque/index.html">Tecnoparque</a></li>
                        <li><a href="/TecnoAcademia/index.html">Tecnoacademia</a></li>
                        <li><a href="/FabricaSoftware/index.html">Fabrica de software</a></li>
                    </ul>
                </li>
                <li> <i class="fa-solid fa-right-to-bracket"></i><a href="/Login/login-aprendices/login-aprendices.html">Ingreso</a></li>
            </ul>

            <!--Menu Hamburguesa Animado-->
            <div class="bars__menu">
                <span class="line1__bars-menu"></span>
                <span class="line2__bars-menu"></span>
                <span class="line3__bars-menu"></span>
            </div>
        </nav>

        <!-- Contenido Responsive Menu-->
        <div class="resposive__menu">
            <ul class="resposive__menu-ul">
                <li><i class="fa-solid fa-house"></i><a href="../index.html">Inicio</a></li>
                <li class="btn-areas">
                    <i class="fa-solid fa-cubes"></i><a href="../Areas/index.html">Areas</a>
                </li>

                <li> <i class="fa-solid fa-right-to-bracket"></i><a href="Login/login.html">Ingreso</a></li>
            </ul>
        </div>
    </header>
     <!--accesibilidad-->								
     <div class="acesibilidad">
        <label for="toggle" id="label_toggle"><i class="fa-solid fa-circle-half-stroke"></i></label>
        <input type="checkbox" id="toggle">
        <!------->
        <label for="toggle2" id="label_toggle2"><i class="fa-solid fa-magnifying-glass-plus"></i></label>
        <input type="checkbox" id="toggle">
        <!----->
        <label for="toggle3" id="label_toggle3"><i class="fa-solid fa-magnifying-glass-minus"></i></label>
        <input type="checkbox" id="toggle2">
        <!---->
        <label for="toggle4" id="label_toggle4"><i class="fa-solid fa-chevron-up"></i></label>
        <input type="checkbox" id="toggle">
        <!----->
        <label for="toggle5" id="label_toggle5"><i class="fa-solid fa-chevron-down"></i></label>
        <input type="checkbox" id="toggle">

        </div>

        <section>
            <h1 class="titulo">Psicología Integral para el Bienestar</h1>
            <article><img src="../psicologia/Img/img content/IMG_7740.JPG" alt="logo"></article>

            <h2 class="subtitulos">Descripción de la Página:</h2>
            <p>
                En Psicología Integral para el Bienestar, nos dedicamos a ofrecer servicios de apoyo psicológico para ayudarte a alcanzar una vida plena y equilibrada. Nuestro equipo de profesionales altamente capacitados está aquí para brindarte el apoyo y las herramientas que necesitas para superar desafíos, gestionar el estrés y alcanzar tus metas personales.
            </p>
            
            <div class="servicios">
                <h3>Servicios Ofrecidos:</h3>
                <p><strong>Terapia Individual:</strong> Nuestros psicólogos proporcionan sesiones de terapia personalizadas para abordar una variedad de preocupaciones, desde ansiedad y depresión hasta problemas de relaciones y autoestima.</p>
                <p><strong>Terapia de Pareja y Familia:</strong> Ofrecemos terapia para parejas y familias que enfrentan conflictos, comunicación deficiente, y otros desafíos relacionales. Trabajamos juntos para fortalecer los lazos familiares y mejorar la calidad de las relaciones.</p>
                <p><strong>Apoyo Psicológico para Niños y Adolescentes:</strong> Nuestros especialistas están capacitados para trabajar con niños y adolescentes en áreas como el manejo de la ansiedad, problemas de conducta, problemas escolares y dificultades de adaptación.</p>
                <p><strong>Orientación Vocacional y Profesional:</strong> Ayudamos a los individuos a explorar sus intereses, habilidades y valores para tomar decisiones informadas sobre su futuro educativo y profesional.</p>
                <p><strong>Asesoramiento en Salud Mental y Bienestar:</strong>Ofrecemos orientación y apoyo para aquellos que buscan mejorar su bienestar emocional y mental. Nuestros servicios incluyen manejo del estrés, técnicas de relajación y promoción de un estilo de vida saludable.</p>
                <p><strong>Workshops y Talleres:</strong> Organizamos talleres y grupos de apoyo sobre una variedad de temas, como manejo del estrés, habilidades de afrontamiento, autoestima y desarrollo personal.</p>

                <h3>Nuestro Enfoque:</h3>
                <p>En Psicología Integral para el Bienestar, adoptamos un enfoque holístico y centrado en la persona para el tratamiento y la intervención. Creemos en la importancia de considerar todos los aspectos de la vida de un individuo, incluyendo su entorno social, emocional, físico y espiritual. Nuestro objetivo es proporcionar un espacio seguro y compasivo donde los clientes puedan explorar sus preocupaciones, desarrollar nuevas habilidades y alcanzar su máximo potencial.</p>
                <h3>Nuestro Equipo:</h3>
                <p>Nuestro equipo está formado por psicólogos con experiencia en una variedad de áreas de especialización, incluyendo terapia cognitivo-conductual, terapia de pareja, terapia infantil y psicología positiva. Estamos comprometidos con la excelencia profesional y nos esforzamos por ofrecer servicios de la más alta calidad a nuestros clientes.</p>
                <h3>Contáctanos:</h3>
                <p>Si estás listo para dar el primer paso hacia una vida más saludable y satisfactoria, no dudes en ponerte en contacto con nosotros. Estamos aquí para ayudarte en tu viaje hacia el bienestar emocional y el crecimiento personal. ¡Contáctanos hoy mismo para programar una consulta inicial!</p>
            </div>
=======
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
            
>>>>>>> 45235734228586b5233670e3d1131f3aeed96e30
            <button class="button">Reservar cita</button>
        </section>
    </div>
<<<<<<< HEAD
            <!-- Footer -->
            <footer>
                <!-- <img src="Inicio/Img-home/LogosSena-img/LogoSenaVerde.png" alt="Logo Sena" class="logo2"/> -->
                <div class="iconos-container">
                    <!--Donde estan las redes sociales-->
                    <a href="https://www.facebook.com/SENA/" target="_blank" class="icono-red"></a>
                    <a href="https://www.instagram.com/senacomunica/" target="_blank" class="icono-red"></a>
                    <a href="https://twitter.com/SENAComunica" target="_blank" class="icono-red"></a>
                    <a href="https://www.youtube.com/user/SENATV" target="_blank" class="icono-red"></a>
                    <a href="https://www.linkedin.com/school/servicio-nacional-de-aprendizaje-sena-/" target="_blank" class="icono-red"></a>
                    
                </div>
                <ul class="footer-menu">

                    <li class="menu-item">@SENAComunica</li>
                </ul>
            </footer>
    <script src="https://kit.fontawesome.com/a7f71e63d5.js" crossorigin="anonymous"></script> <!-- Libreria de iconos -->
    <script src="psicologia.js"></script> <!-- Script de psicologia-->
    <script src="ScriptsGenerales/accesibilidad.js"></script><!--Scripts Accesibilidad-->
</body>
</html>
=======
<?php endblock() ?>          

<?php startblock('scripts') ?>
    <script src="../../ScriptsGenerales/accesibilidad.js"></script><!--Scripts Accesibilidad-->
<?php endblock() ?>
>>>>>>> 45235734228586b5233670e3d1131f3aeed96e30
