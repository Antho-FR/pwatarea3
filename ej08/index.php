
<?php
$productos = array(
    array(
        'nombre' => 'Producto 1',
        'imagen' => 'img/boxengasse.png',
        'descripcion' => 'Breve descripcion',
        'precio' => '$15.000'
    ),
    array(
        'nombre' => 'Producto 2',
        'imagen' => 'img/englishrose.png',
        'descripcion' => 'Descripción del Producto 2',
        'precio' => '$25.000'
    ),
    array(
        'nombre' => 'Producto 3',
        'imagen' => 'img/knocknap.png',
        'descripcion' => 'Descripción del Producto 3',
        'precio' => '$35.000'
    ),
    array(
        'nombre' => 'Producto 4',
        'imagen' => 'img/lanight.png',
        'descripcion' => 'Descripción del Producto 4',
        'precio' => '$18.000'
    ),
    array(
        'nombre' => 'Producto 5',
        'imagen' => 'img/silverall.png',
        'descripcion' => 'Descripción del Producto 5',
        'precio' => '$35.000'
    ),

    array(
        'nombre' => 'Producto 6',
        'imagen' => 'img/skinglam.png',
        'descripcion' => 'Descripción del Producto 3',
        'precio' => '$18.000'
    ),

    // Añade los demás productos siguiendo el mismo formato
);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <script src="app.js" async></script>
    <title>| Carrito de compras | </title>
</head>

<body>
    <header>
        <h1>Carrito de compras</h1>
    </header>


       
        <section class="contenedor">
            <div class="contenedor-items">
                <?php foreach ($productos as $producto) { ?>
                    <div class="item">
                        <span class="titulo-item"><?php echo $producto['nombre']; ?></span>
                        <img src="<?php echo $producto['imagen']; ?>" alt="" class="img-item">
                        <p><?php echo $producto['descripcion']; ?></p>
                        <span class="precio-item"><?php echo $producto['precio']; ?></span>
                        <button class="boton-item">Agregar al Carrito</button>
                    </div>
                <?php } ?>
            </div>


        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">

            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>
</body>

</html>