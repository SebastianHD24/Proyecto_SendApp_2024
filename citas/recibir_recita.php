<?php 
    session_start();

    include("../Login/conexion.php");
    $conn = connection();

    $documento_identidad = $_SESSION['documento_identidad'];
    

    $sql = "SELECT * FROM citas WHERE documento_usuario = $documento_identidad";
    $query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ingrese los datos a Base usuarios">
    <meta name="keywords" content="html, css, bases de datos, php"/>
    <meta name="author" content="Sebastian"/>
    <meta name="copyright" content="Sebastian"/>
    <title>Crud Cita</title>
</head>
<body>
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
</body>
</html>

