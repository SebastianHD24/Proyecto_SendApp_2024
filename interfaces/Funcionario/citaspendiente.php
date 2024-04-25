<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar citas pendientes</title>
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
    <div class="table_div">
        <table>
            <thead>
                <tr>
                    <th>Documento de Identidad</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Datos</th>
                    <th>acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../../Login/conexion.php';
                $conn = connection();

                if (!$conn) {
                    die("Error al conectar a la base de datos: " . mysqli_connect_error());
                }

                // Consulta para obtener datos de la tabla prueba y el nombre del usuario de la tabla usuarios
                $sql = "SELECT solicitud_citas.id_usuario AS documento_identidad, usuarios.nombres, usuarios.apellidos, solicitud_citas.descripcion 
                        FROM solicitud_citas
                        INNER JOIN usuarios ON solicitud_citas.id_usuario = usuarios.documento_identidad";

                // Ejecutar la consulta
                $result = mysqli_query($conn, $sql);

                if ($result === false) {
                    die("Error en la consulta: " . mysqli_error($conn));
                }

                // Mostrar resultados
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr id="row_<?= $row['documento_identidad'] ?>">
                            <td><?= $row['documento_identidad'] ?></td>
                            <td><?= $row['nombres'] ?></td>
                            <td><?= $row['apellidos'] ?></td>
                            <td><?= $row['descripcion'] ?></td>
                            
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='4'>No se encontraron citas pendientes.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
