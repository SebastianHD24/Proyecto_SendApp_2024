<?php include('../bases/header.php') ?>

    <?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" type="text/css" href="Styles/tecnologicos.css"> <!--Estilos de servicios Tecnológicos-->
    <?php endblock() ?>

    <?php startblock('contenido') ?>
    <div class="sennova">
        <section>
            <h1 class="titulo">Servicios Tecnologicos</h1>
            <article><img src="img pagina principal/logo SENNOVA.jpg" alt="logosennova"></article>

            <h3 class="subtitulos">¿Qué son los servicios tecnológicos</h3>
            <p>Bueno, los servicios tecnológicos son proyectos que dependen de la línea de imas de matching que tiene el
                SENA como estrategia para fortalecimiento de los productos de investigación, innovación y desarrollo
                tecnológico, servicios tecnológicos está adherido a la parte directa de e desarrollo tecnológico y con
                los productos que sacamos de aquí de los laboratorios contribuimos también al registro calificado de los
                tecnólogos e que e se forman dentro del centro de formación en la líneas específicas que tenemos las
                líneas medulares que tienen adheridas al centro.

            </p>
            <h3 class="subtitulos">¿Qué servicios ofrece?</h3>
            <p> Dentro de los centros hay que tener presente que los laboratorios que están adheridos a los servicios
                tecnológicos deben de cumplir unas necesidades cierto? o deben de cumplir con unos requisitos
                específicos establecidos en los lineamientos de SENNOVA, lo primero es que por ejemplo los servicios no
                pueden ser competencia de los privados y deben de cubrir necesidades específicas de los sectores
                productivos que están asociados a líneas medulares del centro entonces nosotros dentro de las líneas
                tenemos las son metalmecánica y construcción y en eso nuestros laboratorios es fuerte actualmente
                nosotros tenemos un laboratorio o dos laboratorios que hacen caracterizaciones mecánicas y dimensionales
                para productos de infraestructura de concreto
                barras curvadas y mallas electrosoldadas caracterizamos mecánicamente y físicamente y dimensionalmente
                esos elementos que son utilizados en infraestructura y que son digamos de carácter obligatorio en e
                requerimientos del ministerio de industria y comercio y turismo.

            </p>
            <h3 class="subtitulos">¿Quiénes pueden acceder a servicios tecnológicos?</h3>
            <p> Los servicios están abiertos a cualquier persona natural, empresa, aprendices, instructores,
                administrativos de la comunidad SENA nosotros como servicios tecnológicos del SENA estamos abiertos a
                que cualquier persona puede venir y acceder a ellos siempre y cuando nuestras capacidades operativas
                permitan hacerlo.
            </p>
            <h3 class="subtitulos">¿Cuáles son los requisitos para acceder a servicios tecnológicos?</h3>
            <p>No hay unos requisitos establecidos que digamos e solamente estas personas pueden hacerlo mm nosotros e
                estamos abiertos y de los aprendices requieren de hacer un trabajo y nosotros tenemos esa capacidad
                operativa, tenemos el equipamiento podamos hacerlo no hay ningún inconveniente.

            </p>
            <h3 class="subtitulos">¿De qué se encarga servicios tecnológicos?</h3>
            <p>
                los servicios tecnológicos como le decía antes pues tiene que cubrir una necesidad específica del sector
                en este caso sector construcción y sector metalmecánico entonces nuestras necesidades buscan suplir
                ensayos de laboratorio para caracterizar materiales con base a las normas en el ntc 2289, ntc 3353, ntc
                5806, ntc 1, ntc 2 todas las empresas que requieran ensayos y que estén adheridas a este, a esos métodos
                o a esos requerimientos pueden acceder a estos servicios y nosotros los préstamos con la mayor e digamos
                calidad técnica porque estamos cubiertos bajo el alcance de acreditación 19 lab 020 ante el organismo
                nacional de acreditación lab la acreditación nos permite definir que somos un laboratorio que cuenta con
                un reconocimiento de tercera parte para admitir resultados que son confiables que es lo más importante
                en todo nuestro proceso.

            </p>
            <h3 class="subtitulos">¿Servicios tecnológicos le puede brindar ayuda a todas las áreas que hay en el CDITI?
                ¿Sí? ¿No?, ¿Cuáles?</h3>
            <p> Si nosotros e digamos que no solo prestamos servicios externos también tenemos una caracterización de
                servicios internos o servicios a través de SENA proveedor SENA y los servicios internos buscan cubrir
                requerimientos que tengas otras áreas en elementos específicos por ejemplo procesos de investigación e
                innovación si hay proyectos de investigación e innovación bajo la línea de SENNOVA que requieran por
                ejemplo ensayos de laboratorio para avanzar en sus ejecuciones técnicas nosotros podemos prestar esos
                servicios de manera gratuita cierto? o por ejemplo hay aprendices que tienen proyectos de emprendimiento
                y esos proyectos de emprendimiento nosotros podemos darle solución estéticas nosotros podemos apoyarlos,
                lo mismo tecno parqués, tecno academia o cualquier necesidad interna que se presente dentro del centro
                de formación y que permita, si por ejemplo dentro del centro de formación se estuviera haciendo una
                construcción y se requieran ensayos pues nosotros estamos en la obligación de prestar esos servicios
                para hacer esa caracterización de maneral imparcial cierto? y que se busquen unos resultados que sean
                fiable.
            </p>
            <h3 class="subtitulos">¿En qué horarios se puede acceder a servicios tecnológicos?</h3>
            <p> Normalmente las solicitudes de los servicios tecnológicos se hacen a través de medios ofimáticos se hace
                una solicitud a través de un correo o en el caso que se requiera digamos una asesoría presencial e se
                pueda acceder en horario de oficina desde las 8 de la mañana hasta las 6 de la tarde en las
                instalaciones del centro en las oficinas de servicios tecnológicos.

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