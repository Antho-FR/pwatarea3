<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="fondo.css">
</head>
<body>

<h2>Registro</h2>
<form action="registrar_usuario.php" method="post">
    <label for="username">Usuario:</label><br>
    <input type="text" id="username" name="username" required><br>
    <label for="password">Contraseña:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Registrarse">
</form>

<p>¿Ya tienes una cuenta? <a href="index.php">Inicia sesión</a>.</p>

</body>
</html>
