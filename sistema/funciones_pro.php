<?php
    function subir_imagen(){
        if (isset($_FILES["foto"])) {
            $extension = explode('.',$_FILES["foto"]['name']);
            $nuevo_nombre = rand(). '.' . $extension[1];
            $ubicacion = './img/productos/'.$nuevo_nombre;
        }
    }
?>