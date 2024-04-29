<?php
    include("../conexion.php");
    $conn = connection();

    //chequeando la conexion
    if (!$conn) {
        die("Conexion Fallo: ".mysqli_connect_error());
    }

    // Este echo es para verificar si nos conectamos satisfactoriamente
    // echo "<h1><center>Conectado Satisfactoriamente</h1></center>";

    //Tomando Datos del formulario html para luego ser enviados a la base de datos
    $documento_identidad = $_POST['documento_identidad'];
    $contrasena = $_POST['contrasena'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $celular = $_POST['celular'];
    $programa = $_POST['programa'];
    $ficha = $_POST['ficha'];
    $tipo_documento = $_POST['tipo_documento'];
    //dos atributos predeterminados que luego el admin los podra cambiar
    $estado = 1;
    $id_rol = 3;

    // Verificar si el rol existe en la base de datos
    $query = "SELECT * FROM roles WHERE id_rol = '$id_rol'";
    $result = mysqli_query($conn, $query);

    // Verificar que el documento no este en la base de datos
    $queryDocumento = "SELECT documento_identidad FROM usuarios WHERE documento_identidad = '$documento_identidad'";
    $resultDocumento = mysqli_query($conn, $queryDocumento);

    //encritar la contraseña
    $passwordHash = password_hash($contrasena, PASSWORD_BCRYPT);
    
    if (mysqli_num_rows($resultDocumento) > 0) {
        // El usuario ya está registrado
        echo "<script>alert('El usuario ya está registrado en la base de datos. Por favor, contacte al administrador para activar su cuenta.')</script>";
        echo "<meta http-equiv='refresh' content='0; url=login-aprendices.html'>";
    } else if(strlen(strval($documento_identidad)) < 8 || strlen($contrasena) < 6){
        echo "<script>alert('Verifique que la longitud de la contraseña sea mayor a 6 digitos y verifique que el numero de documento sea mayor a 10 digitos.')</script>";
        echo "<meta http-equiv='refresh' content='0; url=login-aprendices.html'>";
    } else {
        if (mysqli_num_rows($result) > 0) {
            // El rol existe, continuar con la inserción
            $sql = "INSERT INTO usuarios (tipo_documento, documento_identidad, contrasena, nombres, apellidos, correo, celular, programa, ficha, estado, id_rol) VALUES ('$tipo_documento', '$documento_identidad', '$passwordHash', '$nombres', '$apellidos', '$correo', '$celular', '$programa', '$ficha', '$estado', '$id_rol')";
            echo "<meta http-equiv='refresh' content='0; url=login-aprendices.html'>";
            // Condicion para verificar el registro en la bd
            if (mysqli_query($conn, $sql)) {
                // Para confirmar, habilitarlo
                // echo "<h1><center>Registro Grabado Correctamente</center></h1>";
                echo "<script>alert('Se ha registrado correctamente.')</script>";
            } else {
                echo "Error:" . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
    mysqli_close($conn);

    //permite que se envie la inofrmacion y regrese al login
    // echo "<meta http-equiv='refresh' content='0; url=login-aprendices.html'>";

?>