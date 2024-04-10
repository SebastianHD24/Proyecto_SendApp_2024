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

    <!-- ESTILOS CSS -->
    <link rel="stylesheet" type="text/css" href="Styles/tecnoParque.css"> <!-- Estilos de Tecno Parque--> 
    <link rel="stylesheet" type="text/css" href="../Styles/header.css"> <!-- Estilos del Header-->
    <link rel="stylesheet" type="text/css" href="../Styles/footer.css"> <!-- Estilos del Footer-->
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

    <div class="tecnoparque">
        <article class="logo_tecnoparque"><img src="Img/TencoParque-img/logo _tecnoparque.png" alt="logo TecnoParque"></article>
        <h1 class="titulo">Tecnoparque</h1>

        <section class="infor">
            <h3 class="subtitulos">¿Qué es Tecnoparque?</h3>
            <p>
                Es un programa y estrategia de innovación tecnológica del Servicio Nacional de Aprendizaje, 
                creado para brindar apoyo en la materialización de proyectos de desarrollo tecnológico en 
                prototipos funcionales y productos.
            </p>
            <br>
            <div class="objec">
                <div class="objetivos">
                    <div class="objetivo">
                        <h3 class="subtitulos">Objetivos de Tecnoparque.</h3>
                        <p>
                            Tecnoparque es un programa del SENA que tiene como objetivo principal promover el desarrollo de la innovación, 
                            la tecnología y la competitividad empresarial en Colombia.
                        </p>
                    </div>
    
                <div class="foto1">
                    <img src="Img/TencoParque-img/tecnoparque1.png" alt="foto1">
                </div>
            </div>
        
            <h3 class="subtitulos">¿Cuáles son los servicios que ofrece Tecnoparque?</h3>
            <p>
                <ul class="l_desordenada">
                    <li>
                        Acompañar técnica y metodológicamente el desarrollo de proyectos de base tecnológica, 
                        disponiendo de equipo humano experto, ambientes y laboratorios especializados, 
                        para la materialización de prototipos que generen un valor agregado a procesos y servicios del sector productivo.
                    </li>
                    <br>
                    <li>
                        Articular esfuerzos y capacidades entre la Red Tecnoparque, los centros de formación profesional y 
                        los actores del Sistema de Ciencia, Tecnología e Innovación de Colombia facilitando oportunidades de comercialización, 
                        formalización de productos o servicios y registro de propiedad intelectual de prototipos que así lo requieran.
                    </li>
                    <br>
                    <li>
                        Crear espacios para garantizar la generación, apropiación, adaptación, difusión y transferencia de conocimiento y tecnológicas, 
                        desde y hacia los sectores productivos y académicos de las regiones.
                    </li>
                </ul>
            </p>
        
        
            <h3 class="subtitulos">¿Cómo se puede acceder a estos servicios?</h3>
            <p>
                <!-- El atributo rel coloca la relación entre la página y el URL enlazado. Posicionando en este noopener noreferrer para prevenir el tipo de phishing conocido como tabnabbing. -->
                Para Acceder a los servicios de Tecnoparque debes regístrate en la página oficial 
                <a href="https://redtecnoparque.com/" target="_blank" rel="noopener noreferrer">www.redtecnoparque.com</a> 
                y seguir los pasos del pdf <a href="documentos/PASO A PASO REGISTRO DE IDEAS TECNOPARQUE.pdf" download="PASO A PASO REGISTRO DE IDEAS TECNOPARQUE"><strong>“PASO A PASO REGISTRO DE IDEAS TECNOPARQUE”</strong></a>
            </p>

            <h3 class="subtitulos">¿Qué beneficios se pueden obtener de los servicios que ofrecen?</h3>
            
            <ol class="l_ordenada">
                <li>
                    Infraestructura y espacio de trabajo: Acceso a instalaciones modernas y equipadas con tecnología de punta, 
                    incluyendo laboratorios, espacios de coworking, salas de reuniones y áreas de trabajo colaborativo.
                </li>
                <li>
                    Asesoramiento y consultoría: Apoyo técnico y empresarial por parte de expertos en diferentes áreas, 
                    incluyendo asesoramiento en desarrollo de negocios, estrategias de comercialización, gestión financiera, 
                    propiedad intelectual, entre otros.
                </li>
                <li>
                    Formación y capacitación: Programas de formación y capacitación en temas relevantes para el desarrollo de proyectos 
                    tecnológicos e innovadores, incluyendo cursos, talleres, seminarios y conferencias.
                </li>
                <li>
                    Red de contactos y networking: Oportunidades para establecer contactos con otros emprendedores, empresas, 
                    instituciones educativas, inversores y profesionales del sector, facilitando la colaboración, la generación de alianzas 
                    estratégicas y el acceso a recursos adicionales.
                </li>
                <li>
                    Acceso a financiamiento: Posibilidad de acceder a programas de financiamiento, inversión o subvenciones para el 
                    desarrollo y la implementación de proyectos tecnológicos e innovadores.
                </li>
                <li>
                    Apoyo en investigación y desarrollo: Facilitación de actividades de investigación, desarrollo e innovación a través 
                    de colaboraciones con instituciones académicas, empresas y otras entidades.
                </li>
                <li>
                    Internacionalización: Apoyo en procesos de internacionalización de proyectos y empresas, facilitando el acceso a 
                    mercados internacionales, programas de intercambio y cooperación internacional.
                </li>
            </ol>
        </section>
            
        
        <div class="contenido_lineas">
            <h3 class="subtitulos">Líneas Tecnológicas de Tecnoparque</h3>
            <br>
            <div class="lineas">
                <div class="linea1">
                    <div class="logo_lineas">
                        <img src="Img/TencoParque-img/ingenieria.png" alt="piñon">
                    </div>
                    <strong>Ingenieria y Diseño:</strong>
                    <p>
                        Esta línea está enfocada al diseño mecánico, diseño de productos, sistemas CAD/CAM/CAE, optimización topológica, 
                        prototipado rápido y procesos de manufactura avanzada,  ingeniería inversa  y análisis dimensiona, prototipado 3d e impresión a laser.
                    </p>
                    <ol class="l_ordenada">
