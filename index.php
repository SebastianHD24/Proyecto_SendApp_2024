<?php include '../Proyecto_SendApp_2024/bases/estructura-base.php' ?> <!--Llamo el archivo donde se encuentra la estructura que quiero heredear-->

    <!--Bloque para agregar las rutas de stylos independientes de cada archivo y links adicionales para archivos propios-->
    <?php startblock('links-styles') ?>
        <title>SendApp</title>
        <link rel="stylesheet" type="text/css" href="../Proyecto_SendApp_2024/CSS/StyleHome.css">
        <script src="../Proyecto_SendApp_2024/scripts/ScriptsGenerales/slider.js"></script>
    <?php endblock() ?>
    
    <!-- Slider Sena -->
    <?php startblock('logo-sena') ?>
        <div class="logo">
            <img src="Inicio/Img-home/LogosSena-img/SendApp.png"
            alt="SendApp Logo"/>
        </div>
    <?php endblock() ?>

    <?php startblock('contenido') ?> <!--Llamo el bloque del contenido para sobre escribir lo que contiene la pagina-->


    <!-- Contenido -->
    <!-- Slider -->

    <div class="splitview skewed">
        <div class="panel bottom">
            <div class="content box-left-top">
                    <div class="description">
                        <h1 class="TextSli1">Vive la experiencia SENA.</h1>
                        <p class="TextSlipar1">Aprovecha la oportunidad de entrar a estudiar en el Sena CDITI, visualiza las convocatorias en nuestro apartado de áreas/Programa de formación. <br> Aqui encontrataras todas las convocatorias a los programas de formación que tenemos en nuestro centro. </p>
                   
                    </div>

                    <img src="./imagenes/Slider-img/Inscripcion-SENA-2024.png" alt="foto1" id="foto1">
                    
                
            </div>
        </div>

        <div class="panel top">
            <div class="content">
                <div class="description">
                    <h1 class="TextSli2">Explora nuevas perspectivas.</h1>
                    <p class="TextSlipar2">Crea conexiones significativas y desafíate a ti mismo en cada paso del camino. <br>Aprende a interactuar con tus elementos, explora tus conociminetos y descubre tus habilidades.</p>
                </div>
                <img src="./imagenes/Slider-img/certificacion-12062023.jpg" alt="foto2" id="foto2">
                
            </div>
        </div>

        <div class="handle"></div>
            </div>

    <div class="content">
        <section>
            <div class="content__parrafos-titulos">
                <h1>Bienvenido a SendApp</h1> 
                <h2>El sitio web ofcial del Centro De Diseño e Innovación Tecnológica Industrial</h2>
                <p>¿Qué podrás encontrar aquí?</br>
                    Aquí encontrarás toda la información necesaria sobre como está constituido el centro de formación, sus principales áreas y servicios.
                </p>
            </div>
            
            
            <!--Contenddor de Parrafos-->
            <div class="content__parrafos-links">
                <div class="p__container">
                    <article>
                        <img src="Inicio/Img-home/Section-Img/icono1-section-verde.png" alt="Icono De Areas">
                    </article>                         
                    <p>
                        En el menú de navagación en el apartado de <b><a href="Areas/Areas.php">Áreas</a></b> puedes encontrar la información referente a cada una de las áreas y sus respectivos servicios.</br>Ten en cuenta que algunos de estos servicios solo estan disponibles para las personas en calidad de <b>Aprendíz Sena.</b>
                    </p>
                </div>
                <div class="p__container">
                    <article>
                        <img src="Inicio/Img-home/Section-Img/communicate.png" alt="Inoco De informacion">
                    </article> 
                    <p>
                        Si eres una persona natural en este sitío puedes encontrar todos los datos de contacto pertinentes sobre los funcionarios que atienden este centro de formación solo ve al siguiente link y encontrarás todo la información necesaria en <b><a href="#Info-cditi">Acerca CDITI.</a></b>
                    </p>
                </div>
                <div class="p__container">
                    <article>
                        <img src="Inicio/Img-home/Section-Img/training.png" alt="Inoco De Nosotros">
                    </article> 
                    <p>
                        Si te interesa saber un poco más sobre nosotros y ¿Por qué fue creado este sitio web? puedes visitar el apartado de <b><a href="#nosotros">Nosotros.</a></b>
                    </p>
                </div>
                <div class="p__container">
                    <article>
                        <img src="Inicio/Img-home/Section-Img/calendar.png" alt="Inoco de Agenda">
                    </article> 
                    <p>
                        Si eres aprendíz Sena y necesitas agendar una cita para algún servicio del Centro de Diseño e Innovación Tecnológica Industrial recuerda ingresar con tus datos de Sofia en <b><a href="../Proyecto_SendApp_2024/Login/login-aprendices/login.php">Ingreso.</a></b>
                    </p>
                </div>
            </div>

                <!-- ------------------------ Nosotros -------------------------- -->
    <section id="nosotros">
    <div class="container_nostros" >
        <div class="contenedor">
            <div class="seccion-escudo_bandera">
                <div class="escudo">
                    <h1>Escudo y Bandera</h1>
                    <p>
                        El escudo y la bandera del SENA, fueron diseñados a comienzos de la creación de nuestra institución, reflejan los tres sectores económicos dentro de los cuales se ubica el accionar de la institución: el piñón, representativo del sector industria; el caduceo, asociado al de comercio y servicios; y el café, ligado al primario y extractivo.SENA
                    </p>
                </div>
                <img src="./Inicio/Img-home/Section-Img/escudo.png" alt="Escudo Sena">
            </div>
            <div class="section-logosimbolo">
                <img src="./Inicio/Img-home/LogosSena-Img/logoSenaVerde2.png" alt="Logo Sena" id="logo-sena-conostros">
                <div class="logosimbolo">
                    <h1>Logosímbolo</h1>
                    <p>
                        El logosímbolo muestra de forma gráfica la síntesis los enfoques de la formación que impartimos en la que el individuo es el responsable de su propio proceso de aprendizaje.
                        SENA
                        
                    </p>
                </div>
            </div>
        </div>
        
        <!-- ----------------------------------------- ------------------>
        <div class="section2">
            <div class="mision_vision">
                <div class="izquierda">
                    <div class="content-izquierda">
                        <h1>Misión</h1>
                        <p>EL SENA está encargado de cumplir la función que le corresponde al Estado de invertir en el desarrollo social y técnico de los trabajadores colombianos, ofreciendo y ejecutando la formación profesional integral, para la incorporación y el desarrollo de las personas en actividades productivas que contribuyan al desarrollo social, económico y tecnológico del país.
                            Visión
                        </p>
                    </div>
                    <div class="triangulo-derecha"></div>
                </div>
                
                <div class="derecha">
                    <div class="triangulo-izquierda"></div>
                    <div class="content-derecha">
                        <h1>Visión</h1>
                    <p>En el 2018 el SENA será reconocido por la efectividad de su gestión, sus aportes al empleo decente y a la generación de ingresos, impactando la productividad de las personas y de las empresas; que incidirán positivamente en el desarrollo de las regiones como contribución a una Colombia educada, equitativa y en paz.</p>
                    </div>
                    
                </div>
                
            </div>

        </div>    
    </div>
    </section>



    <!-- --------------------------------------- Info CDITI ------------------------------ -->
