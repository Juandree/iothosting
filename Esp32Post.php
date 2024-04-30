<?php
include 'conexion.php';

if ($con) {
    echo "Conexion con base de datos exitosa! ";

    if (isset($_POST['humedad_suelo'])) {
        $humedad_suelo = $_POST['humedad_suelo'];

        date_default_timezone_set('America/Bogota');
        $fecha_actual = date("Y-m-d H:i:s");

        // Consulta para insertar datos en la tabla 'sensorHumedadSuelo'
        $consulta = "INSERT INTO sensorHumedadSuelo (humedad_suelo, fecha_actual) VALUES ('$humedad_suelo', '$fecha_actual')";

        // Ejecutar la consulta
        $resultado = mysqli_query($con, $consulta);

        // Verificar si la consulta se ejecutó con éxito
        if ($resultado) {
            echo " Registro en base de datos OK! ";
        } else {
            echo " Falla! Registro BD";
        }
    } else {
        echo "Falta el parámetro 'humedad_suelo'.";
    }
} else {
    echo "Falla! Conexion con Base de datos ";
}
?>
