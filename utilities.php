<?php

    function redireccionar($archivo) {
        header('Location: ' . $archivo);
        exit();
    }