<section id="Info-cditi">
    <div class="container_info">
        <div class="section-1">
            <h1>CDITI Informa</h1>
                <p>La estrategia CDITINFORMA está alineada con los objetivos y valores del SENA, por tanto es la brújula que guiará el camino para invertir los recursos sin improvisar y por el contrario, ejecutando lo planificado de forma real y aterrizada. Ese crecimiento controlado se verá reflejado en la ampliación de la cobertura toda vez que la visibilización del Centro llevará a mostrar a la Regional Risaralda como la pionera en Contenidos Digitales. Para canalizar los esfuerzos y energías en el mismo objetivo, bajo los lineamientos de la oficina de Comunicaciones de la Regional Risaralda, se crea el progama CDITINFORMA como una estrategia pedagógica de la Agencia de Contenidos Digitales en la cual son los mismos aprendices los encargados de visibilizar las acciones y actividades realizadas por el Centro, al tiempo que ponen en práctica lo aprendido. </p>
                
        </div>
        <img src="./Inicio/Img-home/Section-Img/img2.JPG" alt="">

        </div>
</section>
        </section>
        <div class="map">
            <h1>¿Sabes dónde queda el Centro de Diseño e Innovación tecnológica Industrial?</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1181.956669064205!2d-75.68085189753448!3d4.836410011767831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3881a4b50bb31d%3A0x9150c2e299ed35b0!2sCDITI%20SENA%20Dosquebradas!5e0!3m2!1ses-419!2sco!4v1713576301141!5m2!1ses-419!2sco" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mapaSena"></iframe>
        </div>

    </div>
<?php endblock() ?> <!--Fin bloque de contenido-->