=======
<?php include '../../Proyecto_SendApp_2024/bases/header.php' ?> <!--Llamo el archivo base-->

<?php startblock('links-styles') ?>
    <link rel="stylesheet" type="text/css" href="./Styles/tecnoParque.css"> <!-- Estilos de Tecno Parque--> 
    <link rel="stylesheet" type="text/css" href="../../../project/Proyecto_SendApp_2024/Styles/header.css"> <!-- Estilos del Header-->
    <link rel="stylesheet" type="text/css" href="../../../project/Proyecto_SendApp_2024/Styles/footer.css"> <!-- Estilos del Footer-->
    <title>Tecno Parque</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php endblock() ?>

<?php startblock('contenido') ?> <!--Inicio bloque contenido-->
    <div class="tecnoparque">
        <section>
            <article class="logo_tecnoparque"><img src="Img/TencoParque-img/logo _tecnoparque.png" alt="logo TecnoParque"></article>
            <h1 class="titulo">TecnoParque</h1>

            <div class="contenido">
                <h3 class="subtitulos">¿Qué es Tecnoparque?</h3>
                <p>
                    Es un programa y estrategia de innovación tecnológica del Servicio Nacional de Aprendizaje, 
                    creado para brindar apoyo en la materialización de proyectos de desarrollo tecnológico en 
                    prototipos funcionales y productos.
                </p>

                <h3 class="subtitulos">Objetivos de Tecnoparque.</h3>
                <p>
                    Tecnoparque es un programa del SENA que tiene como objetivo principal promover el desarrollo de la innovación, 
                    la tecnología y la competitividad empresarial en Colombia.
                </p>

                <div class="foto1">
                    <img src="Img/TencoParque-img/tecnoparque1.png" alt="Emprendimineto">
                </div>
            </div>
            
            <div class="contenido">
                <h3 class="subtitulos">¿Cuáles son los servicios que ofrece Tecnoparque?</h3>
                <p>
                    <ul>
                        <li>
                            Acompañar técnica y metodológicamente el desarrollo de proyectos de base tecnológica, 
                            disponiendo de equipo humano experto, ambientes y laboratorios especializados, 
                            para la materialización de prototipos que generen un valor agregado a procesos y servicios del sector productivo.
                        </li>
                        <br>
                        <li>
                            Articular esfuerzos y capacidades entre la Red Tecnoparque, los centros de formación profesional y 
                            los actores del Sistema de Ciencia, Tecnología e Innovación de Colombia facilitando oportunidades de comercialización, 
                            formalización de productos o servicios y registro de propiedad intelectual de prototipos que así lo requieran.
                        </li>
                        <br>
                        <li>
                            Crear espacios para garantizar la generación, apropiación, adaptación, difusión y transferencia de conocimiento y tecnológicas, 
                            desde y hacia los sectores productivos y académicos de las regiones.
                        </li>
                    </ul>
                </p>
            </div>
            
            <div class="contenido">
                <h3 class="subtitulos">¿Cómo se puede acceder a estos servicios?</h3>
                <p>
                    <!-- El atributo rel coloca la relación entre la página y el URL enlazado. Posicionando en este noopener noreferrer para prevenir el tipo de phishing conocido como tabnabbing. -->
                    Para Acceder a los servicios de Tecnoparque debes regístrate en la página oficial 
                    <a href="https://redtecnoparque.com/" target="_blank" rel="noopener noreferrer">www.redtecnoparque.com</a> 
                    y seguir los pasos del pdf <a href="documentos/PASO A PASO REGISTRO DE IDEAS TECNOPARQUE.pdf" download="PASO A PASO REGISTRO DE IDEAS TECNOPARQUE"><strong>“PASO A PASO REGISTRO DE IDEAS TECNOPARQUE”</strong></a>
                </p>

                <h3 class="subtitulos">¿Qué beneficios se pueden obtener de los servicios que ofrecen?</h3>
                <p>
                    <ol>
                        <li>
                            Infraestructura y espacio de trabajo: Acceso a instalaciones modernas y equipadas con tecnología de punta, 
                            incluyendo laboratorios, espacios de coworking, salas de reuniones y áreas de trabajo colaborativo.
                        </li>
                        <li>
                            Asesoramiento y consultoría: Apoyo técnico y empresarial por parte de expertos en diferentes áreas, 
                            incluyendo asesoramiento en desarrollo de negocios, estrategias de comercialización, gestión financiera, 
                            propiedad intelectual, entre otros.
                        </li>
                        <li>
                            Formación y capacitación: Programas de formación y capacitación en temas relevantes para el desarrollo de proyectos 
                            tecnológicos e innovadores, incluyendo cursos, talleres, seminarios y conferencias.
                        </li>
                        <li>
                            Red de contactos y networking: Oportunidades para establecer contactos con otros emprendedores, empresas, 
                            instituciones educativas, inversores y profesionales del sector, facilitando la colaboración, la generación de alianzas 
                            estratégicas y el acceso a recursos adicionales.
                        </li>
                        <li>
                            Acceso a financiamiento: Posibilidad de acceder a programas de financiamiento, inversión o subvenciones para el 
                            desarrollo y la implementación de proyectos tecnológicos e innovadores.
                        </li>
                        <li>
                            Apoyo en investigación y desarrollo: Facilitación de actividades de investigación, desarrollo e innovación a través 
                            de colaboraciones con instituciones académicas, empresas y otras entidades.
                        </li>
                        <li>
                            Internacionalización: Apoyo en procesos de internacionalización de proyectos y empresas, facilitando el acceso a 
                            mercados internacionales, programas de intercambio y cooperación internacional.
                        </li>
                    </ol>
                </p>
            </div>
            
            <div class="contenido">
                <h3 class="subtitulos">Lineas tecnológicas de Tecnoparque</h3>
                <p>
                    <strong>Ingenieria y Diseño:</strong>
                    <br>
                    Esta línea está enfocada al diseño mecánico, diseño de productos, sistemas CAD/CAM/CAE, optimización topológica, 
                    prototipado rápido y procesos de manufactura avanzada,  ingeniería inversa  y análisis dimensiona, prototipado 3d e impresión a laser.
                    <br>
                    <ol>
