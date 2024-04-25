<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar citas pendientes</title>
    <style>
        /* Styles... */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        /* Estilos para el contenedor principal */
        .table_div {
            max-width: 800px; /* Limita el ancho máximo */
            margin: 20px auto; /* Centra el contenido y agrega espacio */
            padding: 10px; /* Relleno interno */
            background-color: white; /* Fondo blanco para el contenedor */
            border: 1px solid #ddd; /* Borde suave */
            border-radius: 5px; /* Bordes redondeados */
        }

        /* Estilos para la tabla */
        table {
            width: 100%; /* Ancho completo */
            border-collapse: collapse; /* Elimina espacios entre celdas */
        }

        th, td {
            padding: 12px; /* Espacio interno */
            border: 1px solid #ddd; /* Bordes claros */
        }

        th {
            background-color: #f2f2f2; /* Fondo para encabezados */
            text-align: left; /* Alineación a la izquierda */
            font-weight: bold; /* Texto en negrita */
        }

        /* Estilos para los botones */
        .button {
            padding: 10px 15px; /* Espacio interno */
            background-color: #007bff; /* Azul para el botón */
            color: white; /* Texto blanco */
            border: none; /* Sin borde */
            border-radius: 5px; /* Bordes redondeados */
            text-decoration: none; /* Sin subrayado */
            transition: background-color 0.3s ease; /* Efecto suave en hover */
            cursor: pointer; /* Cambia el cursor a puntero */
        }

        .button:hover {
            background-color: #0056b3; /* Fondo más oscuro en hover */
        }

        .button.danger {
            background-color: #dc3545; /* Rojo para botón de peligro */
        }

        .button.danger:hover {
            background-color: #c82333; /* Rojo más oscuro en hover */
        }

        /* Estilos para el área de acciones */
        .actions {
            display: flex; /* Layout flexible para acciones */
            gap: 10px; /* Espacio entre botones */
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
                                <!-- Aquí está el cambio -->
                                <a class="button" href="aceptarcita.php?documento=<?= $row['documento_identidad'] ?>">Aceptar</a>
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
