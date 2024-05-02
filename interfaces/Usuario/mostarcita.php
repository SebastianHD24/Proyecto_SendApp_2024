
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Usuario</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Datos del Usuario</h1>
    
    <div class="table_div">
        <table>
            <thead>
                <tr>
                    <th>area</th>
                    <th>hora</th>
                    <th>dia</th>
                    <th>estado</th>
                    <th>funcionario</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                    session_start();

                    // Paso 1: Conexión a la base de datos
                    include '../../Login/conexion.php';
                    $conn = connection();

                    // Paso 2: Verificar si la sesión y el documento de identidad existen
                    if (isset($_SESSION['documento_identidad'])) {
                        $documento_identidad = $_SESSION['documento_identidad'];

                        if (!$conn) {
                            die("Error al conectar a la base de datos: " . mysqli_connect_error());
                        }

                        // Paso 3: Consulta para recuperar datos
                        $sql = "SELECT * FROM citas WHERE documento_usuario = '$documento_identidad'";  

                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            // Paso 4: Mostrar datos en la tabla
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><?= $row['descripcion'] ?></td>
                                        <td><?= $row['hora'] ?></td>
                                        <td><?= $row['fecha'] ?></td>
                                        <td><?= $row['estado_cita']?> </td>
                                        
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td>No se encontraron datos para este usuario.</td>
                                </tr>
                                <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td>Error al recuperar datos: <?= mysqli_error($conn) ?></td>
                            </tr>
                            <?php
                        }

                        // Paso 5: Cerrar la conexión a la base de datos
                        mysqli_close($conn);
                    } else {
                        ?>
                        <tr>
                            <td>No se ha iniciado sesión o falta el documento de identidad.</td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
