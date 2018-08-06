<?php

    require('conexion.php');

    $productos = consulta("SELECT * FROM productos");

    $categorias = consulta("SELECT * FROM categorias");

    