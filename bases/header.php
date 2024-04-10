<?php require_once 'ti.php' ?>  <!--LLamo la libreria para realizar el proceso de crear bloques para heredarlos a futuro-->

<?php startblock('container-nav') ?> <!--Creo el bloque y le agrego un nombre "container-nav"-->

<!--Creo la estructura que hay dentro del bloque-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- WORK SANS FONT INSTITUCIONAL IMPORTACIÓN DESDE GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- ESTILOS CSS -->
    <link rel="shortcut icon" href="../../../Proyecto_SendApp_2024/Inicio/Img-home/LogosSena-img/LogoSenaVerde.png"> <!-- Icono de la ventana -->
    <link rel="stylesheet" href="../../../Proyecto_SendApp_2024/Styles/accesibilidad.css"><!--CSS accesibilidad-->
    <link rel="stylesheet" href="../../../Proyecto_SendApp_2024/Inicio/Styles/StyleHome.css">

    <!--Styles adicionales, este bloque se llamara en otro archivos para agregar rutas de estilos y links que no son globales para todas las paginas-->
    <?php startblock('links-styles') ?>
    <?php endblock() ?>

</head>
<body>
<header id="main-header">

        <!-- Logo SendApp-->
        <!--Bloque para el logo sena-->
        <?php startblock('logo-sena') ?>
        <div class="logo">
            <img src="../../Proyecto_SendApp_2024/Inicio/Img-home/LogosSena-img/SendApp.png"
            alt="SendApp Logo"/>
        </div>
        <?php endblock() ?>

        <!--Nav Container--> 
        <?php startblock('navegacion') ?> <!--Creo un bloque para la barra de navegacion-->
            <nav class="navbar">
                <!-- Logo sena -->
                <div class="logo-header">
                    <img src="../../../Proyecto_SendApp_2024/Inicio/Img-home/LogosSena-img/LogoSenaVerde.png" alt="Logo Sena" />
                </div>
                <ul class="links">
                    <li><i class="fa-solid fa-house"></i><a href="../..//Proyecto_SendApp_2024/index.php">Inicio</a></li>
                    <!-- <li><i class="fa-solid fa-user-group"></i><a href="Nosostros/nosotros.html">Nosotros</a></li> -->
                    <li>
                        <i class="fa-solid fa-cubes"></i><a href="../../../Proyecto_SendApp_2024/Areas/index.php">Areas</a>
                        <ul class="areas-mas">
                            <li><a href="../../../Proyecto_SendApp_2024/Biblioteca/index.php">Biblioteca</a></li>
                            <li>
                                <a href="../../../Proyecto_SendApp_2024/Bienestar/index.php" id="bienestar">Bienestar al aprendiz</a>
                                <ul class="areas-bienestar">
                                    <li><a href="../../../Proyecto_SendApp_2024/Bienestar/psicologia/index.php">Psicologia</a></li>
                                    <li><a href="../../../Proyecto_SendApp_2024/Bienestar/Deportes/index.php">Deportes y cultura</a></li>
                                </ul>
                            </li>
                            <li><a href="../../../Proyecto_SendApp_2024/coordinaccion/index.php">Cordinacion academica</a></li>
                            <li><a href="../../../Proyecto_SendApp_2024/administracion/index.html">Administracion educativa</a></li>
                            <li><a href="../../../Proyecto_SendApp_2024/senova/index.php">Sennova</a></li>
                            <li><a href="../../../Proyecto_SendApp_2024/fondoEmprender/index.php">Fondo emprender</a></li>
                            <li><a href="../../../Proyecto_SendApp_2024/relacionesCorporativas/index.html">Relaciones corporativas</a></li>
                            <li><a href="../../../Proyecto_SendApp_2024/serviciosTecnologicos/index.php">Servicios tecnologias</a></li>
                            <li><a href="../../../Proyecto_SendApp_2024/TecnoParque/index.php">Tecno parque</a></li>
                            <li><a href="../../../Proyecto_SendApp_2024/TecnoAcademia/index.php">Tecno academia</a></li>
                            <li><a href="../../../Proyecto_SendApp_2024/FabricaSoftware/index.php">Fabrica de software</a></li>
                        </ul>
                    </li>
                    <!-- <li><i class="fa-solid fa-circle-info"></i><a href="infoCDITI/info.html">Acerca CDITI</a> -->
                    <li> <i class="fa-solid fa-right-to-bracket"></i><a href="../../../Proyecto_SendApp_2024/Login/login-aprendices/login-aprendices.html">Ingreso</a></li>
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
                    <li><i class="fa-solid fa-house"></i><a href="../../../Proyecto_SendApp_2024/index.html">Inicio</a></li>
                    <li><i class="fa-solid fa-user-group"></i><a href="../../../Proyecto_SendApp_2024/Nosostros/nostros.html">Nosotros</a></li>
                    <li class="btn-areas">
                        <i class="fa-solid fa-cubes"></i><a href="../../../Proyecto_SendApp_2024/Areas/index.php">Areas</a> <!--Falta la ruta-->
                        <div class="menu-areas">
                            <ul class="content-areas">
                                <li><a href="../../../Proyecto_SendApp_2024/Biblioteca/index.php">Biblioteca</a></li>
                                <li>
                                    <a href="../../../Proyecto_SendApp_2024/Bienestar/index.php" id="bienestar">Bienestar al aprendiz</a>
                                    <ul class="areas-bienestar">
                                        <li><a href="../../../Proyecto_SendApp_2024/Bienestar/psicologia/index.php">Psicologia</a></li>
                                        <li><a href="../../../Proyecto_SendApp_2024/Bienestar/Deportes/index.php">Deportes y cultura</a></li>
                                    </ul>
                                </li>
                                <li><a href="../../../Proyecto_SendApp_2024/coordinaccion/index.php">Cordinacion academica</a></li>
                                <li><a href="../../../Proyecto_SendApp_2024/administracion/index.html">Administracion educativa</a></li>
                                <li><a href="../../../Proyecto_SendApp_2024/senova/index.php">Sennova</a></li>
                                <li><a href="../../../Proyecto_SendApp_2024/fondoEmprender/index.php">Fondo emprender</a></li>
                                <li><a href="../../../Proyecto_SendApp_2024/relacionesCorporativas/index.html">Relaciones corporativas</a></li>
                                <li><a href="../../../Proyecto_SendApp_2024/serviciosTecnologicos/index.php">Servicios tecnologias</a></li>
                                <li><a href="../../../Proyecto_SendApp_2024/TecnoParque/index.php">Tecno parque</a></li>
                                <li><a href="../../../Proyecto_SendApp_2024/TecnoAcademia/index.php">Tecno academia</a></li>
                                <li><a href="../../../Proyecto_SendApp_2024/FabricaSoftware/index.php">Fabrica de software</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><i class="fa-solid fa-circle-info"></i><a href="infoCDITI/info.html">Acerca CDITI</a></li>
                    <li> <i class="fa-solid fa-right-to-bracket"></i><a href="Login/login.html">Ingreso</a></li>
                </ul>
            </div>
        <?php endblock() ?> <!--Fin bloque de mavegacion-->
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

    <!--Este bloque se llamara en otro archivo para poner contenido que no es global en todas las paginas-->
    <?php startblock('contenido') ?>
    <?php endblock() ?>
    <!--********************************************************-->
    

    <?php startblock('footer') ?> <!--Inicio bloque footer-->
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
    <?php endblock() ?> <!--Fin bloque footer-->
    <script></script>
    <script src="https://kit.fontawesome.com/a7f71e63d5.js" crossorigin="anonymous"></script> <!--Libreria de iconos de Font Awesome-->

    <script src="Inicio/Scripts/scriptHome.js"></script>
    <!--Scripts Generales -->
    <script src="../../../Proyecto_SendApp_2024/Inicio/Scripts/scriptHome.js"> </script> <!--Scripts Generales -->
    <script src="../../../Proyecto_SendApp_2024/ScriptsGenerales/accesibilidad.js"></script><!--Scripts Accesibilidad-->


    <!--Este bloque se llamara en cualquier otro archivo para adicionarle escripts que no son globales en todas la paginas-->
    <?php startblock('scripts') ?>
    <?php endblock() ?>

</body>
</html>

<?php endblock() ?> <!--Cierro el bloque-->