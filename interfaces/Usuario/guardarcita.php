<?php 
include("../conexion.php");
$conn= connection();

if(!$conn) {
    die("Conexion Fallo ". mysqli_connect_error());
}


$datos = $_POST['datos'];



$sql="INSERT INTO prueba (datos) VALUES ('$datos')";

if (mydqli_query($conn,$sql)) {
     echo("registro exitoso")
     
}





?>