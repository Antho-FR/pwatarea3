<?php
$conexion = new mysqli('sql209.infinityfree.com', 'if0_35432255', 'uYmiX3GKNogp01p', 'if0_35432255_comentarios_db');

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$result = $conexion->query("SELECT * FROM comentarios ORDER BY fecha DESC");

while ($row = $result->fetch_assoc()) {
    echo '<li class="comment">';
    echo '<p><strong>' . $row['nombre'] . '</strong> (' . $row['fecha'] . '):</p>';
    echo '<p>' . $row['comentario'] . '</p>';
    echo '</li>';
}

$conexion->close();
?>
