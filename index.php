<?php
  require('conexion.php');
  session_start();


  if (!isset($_SESSION['cliente'])) {
    $_SESSION['cliente'] = md5(time());
  }

  $productos = consulta("SELECT * FROM productos");
  
  require('vistas/index.php');