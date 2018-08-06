<?php

    require('conexion.php');

    $productos = consulta("SELECT * FROM producto");

    $categorias = consulta("SELECT * FROM categoria");

    