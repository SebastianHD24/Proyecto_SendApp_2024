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
    

    <!-- ESTILOS CSS -->
    <link rel="stylesheet" type="text/css" href="deportes.css"> <!--Estilos de Deportes -->
    <link rel="stylesheet" type="text/css" href="/Styles/header.css"> <!-- Estilos del header -->
    <link rel="stylesheet" type="text/css" href="/Styles/footer.css"> <!-- Estilos del footer -->
    <link rel="stylesheet" href="/Styles/accesibilidad.css"><!--CSS accesibilidad-->

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
                                <li><a href="../Bienestar/psicologia/index.html">Psicologia</a></li>
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

    <div class="deportes">
=======
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
>>>>>>> 45235734228586b5233670e3d1131f3aeed96e30
        <section>
            <h1 class="titulo">Deportes y Cultura</h1>
            <article><img src="" alt="logo"></article>

<<<<<<< HEAD
            <h3 class="subtitulos">Cronograma de Actividades</h3>
            <br>

            <h4>Baloncesto</h4>
            <p>
                Miercoles de 4:30 PM a 5:30 PM
            </p>

            <h4>Vóleibol y Futbol</h4>
            <p>
                Martes.
            </p>

            <h4>Entrenamiento de Futbol</h4>
            <p>
                Jueves
            </p>

            <h4>Futbol</h4>
            <p>
                Miercoles de 4:30 PM a 5:30 PM
            </p>
            <br>

            <p>
                Si desea realizar un prestamo de balones, de material recreativo o las canchas para partidos amistosos 
                se pueden acercar y hacer la solicitud.
            </p>
        
        
        
            <h3 class="subtitulos">¿Actividades y deportes a los que se puede inscribir un aprendices?</h3>
            <p>
                <ul>
                    <li>
                        Vóleibol.
                    </li>
                    <br>
                    <li>
                        Baloncesto.
                    </li>
                    <br>
                    <li>
                        Futbol.
                    </li>
                    <br>
                    <li>
                        Gimnasio.
                    </li>
                    <br>
                    <li>
                        Cancha.
                    </li>
                </ul>
            </p>
        
        
        
            <h3 class="subtitulos">¿A cuantos deportes te puedes inscribir?</h3>
            <p>
                Te puedes inscribir a todas las actividades que hay disponibles, ningun aprendriz esta en la obligacion de asistir 
                a las actividades, lo pueden hacer en el tiempo que puedan.
                <br>
                Lo ideal es que asistan en contra jornada, en ningun momento las actividades del gimnasion y el area de deportes interrumpen la formación.
            </p>

            <h3 class="subtitulos">¿Qué se debe hacer para usar el gimnasio?</h3>
            <p>
                Para hacer uso del gimnasio se debe hacer un proceso, primero se debe inscribir, lo pueden hacer atravez del Whatsapp 
                de Juan C. MArtínez 3115566251, se les hace una evaluación de riesgo cardiovascular y osteomuscular. 
                De auerdo a los resulados se le asigna un tipo de entrenamiento.
            </p>
        
        
        
            <h3 class="subtitulos">¿Es importante implementar hábitos nutricionales en gimnasio y deportes?</h3>
            <p> 
                Ya esta implementado, todos los aprendices inscritos tienen la posibilidad de tener asesoria personalizada en alimentación,
                    habitos de vida a nivel general y descanso.
                <br>
                En la parte del descanso se capacita a la persona en el manejo de sus tiempos, como se organiza en sus actividades diarias 
                con el fin de tener un mejor descanso y mejor calidad de vida.
            </p>
        
        
        
            <h3 class="subtitulos">¿El área de gimnasio se encuentra en buenas condiciones?</h3>
            <p>
                El gimnasio tiene lo basico para los aprendices, pero se puede mejorar mucho. Pueden haber pocas maquinas pero lo más importante 
                es saber que necesita cada aprendiz para poder funcionar y mejorar su calidad de vida.
                <br>
                Hemos tenido aprendices que han aumentado su masa muscular entre 5 y 10 kg y otros que han reducido de porcentaje de grasa corporal 
                en año y medio, pero llevando un debido proceso de entrenamiento y sin necesidad de usar muchas maquinas de entrenamiento.
            </p>

            <h3 class="subtitulos">¿Deportivamente el SENA participa en campeonatos por fuera de la institución?</h3>
            <p>
                NO, solo participamos en campeonatos de la institución, están los Regionales y se hacen competencias de ajedrez, tenis de mesa para escoger 
                representantes de Risaralda ante los juegos zonales con otras regionales.
                <br>
                <br>
                Se hacen torneos de inter centro de futbol y otros deportes. No se participa en torneos externo porque el SENA busca que los aprendices tengan 
                todo accesible y no tengan que pagar nada por particiar.
            </p>

            <h3 class="subtitulos">¿Es importante tener un estilo de vida basada en el deporte?</h3>
            <p>
                Si es importante tener un estilo de vida y habitos saludables pero no es necesario que sea basado en el deporte porque a la mayoria de personas no les gusta realizar deporte.
                Las personas deben empeezar por organizar su tiempo de descanso y para logran un buen tiempo de descanso deben organizar su agenda, su tiempo, ser efectivo y no desperdiciar 
                su tiempo haciendo uso de aplicaciones innecesarias.
            </p>
            
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
    <script src="deportes.js"></script>
    <script src="https://kit.fontawesome.com/a7f71e63d5.js" crossorigin="anonymous"></script>
    <script src="ScriptsGenerales/accesibilidad.js"></script><!--Scripts Accesibilidad-->
</body>
</html>
=======
<?php endblock() ?>  

<?php startblock('scripts') ?>
    <script src="../../ScriptsGenerales/accesibilidad.js"></script> 
<?php endblock() ?>
>>>>>>> 45235734228586b5233670e3d1131f3aeed96e30
