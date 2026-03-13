<?php
$datos = json_encode($_POST) . " Fecha: " . date("Y-m-d H:i:s");
$file = fopen("datos.txt", "a");
fwrite($file, $datos . "\n");
fclose($file);

if ($_POST["nombre"] == "Pepe") {

    echo "El nombre es falso, ingresa otro valor.";

} else {



    $conexion = new mysqli("localhost", "root", "", "wp40");


    $nombre = $_POST["nombre"];
    $fecha = $_POST["fecha"];
    $terminos = $_POST["terminos"] == "on";

    $conexion->query(
        "INSERT INTO personas (nombre, fecha, terminos) values ('$nombre', '$fecha', '$terminos')"
    );
    echo "Datos guardados correctamente.";

}