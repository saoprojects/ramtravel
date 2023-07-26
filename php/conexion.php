<?php
$servername = "localhost";
$username = "id21077128_rikito";
$password = "Rickydo10!";
$dbname = "id21077128_familia";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexión
if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}
?>
