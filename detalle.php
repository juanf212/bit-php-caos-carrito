<?php 
    
    require('conexion.php');
    require('sesion.php');


    $id = $_GET['id'];
    $producto = consulta(" SELECT * FROM productos WHERE id='$id' ");
    $producto = $producto[0];

    $medidas = consulta(" SELECT * FROM precios WHERE producto_id='$id' ");

    require('vistas/detalle.php');