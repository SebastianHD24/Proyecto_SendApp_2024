<?php

function connection(){
    $servername = "15.235.119.22";
    $database = "sendappc_sendapp";
    $username = "sendappc_sendappc";
    $password = "OV6P4Q^^%ItA";

    //Creando conexion
    $conn = mysqli_connect($servername, $username, $password, $database);

    mysqli_select_db($conn, $database);

    return $conn;
}