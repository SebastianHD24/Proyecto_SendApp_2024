<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href=""> <!-- Icono de la ventana -->
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
    <link rel="stylesheet" href="biblioteca.css">    
    <link rel="stylesheet" href="../Styles/header.css">
    <link rel="stylesheet" href="../Styles/footer.css">
<<<<<<< HEAD
    <link rel="stylesheet" href="../Styles/accesibilidad.css"><!--CSS accesibilidad-->
    <script src="https://kit.fontawesome.com/a7f71e63d5.js" crossorigin="anonymous"></script> 

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

    <div class="biblioteca">
=======
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Inclusión de la biblioteca jQuery -->
<?php endblock() ?>

<?php startblock('contenido') ?>
    <div class="sennova">
>>>>>>> 45235734228586b5233670e3d1131f3aeed96e30
        <section>
            <h1 class="titulo">Biblioteca</h1>
            <article><img src="" alt="logo"></article>

<<<<<<< HEAD
            <h3 class="subtitulos">Normas de la biblioteca</h3>
            
            <ol class="l_ordenada">
                <li>No esta permitido ingerir alimentos y agua.</li>
                <li>Manejar los niveles de ruido y voz</li>
            </ol>
        
            <h3 class="subtitulos">¿Qué tipos de libros se pueden encontrar en la Biblioteca?</h3>
            <p>
                Contamos con libros técnicos que apoyan todos los programas de formación, contamos con colección de literatura y algunas revistas.
            </p>
        
            <h3 class="subtitulos">¿Cuántos libros puede solicitar un aprendiz para un prestamos?</h3>
            <p>
                Maximo 3 libros para llevar a casa.
            </p>

            <h3 class="subtitulos">Procedimiento de un aprendiz para solicitar un prestamo</h3>
            <p>
                <ol class="l_ordenada">
                    <li>Tener el carnet.</li>
                    <li>Revisar el catálogo bibliográfico, referencia y disponibilidad del libro.</li>
                    <li>Se le recibe el carnet para subir sus datos al sistema de prestamo y ya se puede llevar el libro.</li>
                </ol>
            </p>
        
        
            <h3 class="subtitulos">Soluciones si un aprendiz daña un libro</h3>
            <p> 
                Al dañar o extraviar un libro, debe reponer el mismo libro que se llevo, si es imposible entonces un libro con tematica similar. 
                Lo ideal es que el libro no sea pirada y se le hace acompañamiento al aprendiz para reponerlo.
            </p>
    
        
            <h3 class="subtitulos">¿Qué tipo de juegos ofrecemos?</h3>
            <p>
                Tenemos juegos de mesa como dominó, jenga, UNO y escalera.
            </p>

            <h3 class="subtitulos">¿Qué paginas virtuales estan vinculas a la biblioteca SENA?</h3>
            <p>
                El sistema de biblioteca SENA es la pagina oficial y contamos con 33 bases de datos en varias areas del conocimiento y 
                se puede encontrar informacion y libros electrónicos que estan disponibles para aprendices en formación y egresados.
            </p>
            

            <div class="actividades">
                <h3 class="subtitulos">¿Qué actividades ofrecemos?</h3>
                <p>
                    Trabajamos bajo los lineamientos a nivel nacional del SENA. Tenemos dos ramas que son:
                    <br>
                </p>

                <ol class="l_ordenada">
                    <div class="actividad">
                        <div class="actividad1">
                            <li><strong>Actividades de apoyo a las formación:</strong></li>
                                <ul class="l_desordenada">
                                    <li>inducción a la biblioteca.</li>
                                    <li>Manejo de base de datos.</li>
                                    <li>Talleres a normas APA.</li>
                                    <li>Busquedas efectivas en Google</li>
                                    <li>Elaboración de mapas mentales</li>
                                </ul>
                            <br>
                        </div>

                        <div class="actividad2">
                            <li><strong>Actividades de extension cultural:</strong></li>
                            <ul class="l_desordenada">
                                <li>Taller de escritura creativa</li>
                                <li>Clubes de lectura</li>
                                <li>Conversatorios</li>
                                <li>Encuentros</li>
                                <li>Galas poéticas</li>
                                <li>Cine foros</li>
                            </ul>
                        </div>
                    </div>
                </ol>
            </div>       

            
            <h3 class="subtitulos">Personal de la biblioteca</h3>
            <p>
                Contamos con dos personas, la lider bibliotecologa y la de apoyo en la biblioteca.
            </p>
        
        
            <h3 class="subtitulos">Proceso para reservar un libro de otro centro vinculado al SENA</h3>
            <p>
                <ol class="l_ordenada">
                    <li>Verificar disponibilidad del libro</li>
                    <li>Verificar que el libro se pueda prestar entre centros.</li>
                    <li>El proceso de solicitud y envio se encarga la biblioteca y se le informa al aprendiz el tiempo que se demora en llegar 
                        y los dias que se le puede prestar, ya el aprendiz decide si acepta o no el prestamo. Cuando el libro llegue al 
                        centro de formación se le da aviso al aprendiz para ser reclamado, despues que termine la consulta el aprendiz 
                        debe regresar el libro al centro de formación.</li>
                </ol>
            </p>
        

            <h3 class="subtitulos">Horario de atención</h3>
            <br>
            <p>Lunes a Viernes de 8:00 AM a 8:00 PM jornada continua.</p>
            <br>
            
=======
            <h3 class="subtitulos">Subtitulo</h3>
            <p>
                parrafo
            </p>
>>>>>>> 45235734228586b5233670e3d1131f3aeed96e30
            
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
</body>
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
<script src="../Inicio/Scripts/scriptHome.js"></script> <!-- Eventos y acciones del menu -->
<script src="ScriptsGenerales/accesibilidad.js"></script><!--Scripts Accesibilidad-->
<script src="ScriptsGenerales/accesibilidad.js"></script><!--Scripts Accesibilidad-->
</html>
=======
<?php endblock() ?>

<script src="../Inicio/Scripts/inactividad.js"></script> <!--Script para manejar la inactividad del usuario-->
>>>>>>> 45235734228586b5233670e3d1131f3aeed96e30