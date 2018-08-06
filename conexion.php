<?php


    function consulta($sql) {
        $conexion = mysqli_connect(
            'localhost',
            'root',
            '',
            'caos_bd'
        );
        
        $ResultadoDeLaConsulta = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
        
        if (
            $ResultadoDeLaConsulta === true
            ||
            $ResultadoDeLaConsulta === false
        ) {
            return $ResultadoDeLaConsulta;
        }
        
        $datos = [];
        
        while ($dato = mysqli_fetch_assoc($ResultadoDeLaConsulta)) {
            $datos[] = $dato;
        }
        
        return $datos;
    }
