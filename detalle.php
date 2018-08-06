
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Efecto CAOS - Detalle del Producto</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<?php 

require('navegacion.php'); 
require('producto.php');    
?>
<div class="container">
    <div class="row">
            
            <div class="col"><h5 class="mt-3">Bufandas</h5></div>
            
            <div class="col"><h5 class="mt-3">Turbantes</h5></div>
            
            <div class="col"><h5 class="mt-3">Accesorios</h5></div>
            
            <div class="col-md-auto"><h5 class="mt-3">Arte</h5></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card mt-4">
            <img src="<?= $productos[$_GET['id']-1]['imagen'] ?>" class="rounded float-left" alt="Responsive image">
            </div>
        </div>
        <div class="col">
            <div class="card mt-4" style="width: 25rem;display:inline-block;">
            <div class="card-body">
                <h5 class="card-title"><?= $productos[$_GET['id']-1]['nombre'] ?></h5>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Tamaños</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Elige...</option>
                        <?php foreach($productosSeleccionados[$_GET['id']] as $productoSeleccionado) :?>
                        <option value="1"><?= $productoSeleccionado['c.nombre']?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <p class="card-text text-secondary">Precio: </p>
            </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
    

