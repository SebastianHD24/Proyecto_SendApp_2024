<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/LogosSena-img/Sena-Logo.png"> <!-- Icono de la ventana -->
    <title>SendApp</title>
    <!-- WORK SANS FONT INSTITUCIONAL IMPORTACIÓN DESDE GOOGLE FONTS-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

=======
<?php include '../bases/header.php' ?>

<?php startblock('links-styles') ?>
>>>>>>> 45235734228586b5233670e3d1131f3aeed96e30
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" type="text/css" href="Styles-Bienestar/bienestar.css"> <!--Estilos de Bienestar -->
    <link rel="stylesheet" type="text/css" href="../Styles/header.css"> <!--Estilos del Header -->
    <link rel="stylesheet" type="text/css" href="../Styles/footer.css"> <!--Estilos del Footer -->
<<<<<<< HEAD
    <link rel="stylesheet" href="../Styles/accesibilidad.css"><!--CSS accesibilidad-->
</head>
<body>
    <header id="main-header">
        <!-- Logo SendApp-->
        <div class="logo">
            <img src="./img/LogosSena-img/SendApp.png"
            alt="SendApp Logo"/>
        </div>
        <!--Nav Container--> 
        <nav class="navbar">
            <!-- Logo sena -->
            <div class="logo-header">
                <img src="./img/LogosSena-img/LogoSenaVerde.png" alt="Logo Sena" />
            </div>
            <ul class="links">
                <li><i class="fa-solid fa-house"></i><a href="../index.html">Inicio</a></li>
                <li>
                    <i class="fa-solid fa-cubes"></i><a href="../Areas/index.html">Areas</a>
                    <ul class="areas-mas">
                        <li><a href="../Biblioteca/index.html">Biblioteca</a></li>
                        <li>
                            <a href="../Bienestar/index.html" id="bienestar">Bienestar al aprendiz</a>
                            <ul class="areas-bienestar">
                                <li><a href="psicologia/index.html">Psicologia</a></li>
                                <li><a href="Deportes/index.html">Deportes y cultura</a></li>
                            </ul>
                        </li>
                        <li><a href="../coordinaccion/index.html">Cordinacion academica</a></li>
                        <li><a href="../administracion/index.html">Administracion educativa</a></li>
                        <li><a href="../senova/index.html">Sennova</a></li>
                        <li><a href="../fondoEmprender/index.html">Fondo emprender</a></li>
                        <li><a href="../relacionesCorporativas/index.html">Relaciones corporativas</a></li>
                        <li><a href="../serviciosTecnologicos/index.html">Servicios tecnologias</a></li>
                        <li><a href="../TecnoParque/index.html">Tecnoparque</a></li>
                        <li><a href="../TecnoAcademia/index.html">Tecnoacademia</a></li>
                        <li><a href="../FabricaSoftware/index.html">Fabrica de software</a></li>
                    </ul>
                </li>
                <li> <i class="fa-solid fa-right-to-bracket"></i><a href="../Login/login-aprendices/login-aprendices.html">Ingreso</a></li>
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
        <div class="container-bienestar">
            <h1>Bienestar al Aprendiz: Apoyo Integral para tu Éxito Académico y Personal</h1>
            <div class="botones-bienestar">
                <button class="btn"><a href="./psicologia/index.html">Psicología</a></button>
                <button class="btn"><a href="./Deportes/index.html">Deportes y Cultura</a></button>
            </div>

            <article><img src="./img/LogosSena-img/Bienestar logo.jpg" alt="logo"></article>
            <p id="parrafo-principal">Bienvenido a Bienestar al Aprendiz, tu centro de apoyo integral diseñado para promover tu bienestar y éxito tanto dentro como fuera del aula. Nuestro equipo dedicado está aquí para ofrecerte orientación, recursos y actividades que te ayudarán a alcanzar tus metas académicas y personales.</p>
            <h2>Servicios Ofrecidos:</h2>
            <p><strong>Acompañamiento Individualizado:</strong> Brindamos apoyo individualizado a través de sesiones de acompañamiento personalizadas. Ya sea que necesites ayuda con problemas académicos, emocionales o personales, estamos aquí para escucharte y proporcionarte orientación.</p>
            <p><strong>Apoyo Emocional y Psicológico:</strong> Nuestros profesionales están disponibles para ofrecerte apoyo emocional y psicológico en momentos de estrés, ansiedad o cualquier otro desafío que puedas enfrentar durante tu trayectoria académica.</p>
            <p><strong>Desarrollo de Habilidades Blandas:</strong> Ofrecemos talleres y actividades diseñadas para fortalecer tus habilidades blandas, como comunicación efectiva, trabajo en equipo, liderazgo y resolución de problemas. Estas habilidades son fundamentales para tu éxito tanto en el aula como en el mundo laboral.</p>
            <p><strong>Eventos y Celebraciones:</strong> Organizamos eventos y celebraciones para fomentar un sentido de comunidad y pertenencia entre los aprendices. Desde actividades culturales hasta jornadas de integración, siempre hay algo emocionante sucediendo en nuestro centro.</p>
            <p><strong>Asesoramiento en Salud y Bienestar:</strong> Proporcionamos recursos y asesoramiento en temas relacionados con la salud y el bienestar, incluyendo hábitos de vida saludable, prevención de enfermedades y promoción de un estilo de vida equilibrado.</p>

            <h3>Nuestro Enfoque:</h3>
            <p>En Bienestar al Aprendiz, creemos en el poder del apoyo integral para promover el éxito académico y personal de nuestros aprendices. Nos esforzamos por crear un entorno acogedor y solidario donde cada estudiante se sienta valorado y empoderado para alcanzar su máximo potencial.</p>
            <h3>Nuestro Equipo:</h3>
            <p>Nuestro equipo está formado por profesionales capacitados en psicología, orientación educativa, trabajo social y otras disciplinas relacionadas. Estamos comprometidos con tu bienestar y éxito, y trabajamos juntos para brindarte el apoyo que necesitas para triunfar en tu viaje educativo.</p>
            <h3>Contáctanos:</h3>
            <p>Si necesitas apoyo, orientación o simplemente alguien con quien hablar, no dudes en ponerte en contacto con nosotros. Estamos aquí para ayudarte en tu camino hacia el éxito académico y personal. ¡No estás solo(a)!</p>
        </div>
    <div class="sennova">
        <section class="descripcion">
            

            <h3 class="subtitulos"><strong>¿Qué es bienestar al aprendiz?</strong></h3>
            <p>
                El Bienestar al Aprendiz SENA busca apoyar la permanencia y el éxito de los aprendices en su formación. Ofrece apoyo socioeconómico, físico, mental, social, académico y en la formación. Los beneficios incluyen auxilios, formación, acompañamiento, acceso a recursos y ambientes de aprendizaje. Para acceder, debes estar matriculado y cumplir con los requisitos.            
                
                <h3 class="subtitulos"><strong>¿Cuál es su objetivo?</strong></h3>
