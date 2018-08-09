<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Efecto Caos - Carrito </title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <?php require('navegacion.php'); ?>

    <div class="container">
        <!-- fila principal -->
        <div class="row">
            <!-- columna productos -->
            <div class="col-7">
                <!-- fila # articulos -->
                <div class="row">
                    <h2 class="mr-md-3 mt-3">TU CARRITO</h4>
                    <h4 class="mt-3"> <?= count($productosCarrito); ?> articulos</h4>
                </div>
                <!-- fila cards articulos -->

                <?php foreach($productosCarrito as $producto) :?>
                    <div class="row">
                        <div class="col">
                            <div class="card mt-4" style="width: 25rem;display:inline-block;">
                                <img class="card-img-top" src="Imagenes/<?= $producto['imagen']?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $producto['nombre_producto']?></h5>
                                    <!-- <p class="card-text text-secondary">Tamaño</p> -->
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Tamaño</label>
                                            <span class="form-control"><?= $producto['nombre_precio']?></span>
                                        </div>
                                        
                                    </div>
                                    <p class="card-text text-secondary">Precio: $<?= number_format($producto['precio']) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                <div class="row">
                    <div class="col">
                        <a href="#" class="btn btn-primary mt-4">Continuar</a>
                    </div>
                </div>   
            </div>
            <!-- columna card compra -->
            <div class="col">
                <div class="row">
                        <div class="col-md-12">
                            <div class="card mt-4" style="width: 25rem;display:inline-block;">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary">Continuar</a>
                                    <h5 class="card-title mt-4">Resumen del pedido</h5>
                                    <p class="card-text text-secondary"><?= count($productosCarrito);?> productos </p>
                                    <p class="card-text text-secondary">Subtotal productos</p>
                                    <p class="card-text text-secondary">Gastos de evío</p>
                                    <h5 class="card-title">Total: </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
   
</body>
</html>