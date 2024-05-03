<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../Styles/citas.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Citas</title>
</head>
<body>
    <?php 
    session_start();

    // conexion a la bd 

    include '../../Login/conexion.php';

    $conn= connection();

    //verificamos si la sesion y el documento existen
    if (isset($_SESSION['documento_identidad'])) {
        $documento_identidad = $_SESSION ['documento_identidad'];

        if (!$conn) {
            die("Error al conectar a la base de datos: " . mysqli_connect_error());
        }

        // hacemos consulta para mostar los datos 
        $sql = "SELECT * FROM citas WHERE documento_usuario = '$documento_identidad'";
        $result = mysqli_query($conn,$sql);

        if ($result) {
            //mostar datos en la tabla 
            if (mysqli_num_rows($result) > 0) {
               
                    ?>
                     <div  class="notifications-panel">
                    <?php 
                     while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    
       
                    
            <!--Contenedor con la información de la cita 1-->
            <div class="notifications" id="notifications-1">
                <figure>
                    <img src="../../Styles/Img/Componentes-img/Schedule.png" class="notifications-logo" alt="Icono de Calendario"/>
                </figure>
                <span></span>
                    <article>
                        <p> Área: Coordinación Académica</p>
                    </article>
                <span></span>
                    <article>
                        <p>Día: <?= $row['fecha'] ?></p>
                    </article>
                <span></span>
                    <article>
                        <p>Hora: <?= $row['hora'] ?></p>
                    </article>
                    <span></span>
                    <article>
                        <p>Estado: <?= $row['estado_cita'] ?></p>
                    </article>
                    <span></span>
                    <article>
                        <p>Motivo: <?= $row['descripcion'] ?> </p>
                    </article>
                <span></span>
                    <article>
                        <p>Funcionario: Jorge Padilla Agudelo Prada</p>
                    </article>
            </div>
           
            
            
       
        <?php 
             }
             ?>
               </div> <!--  cierra wel unico conetendor -->
             <?php

            }else{
                ?>
                <article>
                        <p>no se encontró citas para mostar  a este usuario </p>
                    </article>
                    <?php 

            }
        }else {
            ?>
            <article>
                        <p>error al encontrar los datos </p>
                    </article>
                    <?php
        }


    }
    
    ?>

        
           
            
            
        
</body>
</html>