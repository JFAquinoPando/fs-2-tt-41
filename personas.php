<?php
//header("Content-Type: application/json");
$conexion = new mysqli("localhost", "root", "", "wp40");
$resultado = $conexion->query("SELECT * FROM personas");

$personas = [];
while ($fila = $resultado->fetch_assoc()) {
    $personas[] = $fila;
}
?>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Aceptó los términos</th>
        </tr>
    </thead>
    <tbody>
        <?php
        //echo json_encode($personas);
        foreach ($personas as $clave => $persona) {
            $condiciones = $persona["terminos"] == 1 ? "si" : "no";
            echo "
            <tr>
                <td>{$persona["id"]}</td>
                <td>{$persona["nombre"]}</td>
                <td>{$persona["fecha"]}</td>
                <td>{$condiciones}</td>
            <tr>
            ";
        }
        ?>
    </tbody>
</table>