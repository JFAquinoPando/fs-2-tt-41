<?php
$archivo = fopen("leer.txt", "a") or die("No se puede abrir el archivo!");
$txt = "\nHola a todos 🍒";
fwrite($archivo, $txt);
fclose($archivo);

//$resultado = fread($archivo, filesize("leer.txt"));
$resultado = file_get_contents("leer.txt");

echo "Archivo escrito correctamente.";
echo "Contenido del archivo: " . $resultado;

unlink("leer.txt");

echo "Archivo eliminado correctamente.";
