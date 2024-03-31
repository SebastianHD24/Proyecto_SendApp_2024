<?php 
    session_start();

    include("../Login/conexion.php"); //Llamo el archivo donde hice la conexion a la base de datos y a esa conexion la almanceno en una variable
    $conn = connection(); 

    $documento_identidad = $_SESSION['documento_identidad']; //Guardo el campo de documento de identidad con el que se inicio la sesion
    
    $sql = "SELECT * FROM citas WHERE documento_usuario = $documento_identidad"; //Hago una consulta del campo
    $query = mysqli_query($conn, $sql);
?>

<?php include '../../Proyecto_SendApp_2024/bases/header.php' ?> <!--Llamo el archivo base-->

<?php startblock('links-styles') ?> <!--Llamo el bloque que cree en la base y agrego los stilos y links adicionales que no son globales-->

    <meta http-equiv="X-UA-Compatible" content="IE-edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ingrese los datos a Base usuarios">
    <meta name="keywords" content="html, css, bases de datos, php"/>
    <meta name="author" content="Sebastian"/>
    <meta name="copyright" content="Sebastian"/>
    <link rel="stylesheet" type="text/css" href="../Inicio/Styles/StyleHome.css">
    <title>Crud Cita</title>

<?php endblock() ?>

</head>
<body>

<?php startblock('contenido') ?>
    <div class="users-table">
        <h2>Mis Citas</h2>
        <table>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Documento_Usuario</th>
                    <th>Id_Servicio</th>
                    <th></th>
                    <th></th>
                </tr>
                <br>
                        
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <th><?= $row['fecha'] ?></th>
                    <th><?= $row['hora'] ?></th>
                    <th><?= $row['documento_usuario'] ?></th>
                    <th><?= $row['id_servicio'] ?></th>
                    
                    <!-- <th><a href="consulta.php?id=<?= $row['id'] ?>" class="users-table--consul">Consulta</a></th>
                    <th><a href="actualizar.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                    <th><a href="delete.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</a></th> -->
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
<?php endblock() ?>

<?php startblock('footer') ?>
<?php endblock() ?>

    <script src="https://kit.fontawesome.com/a7f71e63d5.js" crossorigin="anonymous"></script> <!--Libreria de iconos de Font Awesome-->
    <script src="Inicio/Scripts/scriptHome.js"> </script> <!--Scripts Generales -->
</body>
</html>

