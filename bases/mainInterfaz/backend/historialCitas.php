<?php
    include("../../conexion.php");
    $conn = connection();
    session_start();
    //chequeando la conexion
    if (!$conn) {
        die("Conexion Fallo: ".mysqli_connect_error());
    }
    
    $historial_citas = $_POST['historial_citas'];
    $documento_identidad = $_SESSION['documento_identidad'];

    function fecha() {
        // Establecer la zona horaria deseada
        $zonaHoraria = new DateTimeZone('America/Bogota'); // Cambia 'America/Bogota' por la zona horaria que desees
        // Obtener la fecha actual en la zona horaria especificada
        $fechaActual = new DateTime('now', $zonaHoraria);
        // Formatear la fecha en el formato deseado (año/mes/día)
        $fechaCompleta = $fechaActual->format('Y/m/d');
        // Devolver la fecha formateada
        return $fechaCompleta;
    }
    // Ejemplo de uso
    $fecha_actual = fecha(); 
    $fecha_ayer = date('Y/m/d', strtotime('-1 day', strtotime($fecha_actual)));
    $ultima_semana = date('Y/m/d', strtotime('-7 day', strtotime($fecha_actual)));
    $ultimo_mes = date('Y/m/d', strtotime('-1 month', strtotime($fecha_actual)));
    $ultimo_anio = date('Y/m/d', strtotime('-1 year', strtotime($fecha_actual)));
    


    if ($historial_citas == "hoy"){
        $sql = "SELECT 
        citas.*, 
        servicios.nombre_servicio, 
        usuarios.nombres AS nombre_funcionario_cita,
        usuarios.apellidos AS apellido_funcionario_cita
        FROM citas 
        INNER JOIN servicios ON citas.id_servicio = servicios.id_servicio 
        INNER JOIN usuarios ON citas.usuario_f = usuarios.documento_identidad
        WHERE citas.documento_usuario = '$documento_identidad' AND citas.fecha = '$fecha_actual'";        
        $resultado = mysqli_query($conn, $sql);
        $rows = array();
        while ($row = mysqli_fetch_assoc($resultado)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }else if ($historial_citas == "ayer"){
        $sql = "SELECT 
        citas.*, 
        servicios.nombre_servicio, 
        usuarios.nombres AS nombre_funcionario_cita,
        usuarios.apellidos AS apellido_funcionario_cita
        FROM citas 
        INNER JOIN servicios ON citas.id_servicio = servicios.id_servicio 
        INNER JOIN usuarios ON citas.usuario_f = usuarios.documento_identidad
        WHERE citas.documento_usuario = '$documento_identidad' AND citas.fecha = '$fecha_ayer'";   
        $resultado = mysqli_query($conn, $sql);
        $rows = array();
        while ($row = mysqli_fetch_assoc($resultado)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }else if ($historial_citas == "semana"){
        $sql = "SELECT 
        citas.*, 
        servicios.nombre_servicio, 
        usuarios.nombres AS nombre_funcionario_cita,
        usuarios.apellidos AS apellido_funcionario_cita
        FROM citas 
        INNER JOIN servicios ON citas.id_servicio = servicios.id_servicio 
        INNER JOIN usuarios ON citas.usuario_f = usuarios.documento_identidad
        WHERE citas.documento_usuario = '$documento_identidad' AND citas.fecha BETWEEN '$ultima_semana' and '$fecha_actual'";   
        $resultado = mysqli_query($conn, $sql);
        $rows = array();
        while ($row = mysqli_fetch_assoc($resultado)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }else if ($historial_citas == "mes"){
        $sql = "SELECT 
        citas.*, 
        servicios.nombre_servicio, 
        usuarios.nombres AS nombre_funcionario_cita,
        usuarios.apellidos AS apellido_funcionario_cita
        FROM citas 
        INNER JOIN servicios ON citas.id_servicio = servicios.id_servicio 
        INNER JOIN usuarios ON citas.usuario_f = usuarios.documento_identidad
        WHERE citas.documento_usuario = '$documento_identidad' AND citas.fecha BETWEEN '$ultimo_mes' AND '$fecha_actual'";
        $resultado = mysqli_query($conn, $sql);
        $rows = array();
        while ($row = mysqli_fetch_assoc($resultado)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }else if($historial_citas == "anio"){
        $sql = "SELECT 
        citas.*, 
        servicios.nombre_servicio, 
        usuarios.nombres AS nombre_funcionario_cita,
        usuarios.apellidos AS apellido_funcionario_cita
        FROM citas 
        INNER JOIN servicios ON citas.id_servicio = servicios.id_servicio 
        INNER JOIN usuarios ON citas.usuario_f = usuarios.documento_identidad
        WHERE citas.documento_usuario = '$documento_identidad' AND citas.fecha BETWEEN '$ultimo_anio' AND '$fecha_actual'";
        $resultado = mysqli_query($conn, $sql);
        $rows = array();
        while ($row = mysqli_fetch_assoc($resultado)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }else if($historial_citas == "todos"){
        $sql = "SELECT 
        citas.*, 
        servicios.nombre_servicio, 
        usuarios.nombres AS nombre_funcionario_cita,
        usuarios.apellidos AS apellido_funcionario_cita
         FROM citas 
         INNER JOIN servicios ON citas.id_servicio = servicios.id_servicio 
         INNER JOIN usuarios ON citas.usuario_f = usuarios.documento_identidad
         WHERE citas.documento_usuario = '$documento_identidad'";
        $resultado = mysqli_query($conn, $sql);
        $rows = array();
        while ($row = mysqli_fetch_assoc($resultado)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }else{
        echo "Error de conexión";
    }
?>