<?php include '../bases/header.php' ?>

<?php startblock('links-styles') ?>
    <link rel="stylesheet" href="Styles/areas.css">
    <link rel="stylesheet" href="../Styles/footer.css"> <!-- Estilos footer -->
    <link rel="stylesheet" href="../Styles/header.css"> <!-- Estilos header -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Inclusión de la biblioteca jQuery -->
<?php endblock() ?>
    <link rel="stylesheet" href="../Styles/accesibilidad.css"><!--CSS accesibilidad-->
    <link rel="shortcut icon" href="Pangina principal/Img-home/LogosSena-img/LogoSenaVerde.png"> <!-- Icono de la ventana -->
    <title>SendApp</title>


<?php startblock('contenido') ?>
    <!-- Contenedor con las tarjetas de cada area -->
    <div class="content__areas">
        <div class="content__areas-info">
            <p>
                Click sobre el área de la cual deseas conocer más información.
            </p>
        </div>
        <!-- Sección con las tarjetas-->
        <section class="areas__cards">
            <!-- Card 1-->
            <div class="areas__cards-div">
                <a href="../../Proyecto_SendApp_2024/Biblioteca/index.php"> 
                    <article>
                        <img src="Img/Cards-img/bibliotecaVerde.png" alt="Biblioteca Icono">
                    </article>
                    <article>
                        <div class="parrafos">
                            <p>Biblioteca</p>
                            <hr>
                            <p>Library</p>
                        </div>
                    </article>
                </a>
            </div>
            <!-- Card 2 -->
            <div class="areas__cards-div">
                <a href="../../Proyecto_SendApp_2024/senova/index.php"> 
                    <article>
                        <img src="Img/Cards-img/SenovaVerde.png" alt="Senonva Icono">
                    </article>
                    <article>
                        <div class="parrafos">
                            <p>Senova</p>
                            <hr>
                            <p>Senova</p>
                        </div>
                    </article>
                </a>
            </div>
            <!-- Card 3 -->
            <div class="areas__cards-div"> 
                <a href="../../Proyecto_SendApp_2024/TecnoParque/index.php"> <!--De aqui en adelante me falta cambiar las rutas y ponerlas bien-->
                    <article>
                        <img src="Img/Cards-img/TparqueVerde.png" alt="Tenco Parque Icono">
                    </article>
                    <article>
                        <div class="parrafos">
                            <p>Tecno Parque</p>
                            <hr>
                            <p>Tech Park</p>
                        </div>
                    </article>
                </a>
            </div>
            <!-- Card 4 -->
            <div class="areas__cards-div"> 
                <a href="../../Proyecto_SendApp_2024/TecnoAcademia/index.php">
                    <article>
                        <img src="Img/Cards-img/TacademiaVerde.png" alt="Tenco Academia Icono">
                    </article>
                    <article>
                        <div class="parrafos">
                            <p>Tecno Académia</p>
                            <hr>
                            <p>Tech Academic</p>
                        </div>
                    </article>
                </a>
            </div>
            <!-- Card 5 -->
            <div class="areas__cards-div"> 
                <a href="../../Proyecto_SendApp_2024/fondoEmprender/index.php">
                    <article>
                        <img src="Img/Cards-img/EnprenerVerde.png" alt="Fondo Enprender Icono">
                    </article>
                    <article>
                        <div class="parrafos">
                            <p>Fondo Emprender</p>
                            <hr>
                            <p>Entrepreneur Ship Found</p>
                        </div>
                    </article>
                </a>
            </div>
            <!-- Card 6 -->
            <div class="areas__cards-div"> 
                <a href="../../Proyecto_SendApp_2024/FabricaSoftware/index.php">
                    <article>
                        <img src="Img/Cards-img/fabricaVerde.png" alt="Fabrica De Software Icono">
                    </article>
                    <article>
                        <div class="parrafos">
                            <p>Fabrica de Software</p>
                            <hr>
                            <p>Software<br>Factory</p>
                        </div>
                    </article>
                </a>
            </div>
            <!-- Card 7 -->
            <div class="areas__cards-div"> 
                <a href="../../Proyecto_SendApp_2024/Bienestar/index.php">
                    <article>
                        <img src="Img/Cards-img/bienestarVerde.png" alt="Bienestar al Aprendiz Icono">
                    </article>
                    <article>
                        <div class="parrafos">
                            <p>Bienestar Al Aprendiz</p>
                            <hr>
                            <p>Apprentice Wellbeing</p>
                        </div>
                    </article>
                </a>
            </div>
            <!-- Card 8 -->
            <div class="areas__cards-div"> 
                <a href="../../Proyecto_SendApp_2024/serviciosTecnologicos/index.php">
                    <article>
                        <img src="Img/Cards-img/serviciosVerde.png" alt="Servicios Tecnólogicos Icono">
                    </article>
                    <article>
                        <div class="parrafos">
                            <p>Servicios Tecnológicos</p>
                            <hr>
                            <p>Technological Services</p>
                        </div>
                    </article>
                </a>
            </div>
            <!-- Card 9 -->
            <div class="areas__cards-div"> 
                <a href="../../Proyecto_SendApp_2024/relacionesCorporativas/index.php"> 
                    <article>
                        <img src="Img/Cards-img/corporacionVerde.png" alt="Relaciones Corporativas Icono">
                    </article>
                    <article>
                        <div class="parrafos">
                            <p>Ralciones Corporativas</p>
                            <hr>
                            <p>Corporare Relations</p>
                        </div>
                    </article>
                </a>
            </div>
            <!-- Card 10-->
            <div class="areas__cards-div">
                <a href="../../Proyecto_SendApp_2024/coordinaccion/index.php">
                    <article>
                        <img src="Img/Cards-img/coordinaciónverde.png" alt="Coordinación Académica Icono">
                    </article>
                    <article>
                        <div class="parrafos">
                            <p>Coordinación Académica</p>
                            <hr>
                            <p>Academic Cordintation</p>
                        </div>
                    </article>
                </a>
            </div>
            <!-- Card 11 -->
            <div class="areas__cards-div"> 
                <a href="../../Proyecto_SendApp_2024/administracion/index.php">
                    <article>
                        <img src="Img/Cards-img/administracionVerde.png" alt="Administración Educativa Icono">
                    </article>
                    <article>
                        <div class="parrafos">
                            <p>Administración Educativa</p>
                            <hr>
                            <p>Educative Administration</p>
                        </div>
                    </article>
                </a>
            </div>
            <!-- Card 12-->
            <div class="areas__cards-div"> 
                <a href="#">
                    <article>
                        <img src="Img/Cards-img/formacionVerde.png" alt="Programas de Formación Icono">
                    </article>
                    <article>
                        <div class="parrafos">
                            <p>Programas de Formación</p>
                            <hr>
                            <p>Formation Programs</p>
                        </div>
                    </article>
                </a>
            </div>
        </section>
    </div>
<?php endblock() ?>

<script src="../Inicio/Scripts/inactividad.js"></script> <!--Script para manejar la inactividad del usuario-->