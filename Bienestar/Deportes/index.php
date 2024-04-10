<?php include '../../bases/header.php' ?>

<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" type="text/css" href="deportes.css"> <!--Estilos de Deportes -->
    <title>Deportes</title>
<?php endblock() ?>

<!--Bloque para el logo sena-->
<?php startblock('logo-sena') ?>
<div class="logo">
    <img src="../../Inicio/Img-home/LogosSena-img/SendApp.png"
    alt="SendApp Logo"/>
</div>
<?php endblock() ?>


<?php startblock('contenido') ?>
    <div class="sennova">
        <section>
            <h1 class="titulo">Deportes y Cultura</h1>
            <article><img src="" alt="logo"></article>

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
            <h3 class="subtitulos">Subtitulo</h3>
            <p>
                parrafo
            </p>
            
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
<?php endblock() ?>  

<!-- Bloque de código para incluir la etiqueta script en caso de scripts propios para esta pagina -->
<?php startblock('scripts') ?>
            <script src="deportes.js"> </script>
<?php endblock() ?>