=======
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Inclusión de la biblioteca jQuery -->
<?php endblock() ?>

<?php startblock('contenido') ?>
    <div class="sennova">
        <section class="descripcion">
            <article><img src="./img/LogosSena-img/Bienestar logo.jpg" alt="logo"></article>

            <h3 class="subtitulos"><strong>¿Qué es bienestar al aprendiz?</strong></h3>
            <p>
                El Bienestar al Aprendiz SENA busca apoyar la permanencia y el éxito de los aprendices en su formación. Ofrece apoyo socioeconómico, físico, mental, social, académico y en la formación. Los beneficios incluyen auxilios, formación, acompañamiento, acceso a recursos y ambientes de aprendizaje. Para acceder, debes estar matriculado y cumplir con los requisitos.            <h3 class="subtitulos"><strong>¿Cuál es su objetivo?</strong></h3>
>>>>>>> 45235734228586b5233670e3d1131f3aeed96e30
            <p>
                El área de bienestar al aprendiz tiene como objetivo principal contribuir al fortalecimiento del desarrollo humano integral del aprendiz en el Sena. Ofrece una variedad de servicios que incluyen apoyo administrativo, servicios de enfermería para primeros auxilios, gimnasio con actividades deportivas, talleres de música y danza, entre otros.            </p>
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
    <script src="https://kit.fontawesome.com/a7f71e63d5.js" crossorigin="anonymous"></script> <!--LLibreria de iconos de Font Awesome -->
    <script src="Scripts-Bienestar/bienestar.js"> </script> <!-- Scripts Generales -->
    <script src="ScriptsGenerales/accesibilidad.js"></script><!--Scripts Accesibilidad-->
</body>
</html>
=======
<?php endblock() ?>

<script src="../Inicio/Scripts/inactividad.js"></script> <!--Script para manejar la inactividad del usuario-->
>>>>>>> 45235734228586b5233670e3d1131f3aeed96e30
