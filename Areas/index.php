<?php include '../bases/header.php' ?>

<?php startblock('links-styles') ?>
    <link rel="stylesheet" href="Styles/areas.css">
<?php endblock() ?>

    <title>SendApp</title>

<?php startblock('contenido') ?>
    <!-- Contenedor con las tarjetas de cada area -->
    <div class="content__areas">
        <article class="content__areas-info">
            <p>
                Click sobre el área de la cual deseas conocer más información.
            </p>
        </article>
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
                            <hr>
                            <p>Biblioteca</p>
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
                            <hr>
                            <p>Sennova</p>
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
                            <hr>
                            <p>Tecno Parque</p>
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
                            <hr>
                            <p>Tecno Académia</p>
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
                            <hr>
                            <p>Fondo Emprender</p>
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
                            <hr>
                            <p>Fábrica de Software</p>
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
                            <hr>
                            <p>Bienestar Al Aprendiz</p>
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
                            <hr>
                            <p>Servicios Tecnológicos</p>
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
                            <hr>
                            <p>Relaciones Coorporativas</p>
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
                            <hr>
                            <p>Coordinación Académica</p>
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
                            <hr>
                            <p>Administración Educativa</p>
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
                            <hr>
                            <p>Programas de Formación</p>
                        </div>
                    </article>
                </a>
            </div>
        </section>
    </div>
<script src="Scripts/areas.js"></script>
<?php endblock() ?>