>>>>>>> 45235734228586b5233670e3d1131f3aeed96e30
                        <li>Escáners 3D</li>
                        <li>Cortadora laser</li>
                        <li>Termoformado</li>
                        <li>Fresado CNC</li>
                        <li>Impresion 3D</li>
<<<<<<< HEAD
                    </ol>               
                </div>

                <div class="linea2">
                    <div class="logo_lineas" >
                        <img src="Img/TencoParque-img/biotecnologia.png" alt="matraz">
                    </div>
                    
                    <strong>Biotecnología y Nanotecnología</strong>
                    <p>
                        Esta línea está enfocada al trabajo de:
                    </p>
                    <ol class="l_ordenada">
=======
                    </ol>
                    
                    <br>
                    <strong>Biotecnología y Nanotecnología</strong>
                    <br>
                    Esta línea está enfocada al trabajo de:
                    <br>
                    <ol>
>>>>>>> 45235734228586b5233670e3d1131f3aeed96e30
                        <li>Biotecnología industrial</li>
                        <li>Biotecnología Vegetal</li>
                        <li>Medio ambiente</li>
                        <li>Agroindustria alimentaria</li>
                        <li>Agroindustria no alimentaria</li>
                        <li>Nuevos materiales</li>
                        <li>Microbiología agrícola y pecuaria</li>
                        <li>Energias verdes y biocombustibles</li>
                        <li>Nanotecnología</li>
                    </ol>
