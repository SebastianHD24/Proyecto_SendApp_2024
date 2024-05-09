<?php include '../bases/estructura-base.php' ?>

<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="administracion.css"> <!-- Estilos de Administración -->
    <title>Administración</title>
<?php endblock() ?>

<?php startblock('contenido') ?>

    <section class="Contenido">
        <div class="orden">
            <div class="Primera_Impresion">
                <div class="contn">

                    <h1 class="titulo">Administración Educativa</h1>

                    <h2 class="subtitulos">¿Qué es?</h2>

                    <p class="parrafo">Es el conjunto de procesos, politicas y practicas que se aplican en instituciones educativas para gestionar de manera correcta todos los recursos disponibles con el fin de alcanzar los objetivos educativos y garantizar el buen funcionamiento de la institución. Esto incluye tanto aspectos administrativos como pedagógicos y de gestión de recursos humanos y materiales.</p>
                    <hr>
                </div>
                <div class="imagen">
                    <img src="./img-content/IMG_5375.jpg" alt="">
                </div>
            </div>

                <button class="button">Reservar cita</button>
        </div>
            <div class="Contenedor">
    
                <div class="tarjetas-contenedor">

                    <div class="tarjeta">

                        <div class="tarj-img">
                            <img src="img/1.png" >
                        </div>

                        <div class="contenido_tarjeta">

                            <h2>Servicios</h2>

                            <ol class="l_ordenada">
                                <li>Inscripción en cursos titulados y complementarios.</li>
                                <li>Gestión de pruebas de selección.</li>
                                <li>Proceso de matrícula.</li>
                                <li>Certificación de aprendices.</li>
                                <li>Actualización de datos de Sofiaplus.</li>
                                <li>Trámites de apostillaje.</li>
                            </ol>
                        </div>
                    </div>
                    <div class="tarjeta">

                        <div class="tarj-img">
                            <img src="img/4.png" >
                        </div>

                        <div class="contenido_tarjeta">

                            <h2>Objetivos</h2>
                            <ol class="l_ordenada">
                                <li>Facilitar el proceso de inscripción de aprendices en cursos titulados o complementarios.</li>
                                <li>Gestionar pruebas de selección para los aprendices que ingresan.</li>
                                <li>Manejar el proceso de matrícula.</li>
                                <li>Certificar a los aprendices una vez que completen los requisitos de formación.</li>
                                <li>Actualizar datos de los aprendices en el sistema Sofiaplus.</li>
                                <li>Facilitar trámites de apostillaje para quienes deseen validar sus titulos en el extranjero.</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
    </section>
<?php endblock() ?>

