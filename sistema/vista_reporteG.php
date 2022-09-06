<?php

session_start();
include "../conexion.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTAS</title>
    <style type="text/css">
        .aimg{
            width: 700px;
        }
    </style>
</head>

<body>

<?php
    $directory="img/actas/";
    $dirint = dir($directory);

    while (($archivo = $dirint->read()) != false)
    {
        if (strpos($archivo,'jpg') || strpos($archivo,'jpeg')){
            $image = $directory. $archivo;
            echo'<img style="width:700px" src='.$image. '>';
        }
    }
    $dirint->close();
?>
                
            
    
</body>
</html>