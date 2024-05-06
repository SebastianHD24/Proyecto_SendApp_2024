<?php
    error_reporting(0); 
    session_start();
    //llamamos el php que hace la conexion con la base de datos
    include("../../../../Proyecto_SendApp_2024/bases/conexion.php");
    $conn = connection();

    //comprueba si fallo la conexion
    if (!$conn) {
        die("Conexion Fallo: ".mysqli_connect_error());
    }
    //Esta parte es para admitir caracteres especiales
    @mysqli_query($conn, "SET NAMES 'utf8'");

    //Condicional para verificar que los campos no estén vacíos, en caso de estarlos mandar un 1
    if ($_POST['documento_identidad'] == null || $_POST['contrasena'] == null){
        echo json_encode(array('success' => 1));
    } else {
        //Obtener los datos de los input
        $documento_identidad = $_POST['documento_identidad'];
        $contrasena = $_POST['contrasena'];
        $estado = 1;

        //Trae contraseña encriptada que coincida con el documento y la almacena en una variable 
        $resultado = mysqli_query($conn, "SELECT contrasena FROM usuarios WHERE documento_identidad = '$documento_identidad'");
        $row = mysqli_fetch_assoc($resultado);
        $contrasena_hash = $row['contrasena'];

        //Verifica con el password_verify que la contraseña encriptada y la contraseña del input sean correctas
        if (password_verify($contrasena, $contrasena_hash)){
            //Consulta de administrador
            $consulta1 = mysqli_query($conn, "SELECT * FROM usuarios WHERE documento_identidad = '$documento_identidad' and estado = $estado and id_rol = (SELECT id_rol FROM roles WHERE nombre_rol = 'administrador')");
            //Verifica si hay resultados de la consulta y si es asi ejecuta lo que tiene dentro y termina la ejecución del PHP
            if (mysqli_num_rows($consulta1) > 0) {
                //Guarda el documento en la variable $_SESSION que puede ser utilizada en otros PHP
                $_SESSION["documento_identidad"] = $documento_identidad;
                //Manda una respuesta
                echo json_encode(array('success' => 2));
                //Termina ejecución
                exit(); 
            }

            //Consulta funcionario
            $consulta2 = mysqli_query($conn, "SELECT * FROM usuarios WHERE documento_identidad = '$documento_identidad' and estado = $estado and id_rol = (SELECT id_rol FROM roles WHERE nombre_rol = 'funcionario')");
            if (mysqli_num_rows($consulta2) > 0) {
                $_SESSION["documento_identidad"] = $documento_identidad;
                echo json_encode(array('success' => 3));
                exit(); 
            }

            //Consulta aprendiz
            $consulta3 = mysqli_query($conn, "SELECT * FROM usuarios WHERE documento_identidad = '$documento_identidad' and estado = $estado and id_rol = (SELECT id_rol FROM roles WHERE nombre_rol = 'aprendiz')");
            if (mysqli_num_rows($consulta3) > 0) {
                $_SESSION["documento_identidad"] = $documento_identidad;
                echo json_encode(array('success' => 4));
                exit(); 
            }

            //Consulta para verificar que el usuario este inactivo
            $error_existencia = mysqli_query($conn, "SELECT * FROM usuarios WHERE documento_identidad = '$documento_identidad' and estado != $estado" );
            if (mysqli_num_rows($error_existencia) > 0) {
                echo json_encode(array('success' => 5));
                exit();
            }
        } else {
            echo json_encode(array('success' => 6));
        }
        
    mysqli_close($conn);
    }