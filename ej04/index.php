<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Adivinanzas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
    </style>
</head>
<body>

<?php
// Inicializar variables
$min = 1;
$max = 10;
$respuesta = rand($min, $max);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Si se ha enviado el formulario

    $adivinanza = $_POST["adivinanza"];

    if ($adivinanza == $respuesta) {
        echo "<h2>¡Felicidades! Has adivinado el número.</h2>";
        echo "<script>alert('¡Felicidades! Has adivinado el número.');</script>";

    } else {
        echo "<p>¡Incorrecto! Inténtalo de nuevo.</p>";
    }
}
?>





<h1>Adivina el número</h1>
<p>Elige un número entre <?php echo $min; ?> y <?php echo $max; ?>. ¿Serán iguales?</p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="adivinanza">Tu Adivinanza:</label>
    <input type="number" name="adivinanza" id="adivinanza" required>
    <br><br>
    <input type="submit" value="Adivinar">
</form>

</body>
</html>
