<?php
    require('conexion.php');
    require('utilities.php');

    $medidaId = $_GET['medida'];
    $productoId = $_GET['producto'];


    consulta("INSERT INTO carrito (producto_id, precio_id) VALUES ('$productoId', '$medidaId')");

    redireccionar('carrito.php');