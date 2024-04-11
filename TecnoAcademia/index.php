<<<<<<< HEAD
=======

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Img/LogosSena-img copy/Sena-Logo.png"> <!-- Icono de la ventana -->
    <title>SendApp</title>

    <!-- WORK SANS FONT INSTITUCIONAL IMPORTACIÓN DESDE GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!--ESTILOS-->
    <link rel="stylesheet" type="text/css" href="Styles/academia.css"> <!--Estilos de Tecno Academia -->
    <link rel="stylesheet" type="text/css" href="../Styles/header.css"> <!--Estilos del Header -->
    <link rel="stylesheet" type="text/css" href="../Styles/footer.css"> <!--Estilos del Footer -->
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
                                <li><a href="../Bienestar/">Deportes y cultura</a></li>
                            </ul>
                        </li>
                        <li><a href="../coordinaccion/index.html">Cordinacion academica</a></li>
                        <li><a href="../coordinaccion/index.html">Administracion educativa</a></li>
                        <li><a href="../senova/index.html">Sennova</a></li>
                        <li><a href="../relacionesCorporativas/">Fondo emprender</a></li>
                        <li><a href="../serviciosTecnologicos/">Relaciones corporativas</a></li>
                        <li><a href="../serviciosTecnologicos/index.html">Servicios tecnologias</a></li>
                        <li><a href="../TecnoParque/index.html">Tecno parque</a></li>
                        <li><a href="../TecnoAcademia/">Tecno academia</a></li>
                        <li><a href="../FabricaSoftware/">Fabrica de software</a></li>
                    </ul>
                </li>
                <li> <i class="fa-solid fa-right-to-bracket"></i><a href="Login/login-aprendices/login-aprendices.html">Ingreso</a></li>
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
<<<<<<< HEAD:TecnoAcademia/index.php
<?php include '../../Proyecto_SendApp_2024/bases/header.php' ?>

<?php startblock('links-styles') ?>
    <link rel="stylesheet" type="text/css" href="./Styles/academia.css"> <!-- Estilos de Tecno Parque--> 
    <link rel="stylesheet" type="text/css" href="../../../project/Proyecto_SendApp_2024/Styles/header.css"> <!-- Estilos del Header-->
    <link rel="stylesheet" type="text/css" href="../../../project/Proyecto_SendApp_2024/Styles/footer.css"> <!-- Estilos del Footer-->
    <title>TecnoAcademia</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php endblock() ?>

