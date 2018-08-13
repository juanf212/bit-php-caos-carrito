<?php 
    
    require('conexion.php');
    require('sesion.php');

    
    $productosCarrito = consulta("SELECT *, productos.nombre as nombre_producto, precios.nombre as nombre_precio FROM carrito
    JOIN productos ON productos.id=carrito.producto_id
    JOIN precios ON precios.id=carrito.precio_id WHERE carrito.cliente='$clienteId' ");

    require('vistas/carrito.php');