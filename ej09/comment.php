<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $nombre = $_POST["nombre"];
    $comentario = $_POST["comentario"];

    // Validar datos (puedes agregar más validaciones según tus necesidades)
    if (empty($nombre) || empty($comentario)) {
        echo "Nombre y comentario son campos obligatorios.";
    } else {
        // Conectar a la base de datos
        $conexion = new mysqli('sql209.infinityfree.com', 'if0_35432255', 'uYmiX3GKNogp01p', 'if0_35432255_comentarios_db');
        
        // Verificar la conexión
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        // Insertar comentario en la base de datos
        $sql = "INSERT INTO comentarios (nombre, comentario) VALUES ('$nombre', '$comentario')";
        if ($conexion->query($sql) === TRUE) {
            echo "Comentario publicado con éxito.";
        } else {
            echo "Error al publicar el comentario: " . $conexion->error;
        }

        // Cerrar la conexión
        $conexion->close();
    }
}
?>
