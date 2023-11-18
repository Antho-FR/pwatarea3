<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador de Promedios</title>
    <link rel="stylesheet" href="fondo.css">

</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $apellidos = $_POST["apellidos"];
    $nombres = $_POST["nombres"];
    $notas = $_POST["notas"];

    // Validar que las notas estén en el rango de 0 a 20
    $notas_validas = true;
    foreach ($notas as $nota) {
        if ($nota < 0 || $nota > 20) {
            $notas_validas = false;
            break;
        }
    }

    if ($notas_validas) {
        // Calcular el promedio
        $promedio = array_sum($notas) / count($notas);

        // Mostrar los resultados
        echo "<p>Alumno: $apellidos, $nombres</p>";
        echo "<p>Notas: " . implode(", ", $notas) . "</p>";
        echo "<p>Promedio: $promedio</p>";
        echo "<hr>";
    } else {
        echo "<p style='color: red;'>Las notas deben estar en el rango de 0 a 20.</p>";
    }
}
?>

<h2>Calculador de Promedios</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="apellidos">Apellidos:</label>
    <input type="text" name="apellidos" required><br>

    <label for="nombres">Nombres:</label>
    <input type="text" name="nombres" required><br>

    <label for="nota1">Nota 1:</label>
    <input type="number" name="notas[]" min="0" max="20" required><br>

    <label for="nota2">Nota 2:</label>
    <input type="number" name="notas[]" min="0" max="20" required><br>

    <label for="nota3">Nota 3:</label>
    <input type="number" name="notas[]" min="0" max="20" required><br>

    <input type="submit" value="Calcular Promedio">
</form>

</body>
</html>
