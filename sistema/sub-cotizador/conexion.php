<?php
    
    $host = 'localhost:3316';
    $user = 'root';
    $password = '';
    $db = 'cotizacion2';

    $conexion = @mysqli_connect($host,$user,$password,$db);

    

    if (!$conexion) {
        echo "Error en la conexion";
    } 

?>