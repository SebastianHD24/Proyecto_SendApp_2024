
<?php include '../bases/estructura-base.php' ?>

<?php startblock('links-styles') ?>
    <link rel="stylesheet" href="../../Proyecto_SendApp_2024/senova/senova.css"> <!-- Estilos de Senova -->
<?php endblock() ?>

<?php startblock('contenido') ?>

    <section class="Contenido">
        <div class="orden">
            <div class="Primera_Impresion">
                <div class="contn">

                    <h1 class="titulo">SENNOVA</h1>

                    <h2 class="subtitulos">¿Que es SENNOVA?</h2>

                    <p class="parrafo">Sennova es el sistema de investigación, innovación y desarrollo tecnológico que tiene el SENA el cual es una estrategia nacional que está presente en los 119 centros del país.</p>
                    <hr>
                    <p class="p">El horario de atención es de 7:30 am a 1:00 pm y de 2:00 pm a 5:00 pm. </p>
                </div>
                    <div class="imagen">
                        <img src="img/logo_SENNOVA.jpg" alt="">
                    </div>
            </div>

            <button class="button">Reservar cita</button>
        </div>

            <div class="tarjeta" ">

                <div class="tarj-img">
                    <img src="img/5.png" alt="">
                </div>

                <div class="contenido_tarjeta">

                    <h2>¿Cuáles son los requisitos para acceder a los servicios?</h2>

                    <p class="contenido-corto">Se subraya la necesidad de una disposición y compromiso intrínsecos por parte tanto de los aprendices como de los instructores. Es esencial que exista una afinidad hacia la investigación, ya que esta debe ser concebida como un ejercicio gratificante y de placer intelectual. La inclinación innata por el aprendizaje y la adquisición de conocimiento es un atributo inherente a la condición humana.En este sentido, es crucial comprender los mecanismos y procesos de aprendizaje, así como también su difusión hacia terceros. Una de las acciones primordiales para los aprendices es el ingreso a los semilleros de investigación, los cuales requieren que estén vinculados a proyectos de investigación dirigidos y respaldados por instructores especializados en áreas específicas, como la teleinformática.</p>

                    <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                    <p class="contenido-expansivo"> Esta disciplina abarca múltiples subdominios, tales como multimedia, audiovisuales e infraestructura, lo cual brinda oportunidades de participación a los aprendices o el apoyo a otros proyectos en diversos ámbitos de formación. Por ejemplo, en el ámbito de la construcción, donde se demanda la integración de aspectos multimediales y de programación. La teleinformática, afortunadamente, presenta una naturaleza transversal que abarca todas las áreas del centro educativo, lo que facilita la ejecución de proyectos sociales y la difusión de información mediante sistemas establecidos. Esto subraya la relevancia de esta disciplina tanto a nivel institucional como global, dado el constante avance hacia la automatización y la informática industrial, donde la programación juega un papel fundamental en la operación de maquinaria.</p>

                    <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>

                </div>

            </div>

            <div class="tarjeta">

                <div class="tarj-img">
                    <img src="img/1.png">
                </div>

                <div class="contenido_tarjeta">

                    <h2>¿Cómo podemos participar en una investigación?</h2>

                    <p class="contenido-corto">En el contexto de una investigación, los aprendices pueden integrarse en un semillero de investigación. Este semillero debe contar con un proyecto de investigación bien definido y estructurado. Una vez establecido, los aprendices pueden comunicarse con sus instructores para expresar su interés en participar o proponer la creación de un nuevo proyecto de investigación. El instructor, a su vez, debe presentar este proyecto ante el Sistema de Investigación, Desarrollo Tecnológico e Innovación (SENNOVA), ya que es el responsable directo del proyecto y debe asegurar la asignación adecuada de recursos.</p>

                    <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                    <p class="contenido-expansivo">Esta colaboración entre instructor y aprendices es crucial, ya que los proyectos suelen estar vinculados a la asignación de recursos y el instructor debe garantizar su correcta gestión. Por lo tanto, la participación activa de los aprendices se refleja también en eventos de divulgación, como las jornadas realizadas con empresas en el ámbito de la teleinformática. Durante estas jornadas, las empresas expresan su interés en obtener financiamiento a través de SENNOVA, y transmiten a los aprendices sus experiencias en la obtención de fondos para proyectos de innovación. De esta manera, los aprendices son partícipes del proceso de aplicación del conocimiento en la generación de valor y riqueza en el ámbito empresarial.</p>

                    <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>

                </div>

            </div>

            <div class="tarjeta">

                <div class="tarj-img">
                    <img src="img/2.png" >
                </div>

                <div class="contenido_tarjeta">

                    <h2>¿Existe alguna limitación o razón para no desarrollar una investigación?</h2>

                    <p class="contenido-corto"> No existen limitaciones ni restricciones, ya que el impulso hacia el aprendizaje es intrínseco al ser humano. Es una función natural que todos los individuos poseen. La curiosidad y el deseo de explorar lo desconocido son inherentes a nuestra condición humana. No se puede suprimir la capacidad intelectual ni el deseo de aprender de las personas.</p>

                    <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                    <p class="contenido-expansivo">Todos anhelamos adquirir conocimientos constantemente, independientemente de la edad o etapa de la vida en la que nos encontremos. Aquel que deja de aprender, incluso en el último día de su existencia, se encuentra estancado y privado de una vida plena. Este deseo de aprendizaje es universal y no conoce límites ni barreras, y puede observarse en personas de todas las edades y condiciones.</p>

                    <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>

                </div>

            </div>

            <div class="tarjeta">

                <div class="tarj-img">
                    <img src="img/3.png" >
                </div>

                <div class="contenido_tarjeta">

                    <h2>¿En qué eventos se dan a conocer los proyectos e investigaciones?</h2>

                    <p class="contenido-corto">Hemos organizado cuatro congresos internacionales de investigación, en los cuales han participado científicos de renombre, como Jorge Reines, reconocido por ser el inventor del marcapasos, dispositivo que ha salvado la vida de más de 40 millones de personas. Aunque es posible que el público general no esté familiarizado con estos nombres, son figuras relevantes en el ámbito científico. También hemos recibido la visita del director de Pfizer a nivel mundial, así como investigadores de Italia, Estados Unidos y Chile. El propósito de estas iniciativas es demostrar que la investigación es una disciplina accesible para todos, basada en el rigor y el interés por el progreso social y el conocimiento.</p>

                    <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                    <p class="contenido-expansivo">Utilizamos estos congresos internacionales y la transmisión de conocimientos por parte de empresas para involucrar a nuestros aprendices en la red de semilleros de investigación de Risaralda. En esta red, nuestros estudiantes compiten con universidades de todo el eje cafetero y, en muchos casos, demuestran un nivel superior de competencia. A pesar de que el enfoque tradicional de las universidades se centra en la formación de tecnólogos y profesionales, en el SENA consideramos que nuestra formación también es educación superior, ya que promovemos la excelencia en tecnólogos. Hemos tenido la oportunidad de comparar nuestras capacidades tecnológicas con las de las universidades y podemos afirmar con certeza que el SENA cuenta con recursos y equipamiento superiores. Hemos enviado aprendices a países como Brasil, China, Alemania, España y Chile, con todos los gastos pagos, mientras que las universidades no tienen la misma capacidad para proporcionar estas oportunidades. En el SENA, también organizamos concursos internacionales y brindamos a nuestros aprendices experiencias únicas, como participar en la Feria de la Educación Superior de Brasil. Aunque reconocemos la fortaleza de las universidades públicas, como la Universidad Tecnológica, en investigación, estas instituciones también colaboran con nosotros debido a nuestras capacidades tecnológicas y de investigación superiores. En resumen, el SENA se destaca en investigación y desarrollo tecnológico, y nuestra colaboración con universidades demuestra nuestro compromiso con la excelencia en la educación y la innovación</p>

                    <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>

                </div>

            </div>
            <div class="tarjeta" >

                <div class="tarj-img">
                    <img src="img/4.png" >
                </div>

                <div class="contenido_tarjeta">

                    <h2>¿Qué proceso debe de hacer un aprendiz para participar en un semillero?</h2>

                    <p class="contenido-corto">Para un aprendiz que desee participar en un semillero de investigación, el proceso implica comunicarse con su instructor y expresar su interés en unirse al semillero. Debe dirigirse al instructor y manifestar su deseo de formar parte del proyecto de investigación. Si el semillero ya cuenta con un proyecto en curso, el instructor puede integrar al aprendiz en el equipo. En caso de que no haya un proyecto establecido, el aprendiz y el instructor pueden colaborar en la formulación y desarrollo de un nuevo proyecto de investigación. Es importante que el instructor guíe al semillero y proponga actividades pertinentes.</p>

                    <button class="leerMas" onclick="cambiarColor(this)">Leer más</button>

                    <p class="contenido-expansivo">Los aprendices también pueden tomar la iniciativa de proponer proyectos de investigación y buscar el apoyo de sus instructores para llevarlos a cabo. Esta interacción entre aprendices e instructores fomenta un ambiente de colaboración y motivación para generar nuevo conocimiento. Además, este proceso es accesible y no implica costos económicos significativos, sino más bien un compromiso intelectual y de trabajo en equipo.</p>

                    <button class="leerMenos" style="display: none;" onclick="cambiarColor(this)">Leer menos</button>

                </div>

            </div>

    </section>

    <script src="Scripts/senova.js"> </script>
<?php endblock() ?>