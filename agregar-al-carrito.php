<?php
    require('conexion.php');
    require('utilities.php');

    $medidaId = $_GET['medida'];
    $productoId = $_GET['producto'];


    consulta("INSERT INTO carrito (producto_id, precio_id) VALUES ('$medidaId', '$productoId')");

    redireccionar('carrito.php');