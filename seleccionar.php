<?php
    require('conexion.php');
    require('producto.php');
    require('utilities.php');

    $productoSeleccionado = consulta("SELECT p.nombre,c.nombre,c.precio,t.en_stock FROM prod_y_cat t JOIN producto p
    ON t.producto = p.id_producto
    JOIN categoria c ON t.categoria = c.id_categoria");


    /* SELECT p.nombre,c.nombre,c.precio,t.en_stock FROM prod_y_cat t JOIN producto p
         ON t.producto = p.id_producto
         JOIN categoria c ON t.categoria = c.id_categoria  */

