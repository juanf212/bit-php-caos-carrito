<?php

  /* require('conexion.php');

    $productos = consulta("SELECT * FROM producto"); */

    require('producto.php');
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Efecto Caos - Home </title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
    <!-- 1. nav bar -->
      <?=require('navegacion.php');?>
    <!-- 2. categorias productos -->
    <div class="container">
    <div class="row">
            <!-- 1.1. Columna boton Home -->
            <div class="col"><h5 class="mt-3">Bufandas</h5></div>
            <!-- 1.2. Columna boton Home -->
            <div class="col"><h5 class="mt-3">Turbantes</h5></div>
            <!-- 1.3. Columna boton Home -->
            <div class="col"><h5 class="mt-3">Accesorios</h5></div>
            <!-- 1.4. Columna boton Home -->
            <div class="col-md-auto"><h5 class="mt-3">Arte</h5></div>
    </div>
    </div>
    <!-- 3. cards productos -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php foreach($productos as $producto) :?>

                  <div class="card mr-3 mt-3" style="width: 23%;display:inline-block;">
                    <img class="card-img-top" src="<?= $producto['id_producto'] ?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"><?= $producto['nombre'] ?></h5>
                      <a href="detalle.php?id=<?= $producto['id_producto'] ?> " class="btn btn-primary">Seleccionar</a> <!-- data-toggle="modal" data-target="#modal<?= $producto['id_producto'] ?>" -->
                    </div>
                  </div>


                  <div class="modal fade" id="modal<?= $producto['id'] ?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Agregado al carrito de compras</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              &times;
                            </button>
                        </div>
                        <div class="modal-body">
                        <?= $producto['nombre'] ?>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="button" class="btn btn-primary">Ir al carrito</button>
                        </div>
                      </div>              
                    </div>
                  </div>

                <?php endforeach ?>


          </div>
        </div>
    </div>
</body>
</html>