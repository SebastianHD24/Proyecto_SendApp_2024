<?php

                // Verificar si se realizó una búsqueda
                if(isset($_GET['documento_identidad']) && $_GET['documento_identidad'] != '') {
                  $search_term = $_GET['documento_identidad'];
                  echo "Buscas: $search_term";

                  // Agregar condición de búsqueda a la consulta SQL
                  $sql .= " WHERE usuarios.documento_identidad = ? OR usuarios.nombres LIKE ?";
                  // Preparar la consulta SQL
                  $stmt = mysqli_prepare($conn, $sql);
                  if ($stmt) {
                    $search_term_like = "%$search_term%";
                    // Enlazar parámetros a la consulta preparada
                    mysqli_stmt_bind_param($stmt, "is", $search_term, $search_term_like);
                    // Ejecutar la consulta preparada
                    mysqli_stmt_execute($stmt);
                    // Obtener el resultado de la consulta
                    $query = mysqli_stmt_get_result($stmt);
                  } else {
                    echo "Error en la preparación de la consulta: " . mysqli_error($conn);
                  }
                } else {
                  // Ejecutar la consulta sin condición de búsqueda
                  $query = mysqli_query($conn, $sql);
                }

                // Verificar si la consulta fue exitosa
                if (!$query) {
                  echo "Error en la consulta SQL: " . mysqli_error($conn);
                } else {
                  // Iterar sobre los resultados y mostrar cada fila en la tabla
                  while ($row = mysqli_fetch_array($query)) {
              ?>
                <tr id="row_<?= $row['documento_identidad'] ?>">
                  <!-- Mostrar datos de usuario en cada columna -->
                  <td><?= $row['documento_identidad'] ?></td>
                  <td><?= $row['nombres'] ?></td>
                  <td><?= $row['apellidos'] ?></td>
                  <td><?= $row['correo'] ?></td>
                  <td><?= $row['celular'] ?></td>
                  <td><?= $row['programa'] ?></td>
                  <td><?= $row['ficha'] ?></td>
                  <!-- Mostrar el estado del usuario -->
                  <td id="estado_<?= $row['documento_identidad'] ?>" class="<?= ($row['estado'] == 1) ? 'activo' : 'inactivo' ?>"><?= ($row['estado'] == 1) ? 'Activo' : 'Inactivo' ?></td>
                  <td><?= $row['nombre_rol'] ?></td>
                  <!-- Mostrar el nombre del servicio en lugar del ID -->
                  <td><?= $row['nombre_servicio'] ?></td>
                  <!-- Acciones -->
                  <td>
                    <?php if ($row['estado'] == 1): ?>
                      <!-- Enlace para desactivar usuario -->
                      <a href="actualizar_estado.php?action=desactivar&documento_identidad=<?= $row['documento_identidad'] ?>" onclick="return confirmarDesactivar('<?= $row['documento_identidad'] ?>')">Desactivar</a>
                    <?php else: ?>
                      <!-- Enlace para activar usuario -->
                      <a href="actualizar_estado.php?action=activar&documento_identidad=<?= $row['documento_identidad'] ?>" onclick="return confirmarActivar('<?= $row['documento_identidad'] ?>')">Activar</a>
                    <?php endif; ?>
                    <!-- Separador -->
                    
                    <!-- Enlace para editar usuario -->
                    <a href="actualizar.php?documento_identidad=<?= $row['documento_identidad'] ?>" class="users-table--edit">Editar</a>
                  </td>
                </tr>
                <?php
                  }
                }
          ?>
            </tbody>
          </table>
        </div>
        </main> 
</div>

        <!-- Script JavaScript para confirmar acciones -->
        <script>
        // Función para confirmar activar usuario
          function confirmarActivar(documento_identidad) {
            let confirmacion = confirm('¿Estás seguro de que quieres activar este usuario?');
            return confirmacion;
          }

          // Función para confirmar desactivar usuario
          function confirmarDesactivar(documento_identidad) {
            let confirmacion = confirm('¿Estás seguro de que quieres desactivar este usuario?');
            return confirmacion;
            }
        </script>