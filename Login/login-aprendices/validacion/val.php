<?php

    error_reporting(0);
    session_start();
    $con = new mysqli("localhost", "root", "", "sendapp"); 
    
    if ($con->connect_errno)
    { 
        echo "Fallor conectar a MySQL: (" . $con_connect_errno . ") " . $con_connect_errno;
        exit();
    }

    @mysqli_query($con, "SET NAMES 'utf8'");
    if ($_POST['documento_identidad'] == null || $_POST['contrasena'] == null){
        echo "<span>Porfavor complete todos los campos</span>";
        }else {
        $documento_identidad = $_POST['documento_identidad'];
        $contrasena = $_POST['contrasena'];
        $estado = 1;

        $consulta1 = mysqli_query($con, "SELECT * FROM usuarios WHERE documento_identidad = '$documento_identidad' and contrasena = '$contrasena' and id_rol = 1 and estado = $estado " );
        $consulta2 = mysqli_query($con, "SELECT * FROM usuarios WHERE documento_identidad = '$documento_identidad' and contrasena = '$contrasena' and id_rol = 2 and estado = $estado " );
        $consulta3 = mysqli_query($con, "SELECT * FROM usuarios WHERE documento_identidad = '$documento_identidad' and contrasena = '$contrasena' and id_rol = 3 and estado = $estado " );
        $error_existencia = mysqli_query($con, "SELECT * FROM usuarios WHERE documento_identidad = '$user' and contrasena = '$contrasena'  and estado != $estado" );

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
                        echo $contrasena;
                        echo "Usuario Inactivo";
                      //  echo '<script> location.href = "../yo.html"</script>';
                    }

                        else{
                            echo '<span> Usuario o contraseña incorrectas </span>';
                        }

        

        
        }
        echo "nooo";
    
?>