<?php 
    require('conexion.php');
    $id = $_GET['id'];
    $productoSeleccionado = consulta(" SELECT * FROM productos WHERE id='$id' ");
    $productoSeleccionado = $productoSeleccionado[0];

    require('vistas/carrito.php');