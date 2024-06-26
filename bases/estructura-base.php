<?php require_once 'ti.php'; ?>  <!--LLamo la libreria para realizar el proceso de crear bloques para heredarlos a futuro-->

<!--Creo la estructura-->

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
    <link rel="stylesheet" href="../../../Proyecto_SendApp_2024/CSS/accesibilidad.css"><!--CSS accesibilidad-->
    <link rel="stylesheet" href="../../../Proyecto_SendApp_2024/CSS/header.css"> <!-- CSS haader -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../../Proyecto_SendApp_2024/CSS/footer.css"> <!--CSS footer -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Inclusión de la biblioteca jQuery -->
    <script src="https://kit.fontawesome.com/a7f71e63d5.js" crossorigin="anonymous"></script> <!--Libreria de iconos de Font Awesome-->
    

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

                <ul class="links">
                    <li><i class="fa-solid fa-house"></i><a href="../../../Proyecto_SendApp_2024/index.php">Inicio</a></li>
                    <!-- <li><i class="fa-solid fa-user-group"></i><a href="Nosostros/nosotros.html">Nosotros</a></li> -->
                    <li>
                        <i class="fa-solid fa-cubes"></i><a href="../../../Proyecto_SendApp_2024/Areas/Areas.php">Áreas</a>
                        <ul class="areas-mas">
                        <li><a href="../../../Proyecto_SendApp_2024/administracion/administracion.php">Administración educativa</a></li>
                        <li>
                                <a href="../../../Proyecto_SendApp_2024/Bienestar/Bienestar.php" id="bienestar">Bienestar al aprendiz</a>
                                <ul class="areas-bienestar">
                                <li><a href="../../../Proyecto_SendApp_2024/Bienestar/Deportes/Deportes.php">Deportes y cultura</a></li>
                                    <li><a href="../../../Proyecto_SendApp_2024/Bienestar/psicologia/psicologia.php">Psicología</a></li>
                                </ul>
                            </li>
                            <li><a href="../../../Proyecto_SendApp_2024/Biblioteca/Biblioteca.php">Biblioteca</a></li>
                            
                            <li><a href="../../../Proyecto_SendApp_2024/coordinaccion/coordinaccion.php">Coordinación académica</a></li>
                            <li><a href="../../../Proyecto_SendApp_2024/FabricaSoftware/FabricaSoftware.php">Fábrica de software</a></li>

                            <li><a href="../../../Proyecto_SendApp_2024/fondoEmprender/fondoEmprender.php">Fondo emprender</a></li>
                            <li><a href="../../../Proyecto_SendApp_2024/relacionesCorporativas/relacionesCorporativas.php">Relaciones corporativas</a></li>
                            <li><a href="../../../Proyecto_SendApp_2024/senova/senova.php">Sennova</a></li>


                            <li><a href="../../../Proyecto_SendApp_2024/serviciosTecnologicos/serviciosTecnologicos.php">Servicios tecnológicos</a></li>
                            <li><a href="../../../Proyecto_SendApp_2024/TecnoAcademia/TecnoAcademia.php">Tecnoacademia</a></li>
                            <li><a href="../../../Proyecto_SendApp_2024/TecnoParque/TecnoParque.php">Tecnoparque</a></li>

                        </ul>
                    </li>
                    <!-- <li><i class="fa-solid fa-circle-info"></i><a href="infoCDITI/info.html">Acerca CDITI</a> -->
                    <li id="ingreso"> <i class="fa-solid fa-right-to-bracket"></i><a href="../../../Proyecto_SendApp_2024/Login/login-aprendices/login.php">Ingreso</a></li>
                    <li id="interfaz-u" style="display: none;"><i class="fa-solid fa-circle-user"></i><a href="#" onclick="llevarURL();">Perfil</a></li>
                    <li id="cerrar-sesion" style="display: none;"><i class="fa-solid fa-circle-left"></i><a href="../../Proyecto_SendApp_2024/Login/login-aprendices/validacion/cerrar_sesion.php" onclick="cerrarSesion();">Cerrar sesion</a></li>
                </ul>

                <!--Menu Hamburguesa Animado-->
                <div class="bars__menu">
                    <span class="line1__bars-menu"></span>
                    <span class="line2__bars-menu"></span>
                    <span class="line3__bars-menu"></span>
                </div>
            </nav>

            <!-- Contenido Responsive Menu-->
            <div class="resposive__menu" id="menu-no-sesion" >
                <ul class="resposive__menu-ul">
                    <li>
                        <i class="fa-solid fa-house"></i><a href="../../../Proyecto_SendApp_2024/index.php"><p>Inicio</p></a>
                    </li>
                    <li class="btn-areas">
                        <i class="fa-solid fa-cubes"></i><a href="../../../Proyecto_SendApp_2024/Areas/Areas.php"><p>Áreas</p></a>
                    </li>
                    <li id="ingreso-responsive" >
                        <i class="fa-solid fa-right-to-bracket"></i><a href="../../../Proyecto_SendApp_2024/Login/login-aprendices/login.php"><p>Ingreso</p></a>
                    </li>
                    <li id="interfaz-u-responsive" >
                        <i class="fa-solid fa-circle-user"></i><a onclick="llevarURL();"><p>Perfil</p></a>
                    </li>
                    <li id="cerrar-sesion-responsive">
                        <i class="fa-solid fa-circle-left"></i><a href="../../Proyecto_SendApp_2024/Login/login-aprendices/validacion/cerrar_sesion.php" onclick="cerrarSesion();"><p>Cerrar sesion</p></a>
                    </li>
                </ul>
            </div>
        
    </header>
    <?php endblock() ?> <!--Fin bloque de navegacion-->
    <!-- accesibilidad								 -->
    <div class="acesibilidad">
        <label for="toggle" id="label_toggle"><i class="fa-solid fa-moon"></i></label>
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
            <span class="span-footer"><a href="#">Creado por ADSO 2618075</a></span>

    </footer>
    <?php endblock() ?> <!--Fin bloque footer-->

    <!--Scripts Generales -->
    <script src="../../../Proyecto_SendApp_2024/scripts/ScriptsGenerales/accesibilidad.js"></script><!--Scripts Accesibilidad-->
    <script src="../../../Proyecto_SendApp_2024/scripts/ScriptsGenerales/header.js"></script><!--Scripts HEADER-->
    <script src="../../../Proyecto_SendApp_2024/scripts/ScriptsGenerales/inactividad.js"></script><!--Scripts Inanctividad -->
    <script src="../../../Proyecto_SendApp_2024/scripts/menuHamburguesaJS/menuBarGeneral.js"></script><!--Scripts menu hamburguesa general-->
    <script src="../../../Proyecto_SendApp_2024/scripts/ScriptsGenerales/botonLeerMas.js"></script><!--Scripts menu hamburguesa general-->
    <script src="../../../Proyecto_SendApp_2024/scripts/ScriptsGenerales/sesionIniciada.js"></script>
    <script>
        window.addEventListener('pageshow', function(event) {
            var historyTraversal = event.persisted ||
                                (typeof window.performance != 'undefined' &&
                                    window.performance.navigation.type === 2);
            if (historyTraversal) {
                // Recargar la página si la navegación es a través del historial del navegador
                window.location.reload();
            }
        });
    </script>

    <!--Este bloque se llamara en cualquier otro archivo para adicionarle escripts que no son globales en todas la paginas-->
    <?php startblock('scripts') ?>
    <?php endblock() ?>
</body>
</html>