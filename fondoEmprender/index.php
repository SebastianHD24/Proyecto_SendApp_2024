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

    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="fondoEmprender.css"> <!-- Estilos del Fondo Emprender -->
    <link rel="stylesheet" href="../Styles/header.css"> <!-- Estilos del header  -->
    <link rel="stylesheet" href="../Styles/footer.css"> <!-- Estilos del footer -->
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

    <div class="emprender">
        <section>
            <h1 class="titulo">Fondo Emprender</h1>
            <article><img src="img/fondo_emprender.png" alt="logo"></article>

            
            <h3 class="subtitulos">¿Qué hace Fondo Emprender?</h3>
            <p>
                Nos dedicamos a brindar asesoria gratuita a emprendedores y empresarios para lograr que tengan un plan que 
                les permita ejecutar sus ideas y adiconalmente vincularlos y articularlos con otros actores de la red de 
                emprendimiento de la región y ayudarlos a acceder a los beneficios que las diferentes entidades prestan.
            </p>

        
            <h3 class="subtitulos">Proposito de Fondo Emprender</h3>
            <p>
                Nuestro proposito es financiar con capital semilla empresas que generen desarrollo económico y tecnológico en 
                las regiones que aporten tambien a la formalización general.
            </p>

        
            <h3 class="subtitulos">¿Qué ayudas ofrece Fondo Emprender?</h3>
            <p>
                Asesoramos de manera personalizada y ayudamos al emprendedor con formación a ejecutar su idea con otras areas del 
                SENA como Tecno Parque y Tecno Acedemia con el proposito de mejorar su producto de manera viable o a incorporar un factor 
                de innovación dentro de su proyecto para acceder a recursos que ofrece el SENA y asi lograr una mayor aceptación de su prodocto.
                <br>
                <br>
                Cuando el emprensario o emprendedor saca su producto al mercado, nosotros los acompañamos. Apoyamos emprendimientos en áreas de
                tecnología, Agroindustria y otras áreas de la economía.
            </p>

        
            <h3 class="subtitulos">Servicios de Fondo Emprender</h3>
            <p>
                <ol class="l_ordenada">
                    <li>Asesoria para la creación de empresa con recursos propios o con recursos del fondo.</li>
                    <li>Acompañar la puesta en marcha a partir del registro de las empresas en la cámara de comercio.</li>
                    <li>Orientamos en el fortalecimiento empresarial.</li>
                </ol>
            </p>

        
            <h3 class="subtitulos">¿Qué proyectos aceptamos?</h3>
            <p>
                Aceptamos proyectos del área agricola, agropecuaria, y Agroindustria. Los proyectos pueden ser 
                de un nuevo producto, mejora en el proceso o modelo de negocio.
            </p>
        
        
            <h3 class="subtitulos">¿Cuanto tarda entregar un proyecto?</h3>
            <p>
                Se estima que una persona tarda 3 meses pasando los filtros y llegando a la formulación del proyecto
                teniendo como partida que cumple con todos los requisitos tanto de emprendedor como los del proyecto, 
                tambien depende el conocimiento y el avance de la idea de negocio que tenga cada emprededor lo que 
                aumentará o disminuirá el tiempo.  
            </p>
        
        
            <h3 class="subtitulos">Requisitos para el apoyo de un proyecto</h3>
            <p>
                <ul class="l_desordenada">
                    <li>El emprendedor o empresario deben tener en su proyecto un factor de innovación.</li>
                    <li>Que su proyecto sea viable y ya haya sido validado en el mercado.</li>
                </ul>
            </p>
        
        
            <h3 class="subtitulos">¿Qué cantidad de presupuesto ofrece Fondo Emprender?</h3>
            <p>
                El moto de los recursos a los que puede acceder un emprendedor depende de la cantidad de empleos que genere, 
                si generan hasta 3 empleos pueden acceder hasta 80 salarios minimos legales vigentes, si genera entre 4 y 5 empleos
                pueden acceder a 150 salarios minimos y a partir de 6 o más empleos, el maximo es de 180 maximo salarios minimos.
                <br>
                Estos limites salen en cada convocatoria y pueden variar. Ya el emprendedor decide si aplica o no.
            </p>
        

            <h3 class="subtitulos">¿El aprendiz debe regresar el dinero que usó si fracasa su proyecto?</h3>
            <p>
                Si el proyecto es exitoso y se cumplen los indicadores que se establecen en la formulación del plan de negocio en el inicio, 
                se le condonan y ese es el capital semilla y de ahi en adelante el emprendedor sigue con su empresa.  
                <br>
                <br>
                En caso de que fracase se supone que deben regresar los recursos que hayan recibido, pero por eso son los filtros y el proceso 
                de asesoria que garantiza si el proyecto no es sostenible y no tiene rentabilidad pues no avanza en la formulación y por ende no
                aplica a las convocatorias. Entonces los proyectos que son formulados, pasan los filtros y acceden a los recursos, el 90% son condonados.
            </p>


            <h3 class="subtitulos">¿Cuanto tarda una respuesta de aceptación o rechazo de un proyecto?</h3>
            <p>
                Esa es la evaluación del plan de negocios y es un proceso que se realiza a nivel nacional y esta dispuesto en la plataforma de fondo emprender,
                el 90% de la evaluación se realiza a través de una inteligencia artificial y el otro 10% humano, Eso a incrementado los tiempos de respuesta y
                aproximadamente en un mes el emprendedor ya tiene respuesta si su proyecto es viable o no.
            </p>

        
            <h3 class="subtitulos">¿Cada cuanto tiempo se deben mostrar avances del proyecto?</h3>
            <p>
                Despues de ser aprovado, el proyecto debe ser priorizado de acuerdo a los primeros proyectos que alcanzan el recurso, Cuando estas dos condiciones 
                se cumplen se inicia la puesta en marcha y los tiempos no estan definidos porque dependen del operar quien es el encargado de asignar la interventoria
                y si continua el acompañamiento como orientador.
                <br>
                <br>
                Las visitas por parte de los orientadores se realizan cada mes para hacer seguimiento técnico, operativo, brindar apoyo y acompañamiento de las metas que 
                se han establecido con la interventoria. La interventoria hace 4 visitas al año cada 3 meses para hacer seguimiento a los avances en los indicadores.
            </p>
        
        
            <h3 class="subtitulos">¿Utilizamos el modelo 4K?</h3>
            <p>
                Este modelo consiste en dar respuesta a la necesidad que tienen los emprendedores y empresarios no solo de recurso económico. Hay 4 capitales que requieren:
                <br>
                <ol class="l_ordenada">
                    <li>Capital psicologico</li>
                    <li>Capital económico</li>
                    <li>Capital social</li>
                    <li>Capital soporte</li>
                </ol>
                <br>
                Con esto lo que hacemos es ayudarle al emprendedor a que tenga los elementos que lo ayuden al desarrollo y lograr el éxito de su idea de negocio.
            </p>
        

            <h3 class="subtitulos">¿Qué servicios ofrecemos a los aprendices que hacen una unidad productiva familiar?</h3>
            <p>
                Ofrecemos asesoria para la creación de empresacon otras fuentes de financiación o recursos propios, los podemos ayudar a mejorar toda la parte administrativa
                y que esa unidad productiva familiar pueda crecer y formalizarse, formalizar el empleo de ese aprendiz que a estado liderando y si se identifica un aspecto 
                innovador poder pasar el proceso de creacion de empresa con recursos de fondo emprender.
                <br>
                <br>
                Recomendamos a los aprendices que tienen estas unidades productivas familiares, acercarsen al centro de desarrollo empresarial para su crecimiento, ampliación o
                la generación de sus ingresos personales.
            </p>

        
            <h3 class="subtitulos">Horario de atención</h3>
            <br>
            <p>Lunes a Viernes de 7:30 AM a 12:00 PM y de 1:00 PM a 5:00 PM</p>
            <br>
            
            
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
<script src="fondoEmprender.js"> </script> <!--Scripts Generales -->
<script src="ScriptsGenerales/accesibilidad.js"></script><!--Scripts Accesibilidad-->
</body>
</html>