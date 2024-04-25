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
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }

        .button {
            padding: 8px 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;  /* Quita el subrayado en los enlaces */
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .button.danger {
            background-color: #dc3545;
        }

        .button.danger:hover {
            background-color: #c82333;
        }

        .actions {
            display: flex;
            gap: 8px;  /* Espacio entre botones */
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
                    <th>Descripción de la cita</th>
                    <th>Acciones</th>
                    <th>Jornada</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../../Login/conexion.php';
                $conn = connection();

                if (!$conn) {
                    die("Error al conectar a la base de datos: " . mysqli_connect_error());
                }

                $sql = "SELECT solicitud_citas.id_usuario AS documento_identidad, usuarios.nombres, usuarios.apellidos, solicitud_citas.descripcion, solicitud_citas.jornada 
                        FROM solicitud_citas
                        INNER JOIN usuarios ON solicitud_citas.id_usuario = usuarios.documento_identidad";

                $result = mysqli_query($conn, $sql);

                if ($result === false) {
                    die("Error en la consulta: " . mysqli_error($conn));
                }

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr id="row_<?= $row['documento_identidad'] ?>">
                            <td><?= $row['documento_identidad'] ?></td>
                            <td><?= $row['nombres'] ?></td>
                            <td><?= $row['apellidos'] ?></td>
                            <td><?= $row['descripcion'] ?></td>
                            <td class="actions">
                                <a class="button" href="aceptarcita.php">Aceptar</a>
                                <a class="button danger" href="rechazarcita.php">Rechazar</a>
                            </td>
                            <td><?= $row['jornada'] ?></td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='6'>No se encontraron citas pendientes.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
