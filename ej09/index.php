<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comentarios</title>
    <link rel="stylesheet" href="fondo.css">

    <style>
        /* Estilos CSS para la presentación de los comentarios (puedes personalizar según tus preferencias) */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        #comments {
            list-style-type: none;
            padding: 0;
        }
        .comment {
            border: 1px solid #ccc;
            margin: 10px 0;
            padding: 10px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        // Función para cargar y mostrar comentarios de forma asíncrona
        function cargarComentarios() {
            $.ajax({
                url: "cargar_comentarios.php", // Archivo PHP para cargar comentarios desde la base de datos
                type: "GET",
                success: function(data) {
                    $("#comments").html(data); // Actualizar el contenido de la lista de comentarios
                }
            });
        }

        // Actualizar comentarios cada 5 segundos (puedes ajustar según tus necesidades)
        setInterval(cargarComentarios, 5000);

        // Función para enviar el formulario de comentarios de forma asíncrona
        $(document).ready(function() {
            $("#commentForm").submit(function(event) {
                event.preventDefault(); // Evitar el envío del formulario por defecto

                $.ajax({
                    url: "comment.php", // Archivo PHP para procesar el formulario de comentarios
                    type: "POST",
                    data: $(this).serialize(), // Serializar datos del formulario
                    success: function(response) {
                        alert(response); // Mostrar mensaje de éxito o error
                        cargarComentarios(); // Actualizar la lista de comentarios después de publicar uno nuevo
                        $("#commentForm")[0].reset(); // Limpiar el formulario
                    }
                });
            });
        });
    </script>
</head>
<body>
    <h2>Comentarios</h2>
    <ul id="comments">
        <!-- Los comentarios se cargarán aquí de forma dinámica -->
    </ul>
    <h2>Deja un comentario</h2>
    <form id="commentForm" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label for="comentario">Comentario:</label>
        <textarea name="comentario" rows="4" required></textarea>
        <br>
        <input type="submit" value="Publicar comentario">
    </form>
</body>
</html>