<?php startblock('contenido') ?> <!--Inicio bloque contenido-->
>>>>>>> 13d839f0f96de926c52e0f1fa16480ba2d961238:TecnoAcademia/index.php
    <div class="tecnoacademia">
        <section>
            <h1 class="titulo">TecnoAcademia</h1>
            <article><img src="" alt="logo"></article>

            <div class="contenido">
                <h3 class="subtitulos">¿Qué es Tecnoacademia?</h3>
                <p>
                    La Tecnoacademia es un escenario de aprendizaje, dotado de tecnologías emergentes, para desarrollar competencias en Ciencia, 
                    Tecnología e Innovación en estudiantes de educación básica secundaria y media a partir de la ejecución de proyectos formativos e investigativos, 
                    para optimizar el conocimiento útil que habilite el aprendiz para el mundo del trabajo con soluciones innovadoras para las empresas y 
                    los sectores productivos.
                </p>

                <h3 class="subtitulos">Objetivos de Tecnoacademia.</h3>
                <p>
                    <ol>
                        <li>
                            Promover la apropiación de la cultura de la ctei con enfoque steam a través de metodologías experienciales, en aprendices de educación.
                        </li>
                        <li>
                            Fortalecer las capacidades de investigación de los aprendices, que motive la generación del conocimiento útil en su contexto regional.
                        </li>
                        <li>
                            Fomentar el desarrollo de competencias orientadas al uso, aplicación y desarrollo de tecnologías avanzadas y las habilidades para la vida personal y profesional.
                        </li>
                        <li>
                            Fomentar la movilidad de aprendices hacia la educación técnica, tecnológica y universitaria donde se fortalezca su proyecto de vida.                       
                        </li>
                        <li>
                            Fomentar la cultura de innovación y la mentalidad emprendedora de los estudiantes de básica secundaria y media beneficiados.
                        </li>
                        <li>
                            Implementar todas las acciones administrativas y operativas que soporten el proceso formativo de los aprendices en las Tecnoacademias.
                        </li>
                    </ol>
                </p>
                <div class="foto1">
                    <img src="Img/Academia-Img/tecnoacademia1.png" alt="foto1">
                </div>
            </div>
            
            <div class="contenido">
                <h3 class="subtitulos">¿Cuáles son los servicios que ofrece Tecnoacademia?</h3>
                <p>
                    <ul>
                        <li>
                            Talleres y cursos de formación en áreas STEM (Ciencia, Tecnología, Ingeniería y Matemáticas).
                        </li>
                        <li>
                            Programas de capacitación en habilidades digitales, como programación de software, desarrollo web y diseño gráfico.
                        </li>
                        <li>
                            Proyectos de investigación en tecnología e innovación.
                        </li>
                        <li>
                            Asesoramiento y acompañamiento en la creación y desarrollo de proyectos tecnológicos.
                        </li>
                        <li>
                            Colaboración con instituciones educativas, empresas y organizaciones para promover la formación tecnológica y el emprendimiento en la región.
                        </li>
                    </ul>
                </p>
            </div>

            <div class="contenido">
                <h3 class="subtitulos">¿Cómo se puede acceder a estos servicios?</h3>
                <p>
                    <!-- El atributo rel coloca la relación entre la página y el URL enlazado. Posicionando en este noopener noreferrer para prevenir el tipo de phishing conocido como tabnabbing. -->
                    Para Acceder a los servicios de Tecnoacademia debes ir a la página oficial 
                    <a href="https://tecnoacademiarisaralda.com/" target="_blank" rel="noopener noreferrer">www.tecnoacademiarisaralda.com</a>
                    seleccionar la linea de formación de su interés y hacer la preinscripción.
                </p>

                <h3 class="subtitulos">¿Qué beneficios se pueden obtener de los servicios que ofrecen?</h3>
                <p>
                    <ol>
                        <li>
                            Adquisición de habilidades tecnológicas.
                        </li>
                        <li>
                            Fomento del espiritu emprendedor.
                        </li>
                        <li>
                            Networking y colaboracion.
                        </li>
                        <li>
                            Acceso a recursos y oportunidades adicionales.                        
                        </li>
                    </ol>
                </p>
            </div>
            
            <div class="contenido">
                <h3 class="subtitulos">Lineas de formación de Tecnoacademia</h3>
                <p>
                    Las lineas de formación que ofrece tecnoacademia son:
                    <br>
                    <ol>
                        <li>Matemáticas y Diseño</li>
                        <li>Física</li>
                        <li>Química</li>
                        <li>Nanotecnología</li>
                        <li>Biotecnología</li>
                        <li>TICS y videojuegos</li>
                        <li>Robótica y electrónica</li>
                    </ol>
                </p>

                <h3 class="subtitulos">¿Para quienes está dirigido el Tecnoacademia?</h3>
                <p>
                    El programa está dirigido a estudiantes de educación básica secundaria y media academica.
                </p>
            </div>

            <div class="contenido">
                <h3 class="subtitulos">Convenios de Tecnoacademia</h3>
                <p>
                    Tecnoacademia realiza convenios con instituciones educativas para fomentar el aprendizaje y
                    desarrollo con las nuevas tecnologías.
                </p>

                <h3 class="subtitulos">Requisitos para ingresar a Tecnoacademia</h3>
                <p>
                    <ol>
                        <li>
                            Debes pertenecer a una institución educativa y ser estudiante de básica secundaria o media academica.
                        </li>
                        <li>
                            Registrarse en la página de Tecnoacademia Risaralda.
                        </li>
                    </ol>
                    
                </p>
            </div>
            
            <div class="contenido">
                <h3 class="subtitulos">Ubicación de Tecnoacademia Risaralda</h3>
                <br>
                <h4>Dirección</h4>
                <p>
                    Calle 73 bis Cra 21 - Barrio Cesas Augusto López
                    <br>Colegio Manuel Elkin Patarroyo - Dosquebradas, Risaralda
                </p>
                <br>
                <h4>Horario de atención</h4>
                <p>Lunes a Viernes de 8:00 AM a 12:00 PM y de 1:00 PM a 5:00 PM</p>
                <br>
                <h4>Línea de atención</h4>
                <p><strong>Teléfono: </strong> (6) 3135800 Ext. 63332</p>
                <p><strong>Correo: </strong> tecnoacademiarisaralda@gmail.com</p>
                <p><strong>Whatsapp: </strong> 3126410732</p>
                <p><strong>Instagram: </strong> @tecnoacademiarisaralda</p>
                <p><strong>Facebook: </strong> tecnoacademia.risaralda</p>
            </div>
        </section>
    </div>
