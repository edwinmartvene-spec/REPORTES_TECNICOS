<?php
$conexion = new mysqli("localhost", "root", "", "soporte_tecnico");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];
$tecnico = $_POST['tecnico'];

$sql = "INSERT INTO reportes (titulo, descripcion, fecha_reporte, tecnico) 
        VALUES ('$titulo', '$descripcion', '$fecha', '$tecnico')";

if ($conexion->query($sql) === TRUE) {
    echo "<p>Reporte guardado correctamente.</p>";
    echo "<a href='registro.html'>Registrar otro</a>";
} else {
    echo "Error: " . $conexion->error;
}

$conexion->close();
?>
