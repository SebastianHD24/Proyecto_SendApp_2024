<?php 
    include '../../../Proyecto_SendApp_2024/bases/sesion_start.php';
    include '../../../Proyecto_SendApp_2024/bases/conexion.php';
    $conn = connection();
    include '../../../Proyecto_SendApp_2024/bases/consulta_nombres_correos.php';
    include '../../../Proyecto_SendApp_2024/bases/redireccionamiento.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Proyecto_SendApp_2024/bases/mainInterfaz/estiloInterfaces.css">
    <?php
        if ($id_rol == 1){
            $tituloPestaña = "Administrador";
        }
        else if ($id_rol == 2){
            $tituloPestaña = "Funcionario";
        }
        else if ($id_rol == 3){
            $tituloPestaña = "Aprendiz";
        }
    ?>
    <title><?= $tituloPestaña ?></title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" type="text/css" href="../../../Proyecto_SendApp_2024/CSS/interfaces-css/usuario.css" >
    <link rel="stylesheet" type="text/css" href="../../../Proyecto_SendApp_2024/CSS/componentes-css/citas.css" >
    <link rel="stylesheet" type="text/css" href="../../../Proyecto_SendApp_2024/CSS/componentes-css/PQR.css" >
    <link rel="stylesheet" type="text/css" href="../../../Proyecto_SendApp_2024/CSS/componentes-css/notificaiones.css" >
    <link rel="stylesheet" type="text/css" href="../../../Proyecto_SendApp_2024/CSS/componentes-css/formulario-editar.css" >
    <link rel="stylesheet" type="text/css" href="../../../Proyecto_SendApp_2024/CSS/componentes-css/servicios.css" >
    <link rel="stylesheet" type="text/css" href="../../../Proyecto_SendApp_2024/CSS/componentes-css/calendario.css">
    <link rel="stylesheet" type="text/css" href="../../../Proyecto_SendApp_2024/CSS/componentes-css/citaspendiente.css">
    <link rel="stylesheet" type="text/css" href="../../../Proyecto_SendApp_2024/CSS/componentes-css/confirmado.css" >
    
</head>
<body>
    <div class="wrapper">
        <header class="header-mobile">
            <h1 class="logo">SendApp</h1>
            <button class="open-menu" id="open-menu"><i class='bx bx-menu'></i></a>
        </header>
        <aside>
            <button class="close-menu" id="close-menu"><i class='bx bx-x'></i></a>

            <div class="perfil" style="display: none;">    
                    <!--*****************************************************-->
                    <figure class="foto-perfil">
                      <img class="logo" src="../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/fotor-ai-20230902143349.jpg">
                      <i class="bi bi-camera-fill"></i>
                    </figure>
                    <!--*****************************************************-->  
            </div>
            <article class="nombre" style="display: none;">
                <p><?= $full_name ?></p>
            </article>
                
            <nav class="navbar">
                <ul class="menu">
                    <?php if ($id_rol != 1): ?>
                        <li>
                        <a  href="../../../Proyecto_SendApp_2024/index.php"><button class="boton-menu boton-categoria" > <i class="bi bi-house"></i> Inicio </button></a>
                        </li>
                    <?php endif ?>
                    <?php if ($id_rol == 2): ?>
                        <li>
                        <a  href="?p=citaspendiente"><button class="boton-menu boton-categoria <?php echo $component == 'citaspendiente' || $component == 'aceptarcita' ? 'active' : '' ?>" > <i class="bi bi-calendar-event"></i> Gestion de Citas </button></a>
                        </li>
                        <li>
                        <a  href="?p=mi_agenda"><button class="boton-menu boton-categoria <?php echo $component == 'mi_agenda' ? 'active' : '' ?>" > <i class="bi bi-calendar-event"></i> Mi Calendario </button></a>
                        </li>
                        
                    <?php endif; ?>

                    
                    <?php if ($id_rol == 3): ?>
                        <li>
                            <a  href="?p=servicios"><button class="boton-menu boton-categoria <?php echo $component == 'servicios' ? 'active' : '' ?>" > <i class="bi bi-columns-gap"></i> Servicios </button></a>
                        </li>
                    <?php endif; ?>

                    <?php if ($id_rol == 3): ?>
                        <li>
                            <a  href="?p=citas"><button class="boton-menu boton-categoria <?php echo $component == 'citas' ? 'active' : '' ?>" > <i class="bi bi-calendar-event"></i> Mis Citas </button></a>
                        </li>

                    <?php endif; ?>
                    
                    <?php if ($id_rol == 1): ?>
                        <li>
                            <a  href="?p=created-acounts"><button class="boton-menu boton-categoria <?php echo $component == 'created-acounts' ? 'active' : '' ?>" > <i class="bi bi-ui-checks-grid"></i> Cuentas Creadas </button></a>
                        </li>
                        <li>
                            <a  href="?p=serviciosadmin"><button class="boton-menu boton-categoria <?php echo $component == 'serviciosadmin' ? 'active' : '' ?>"> <i class="bi bi-columns-gap"></i> Servicios </button></a>
                        </li>
                        <li>
                            <a  href="?p=notifiAdmin"><button class="boton-menu boton-categoria <?php echo $component == 'notifiAdmin' ? 'active' : '' ?>" > <i class="bi bi-bell"></i>Notificaciones</button></a>
                        </li>
                    <?php endif; ?>
                        
                    <?php if ($id_rol != 1): ?>
                        <li>
                            <a  href="?p=pqr"><button class="boton-menu boton-categoria <?php echo $component == 'pqr' ? 'active' : '' ?>" > <i class="bi bi-chat-left-dots"></i> PQR </button></a>
                        </li>
                        <li>
                        <a  href="?p=notificaciones"><button class="boton-menu boton-categoria <?php echo $component == 'notificaciones' ? 'active' : '' ?>" > <i class="bi bi-bell"></i>Notificaciones </button></a>
                        </li>
                    <?php endif; ?>

                    <li>
                    <a  href="?p=perfil"><button class="boton-menu boton-categoria <?php echo $component == 'perfil' ? 'active' : '' ?>" > <i class="bi bi-person"></i> Perfil </button></a>
                    </li>
                </ul>
            </nav>
            <div class="log-out">
                <a class="texto-footer" href="../../../Proyecto_SendApp_2024/Login/login-aprendices/validacion/cerrar_sesion.php"><i class="bi bi-box-arrow-right"></i></a>
            </div> 
        </aside>
    <main>                                                                                                                                             