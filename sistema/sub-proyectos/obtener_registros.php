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

        if ($fila['jazmin'] == '') {
            $jazmin =  '';
        }else {
            $jazmin =  '<span style="font-size:12px;background-color:#fff5ca;text-align: left;" class="btn btn-info btn-sm w-100"><i class="bi bi-person-circle"></i> Jazmin Velasco Diaz</span>'.'<br/>'.$fila["jazmin"].'<br/>';
        }

        if ($fila['mavel'] == '') {
            $mavel =  '';
        }else {
            $mavel =  '<span style="font-size:12px;background-color:#fff5ca;text-align: left;" class="btn btn-info btn-sm w-100"><i class="bi bi-person-circle"></i> Mavel Condori Flores </span>'.'<br/>'.$fila["mavel"].'<br/>';
        }

        if ($fila['nicol'] == '') {
            $nicol =  '';
        }else {
            $nicol =  '<span style="font-size:12px;background-color:#fff5ca;text-align: left;" class="btn btn-info btn-sm w-100"><i class="bi bi-person-circle"></i> Nicol Erquicia Camacho</span>'.'<br/>'.$fila["nicol"].'<br/>';
        }

        if ($fila['ale'] == '') {
            $ale =  '';
        }else {
            $ale =  '<span style="font-size:12px;background-color:#fff5ca;text-align: left;" class="btn btn-info btn-sm w-100"><i class="bi bi-person-circle"></i> Alejandro Iglesias Raldes</span>'.'<br/>'.$fila["ale"].'<br/>';
        }

        if ($fila['edwin'] == '') {
            $edwin =  '';
        }else {
            $edwin =  '<span style="font-size:12px;background-color:#fff5ca;text-align: left;" class="btn btn-info btn-sm w-100"><i class="bi bi-person-circle"></i> Edwin Pinto Ramirez</span>'.'<br/>'.$fila["edwin"].'<br/>';
        }

        if ($fila['estado'] == 'pagado') {
            $estado =  '<span style="font-size:12px;background-color:#20c997;" class="btn btn-success btn-sm w-100"><i class="bi bi-check-circle-fill"> </i>'.$fila["estado"].'</span>';
        }else {
            $estado =  '<span style="font-size:12px;background-color:#fff769;" class="btn btn-warning btn-sm w-100"><i class="bi bi-exclamation-circle-fill"> </i> En '.$fila["estado"].'</span>';
        }
        
        $sub_array = array();
        $sub_array[] = $fila["id_pro"];
        $sub_array[] = $fila["nombre"];
        $sub_array[] = $fila["tipo"];
        $sub_array[] = $fila["ubicacion"];
        $sub_array[] = $fila["num_tramite"];
        $sub_array[] = $fila["num_comprobante"];
        $sub_array[] = $fila["cuce"];
        
        $sub_array[] = $fila["monto"].' Bs';
        $sub_array[] = $fila["fecha"];
        
        $sub_array[] = $estado;
        $sub_array[] =  $jazmin.$mavel.$nicol.$ale.$edwin;
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