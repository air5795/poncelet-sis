<?php

    include("conexion.php");
    include("funciones.php");

    $query = "";
    $salida = array();
    $query = "SELECT * FROM exp_general ";

    if (isset($_POST["search"]["value"])) {
       $query .= 'WHERE nombre_contratante LIKE "%' . $_POST["search"]["value"] . '%" ';
       $query .= 'OR monto_bs LIKE "%' . $_POST["search"]["value"] . '%" ';
    }

    if (isset($_POST["order"])) {
        $query .= 'ORDER BY' . $_POST['order']['0']['column'] .' '.$_POST["order"][0]['dir'] . '';        
    }else{
        $query .= 'ORDER BY id_exp DESC ';
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
        $image = '';
        if($fila["image"] != '' ){
            $image = '<img class="gallery-item boton-w" src="actas/'.$fila['image'].'" height="70px"   id="actas/'.$fila['image'].'">';
            //$image = '<a class="btn btn-outline-primary btn-sm gallery-item boton-w"  id="actas/'.$fila['image'].'"><i class="fa-solid fa-image"></i> </a>';
        }else{
            $image = '<a class="btn btn-outline-secondary btn-sm gallery-item boton-w disabled" id=""><i class="fa-solid fa-ban"></i> </a>';
        }

        $image2 = '';
        if($fila["image2"] != '' ){
            $image2 = '<img class="gallery-item boton-w" src="actas/'.$fila['image2'].'" height="70px" id="actas/'.$fila['image2'].'">';
            //$image = '<a class="btn btn-outline-primary btn-sm gallery-item boton-w"  id="actas/'.$fila['image'].'"><i class="fa-solid fa-image"></i> </a>';
        }else{
            $image2 = '<a class="btn btn-outline-secondary btn-sm gallery-item boton-w disabled" id=""><i class="fa-solid fa-ban"></i> </a>';
        }

        $image3 = '';
        if($fila["image3"] != '' ){
            $image3 = '<img class="gallery-item boton-w" src="actas/'.$fila['image3'].'" height="70px" id="actas/'.$fila['image3'].'">';
            //$image = '<a class="btn btn-outline-primary btn-sm gallery-item boton-w"  id="actas/'.$fila['image'].'"><i class="fa-solid fa-image"></i> </a>';
        }else{
            $image3 = '<a class="btn btn-outline-secondary btn-sm gallery-item boton-w disabled" id=""><i class="fa-solid fa-ban"></i> </a>';
        }

        

       

        

       



        $sub_array = array();
        $sub_array[] = $fila["id_exp"];
        $sub_array[] = $fila["nombre_contratante"];
        $sub_array[] = $fila["obj_contrato"];
        $sub_array[] = $fila["ubicacion"];
        $sub_array[] = $fila["monto_bs"].' Bs';
        $sub_array[] = $fila["monto_dolares"].' $';
        $sub_array[] = $fila["fecha_ejecucion"];
        //$sub_array[] = $fila["participa_aso"];
        //$sub_array[] = $fila["n_socio"];
        $sub_array[] = $image;
        $sub_array[] = $image2;
        $sub_array[] = $image3;
        $sub_array[] = '<button type="button" name="editar" id="'.$fila["id_exp"].'" class="btn btn-warning btn-sm boton-w  editar" style="background-color: #fbe806;color: #505050; color:#767676;"><i class="fa-solid fa-pencil"></i> </button>';
        $sub_array[] = '<button type="button" name="borrar" id="'.$fila["id_exp"].'" class="btn btn-danger btn-sm boton-w borrar" style="background-color: #ff5757;color: #505050; color:white;"><i class="fa-solid fa-trash-can"></i> </button>';
        $datos[] = $sub_array;
    }

    $salida = array(
        "draw"               => intval($_POST["draw"]),
        "recordsTotal"       => $filtered_rows,
        "recordsFiltered"    => obtener_todos_registros(),
        "data"               => $datos
    );

    echo json_encode($salida);