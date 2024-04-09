<<<<<<< HEAD:senova/index.html
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
    <link rel="stylesheet" href="Styles/senova.css"> <!-- Estilos de Senova -->
    <link rel="stylesheet" href="../Styles/header.css"> <!--EStilos del header  -->
    <link rel="stylesheet" href="../Styles/footer.css"> <!-- Estilos del footer -->
    <link rel="stylesheet" href="../Styles/accesibilidad.css"><!--CSS accesibilidad-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                <li><i class="fa-solid fa-house"></i><a href="../index.php">Inicio</a></li>
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

    <div class="sennova">
        <section>
            <h1 class="titulo">SENNOVA</h1>
            <article><img src="img/LogosSena-img/logo SENNOVA.jpg" alt="logosennova"></article>
            
            <h3 class="subtitulos">¿Que es SENNOVA?</h3>
            <p>Sennova es el sistema de investigación, innovación y desarrollo tecnológico que tiene el SENA el cual es
                una estrategia nacional que está presente en los 119 centros del país.
            </p>
            <h3 class="subtitulos">¿Cuáles son los requisitos para acceder a los servicios?</h3>
            <p>Mas que requisitos cual es la voluntad y el compromiso que tienen que tener los aprendices y lo
                instructores, primero que les guste la investigación porque la investigación es un gusto, es un placer
                no es impuesto entonces a todos los seres humanos nos gusta aprender y conocer cierto e el cómo aprender
                y el cómo conocemos de eso se trata estar de llevar el conocimiento y divulgar el conocimiento hacia los
                demás entonces una de las acciones que tiene que tener los aprendices es como entrar en este e como
                entrar a los semilleros de investigación, para entrar a los semilleros de investigación los aprendices
                tienen que estar asociados a un proyecto de investigación ese proyecto de investigación tiene que ser
                representado y jalonado por los instructores del área en su caso por los instructores del área de
                teleinformática o e como el área de teleinformática tiene tantas áreas puede ser de multimedia,
                audiovisuales e de infraestructura ahí pueden entrar los aprendices o pueden apoyar otros proyectos de
                otros de otras ambientes de formación por ejemplo construcción, en construcción se requiere la parte de
                multimedia se requiere la parte de programación porque e afortunadamente e sistemas, teleinformática ,
                comunicaciones e teleinformática es transversal a todas las áreas del centro si usted quiere hacer un
                proyecto social y si usted quiere divulgar la información lo hace a través del sistema cierto por eso es
                la importancia de esa en el centro y en el mundo ósea el mundo se está moviendo por dos, dos centros en
                el mundo por dos centros dos centros que es la parte de automatización y la parte de la informática y
                ahora el mundo y el país está entrando en algo que todavía estamos apenas entrando que es la informática
                industrial como a través de la programación poner a mover las maquinas.
            </p>
            <h3 class="subtitulos">¿Cómo podemos participar en una investigación?</h3>
            <p> En una investigación puede ser asociado al semillero de investigación como les decía antes y ese
                semillero tiene que tener un proyecto de investigación tiene que tener un proyecto de investigación ahí
                pegado listo entonces ahora ustedes pueden decir pueden comunicársele a su instructores decirle venga
                instructor yo quiero participar o quiero que nosotros armemos un proyecto de investigación y el
                instructor e para que se lo presentemos a sennova entonces que nazca desde los instructores con el
                instructor y que el instructor lo presente aquí a sennova porque el instructor porque el instructor es
                el directo responsable del proyecto y tiene que ir acompañado de los aprendices cierto, porque los
                proyectos están también ligados a la destinación de recursos entonces el instructor tiene que responder
                por los recursos por eso es que es importante la unión entre el instructor y los aprendices entonces así
                participan los aprendices también participan como en las jornadas de divulgación e nosotros manejas
                muchas jornadas de divulgación con las empresas y lo hemos hecho mucho con el ambiente de
                teleinformática entonces cuando las empresas vienen y me dicen venga yo e quiero la oportunidad de
                conseguir presupuesto por sennova mi empresa tuvo la oportunidad de ser ganadora de una convocatoria de
                innovación para las empresas entonces yo le voy a transmitir a los aprendices como lo conseguí como hice
                el proyecto como lo desarrolle estas fueron las metodologías que emplee estos fueron los desarrollos
                entonces ahí también se está siendo participe a los aprendices de los de como de como el conocimiento se
                aplica y se genera valor y genera riqueza en las empresas.</p>
            <h3 class="subtitulos">¿Existe alguna limitación o razón para no desarrollar una investigación?</h3>
            <p>Ninguna no hay ninguna limitación no hay ninguna razón e porque, porque es una razón porque es una
                función natural del ser humano el ser humano vuelvo y repito a todos los seres humanos nos gusta
                aprender nos gusta conocer nos gusta e lo desconocido nos gusta mirar otras cosas diferentes entonces e
                no se le puede castrar un intelecto a la personas no se le puede castrar la capacidad de aprender a las
                personas todos queremos aprender todos los días y uno aprende hasta el último día de su existencia el
                que no aprende hasta el último día de su vida está muerto en vida y puede ser una persona joven.
            </p>
            <h3 class="subtitulos">¿En qué eventos se dan a conocer los proyectos e investigaciones?</h3>
            <p>Correcto mire nosotros hemos desarrollado cuatro congresos internacionales de investigación e dónde han
                venido a científicos reconocidos por ejemplo Jorge Reines sabe quién es Jorge Reines? el inventor del
                marcapasos que ha salvado a más de 40 millones de personas tal vez el común de la sociedad colombiana no
                lo conoce pero sí podrían conocerlo políticos tradicionales, ladrones o delincuentes pero este tipo de
                personas no los conocen hemos traído el director de Pfizer a nivel mundial, hemos traído a hemos traído
                a investigadores italianos, norteamericanos, chilenos para qué? para que a través de ellos vean que la
                investigación la podemos hacer todos que la investigación es disciplina a rigor es interesarse por los
                demás es construir sociedad es construir conocimiento entonces lo hacemos a través de congresos
                internacionales lo hacemos a través de transparencias de conocimientos que lo hacen las empresas lo
                llevamos a los aprendices a la red de semilleros de investigación de Risaralda donde nuestros aprendices
                compiten con universidades de todo el eje cafetero y, y de una manera irracional nuestros aprendices
                tienen mejor nivel que muchos estudiantes de las universidades porque nosotros hacemos educación
                superior, las universidades hacen educación superior cuando ofrecen tecnólogos y profesionales nosotros
                hacemos educación superior cuando hacemos e tecnólogos entonces esa formación en educación superior
                nosotros la ponemos a competir y nos comparamos con las universidades nosotros somos un nosotros somos e
                afortunados de tener abundancia de tener riqueza nosotros tenemos mayores desarrollos tecnológicos que
                las universidades se lo digo con conocimiento de causa la tecnología que hay en el sena no la hay los
                equipos que hay en el sena no los hay las capacidades que hay acá no las hay nosotros podemos mandar y
                hemos mandado aprendices a Brasil a china, Alemania a España a chile mientras que en las universidades
                cuando mandan un aprendiz con todos los gastos pagos cuando, cuando mandan un estudiante con todos los
                gastos pagos lo único que la única vez que hemos hecho e que hemos visto una cosa así es por ejemplo
                hace dos años si hace dos años y medio con la universidad tecnológica la universidad enviamos
                estudiantes a Brasil con el sena e para participar en forma de losada de Brasil para participar en
                diferentes universidades del mundo por Colombia estaba la universidad tecnológica y estaba el sena e
                llevamos un carro de carreras listo nosotros mandamos los aprendices en avión con todos los gastos pagos
                los mandamos con todo y mandamos instructores, la universidad mando los estudiantes en un carro que
                también es una experiencia buena pero, puede y pero no era las mismas condiciones nosotros los mandamos
                con mayores condiciones entonces nosotros tenemos concurso de world script ¿en dónde las universidades
                tienen concursos internacionales? Hace poco los aprendices del Sena estuvieron en Alemania ¿en dónde la
                universidad hace eso? los equipos cuando yo he sido profesor de la universidad yo he traído a los
                muchachos acá porque en la universidad no hay eso a nosotros, nosotros tenemos que hacernos fuertes en
                la rigurosidad en la parte de abstracción en la rigurosidad matemática en las ciencias en las ciencias
                básicas ahí tenemos que fortalecernos muchos más pero en las capacidades que tiene el sena son inmensas
                comparadas con cualquier universidad privada e en investigación nosotros somos muy superiores excepto
                pues en la universidad pública en la tecnológica donde hay muchos grupos de investigaciones y llevan
                muchos años de ventaja pero sin embargo ellos vienen a hacer proyectos y a desarrollar proyectos con
                nosotros porque no tienen las capacidades que nosotros tenemos .</p>
            <h3 class="subtitulos">¿Qué proceso debe de hacer un aprendiz para participar en un semillero?</h3>
            <p> Bueno, un aprendiz para participar en un semillero debe hablar con su instructor y decirle señor
                instructor en el ambiente hay un semillero por favor yo quiero entrar al semillero de investigación que
                tengo que hacer, hay algún proyecto asociado si lo hay entonces el instructor lo entra al semillero
                de…que el instructor le coloque actividades al semillero cierto o si no hay entonces empezar a plantear
                el proyecto de investigación mire que bueno que los aprendices viniera y dijera venga que bueno
                adelantar un proyecto de investigación y se plantea entonces uno recoge a sus instructores entonces
                venga los muchachos nos están jalando que hay que investigar que tenemos que generar nuevo conocimiento
                que tenemos que generar buenas cosas ,entonces venga pues saquemos esto adelante mire que son cosas muy
                sencillas que no nos cuesta un peso y que lo único que nos cuesta es mover el intelecto ,saber que es.
            </p>
            <h3 class="subtitulos">¿En qué horarios se puede acceder a los servicios?</h3>
            <p> Desde 7.30 am a 1:00 pm y de 2:00 pm a 5:00 de la tarde.</p>
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
        <script src="../Inicio/Scripts/inactividad.js"></script>
        <script src="https://kit.fontawesome.com/a7f71e63d5.js" crossorigin="anonymous"></script> <!--Libreria de iconos de Font Awesome-->
        <script src="Scripts/senova.js"> </script> <!--Scripts Generales -->
        <script src="ScriptsGenerales/accesibilidad.js"></script><!--Scripts Accesibilidad-->
