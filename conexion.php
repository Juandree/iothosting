<?php
$user = "uwjqxlw14rvst7hr"; // Usuario de la base de datos
$pass = "3DY8nWRCftzNC3kGbGWb"; // Contraseña de la base de datos
$server = "b13myajajcjmzatj1ntn-mysql.services.clever-cloud.com"; // Servidor de la base de datos
$db ="b13myajajcjmzatj1ntn"; // Nombre de la base de datos
$port = 3306; // Puerto de la base de datos

// Crear conexión
$con = mysqli_connect($server, $user, $pass, $db, $port);

// Verificar conexión
if (mysqli_connect_errno()) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
