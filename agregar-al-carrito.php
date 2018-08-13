<?php
    require('conexion.php');
    require('utilities.php');
    require('sesion.php');

    $clienteId = $_SESSION['cliente'];

    $medidaId = $_GET['medida'];
    $productoId = $_GET['producto'];


    consulta("INSERT INTO carrito (producto_id, precio_id, cliente) VALUES ('$productoId', '$medidaId', '$clienteId')");

    redireccionar('carrito.php');