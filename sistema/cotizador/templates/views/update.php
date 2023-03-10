<?php
    // conexion a bases de datos
    $host = 'localhost:3316';
    $user = 'root';
    $password = '';
    $db = 'cotizacion';

    $conexion = @mysqli_connect($host,$user,$password,$db);

    

    if (!$conexion) {
        echo "Error en la conexion";
    } 


    $sql = "SELECT * FROM cliente";
    $resulatado = mysqli_query($conexion,$sql);

//

    if (!empty($_POST['id_producto2'] && !empty($_POST['precio_unitario2']) && !empty($_POST['precio_unitario_c2']) && !empty($_POST['tipo2']) && !empty($_POST['marca2']))   ) {

        $id_producto2 = $_POST['id_producto2'];
        $precio_unitario_c2 = $_POST['precio_unitario_c2'];
        $precio_unitario2 = $_POST['precio_unitario2'];
        $tipo2 = $_POST['tipo2'];
        $marca2 = $_POST['marca2'];
        //echo $id_producto2;

        $sql = "UPDATE productos SET p_precioc = :precio_unitario2, WHERE id_producto = :id_producto";
        
    }
    else {
        echo 'error';
    }



?>

