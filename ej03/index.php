<?php
session_start();

// Verificar si la variable de sesión existe, si no, inicializarla.
if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 0;
}

// Incrementar el contador de visitas cada vez que se carga la página.
$_SESSION['visits']++;

// Mostrar el número de visitas.
$visits = $_SESSION['visits'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulario de Contacto</title>
</head>
<body>
    <div class="container">
        
        <form id="contactForm" onsubmit="return validateForm()">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>



 <h1>contador de visitas</h1>
 <?php
if (isset($_COOKIE[ 'visita' ])){
$visita = $_COOKIE['visita'] + 1;
setcookie('visita', $visita, time() + 3600);
echo "Es tu visita n° " . $visita;
}else{
$visita = 1;
setcookie('visita', $visita, time() + 3600);
echo "Es tu primera visita";
}
?>

    <script src="script.js"></script>
</body>
</html>
