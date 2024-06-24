<link rel="stylesheet" href="../../../../Proyecto_SendApp_2024/CSS/componentes-css/aceptarcitas.css">
        
        <?php
        
        // Obtener el documento del usuario
        $documento = isset($_POST['documento']) ? htmlspecialchars($_POST['documento'], ENT_QUOTES, 'UTF-8') : '';
        $id_cita = isset($_POST['id_cita']) ? ($_POST['id_cita']) : 0;
        
        $nombres = '';
        $apellidos = '';

        // Validar si tenemos el documento
        if ($documento):
            // Obtener información del usuario y el ID de la cita
            $stmt = $conn->prepare("SELECT citas.id_cita, usuarios.nombres, usuarios.apellidos 
                                    FROM citas AS citas 
                                    JOIN usuarios ON citas.documento_usuario = usuarios.documento_identidad 
                                    WHERE citas.id_cita = ? AND usuarios.documento_identidad= ?");
            $stmt->bind_param("is", $id_cita, $documento);
            $stmt->execute();
        
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $nombres = htmlspecialchars($row['nombres'], ENT_QUOTES, 'UTF-8');
                $apellidos = htmlspecialchars($row['apellidos'], ENT_QUOTES, 'UTF-8');
                $id_cita = intval($row['id_cita']); // Aquí obtenemos el ID de la cita
            } else {
                echo "No se encontró un usuario o una cita con el documento: $documento";
            }
        
            $stmt->close();
        ?>
        <form method="post" id="myForm">
            <table>
                <tr>
                    <th>Campo</th>
                    <th>Valor</th>
                </tr>
                <tr>
                    <td>Documento de Identidad</td>
                    <td><input type="text" name="documento" placeholder="Documento" value="<?php echo $documento; ?>" readonly disabled></td>
                </tr>

                    <input type="hidden" name="id_cita" value="<?php echo $id_cita; ?>"> <!-- Campo oculto para el ID de la cita -->

                <tr>
                    <td>Nombres</td>
                    <td><input type="text" name="nombres" placeholder="Nombres" value="<?php echo $nombres; ?>" readonly disabled></td>
                </tr>
                <tr>
                    <td>Apellidos</td>
                    <td><input type="text" name="apellidos" placeholder="Apellidos" value="<?php echo $apellidos; ?>" readonly disabled></td>
                </tr>
                <tr>
                    <td>Día</td>
                    <td><input type="date" name="fecha" required></td>
                </tr>
                <tr>
                    <td>Hora</td>
                    <td><input type="time" name="hora" required></td>
                </tr>
            </table>
            <div class="button_citas">
            <button type="submit">Aceptar</button>

            <a href="?p=citaspendiente" class="cancelar-button"> cancelar</a>

            </div>
        </form>


        <!-- Ventana emergente despues de una actualizacion. -->
        <div class="alerta" id="alerta">
            <div class="modalA">
                <div class="barra"></div>
                <img src="../../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/cheque.png" alt="check">
                <h1 class="tituloM"></h1>
                <p class="descripcionM">¡Cita agendada con éxito!</p>
            </div>
        </div>
        <?php
        else:
            echo "Documento no proporcionado.";

        ?>
        <?php endif ?>
        
</div>
<script src="../../../../Proyecto_SendApp_2024/scripts/componentesJS/mandar.js"></script>

