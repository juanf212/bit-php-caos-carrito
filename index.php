<?php
  require('conexion.php');
  $productos = consulta("SELECT * FROM productos");
  
  require('vistas/index.php');