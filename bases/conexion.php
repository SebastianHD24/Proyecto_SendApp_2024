<?php

function connection(){
    $servername = "localhost";
    $database = "sendapp";
    $username = "root";
    $password = "";

    //Creando conexion
    $conn = mysqli_connect($servername, $username, $password, $database);

    mysqli_select_db($conn, $database);

    return $conn;
}