<?php include '../bases/header.php' ?> <!--Llamo el archivo donde se encuentra la estructura que quiero heredear-->

<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" type="text/css" href="fabrica.css"> <!-- Estilos de la fabrica -->
    <title>Fabrica De Software</title> 
<?php endblock() ?>

<?php startblock('contenido') ?>

    <section class="Contenido">
        <div class="orden">
            <div class="Primera_Impresion">
                <div class="contn">
                    <h1 class="titulo">Fabrica de Software</h1>

                    <h2 class="subtitulos">¿Que es la frabrica de software?</h2>

                    <p class="parrafo">En el corazón del centro de diseño e innovación tecnológica industrial, se encuentra la fábrica de software, un lugar donde la creatividad y la tecnología convergen para impulsar el progreso y la innovación.
                    <br>
                    La fábrica de software no es solo un centro de desarrollo tecnológico, es un ecosistema dinámico que sirve como puente entre la educación y la industria, donde los aprendices del Sena tienen la oportunidad de transformar sus conocimientos en soluciones prácticas y tangibles.
                    </p>
                    <hr>
                    <h3>¡CDTI Somos un Centro de Innovación Tecnológica!</h3>
                </div>
                    <div class="imagen">
                        <img src="img/logo_SENNOVA.jpg" alt="">
                    </div>
            </div>
            <button class="button">Reservar cita</button>
        </div>

        <div class="tarjeta">

            <div class="tarj-img">
                <img src="img/2.png " class="ima" >
            </div>

            <div class="contenido_tarjeta">
                <h2>Objetivos de la Fábrica de Software</h2>

                <p class="contenido-corto">Con un propósito dual, la fábrica de software se destaca por dos objetivos principales: en primer lugar, ofrece servicios tecnológicos a clientes internos y externos, abriendo las puertas a empresarios, miembros de la comunidad Sena y otros actores del sector interesados en desarrollar aplicaciones innovadoras. </p>

                <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                <p class="contenido-expansivo">En segundo lugar, la fábrica de software tiene un enfoque pedagógico, acercando a los aprendices durante su formación académica al mundo real del desarrollo de productos, preparándolos para enfrentar los desafíos y oportunidades del mercado laboral.</p>

                <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>

            </div>
        </div>

        <div class="tarjeta">

            <div class="tarj-img">
                <img src="img/1.png" >
            </div>

            <div class="contenido_tarjeta">

                <h2>Accesibilidad de la Fábrica de Software</h2>

                <p class="contenido-corto"> La fábrica de software destaca por su compromiso con la innovación y la colaboración. A través de diversas formas de contacto, desde el área de servicios tecnológicos hasta la subdirección del centro.</p>

                <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                <p class="contenido-expansivo">Cualquier aprendiz del Sena puede ingresar, independientemente de su programa de formación, siempre que tenga un proyecto con un componente tecnológico. la fábrica de software se asegura de estar al alcance de aquellos que buscan soluciones tecnológicas innovadoras y accesibles.</p>

                <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>
            </div>

        </div>

        <div class="tarjeta">

            <div class="tarj-img">
                <img src="img/3.png" > 
            </div>

            <div class="contenido_tarjeta">

                <h2> Nuestra Visión</h2>

                <p class="contenido-corto">La fábrica de software tiene una visión clara para su futuro. En primer lugar, busca expandirse físicamente en términos de infraestructura para abordar las deficiencias de espacios actuales del Sena. Además, busca crear un grupo de semilleros dentro de la misma fábrica, donde los aprendices puedan desarrollar proyectos no solo por necesidades empresariales, sino también por iniciativa propia, como ayudar a un familiar con un negocio.</p>

                <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                <p class="contenido-expansivo">El Sena proporcionaría orientación y apoyo en este proceso sin costo alguno, ya que se trata de un esfuerzo social para beneficio común. Es importante destacar que la fábrica de software no solo busca generar ingresos, sino también contribuir al desarrollo social y económico mediante la generación de recursos significativos en bienes, servicios y conocimientos.</p>

                <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>

            </div>

        </div>

    </section>
    <script src="fabrica.js"></script>
<?php endblock() ?>