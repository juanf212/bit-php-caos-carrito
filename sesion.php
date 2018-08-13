<?php

session_start();

if (!isset($_SESSION['cliente'])) {
    header('location:index.php');
    exit();
}

$clienteId = $_SESSION['cliente'];

    