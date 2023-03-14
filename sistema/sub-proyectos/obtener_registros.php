<?php

    include("conexion.php");
    include("funciones.php");

    $query = "";
    $salida = array();
    $query = "SELECT * FROM proyectos_comer ";

    if (isset($_POST["search"]["value"])) {
       $query .= 'WHERE nombre LIKE "%' . $_POST["search"]["value"] . '%" ';
       $query .= 'OR cuce LIKE "%' . $_POST["search"]["value"] . '%" ';
    }

    if (isset($_POST["order"])) {
        $query .= 'ORDER BY' . $_POST['order']['0']['column'] .' '.$_POST["order"][0]['dir'] . '';        
    }else{
        $query .= 'ORDER BY id_pro DESC ';
    }

    if($_POST["length"] != -1){
        $query .= 'LIMIT ' . $_POST["start"] . ','. $_POST["length"];
    }

    $stmt = $conexion->prepare($query);
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    $datos = array();
    $filtered_rows = $stmt->rowCount();
    foreach($resultado as $fila){
        
        $sub_array = array();
        $sub_array[] = $fila["id_pro"];
        $sub_array[] = $fila["nombre"];
        $sub_array[] = $fila["ubicacion"];
        $sub_array[] = $fila["num_tramite"];
        $sub_array[] = $fila["num_comprobante"];
        $sub_array[] = $fila["cuce"];
        $sub_array[] = $fila["monto"];
        $sub_array[] = $fila["fecha"];
        $sub_array[] = $fila["estado"];
        $sub_array[] = $fila["observacion"];
        $sub_array[] = '<button type="button" name="editar" id="'.$fila["id_pro"].'" class="btn btn-warning btn-sm boton-w  editar" style="background-color: #fbe806;color: #505050; color:#767676;"><i class="fa-solid fa-pencil"></i> </button>';
        $sub_array[] = '<button type="button" name="borrar" id="'.$fila["id_pro"].'" class="btn btn-danger btn-sm boton-w borrar" style="background-color: #ff5757;color: #505050; color:white;"><i class="fa-solid fa-trash-can"></i> </button>';
        $datos[] = $sub_array;
    }

    $salida = array(
        "draw"               => intval($_POST["draw"]),
        "recordsTotal"       => $filtered_rows,
        "recordsFiltered"    => obtener_todos_registros(),
        "data"               => $datos
    );

    echo json_encode($salida);