<?php
    include("../Login/conexion.php");
    $conn = connection();

    //chequeando la conexion
    if (!$conn) {
        die("Conexion Fallo: ".mysqli_connect_error());
    }

    // Este echo es para verificar si nos conectamos satisfactoriamente
    // echo "<h1><center>Conectado Satisfactoriamente</h1></center>";

    //Tomando Datos del formulario html para luego ser enviados a la base de datos
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $documento_usuario = $_POST['documento_usuario'];
    $id_servicio = $_POST['id_servicio'];

    //dos atributos predeterminados que luego el admin los podra cambiar
    $estado_cita = 1;

    // Verificar si el id_servicio existe en la base de datos
    $query = "SELECT * FROM servicios WHERE id_servicio = '$id_servicio'";
    $result = mysqli_query($conn, $query);
    
    
    
    if (mysqli_num_rows($result) > 0) {
        // El servicio existe, continuar con la inserción
        $sql = "INSERT INTO citas (estado_cita, fecha, hora, documento_usuario, id_servicio) VALUES ('$estado_cita', '$fecha', '$hora', '$documento_usuario', '$id_servicio')";

        // Condicion para verificar el registro en la bd
        if (mysqli_query($conn, $sql)) {
            // Para confirmar, habilitarlo
            // echo "<h1><center>Registro Grabado Correctamente</center></h1>";
            echo "<meta http-equiv='refresh' content='0; url=citas.html'>";
        } else {
            echo "Error:" . $sql . "<br>" . mysqli_error($conn);
        }
    }
    

    mysqli_close($conn);

    //permite que se envie la inofrmacion y regrese al login
    // echo "<meta http-equiv='refresh' content='0; url=login-aprendices.html'>";

?>