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
    <link rel="stylesheet" href="Inicio/Styles/StyleHome.css">
    <link rel="shortcut icon" href="Pangina principal/Img-home/LogosSena-img/LogoSenaVerde.png"> <!-- Icono de la ventana -->
    <title>SendApp</title>
</head>
<body>
    
<?php include 'bases/base.php' ?>


        <!-- Slider Sena -->
        <div class="slider">
            <ul>
                <li><img src="./Inicio/Img-home/Slider-img/img1.jpg" alt="imagen1"></li>
                <li><img src="./Inicio/Img-home/Slider-img/img2.png" alt="imagen2"></li>
                <li><img src="./Inicio/Img-home/Slider-img/img3.png" alt="imagen3"></li>
                <li><img src="./Inicio/Img-home/Slider-img/img4.png" alt="imagen4"></li>
        
            </ul>
        </div>
              
    <!-- Contenido -->
        <div class="content">
            <section>
                <div class="content__parrafos-titulos">
                    <h1>Bienvenido a SendApp</h1> 
                    <h2>EL sitio Web Ofcial del Centro De Diseño e Innovación Tecnólogica Industrial</h2>
                    <p>¿Que podrás encontrar aquí?</br>
                        Aquí encontrarás toda la información necesaria sobre como está constituido el centro de formacion, sus principales areas y servicios.
                    </p>
                </div>
                <!-- Contenedor de Imagenes Slider -->
                    <div class="container">
                        <div class="panel1 active" style="background-image: url('https://images.unsplash.com/photo-1558979158-65a1eaa08691?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80')">
                            <h3> Explore the world </h3>
                        </div>
                    
                        <div class="panel1" style="background-image: url('https://images.unsplash.com/photo-1572276596237-5db2c3e16c5d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80')">
                            <h3> Wild forets </h3>
                        </div>
                    
                        <div class="panel1" style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1353&q=80')">
                            <h3> Sunny Beach </h3>
                        </div>
                    
                        <div class="panel1" style="background-image: url('https://images.unsplash.com/photo-1551009175-8a68da93d5f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1351&q=80')">
                            <h3> City on winter </h3>
                        </div>
                    
                        <div class="panel1" style="background-image: url('https://images.unsplash.com/photo-1549880338-65ddcdfd017b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80')">
                            <h3> Mountains - Clouds </h3>
                        </div>
                    </div>
                        <!--Contenddor de Parrafos-->
                        <div class="content__parrafos-links">
                            <div class="p__container">
                                <article>
                                    <img src="Inicio/Img-home/Section-Img/extracurricular-activities_14189558.png" alt="Inoco De Areas">
                                </article>                         
                                <p>
                                    En el menú de navagación en el apartado de <b><a href="">Areas</a></b> puedes encontrar la información referente a cada una de las areas y sus respectivos servicios.</br><b>Ten en cuenta que algunos de estos servicios solo estan disponibles para las personas en calidad de Aprendíz Sena</b>
                                </p>
                            </div>
                            <div class="p__container">
                                <article>
                                    <img src="Inicio/Img-home/Section-Img/communicate_2343723.png" alt="Inoco De informacion">
                                </article> 
                                <p>
                                    Aún así si eres una persona natural en este sitío puedes encontrar todos los datos de contacto pertinentes sobre los funcionarios que atienden este centro de formación solo ve al siguiente link y encontrarás todo la informacion necesaria en <b><a href="">Acerca CDITI</a></b>
                                </p>
                            </div>
                            <div class="p__container">
                                <article>
                                    <img src="Inicio/Img-home/Section-Img/training_12343284.png" alt="Inoco De Nosotros">
                                </article> 
                                <p>
                                    Si te intera saber un poco más sobre nosotros y el ¿Por qué? fue creado este sitio web puedes visitar el apartado de <b><a href="">Nosotros</a></b>
                                </p>
                            </div>
                            <div class="p__container">
                                <article>
                                    <img src="Inicio/Img-home/Section-Img/calendar_2693507.png" alt="Inoco de Agenda">
                                </article> 
                                <p>
                                    Sí eres aprendíz Sena y necesitas agendar una cita para algun servicio del Centro de Diseño e Innovacion Tecnólogica Industrial recuerda insgresar con tus datos de Sofia en <b><a href="">Ingreso</a></b>
                                </p>
                            </div>
                        </div>
            </section>
        </div>
            <!-- Footer -->
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
    <script src="https://kit.fontawesome.com/a7f71e63d5.js" crossorigin="anonymous"></script> <!--Libreria de iconos de Font Awesome-->
    <script src="Inicio/Scripts/scriptHome.js"> </script> <!--Scripts Generales -->
</body>
</html>