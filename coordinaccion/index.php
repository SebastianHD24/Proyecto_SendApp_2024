<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Pangina principal/Img-home/LogosSena-img/LogoSenaVerde.png"> <!-- Icono de la ventana -->
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
    <link rel="stylesheet" type="text/css" href="coordinacion.css"> <!-- Estilos de coordinación -->
    <link rel="stylesheet" type="text/css" href="../Styles/header.css"> <!-- Estilos del header -->
    <link rel="stylesheet" type="text/css" href="../Styles/footer.css"> <!-- Estilos del footer -->
<<<<<<< HEAD
    <link rel="stylesheet" href="../Styles/accesibilidad.css"><!--CSS accesibilidad-->
</head>

<body>
    <header id="main-header">
        <!-- Logo SendApp-->
        <div class="logo">
            <img src="img/LogosSena-img/SendApp.png"
            alt="SendApp Logo"/>
        </div>
        <!--Nav Container--> 
        <nav class="navbar">
            <!-- Logo sena -->
            <div class="logo-header">
                <img src="img/LogosSena-img/LogoSenaVerde.png" alt="Logo Sena" />
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
                                <li><a href="../Bienestar/psicologia/index.html">Psicologia</a></li>
                                <li><a href="../Bienestar/Deportes/index.html">Deportes y cultura</a></li>
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

=======
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Inclusión de la biblioteca jQuery. -->
<?php endblock() ?>

<?php startblock('contenido') ?>
>>>>>>> 45235734228586b5233670e3d1131f3aeed96e30
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
        <script src="https://kit.fontawesome.com/a7f71e63d5.js" crossorigin="anonymous"></script> <!--Libreria de iconos de Font Awesome-->
        <script src="coordinacion.js"> </script> <!--Scripts Generales -->
        <script src="ScriptsGenerales/accesibilidad.js"></script><!--Scripts Accesibilidad-->
</body>

</html>
=======
<?php endblock() ?>

<script src="../Inicio/Scripts/inactividad.js"></script> <!--Script para manejar la inactividad del usuario-->
>>>>>>> 45235734228586b5233670e3d1131f3aeed96e30