<<<<<<< HEAD
                </div>

                <div class="linea3">
                    <div  class="logo_lineas">
                        <img src="Img/TencoParque-img/electronica.png" alt="circuito">
                    </div>
                    
                    <strong>Electrónica y telecomunicaciones</strong>
                    <p>
                        Esta línea está enfocada a:
                    </p>
                    <ol class="l_ordenada">
=======

                    <br>
                    <strong>Electrónica y telecomunicaciones</strong>
                    <br>
                    Esta línea está enfocada al:
                    <br>
                    <ol>
>>>>>>> 45235734228586b5233670e3d1131f3aeed96e30
                        <li>Automatización e instrumentación</li>
                        <li>Redes inteligentes</li>
                        <li>Robótica</li>
                        <li>Sistemas embebidos</li>
                        <li>Agro electrónica</li>
                        <li>Análisis de señales y protocolos</li>
                        <li>Infraestructura</li>
                        <li>Diseño electrónico</li>
                        <li>Telemática</li>
                        <li>Internet de las cosas</li>
                    </ol>
<<<<<<< HEAD
                </div>

                <div class="linea4">
                    <div  class="logo_lineas" >
                        <img src="Img/TencoParque-img/realidad_virtual.png" alt="virtualidad">
                    </div>
                    
                    <strong>Tecnologías virtuales</strong>
                    <p>
                        Esta línea está enfocada al desarrollo de:
                    </p>
                    <ol class="l_ordenada">
=======
                    <br>
                    <strong>Tecnologías virtuales</strong>
                    <br>
                    Esta línea está enfocada al desarrollo de:
                    <br>
                    <ol>
>>>>>>> 45235734228586b5233670e3d1131f3aeed96e30
                        <li>Aplicaciones móviles</li>
                        <li>Inteligencia artificial y big data</li>
                        <li>Realidad virtual y simulación</li>
                        <li>Realidad aumentada</li>
                        <li>Animación digital</li>
                        <li>Diseño y desarrollo de video juegos</li>
                        <li>Ingeniería de software</li>
                        <li>Desarrollo de contenidos multimediales</li>
                        <li>Geotecnología</li>
                    </ol>
