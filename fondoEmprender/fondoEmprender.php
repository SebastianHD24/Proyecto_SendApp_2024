<?php include '../../Proyecto_SendApp_2024/bases/estructura-base.php' ?> <!--Llamo el archivo base-->

<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="../../Proyecto_SendApp_2024/fondoEmprender/fondoEmprender.css"> <!-- Estilos del Fondo Emprender -->
    <title>Fondo Enprender </title>
<?php endblock() ?>


<?php startblock('contenido') ?>
<section class="Contenido">
        <div class="orden">
            <div class="Primera_Impresion">
                <div class="contn">

                    <h1 class="titulo">Fondo Emprender</h1>

                    <h2 class="subtitulos">¿Qué hace Fondo Emprender?</h2>

                    <p class="parrafo">Nos dedicamos a brindar asesoria gratuita a emprendedores y empresarios para lograr que tengan un plan que les permita ejecutar sus ideas y adiconalmente vincularlos y articularlos con otros actores de la red de emprendimiento de la región y ayudarlos a acceder a los beneficios que las diferentes entidades prestan.</p>
                    <hr>
                    <p><strong>Horario de atención:</strong>Lunes a Viernes de 7:30 AM a 12:00 PM y de 1:00 PM a 5:00 PM</p>
                </div>
                        <div class="imagen">
                            <img src="../fondoEmprender/img/img-content/IMG_5371.jpg" alt="foto1">
                        </div>
            </div>
            <button class="button">Reservar cita</button>
        </div>                    
    <div class="contenedor-esferas">
            <div class="esfera esfera-1">
                <h3 class="subtitulo">Proposito</h3>
                    <p class="p">Nuestro proposito es financiar con capital semilla empresas que generen desarrollo económico y tecnológico en 
                    las regiones que aporten tambien a la formalización general.</p>
            </div>

            <div class="esfera esfera-2">
                <h3 class="subtitulo">Servicios</h3>
            
                    <ol class="l_ordenada">
                        <li>Asesoria para la creación de empresa con recursos propios o con recursos del fondo.</li>
                        <li>Acompañar la puesta en marcha a partir del registro de las empresas en la cámara de comercio.</li>
                        <li>Orientamos en el fortalecimiento empresarial.</li>
                    </ol>
            </div>
            <div class="esfera esfera-3">
                <h3 class="subtitulo">¿Qué proyectos aceptamos?</h3>
            
                    <p class="p">Aceptamos proyectos del área agricola, agropecuaria, y Agroindustria. Los proyectos pueden ser 
                    de un nuevo producto, mejora en el proceso o modelo de negocio.</p>
            </div>
            <div class="esfera esfera-4">
                <h3 class="subtitulo">Requisitos para el apoyo de un proyecto</h3>
            
                    <ol class="l_ordenada">
                        <li>El emprendedor o empresario deben tener en su proyecto un factor de innovación.</li>
                        <li>Que su proyecto sea viable y ya haya sido validado en el mercado.</li>
                    </ol>
            </div>
    </div>
    <div class="tarjeta">

            <div class="tarj-img">
                <img src="img/1.png" >
            </div>

        <div class="contenido_tarjeta">

                <h2>¿Qué ayudas ofrece Fondo Emprender?</h2>

                <p class="contenido-corto"> Asesoramos de manera personalizada y ayudamos al emprendedor con formación a ejecutar su idea con otras areas del SENA como Tecno Parque y Tecno Acedemia con el proposito de mejorar su producto de manera viable o a incorporar un factor de innovación dentro de su proyecto para acceder a recursos que ofrece el SENA y asi lograr una mayor aceptación de su prodocto.</p>

                <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                <p class="contenido-expansivo">Cuando el emprensario o emprendedor saca su producto al mercado, nosotros los acompañamos. Apoyamos emprendimientos en áreas de tecnología, Agroindustria y otras áreas de la economía.</p>

                <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>
        </div>
    </div>
        
    <div class="tarjeta">

            <div class="tarj-img">
                <img src="img/1.png" >
            </div>

        <div class="contenido_tarjeta">

                <h2>¿Qué cantidad de presupuesto ofrece Fondo Emprender?</h2>

                <p class="contenido-corto"> El monto de los recursos a los que puede acceder un emprendedor depende de la cantidad de empleos que genere, si generan hasta 3 empleos pueden acceder hasta 80 salarios minimos legales vigentes, si genera entre 4 y 5 empleos pueden acceder a 150 salarios minimos y a partir de 6 o más empleos, el maximo es de 180 maximo salarios minimos.</p>

                <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                <p class="contenido-expansivo">Estos limites salen en cada convocatoria y pueden variar. Ya el emprendedor decide si aplica o no.</p>

                <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>
        </div>
    </div>
    <div class="Contenedor">   
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
        <div class="tarjetas-contenedor">
            <div class="tarjeta">

                    <div class="tarj-img">
                        <img src="img/1.png" >
                    </div>

                <div class="contenido_tarjeta">

                    <h2>¿Cuanto tarda entregar un proyecto?</h2>

                    <p class="contenido-corto"> Se estima que una persona tarda 3 meses pasando los filtros y llegando a la formulación del proyecto teniendo como partida que cumple con todos los requisitos tanto de emprendedor como los del proyecto, tambien depende el conocimiento y el avance de la idea de negocio que tenga cada emprededor lo que aumentará o disminuirá el tiempo. </p>

                </div>
            </div>
            <div class="tarjeta">

                    <div class="tarj-img"><img src="img/1.png" ></div>

                <div class="contenido_tarjeta">

                            <h2>¿Cuanto tarda una respuesta de aceptación o rechazo de un proyecto?</h2>

                            <p class="contenido-corto">Esa es la evaluación del plan de negocios y es un proceso que se realiza a nivel nacional y esta dispuesto en la plataforma de fondo emprender, el 90% de la evaluación se realiza a través de una inteligencia artificial y el otro 10% humano, Eso a incrementado los tiempos de respuesta y aproximadamente en un mes el emprendedor ya tiene respuesta si su proyecto es viable o no.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="tarjeta">

            <div class="tarj-img">
                <img src="img/1.png" >
            </div>

        <div class="contenido_tarjeta">

                <h2>¿El aprendiz debe regresar el dinero que usó si fracasa su proyecto?</h2>

                <p class="contenido-corto"> Si el proyecto es exitoso y se cumplen los indicadores que se establecen en la formulación del plan de negocio en el inicio, se le condonan y ese es el capital semilla y de ahi en adelante el emprendedor sigue con su empresa.</p>

                <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                <p class="contenido-expansivo">En caso de que fracase se supone que deben regresar los recursos que hayan recibido, pero por eso son los filtros y el proceso 
                de asesoria que garantiza si el proyecto no es sostenible y no tiene rentabilidad pues no avanza en la formulación y por ende no aplica a las convocatorias. Entonces los proyectos que son formulados, pasan los filtros y acceden a los recursos, el 90% son condonados.</p>

                <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>
        </div>
    </div>
        
    <div class="tarjeta">

            <div class="tarj-img">
                <img src="img/1.png" >
            </div>

        <div class="contenido_tarjeta">

                <h2>¿Cada cuanto tiempo se deben mostrar avances del proyecto?</h2>

                <p class="contenido-corto">Despues de ser aprovado, el proyecto debe ser priorizado de acuerdo a los primeros proyectos que alcanzan el recurso, Cuando estas dos condiciones se cumplen se inicia la puesta en marcha y los tiempos no estan definidos porque dependen del operar quien es el encargado de asignar la interventoria
                y si continua el acompañamiento como orientador.</p>

                <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                <p class="contenido-expansivo">Las visitas por parte de los orientadores se realizan cada mes para hacer seguimiento técnico, operativo, brindar apoyo y acompañamiento de las metas que se han establecido con la interventoria. La interventoria hace 4 visitas al año cada 3 meses para hacer seguimiento a los avances en los indicadores.</p>

                <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>
        </div>
    </div>
    <div class="tarjeta">

            <div class="tarj-img">
                <img src="img/1.png" >
            </div>

        <div class="contenido_tarjeta">

                <h2>¿Qué servicios ofrecemos a los aprendices que hacen una unidad productiva familiar?</h2>

                <p class="contenido-corto"> Ofrecemos asesoria para la creación de empresacon otras fuentes de financiación o recursos propios, los podemos ayudar a mejorar toda la parte administrativa y que esa unidad productiva familiar pueda crecer y formalizarse, formalizar el empleo de ese aprendiz que a estado liderando y si se identifica un aspecto innovador poder pasar el proceso de creacion de empresa con recursos de fondo emprender.</p>

                <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                <p class="contenido-expansivo">Recomendamos a los aprendices que tienen estas unidades productivas familiares, acercarsen al centro de desarrollo empresarial para su crecimiento, ampliación o la generación de sus ingresos personales.</p>

                <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>
        </div>
    </div>
            <script src="fondoEmprender.js"></script>
<?php endblock() ?>