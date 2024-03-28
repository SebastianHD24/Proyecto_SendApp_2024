<?php require_once 'ti.php' ?>  <!--LLamo la libreria para realizar el proceso de crear bloques para heredarlos a futuro-->

<?php startblock('container-nav') ?> <!--Creo el bloque y le agrego un nombre "container-nav"-->

<!--Creo la estructura que hay dentro del bloque-->
<header id="main-header">
        <!-- Logo SendApp-->
        <div class="logo">
            <img src="Inicio/Img-home/LogosSena-img/SendApp.png"
            alt="SendApp Logo"/>
        </div>
        <!--Nav Container--> 
        <nav class="navbar">
            <!-- Logo sena -->
            <div class="logo-header">
                <img src="Inicio/Img-home/LogosSena-img/LogoSenaVerde.png" alt="Logo Sena" />
            </div>
            <ul class="links">
                <li><i class="fa-solid fa-house"></i><a href="index.html">Inicio</a></li>
                <!-- <li><i class="fa-solid fa-user-group"></i><a href="Nosostros/nosotros.html">Nosotros</a></li> -->
                <li>
                    <i class="fa-solid fa-cubes"></i><a href="./Areas/index.html">Areas</a>
                    <ul class="areas-mas">
                        <li><a href="Biblioteca/index.html">Biblioteca</a></li>
                        <li>
                            <a href="Bienestar/index.html" id="bienestar">Bienestar al aprendiz</a>
                            <ul class="areas-bienestar">
                                <li><a href="Bienestar/psicologia/index.html">Psicologia</a></li>
                                <li><a href="Bienestar/Deportes/index.html">Deportes y cultura</a></li>
                            </ul>
                        </li>
                        <li><a href="coordinaccion/index.html">Cordinacion academica</a></li>
                        <li><a href="administracion/index.html">Administracion educativa</a></li>
                        <li><a href="senova/index.html">Sennova</a></li>
                        <li><a href="fondoEmprender/index.html">Fondo emprender</a></li>
                        <li><a href="relacionesCorporativas/index.html">Relaciones corporativas</a></li>
                        <li><a href="serviciosTecnologicos/index.html">Servicios tecnologias</a></li>
                        <li><a href="TecnoParque/index.html">Tecno parque</a></li>
                        <li><a href="TecnoAcademia/index.html">Tecno academia</a></li>
                        <li><a href="FabricaSoftware/index.html">Fabrica de software</a></li>
                    </ul>
                </li>
                <!-- <li><i class="fa-solid fa-circle-info"></i><a href="infoCDITI/info.html">Acerca CDITI</a> -->
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
                <li><i class="fa-solid fa-house"></i><a href="index.html">Inicio</a></li>
                <li><i class="fa-solid fa-user-group"></i><a href="Nosostros/nostros.html">Nosotros</a></li>
                <li class="btn-areas">
                    <i class="fa-solid fa-cubes"></i><a href="#">Areas</a>
                    <div class="menu-areas">
                        <ul class="content-areas">
                            <li><a href="Biblioteca/index.html">Biblioteca</a></li>
                            <li>
                                <a href="Bienestar/index.html" id="bienestar">Bienestar al aprendiz</a>
                                <ul class="areas-bienestar">
                                    <li><a href="Bienestar/psicologia/index.html">Psicologia</a></li>
                                    <li><a href="Bienestar/Deportes/index.html">Deportes y cultura</a></li>
                                </ul>
                            </li>
                            <li><a href="coordinaccion/index.html">Cordinacion academica</a></li>
                            <li><a href="administracion/index.html">Administracion educativa</a></li>
                            <li><a href="senova/index.html">Sennova</a></li>
                            <li><a href="fondoEmprender/index.html">Fondo emprender</a></li>
                            <li><a href="relacionesCorporativas/index.html">Relaciones corporativas</a></li>
                            <li><a href="serviciosTecnologicos/index.html">Servicios tecnologias</a></li>
                            <li><a href="TecnoParque/index.html">Tecno parque</a></li>
                            <li><a href="TecnoAcademia/index.html">Tecno academia</a></li>
                            <li><a href="FabricaSoftware/index.html">Fabrica de software</a></li>
                        </ul>
                    </div>
                </li>
                <li><i class="fa-solid fa-circle-info"></i><a href="infoCDITI/info.html">Acerca CDITI</a></li>
                <li> <i class="fa-solid fa-right-to-bracket"></i><a href="Login/login.html">Ingreso</a></li>
            </ul>
        </div>
    </header>
    <?php endblock() ?> <!--Cierro el bloque-->