<<<<<<< HEAD
                </div>
                <br>
            </div>
        </div>

        <section class="infor">
            <h3 class="subtitulos">¿Para quienes está dirigido el Tecnoparque?</h3>
            <p>
                El programa está dirigido a cada uno de los residentes en Colombia. El público interno incluye a aprendices, 
                instructores o investigadores SENA, el público externo incluye a emprendedores empresarios, universitarios en pregrado, 
                universitarios en posgrado y público general que necesitan apoyo de expertos y acceso a laboratorios especializados 
                y equipos para materializar sus ideas.
            </p>

            <h3 class="subtitulos">Convenios de Tecnoparque</h3>
            <p>
                Tecnoparque suele tener convenios con universidades locales para proyectos de investigación, 
                empresas relacionadas con el sector tecnológico para el desarrollo de productos o servicios y 
                alianzas con entidades gubernamentales para capacitación y apoyo a emprendedores.
            </p>

            <h3 class="subtitulos">Requisitos para ingresar a Tecnoparque</h3>
            
            <ol class="l_ordenada">
                <li>
                    Debes tener un proyecto o una idea clara relacionada con la tecnología, la innovación o un emprendimiento que pueda 
                    beneficiarse de los recursos y el ecosistema ofrecido por el Tecnoparque.
                </li>
                <li>
                    Registrarse en la página de Red Tecnoparque.
                </li>
            </ol>
            
        
        
        
            <h3 class="subtitulos">Ubicación de Tecnoparque nodo Pereira</h3>
            <br>
            <h4>Dirección</h4>
            <p>Carrera 8 # 26-79 Centro Agropecuario y de Comercio y Servicios.</p>
            <br>
            <h4>Horario de atención</h4>
            <p>Lunes a Viernes de 8:00 AM a 12:00 PM y de 1:00 PM a 5:00 PM</p>
            <br>
            <h4>Línea de atención</h4>
            <p><strong>Teléfono: </strong> 3135800 Ext. 63122</p>
            <p><strong>Correo: </strong> rdatecnoparque@snea.edu.co</p>
        </section>
        
        <br>

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
    <script src="ScriptsGenerales/accesibilidad.js"></script><!--Scripts Accesibilidad-->
</body>
</html>
=======

                </p>
            </div>
            
            <div class="contenido">
                <h3 class="subtitulos">¿Para quienes está dirigido el Tecnoparque?</h3>
                <p>
                    El programa está dirigido a cada uno de los residentes en Colombia. El público interno incluye a aprendices, 
                    instructores o investigadores SENA, el público externo incluye a emprendedores empresarios, universitarios en pregrado, 
                    universitarios en posgrado y público general que necesitan apoyo de expertos y acceso a laboratorios especializados 
                    y equipos para materializar sus ideas.
                </p>

                <h3 class="subtitulos">Convenios de Tecnoparque</h3>
                <p>
                    Tecnoparque suele tener convenios con universidades locales para proyectos de investigación, 
                    empresas relacionadas con el sector tecnológico para el desarrollo de productos o servicios y 
                    alianzas con entidades gubernamentales para capacitación y apoyo a emprendedores.
                </p>

                <h3 class="subtitulos">Requisitos para ingresar a Tecnoparque</h3>
                <p>
                    <ol>
                        <li>
                            Debes tener un proyecto o una idea clara relacionada con la tecnología, la innovación o un emprendimiento que pueda 
                            beneficiarse de los recursos y el ecosistema ofrecido por el Tecnoparque.
                        </li>
                        <li>
                            Registrarse en la página de Red Tecnoparque.
                        </li>
                    </ol>
                </p>
            </div>
            
            <div class="contenido">
                <h3 class="subtitulos">Ubicación de Tecnoparque nodo Pereira</h3>
                <br>
                <h4>Dirección</h4>
                <p>Carrera 8 # 26-79 Centro Agropecuario y de Comercio y Servicios.</p>
                <br>
                <h4>Horario de atención</h4>
                <p>Lunes a Viernes de 8:00 AM a 12:00 PM y de 1:00 PM a 5:00 PM</p>
                <br>
                <h4>Línea de atención</h4>
                <p><strong>Teléfono: </strong> 3135800 Ext. 63122</p>
                <p><strong>Correo: </strong> rdatecnoparque@snea.edu.co</p>
            </div>
            <br>
        </section>
    </div>
<?php endblock() ?> <!--Fin bloque contenido-->
           
    
    <?php startblock('scripts') ?>
        <script src="./Scripts/tecnoParque.js"> </script>
        <script src="../Inicio/Scripts/inactividad.js"></script> <!--Scripts Generales -->
    <?php endblock() ?>

>>>>>>> 45235734228586b5233670e3d1131f3aeed96e30