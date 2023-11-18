<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="fondo.css">

</head>
<body>

<h2>Iniciar sesión</h2>
<form action="login.php" method="post">
    <label for="username">Usuario:</label><br>
    <input type="text" id="username" name="username" required><br>
    <label for="password">Contraseña:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Iniciar sesión">
</form>

<p>¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a>.</p>

</body>
</html>
