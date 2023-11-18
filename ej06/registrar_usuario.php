<link rel="stylesheet" href="fondo.css">
<?php
// Conexión a la base de datos
$servername = "sql209.infinityfree.com";
$username = "if0_35432255";
$password = "uYmiX3GKNogp01p";
$dbname = "if0_35432255_comentarios_db";


$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Validaciones
if (strlen($username) <= 6) {
    echo "El nombre de usuario debe tener más de 6 caracteres.";
} elseif (strlen($password) < 6) {
    echo "La contraseña debe tener al menos 6 caracteres.";
} elseif (!preg_match("#[0-9]+#", $password)) {
    echo "La contraseña debe contener al menos un número.";
} elseif (!preg_match("#[A-Z]+#", $password)) {
    echo "La contraseña debe contener al menos una letra mayúscula.";
} else {
    // Hash de la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insertar usuario en la base de datos
    $sql = "INSERT INTO usuarios (username, password) VALUES ('$username', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado exitosamente.";
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }
}

$conn->close();
?>
