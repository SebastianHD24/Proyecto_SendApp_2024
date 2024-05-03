<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Styles/componentes/solicitarCita.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title></title>

</head>

<body>

  <div class="container">
    <form  action="guardarcita.php" method="POST" id="formularioo">
      <h1>Solicitar Cita</h1>
      <p>Jornada:</p>
      <select class="select" name="jornada">
        <option value="opcion1">Diurna</option>
        <option value="opcion2">mixta</option>
       
      </select>
      <div class="formulario">
        <label for="descripcion" name="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" class="descripcion" rows="4"></textarea>
      </div>

      <div class="buttons">
        <button class="button">Cerrar</button>
        <button class="button" id="buttonEnviar">Enviar</button>
      </div>
    </form>
  </div>
  <!-- /* ventana emergente */ -->
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="cerrar"></span>
      <p>Datos cargados correctamente</p>
      <i class='bx bxs-certification'></i>
    </div>
  </div>
  <script src="script/script.js"></script>
</body>
</html>