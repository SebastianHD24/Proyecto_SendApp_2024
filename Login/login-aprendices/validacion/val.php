<?php
    error_reporting(0); 
    session_start();

    include("../../conexion.php"); //importamos la conexion que se hizo global para AHORRAR LINEAS DE CODIGO
    $conn = connection();

    //chequeando la conexion
    if (!$conn) {
        die("Conexion Fallo: ".mysqli_connect_error()); // Si hay error de conexion marca error
    }

    @mysqli_query($conn, "SET NAMES 'utf8'"); // Esta parte es para admitir caracteres en la base de datos

    //Se hace una condicion pora que en caso tal de que algun campo de la validacion no se complete marque un error
    if ($_POST['documento_identidad'] == null || $_POST['contrasena'] == null){
        echo json_encode(array('success' => 1));
        }else { //En caso tal de que todos los campos sean compleatados, lo que se ingreso sera guardado en una variable para luego hacer la validacion
        $documento_identidad = $_POST['documento_identidad'];
        $contrasena = $_POST['contrasena'];
        $estado = 1;

        $consulta1 = mysqli_query($conn, "SELECT * FROM usuarios WHERE documento_identidad = '$documento_identidad' and contrasena = '$contrasena' and estado = $estado and id_rol = (SELECT id_rol FROM roles WHERE nombre_rol = 'administrador') " ); //rol del administarador
        $consulta2 = mysqli_query($conn, "SELECT * FROM usuarios WHERE documento_identidad = '$documento_identidad' and contrasena = '$contrasena' and estado = $estado and id_rol = (SELECT id_rol FROM roles WHERE nombre_rol = 'funcionario') " ); //rol de funcionario
        $consulta3 = mysqli_query($conn, "SELECT * FROM usuarios WHERE documento_identidad = '$documento_identidad' and contrasena = '$contrasena' and estado = $estado and id_rol = (SELECT id_rol FROM roles WHERE nombre_rol = 'aprendiz') " ); //rol de aprendiz
        $error_existencia = mysqli_query($conn, "SELECT * FROM usuarios WHERE documento_identidad = '$documento_identidad' and contrasena = '$contrasena' and estado != $estado" ); // Error de estado inactivo

        if (mysqli_fetch_array($consulta1)>0) {
            $_SESSION["documento_identidad"] = $documento_identidad;
            echo json_encode(array('success' => 2));
        } elseif (mysqli_fetch_array($consulta2)>0) {
            $_SESSION["documento_identidad"] = $documento_identidad;
            echo json_encode(array('success' => 3));
        } elseif (mysqli_fetch_array($consulta3)>0) {
            $_SESSION["documento_identidad"] = $documento_identidad;
            echo json_encode(array('success' => 6));
        } elseif (mysqli_fetch_array($error_existencia)>0) {
            echo json_encode(array('success' => 4));
        } else{
            echo json_encode(array('success' => 5));
        }
        }
        mysqli_close($conn);
?>