</body>
</html>
=======
<?php include '../../Proyecto_SendApp_2024/bases/header.php' ?> <!--Llamo el archivo base-->

<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="Styles/senova.css"> <!-- Estilos de Senova -->
    <link rel="stylesheet" href="../Styles/header.css"> <!--EStilos del header  -->
    <link rel="stylesheet" href="../Styles/footer.css"> <!-- Estilos del footer -->
<?php endblock() ?>

    <?php startblock('contenido') ?>

    <div class="sennova">
        <section>
            <h1 class="titulo">SENNOVA</h1>
            <article><img src="img/LogosSena-img/logo SENNOVA.jpg" alt="logosennova"></article>
            
            <h3 class="subtitulos">¿Que es SENNOVA?</h3>
            <p>Sennova es el sistema de investigación, innovación y desarrollo tecnológico que tiene el SENA el cual es
                una estrategia nacional que está presente en los 119 centros del país.
            </p>
            <h3 class="subtitulos">¿Cuáles son los requisitos para acceder a los servicios?</h3>
            <p>Mas que requisitos cual es la voluntad y el compromiso que tienen que tener los aprendices y lo
                instructores, primero que les guste la investigación porque la investigación es un gusto, es un placer
                no es impuesto entonces a todos los seres humanos nos gusta aprender y conocer cierto e el cómo aprender
                y el cómo conocemos de eso se trata estar de llevar el conocimiento y divulgar el conocimiento hacia los
                demás entonces una de las acciones que tiene que tener los aprendices es como entrar en este e como
                entrar a los semilleros de investigación, para entrar a los semilleros de investigación los aprendices
                tienen que estar asociados a un proyecto de investigación ese proyecto de investigación tiene que ser
                representado y jalonado por los instructores del área en su caso por los instructores del área de
                teleinformática o e como el área de teleinformática tiene tantas áreas puede ser de multimedia,
                audiovisuales e de infraestructura ahí pueden entrar los aprendices o pueden apoyar otros proyectos de
                otros de otras ambientes de formación por ejemplo construcción, en construcción se requiere la parte de
                multimedia se requiere la parte de programación porque e afortunadamente e sistemas, teleinformática ,
                comunicaciones e teleinformática es transversal a todas las áreas del centro si usted quiere hacer un
                proyecto social y si usted quiere divulgar la información lo hace a través del sistema cierto por eso es
                la importancia de esa en el centro y en el mundo ósea el mundo se está moviendo por dos, dos centros en
                el mundo por dos centros dos centros que es la parte de automatización y la parte de la informática y
                ahora el mundo y el país está entrando en algo que todavía estamos apenas entrando que es la informática
                industrial como a través de la programación poner a mover las maquinas.
            </p>
            <h3 class="subtitulos">¿Cómo podemos participar en una investigación?</h3>
            <p> En una investigación puede ser asociado al semillero de investigación como les decía antes y ese
                semillero tiene que tener un proyecto de investigación tiene que tener un proyecto de investigación ahí
                pegado listo entonces ahora ustedes pueden decir pueden comunicársele a su instructores decirle venga
                instructor yo quiero participar o quiero que nosotros armemos un proyecto de investigación y el
                instructor e para que se lo presentemos a sennova entonces que nazca desde los instructores con el
                instructor y que el instructor lo presente aquí a sennova porque el instructor porque el instructor es
                el directo responsable del proyecto y tiene que ir acompañado de los aprendices cierto, porque los
                proyectos están también ligados a la destinación de recursos entonces el instructor tiene que responder
                por los recursos por eso es que es importante la unión entre el instructor y los aprendices entonces así
                participan los aprendices también participan como en las jornadas de divulgación e nosotros manejas
                muchas jornadas de divulgación con las empresas y lo hemos hecho mucho con el ambiente de
                teleinformática entonces cuando las empresas vienen y me dicen venga yo e quiero la oportunidad de
                conseguir presupuesto por sennova mi empresa tuvo la oportunidad de ser ganadora de una convocatoria de
                innovación para las empresas entonces yo le voy a transmitir a los aprendices como lo conseguí como hice
                el proyecto como lo desarrolle estas fueron las metodologías que emplee estos fueron los desarrollos
                entonces ahí también se está siendo participe a los aprendices de los de como de como el conocimiento se
                aplica y se genera valor y genera riqueza en las empresas.</p>
            <h3 class="subtitulos">¿Existe alguna limitación o razón para no desarrollar una investigación?</h3>
            <p>Ninguna no hay ninguna limitación no hay ninguna razón e porque, porque es una razón porque es una
                función natural del ser humano el ser humano vuelvo y repito a todos los seres humanos nos gusta
                aprender nos gusta conocer nos gusta e lo desconocido nos gusta mirar otras cosas diferentes entonces e
                no se le puede castrar un intelecto a la personas no se le puede castrar la capacidad de aprender a las
                personas todos queremos aprender todos los días y uno aprende hasta el último día de su existencia el
                que no aprende hasta el último día de su vida está muerto en vida y puede ser una persona joven.
            </p>
            <h3 class="subtitulos">¿En qué eventos se dan a conocer los proyectos e investigaciones?</h3>
            <p>Correcto mire nosotros hemos desarrollado cuatro congresos internacionales de investigación e dónde han
                venido a científicos reconocidos por ejemplo Jorge Reines sabe quién es Jorge Reines? el inventor del
                marcapasos que ha salvado a más de 40 millones de personas tal vez el común de la sociedad colombiana no
                lo conoce pero sí podrían conocerlo políticos tradicionales, ladrones o delincuentes pero este tipo de
                personas no los conocen hemos traído el director de Pfizer a nivel mundial, hemos traído a hemos traído
                a investigadores italianos, norteamericanos, chilenos para qué? para que a través de ellos vean que la
                investigación la podemos hacer todos que la investigación es disciplina a rigor es interesarse por los
                demás es construir sociedad es construir conocimiento entonces lo hacemos a través de congresos
                internacionales lo hacemos a través de transparencias de conocimientos que lo hacen las empresas lo
                llevamos a los aprendices a la red de semilleros de investigación de Risaralda donde nuestros aprendices
                compiten con universidades de todo el eje cafetero y, y de una manera irracional nuestros aprendices
                tienen mejor nivel que muchos estudiantes de las universidades porque nosotros hacemos educación
                superior, las universidades hacen educación superior cuando ofrecen tecnólogos y profesionales nosotros
                hacemos educación superior cuando hacemos e tecnólogos entonces esa formación en educación superior
                nosotros la ponemos a competir y nos comparamos con las universidades nosotros somos un nosotros somos e
                afortunados de tener abundancia de tener riqueza nosotros tenemos mayores desarrollos tecnológicos que
                las universidades se lo digo con conocimiento de causa la tecnología que hay en el sena no la hay los
                equipos que hay en el sena no los hay las capacidades que hay acá no las hay nosotros podemos mandar y
                hemos mandado aprendices a Brasil a china, Alemania a España a chile mientras que en las universidades
                cuando mandan un aprendiz con todos los gastos pagos cuando, cuando mandan un estudiante con todos los
                gastos pagos lo único que la única vez que hemos hecho e que hemos visto una cosa así es por ejemplo
                hace dos años si hace dos años y medio con la universidad tecnológica la universidad enviamos
                estudiantes a Brasil con el sena e para participar en forma de losada de Brasil para participar en
                diferentes universidades del mundo por Colombia estaba la universidad tecnológica y estaba el sena e
                llevamos un carro de carreras listo nosotros mandamos los aprendices en avión con todos los gastos pagos
                los mandamos con todo y mandamos instructores, la universidad mando los estudiantes en un carro que
                también es una experiencia buena pero, puede y pero no era las mismas condiciones nosotros los mandamos
                con mayores condiciones entonces nosotros tenemos concurso de world script ¿en dónde las universidades
                tienen concursos internacionales? Hace poco los aprendices del Sena estuvieron en Alemania ¿en dónde la
                universidad hace eso? los equipos cuando yo he sido profesor de la universidad yo he traído a los
                muchachos acá porque en la universidad no hay eso a nosotros, nosotros tenemos que hacernos fuertes en
                la rigurosidad en la parte de abstracción en la rigurosidad matemática en las ciencias en las ciencias
                básicas ahí tenemos que fortalecernos muchos más pero en las capacidades que tiene el sena son inmensas
                comparadas con cualquier universidad privada e en investigación nosotros somos muy superiores excepto
                pues en la universidad pública en la tecnológica donde hay muchos grupos de investigaciones y llevan
                muchos años de ventaja pero sin embargo ellos vienen a hacer proyectos y a desarrollar proyectos con
                nosotros porque no tienen las capacidades que nosotros tenemos .</p>
            <h3 class="subtitulos">¿Qué proceso debe de hacer un aprendiz para participar en un semillero?</h3>
            <p> Bueno, un aprendiz para participar en un semillero debe hablar con su instructor y decirle señor
                instructor en el ambiente hay un semillero por favor yo quiero entrar al semillero de investigación que
                tengo que hacer, hay algún proyecto asociado si lo hay entonces el instructor lo entra al semillero
                de…que el instructor le coloque actividades al semillero cierto o si no hay entonces empezar a plantear
                el proyecto de investigación mire que bueno que los aprendices viniera y dijera venga que bueno
                adelantar un proyecto de investigación y se plantea entonces uno recoge a sus instructores entonces
                venga los muchachos nos están jalando que hay que investigar que tenemos que generar nuevo conocimiento
                que tenemos que generar buenas cosas ,entonces venga pues saquemos esto adelante mire que son cosas muy
                sencillas que no nos cuesta un peso y que lo único que nos cuesta es mover el intelecto ,saber que es.
            </p>
            <h3 class="subtitulos">¿En qué horarios se puede acceder a los servicios?</h3>
            <p> Desde 7.30 am a 1:00 pm y de 2:00 pm a 5:00 de la tarde.</p>


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
                
        <script src="https://kit.fontawesome.com/a7f71e63d5.js" crossorigin="anonymous"></script> <!--Libreria de iconos de Font Awesome-->
        <script src="Scripts/senova.js"> </script> <!--Scripts Generales -->
        <script src="ScriptsGenerales/accesibilidad.js"></script><!--Scripts Accesibilidad-->
>>>>>>> 120f7db420390c7f4d7149f94688f0674755c5d2:senova/index.php
