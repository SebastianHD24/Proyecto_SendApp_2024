<?php include('../bases/estructura-base.php') ?>

    <?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" type="text/css" href="../../Proyecto_SendApp_2024/serviciosTecnologicos/tecnologicos.css"> <!--Estilos de servicios Tecnológicos-->
    <?php endblock() ?>

    <?php startblock('contenido') ?>
    <section class="Contenido">
        <div class="orden">
                <div class="Primera_Impresion">
                    <div class="contn">

                        <h1 class="titulo">Servicios Tecnologicos</h1>

                        <p class="parrafo">Sumérgete en el fascinante mundo de los Servicios Tecnológicos del SENA, donde la innovación y la formación se fusionan para crear un futuro prometedor.</p>
                        <hr>
                        <p class="p">Nuestro horario de oficina, de 8:00 am a 6:00 pm, en nuestras oficinas de servicios tecnológicos en el centro. </p>
                    </div>
                        <div class="imagen">
                            <img src="../serviciosTecnologicos/img/img-conten/IMG_5391.jpg" alt="Imagenes lugar Servicios Tecnologicos">
                        </div>
                </div>

                <button class="button">Reservar cita</button>
            </div>

        <div class="tarjeta">

            <div class="tarj-img">
                <img src="./icons/pregunta.png" alt="Icono-pregunta">
            </div>

            <div class="contenido_tarjeta">

                <h2>¿Qué son los servicios tecnológicos</h2>

                <p class="contenido-corto">Los servicios tecnológicos representan proyectos que se alinean con la estrategia de fortalecimiento de los productos de investigación, innovación y desarrollo tecnológico del SENA. Estos proyectos están vinculados directamente al área de desarrollo tecnológico y complementan los productos que se generan en los laboratorios. </p>

                <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                <p class="contenido-expansivo">Además, contribuyen al proceso de registro calificado de los tecnólogos formados dentro del centro de formación, especialmente en las áreas específicas que están integradas en las líneas medulares del centro.</p>

                <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>

            </div>

        </div>

        <div class="tarjeta">

            <div class="tarj-img">
                <img src="./icons/atencion-al-cliente.png" alt="Icono-servicios" >
            </div>

            <div class="contenido_tarjeta">

                <h2>¿Qué servicios ofrece?</h2>

                <p class="contenido-corto">Dentro de los centros es fundamental que los laboratorios asociados a los servicios tecnológicos cumplan con requisitos específicos establecidos en los lineamientos de SENNOVA. Estos laboratorios deben satisfacer necesidades particulares y no pueden competir con servicios privados. Además, deben atender las demandas específicas de los sectores productivos vinculados a las líneas medulares del centro. Por ejemplo, en nuestro caso, las líneas medulares incluyen metalmecánica y construcción, áreas en las que nuestros laboratorios tienen una sólida presencia.</p>

                <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                <p class="contenido-expansivo">Actualmente, contamos con uno o dos laboratorios dedicados a realizar caracterizaciones mecánicas y dimensionales de productos utilizados en infraestructura, como barras curvadas y mallas electrosoldadas. Estas caracterizaciones incluyen análisis mecánicos, físicos y dimensionales que son obligatorios según los requisitos establecidos por el Ministerio de Industria, Comercio y Turismo.</p>

                <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>

            </div>

        </div>

        <div class="tarjeta">

            <div class="tarj-img">
                <img src="./icons/frontera.png" alt="Icono-acceso">
            </div>

            <div class="contenido_tarjeta">

                <h2>¿Quiénes pueden acceder a servicios tecnológicos?</h2>

                <p class="contenido-corto">Los servicios tecnológicos del SENA están disponibles para cualquier persona natural, empresa, aprendiz, instructor o miembro administrativo de la comunidad SENA. Nuestra política es de puertas abiertas, lo que significa que cualquier individuo puede acceder a estos servicios, siempre y cuando nuestras capacidades operativas lo permitan. Estamos comprometidos a brindar apoyo y soluciones tecnológicas a quienes lo necesiten, promoviendo así la colaboración y el intercambio de conocimientos en beneficio de la comunidad.</p>
            </div>

        </div>

        <div class="tarjeta">

            <div class="tarj-img">
                <img src="./icons/apoyar.png" alt="Icono-encargado">
            </div>

            <div class="contenido_tarjeta">

                <h2>¿De qué se encarga servicios tecnológicos?</h2>

                <p class="contenido-corto">Los servicios tecnológicos que ofrecemos están diseñados para satisfacer necesidades específicas del sector, como el sector de la construcción y el sector metalmecánico. Nuestro enfoque se centra en proporcionar ensayos de laboratorio para caracterizar materiales de acuerdo con las normas establecidas en la NTC 2289, NTC 3353, NTC 5806, NTC 1 y NTC 2. Todas las empresas que requieran este tipo de ensayos y estén sujetas a estos estándares pueden acceder a nuestros servicios. </p>

                <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                <p class="contenido-expansivo">Nos comprometemos a ofrecer la más alta calidad técnica en nuestros servicios, respaldados por nuestro alcance de acreditación 19 lab 020 ante el Organismo Nacional de Acreditación (ONA). Esta acreditación nos otorga el reconocimiento de tercera parte y garantiza la fiabilidad de los resultados que proporcionamos, lo cual es fundamental para todo nuestro proceso y para la confianza de nuestros clientes.</p>

                <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>

            </div>

        </div>
        <div class="tarjeta">

            <div class="tarj-img">
                <img src="./icons/ayudar.png" alt="Icono-ayuda">
            </div>

            <div class="contenido_tarjeta">

                <h2>¿Servicios tecnológicos le puede brindar ayuda a todas las áreas que hay en el CDITI?</h2>

                <p class="contenido-corto">Además de proporcionar servicios externos, también ofrecemos servicios internos a través del SENA proveedor. Estos servicios internos están destinados a cubrir las necesidades de otras áreas dentro del centro en elementos específicos. Por ejemplo, si hay proyectos de investigación e innovación bajo la línea de SENNOVA que requieran ensayos de laboratorio para avanzar en su ejecución técnica, podemos proporcionar esos servicios de manera gratuita.Contenido</p>

                <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                <p class="contenido-expansivo">También podemos apoyar a los aprendices que estén desarrollando proyectos de emprendimiento, ofreciendo soluciones estéticas u otros tipos de apoyo. Del mismo modo, podemos brindar soluciones a necesidades internas de tecno parques, tecno academias u otros proyectos dentro del centro de formación. Si, por ejemplo, se está llevando a cabo una construcción en el centro y se requieren ensayos, estamos obligados a prestar esos servicios de manera imparcial, asegurando que los resultados sean fiables y cumplan con los estándares requeridos. Nuestro objetivo es apoyar el desarrollo y éxito de todos los proyectos dentro del centro de formación, tanto externos como internos.</p>

                <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>

            </div>

        </div>

    </section>

    <script src="Scripts/tecnologicos.js"></script>
    <?php endblock() ?>