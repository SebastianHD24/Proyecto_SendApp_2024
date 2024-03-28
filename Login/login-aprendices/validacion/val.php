<?php

    error_reporting(0); 
    session_start();
    $con = new mysqli("localhost", "root", "", "sendapp"); // Se hace la conexion a la base de datos
    
    if ($con->connect_errno) //Se hace una condicion por si marca algun error al la hora de conectarse la a base de datos
    { 
        echo "Fallor conectar a MySQL: (" . $con_connect_errno . ") " . $con_connect_errno;
        exit();
    }

    @mysqli_query($con, "SET NAMES 'utf8'"); // Esta parte es para admitir caracteres en la base de datos

    //Se hace una condicion pora que en caso tal de que algun campo de la validacion no se complete marque un error
    if ($_POST['documento_identidad'] == null || $_POST['contrasena'] == null){
        echo "<span>Porfavor complete todos los campos</span>";
        }else { //En caso tal de que todos los campos sean compleatados, lo que se ingreso sera guardado en una variable para luego hacer la validacion
        $documento_identidad = $_POST['documento_identidad'];
        $contrasena = $_POST['contrasena'];
        $estado = 1;

        $consulta1 = mysqli_query($con, "SELECT * FROM usuarios WHERE documento_identidad = '$documento_identidad' and contrasena = '$contrasena' and id_rol = 1 and estado = $estado " ); //rol del administarador
        $consulta2 = mysqli_query($con, "SELECT * FROM usuarios WHERE documento_identidad = '$documento_identidad' and contrasena = '$contrasena' and id_rol = 2 and estado = $estado " ); //rol de funcionario
        $consulta3 = mysqli_query($con, "SELECT * FROM usuarios WHERE documento_identidad = '$documento_identidad' and contrasena = '$contrasena' and id_rol = 3 and estado = $estado " ); //rol de aprendiz
        $error_existencia = mysqli_query($con, "SELECT * FROM usuarios WHERE documento_identidad = '$documento_identidad' and contrasena = '$contrasena'  and estado != $estado" ); // Error de estado inactivo

        if (mysqli_fetch_array($consulta1)>0) {
            $_SESSION["documento_identidad"] = $user;
                echo '<script>location.href = "prueba.php"</script>';
        }

            elseif (mysqli_fetch_array($consulta2)>0) {
                $_SESSION["documento_identidad"] = $user;
                    echo '<script>location.href = "prueba2.php"</script>';
            }

                elseif (mysqli_fetch_array($consulta3)>0) {
                    $_SESSION["documento_identidad"] = $user;
                    echo '<script>location.href = "prueba3.php"</script>';
                }

                    elseif (mysqli_fetch_array($error_existencia)>0) {
                        echo "Usuario Inactivo";
                      //  echo '<script> location.href = "../yo.html"</script>';
                    }

                        else{
                            echo '<script> alert("Usuario o contraseña incorrectas") </script>';
                            echo '<script>location.href = "../login-aprendices.html"</script>';

                        }

        

        
        }
        
    
?>