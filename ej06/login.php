<link rel="stylesheet" href="fondo.css">
<?php
session_start();

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

// Buscar al usuario en la base de datos
$sql = "SELECT * FROM usuarios WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "¡Inicio de sesión exitoso!";
        // Aquí puedes redirigir al usuario a una página de inicio de sesión exitoso
    } else {
        echo "Nombre de usuario o contraseña incorrectos.";
    }
} else {
    echo "Nombre de usuario o contraseña incorrectos.";
}

$conn->close();
?>
