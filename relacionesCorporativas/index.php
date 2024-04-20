<?php include '../../Proyecto_SendApp_2024/bases/header.php' ?> <!--Llamo el archivo base-->

<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" type="text/css" href="Styles/coorporativas.css"> <!-- Estilos de relaciones coorporativas -->
    <title>Relaciones Coorporativas</title>
<?php endblock() ?>

<?php startblock('contenido') ?>

    <div class="corporativas">
        <section>
            <h1 class="titulo">Relaciones Corporativas</h1>
            
            <h3 class="subtitulos">¿Qué son las relaciones corporativas del SENA?</h3>
            <p>
                Es el área encargada de la interacción entre el servicio nacional de aprendizaje SENA y las empresas.
                <br>
                En el CDITI contamos con una oficina de contratación de aprendices que hace parte de las relacciones corporativas del SENA.
            </p>

            <h3 class="subtitulos">¿Como se pueden ver las empresas que estan realizando contratación de aprendices?</h3>
            <p>
                Los aprendices pueden visualizar las emprezas que están ofreciendo contrato de aprendizaje ingresando a la plataforma oficial 
                de <a href="http://caprendizaje.sena.edu.co" target="_blank">CAPRENDIZAJE SENA</a>, selecciona aprendices e ingresa con su 
                documento de identidad y contraseña.
            </p>

            <h3 class="subtitulos">Objetivos</h3>

            <ol class="l_ordenada">
                <li>Facilitar la contratación de aprendices por parte de las empresas.</li>
                <li>Garantizar que las empresas cumplan con las cuotas de aprendices requeridos.</li>
                <li>Brindar apoyo a las empresas en la gestion de contratos de aprendizaje.</li>
                <li>Coordinar la relación entre los aprendices y las empresas.</li>
                <li>Ofrecer información y servicios del SENA a las empresas.</li>
            </ol>

            <h3 class="subtitulos">Servicios</h3>
            <ol class="l_ordenada">
                <li>Facilitar la contratación de aprendices.</li>
                <li>Vigilar el cumplimiento de las cuotas de aprendices por parte de las empresas.</li>
                <li>Cobrar a las empresas que no cumplan con la cuotas de aprendices.</li>
                <li>Brindar apoyo y orientación a las empresas sobre los programas y servicios del SENA.</li>
                <li>Coordinar la etapa práctica de los aprendices en las empresas.</li>
                <li>Servir de intermediario entre los aprendices y las empresas.</li>
                <li>Proporcionar información y asistencia sobre el proceso de contratación y gestión de aprendices.</li>
            </ol>
            <br>

            <button class="button">Reservar cita</button>
        </section>
    </div>
<?php endblock() ?>

<?php startblock("script")?>
    <script src="Scripts/coorporativas.js"></script>
<?php endblock()?>