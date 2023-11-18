<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Galería de Imágenes</title>
</head>
<body>
    <div class="gallery">
        <?php
        $imageDirectory = "images/";
        $images = glob($imageDirectory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

        foreach ($images as $image) {
            echo '<img src="' . $image . '" alt="Imagen">';
        }
        ?>
    </div>
</body>
</html>
