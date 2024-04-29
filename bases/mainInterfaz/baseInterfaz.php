<?php require_once '../../bases/ti.php' ?>  <!--LLamo la libreria para realizar el proceso de crear bloques para heredarlos a futuro-->
<?php include '../../../Proyecto_SendApp_2024/bases/sesion_start.php' ?>

<?php 

    include '../../../Proyecto_SendApp_2024/Login/conexion.php';

    $conn = connection();

    include '../../../Proyecto_SendApp_2024/bases/consulta_nombres_correos.php' 

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Proyecto_SendApp_2024/bases/mainInterfaz/style.css">
    <?php startblock('title-pag') ?>
    <?php endblock() ?>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<!-- este bloque es para poner links que son personales para cada tipo de interfaz si las hay como diferentes estilos-->
<?php startblock('links') ?>
<?php endblock() ?>

<body>
    <div class="wrapper">
        <header class="header-mobile">
            <h1 class="logo">SendApp</h1>
            <button class="open-menu" id="open-menu"><i class='bx bx-menu'></i></button>
        </header>
        <aside>
            <button class="close-menu" id="close-menu"><i class='bx bx-x'></i></button>

            <div class="perfil">
                
                    <!--*****************************************************-->
                    <figure class="foto-perfil">
                      <img class="logo" src="./Usuario-img/fotor-ai-20230902143349.jpg">
                      <i class="bi bi-camera-fill"></i>
                      </figure>
                    
                    <!--*****************************************************-->
                    
                    
                
            </div>

            <article class="nombre">
                <p><?= $nombre_completo ?></p>
            </article>
                
            <nav class="navbar">
                <ul class="menu">
                    <li>
                        <a class=" boton-categoria" id="inicio" href=""><i class="bi bi-house-door"></i>Inicio</a>
                    </li>

                    <!-- Este bloque es para añadir una opcion diferente segun el rol -->
                    <?php startblock('menu-option') ?>
                    <?php endblock() ?>

                    <li>
                        <button id="notificaciones" class="boton-menu boton-categoria"><i class="bi bi-bell"></i>Notificaciones</button>
                    </li>

                    <li>
                        <button id="perfil " class="boton-menu boton-categoria" ><i class="bi bi-person"></i>Perfil</button>
                    </li>
                    <!-- <li>
                        <button id="log-out" class="">
                        <i class='bx bx-log-out'></i>
                        </button>
                    </li> -->
                </ul>
            </nav>
            <div class="log-out">
                <a class="texto-footer" href="../../../Proyecto_SendApp_2024/Login/login-aprendices/validacion/cerrar_sesion.php"><i class="bi bi-box-arrow-right"></i></a>
            </div> 
        </aside>
        <main>
            <!-- Contenido -->
            <div class="div__content">
                <section>
                    <!--Logo en el contenido-->
                    <article>
                        <img src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/LogosSena-img/LogoSenaVerde.png" name="SendApp" alt="SendApp Logo"/>
                    </article>
                    <!-- <p>
                        Bienvenido Aprendíz, este es tu nuevo espacio personal en SendApp, donde podrás agendar citas con nuestros funcionarios de cada área y cambiar tus datos personales, <b>Solo debes hacer click sobre el área de tu preferencia y se te abrirá automaticamente el calendario con los fechas disponibles.</b> Pero recuerda, solo algunas de nuestras área estan habilitadas para recibir citas, también algunos de tus datos personales solo pueden ser actualizados atraves del sitio web de <a href="">SofiaPlus</a> 
                    </p> -->
                    <?php startblock('contenido') ?>
                    <?php endblock() ?>
                    <!-- <img src="../../Inicio/Img-home/LogosSena-img/LogoSenaVerde.png" alt="" id="img-logoSena"> -->
                </section>
            </div>
        </main> 
    </div>                                                                                                                                                                                                                                                           </div>
    <script src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/script.js"></script>
    <script src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/response.js"></script>
    <script src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/actualizarImagen/actualizar.js"></script>
</body>
</html>