<<<<<<< HEAD:TecnoAcademia/index.html
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
    <script src="Scripts/academia.js"> </script> <!--Scripts Generales -->
    <script src="ScriptsGenerales/accesibilidad.js"></script><!--Scripts Accesibilidad-->
</body>

</html>
=======
<?php endblock() ?> <!--Fin bloque contenido-->
            
    <?php startblock('scripts') ?>
        <script src="Scripts/academia.js"> </script> <!--Scripts Generales -->
        <script src="../Inicio/Scripts/inactividad.js"></script>
    <?php endblock() ?>
=======
>>>>>>> 45235734228586b5233670e3d1131f3aeed96e30
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Img/LogosSena-img copy/Sena-Logo.png"> <!-- Icono de la ventana -->
    <title>SendApp</title>

    <!-- WORK SANS FONT INSTITUCIONAL IMPORTACIÓN DESDE GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!--ESTILOS-->
    <link rel="stylesheet" type="text/css" href="Styles/academia.css"> <!--Estilos de Tecno Academia -->
    <link rel="stylesheet" type="text/css" href="../Styles/header.css"> <!--Estilos del Header -->
    <link rel="stylesheet" type="text/css" href="../Styles/footer.css"> <!--Estilos del Footer -->
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

    <div class="tecnoacademia">
        <section>
            <h1 class="titulo">Tecnoacademia</h1>
            <article><img src="" alt="logo"></article>

            
            <h3 class="subtitulos">¿Qué es Tecnoacademia?</h3>
            <p>
                La Tecnoacademia es un escenario de aprendizaje, dotado de tecnologías emergentes, para desarrollar competencias en Ciencia, 
                Tecnología e Innovación en estudiantes de educación básica secundaria y media a partir de la ejecución de proyectos formativos e investigativos, 
                para optimizar el conocimiento útil que habilite el aprendiz para el mundo del trabajo con soluciones innovadoras para las empresas y 
                los sectores productivos.
            </p>

            <h3 class="subtitulos">Objetivos de Tecnoacademia.</h3>
            <p>
                <ol class="l_ordenada">
                    <li>
                        Promover la apropiación de la cultura de la ctei con enfoque steam a través de metodologías experienciales, en aprendices de educación.
                    </li>
                    <li>
                        Fortalecer las capacidades de investigación de los aprendices, que motive la generación del conocimiento útil en su contexto regional.
                    </li>
                    <li>
                        Fomentar el desarrollo de competencias orientadas al uso, aplicación y desarrollo de tecnologías avanzadas y las habilidades para la vida personal y profesional.
                    </li>
                    <li>
                        Fomentar la movilidad de aprendices hacia la educación técnica, tecnológica y universitaria donde se fortalezca su proyecto de vida.                       
                    </li>
                    <li>
                        Fomentar la cultura de innovación y la mentalidad emprendedora de los estudiantes de básica secundaria y media beneficiados.
                    </li>
                    <li>
                        Implementar todas las acciones administrativas y operativas que soporten el proceso formativo de los aprendices en las Tecnoacademias.
                    </li>
                </ol>
            </p>
            <div class="foto1">
                <img src="Img/Academia-Img/tecnoacademia1.png" alt="foto1">
            </div>
            
            
            
            <h3 class="subtitulos">¿Cuáles son los servicios que ofrece Tecnoacademia?</h3>
            <p>
                <ul class="l_desordenada">
                    <li>
                        Talleres y cursos de formación en áreas STEM (Ciencia, Tecnología, Ingeniería y Matemáticas).
                    </li>
                    <li>
                        Programas de capacitación en habilidades digitales, como programación de software, desarrollo web y diseño gráfico.
                    </li>
                    <li>
                        Proyectos de investigación en tecnología e innovación.
                    </li>
                    <li>
                        Asesoramiento y acompañamiento en la creación y desarrollo de proyectos tecnológicos.
                    </li>
                    <li>
                        Colaboración con instituciones educativas, empresas y organizaciones para promover la formación tecnológica y el emprendimiento en la región.
                    </li>
                </ul>
            </p>
            

            
            <h3 class="subtitulos">¿Cómo se puede acceder a estos servicios?</h3>
            <p>
                <!-- El atributo rel coloca la relación entre la página y el URL enlazado. Posicionando en este noopener noreferrer para prevenir el tipo de phishing conocido como tabnabbing. -->
                Para acceder a los servicios de Tecnoacademia debes ir a la página oficial 
                <a href="https://tecnoacademiarisaralda.com/" target="_blank" rel="noopener noreferrer">www.tecnoacademiarisaralda.com</a>
                seleccionar la linea de formación de su interés y hacer la preinscripción.
            </p>
            

            <div class="beneficios_lineas">    
                <div class="ben_lin1">
                    <h3 class="subtitulos">¿Qué beneficios se pueden obtener de los servicios que ofrecen?</h3>
                    <p>
                        <ol class="l_ordenada">
                            <li>
                                Adquisición de habilidades tecnológicas.
                            </li>
                            <li>
                                Fomento del espiritu emprendedor.
                            </li>
                            <li>
                                Networking y colaboracion.
                            </li>
                            <li>
                                Acceso a recursos y oportunidades adicionales.                        
                            </li>
                        </ol>
                    </p>
                </div>
                <div class="ben_lin2">
                    <h3 class="subtitulos">Lineas de formación de Tecnoacademia</h3>
                    <p>
                        Las lineas de formación que ofrece tecnoacademia son:
                        <br>
                        <ol class="l_ordenada">
                            <li>Matemáticas y Diseño</li>
                            <li>Física</li>
                            <li>Química</li>
                            <li>Nanotecnología</li>
                            <li>Biotecnología</li>
                            <li>TICS y videojuegos</li>
                            <li>Robótica y electrónica</li>
                        </ol>
                    </p>
                </div>
            </div>

            
            <h3 class="subtitulos">¿Para quienes está dirigido el Tecnoacademia?</h3>
            <p>
                El programa está dirigido a estudiantes de educación básica secundaria y media academica.
            </p>


            <h3 class="subtitulos">Convenios de Tecnoacademia</h3>
            <p>
                Tecnoacademia realiza convenios con instituciones educativas para fomentar el aprendizaje y
                desarrollo con las nuevas tecnologías.
            </p>

            <h3 class="subtitulos">Requisitos para ingresar a Tecnoacademia</h3>
            <p>
                <ol class="l_ordenada">
                    <li>
                        Debes pertenecer a una institución educativa y ser estudiante de básica secundaria o media academica.
                    </li>
                    <li>
                        Registrarse en la página de Tecnoacademia Risaralda.
                    </li>
                </ol>
                
            </p>
        
            <h3 class="subtitulos">Ubicación de Tecnoacademia Risaralda</h3>
            <br>
            <h4>Dirección</h4>
            <p>
                Calle 73 bis Cra 21 - Barrio Cesas Augusto López
                <br>Colegio Manuel Elkin Patarroyo - Dosquebradas, Risaralda
            </p>
            <br>
            <h4>Horario de atención</h4>
            <p>Lunes a Viernes de 8:00 AM a 12:00 PM y de 1:00 PM a 5:00 PM</p>
            <br>
            <h4>Línea de atención</h4>
            <p><strong>Teléfono: </strong> (6) 3135800 Ext. 63332</p>
            <p><strong>Correo: </strong> tecnoacademiarisaralda@gmail.com</p>
            <p><strong>Whatsapp: </strong> 3126410732</p>
            <p><strong>Instagram: </strong> @tecnoacademiarisaralda</p>
            <p><strong>Facebook: </strong> tecnoacademia.risaralda</p>
            
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
    <script src="Scripts/academia.js"> </script> <!--Scripts Generales -->
    <script src="../ScriptsGenerales/accesibilidad.js"></script><!--Scripts Accesibilidad-->
</body>

<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 8408af53cad53fd0ee2b39c8a8b3b156a9a3e3f2:TecnoAcademia/index.html
>>>>>>> 13d839f0f96de926c52e0f1fa16480ba2d961238:TecnoAcademia/index.php
>>>>>>> 45235734228586b5233670e3d1131f3aeed96e30
