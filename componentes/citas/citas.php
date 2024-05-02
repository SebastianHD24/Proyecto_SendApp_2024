<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" typr="text/css" href="../../Styles/citas.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Citas</title>
</head>
<body>
    <?php 
    session_start();

    // conexion a la bd 

    include '../../'
    
    ?>

        <div  class="notifications-panel">
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
                        <p>Día: 29/06/2024</p>
                    </article>
                <span></span>
                    <article>
                        <p>Hora: 11:00 a.m</p>
                    </article>
                    <span></span>
                    <article>
                        <p>Estado: Aceptado</p>
                    </article>
                <span></span>
                    <article>
                        <p>Funcionario: Jorge Padilla Agudelo Prada</p>
                    </article>
            </div>
           
            
            
        </div>
</body>
</html>