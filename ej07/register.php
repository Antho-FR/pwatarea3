<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Validar que las contraseñas coincidan
    if ($password !== $confirm_password) {
        echo "Las contraseñas no coinciden. Por favor, inténtelo de nuevo.";
    } else {
        // Almacenar los datos del usuario en un "arreglo"
        $usuario = [
            "nombre" => $nombre,
            "correo" => $correo,
            "password" => $password
        ];

        // Aquí deberías conectar a tu base de datos y almacenar los datos del usuario.
        // Este es solo un ejemplo básico sin conexión a base de datos.
        // En un entorno de producción, utiliza consultas preparadas para prevenir SQL injection.

        echo "¡Registro exitoso! Usuario: " . $usuario["nombre"];
    }
}
?>
