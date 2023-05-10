<?php

include("conexion.php");
include("funciones.php");

if (isset($_POST["id_exp"])) {
    $salida = array();
    $stmt = $conexion->prepare("SELECT * FROM exp_general WHERE id_exp = '".$_POST["id_exp"]."' LIMIT 1");
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    foreach($resultado as $fila){
        $salida["nombre_contratante"] = $fila["nombre_contratante"];
        $salida["obj_contrato"] = $fila["obj_contrato"];
        $salida["ubicacion"] = $fila["ubicacion"];
        $salida["monto_bs"] = $fila["monto_bs"];
        $salida["monto_dolares"] = $fila["monto_dolares"];
        $salida["fecha_ejecucion"] = $fila["fecha_ejecucion"];
        $salida["participa_aso"] = $fila["participa_aso"];
        $salida["n_socio"] = $fila["n_socio"];
        $salida["profesional_resp"] = $fila["profesional_resp"];
        $salida["detalle"] = $fila["detalle"];

        /* FOTO */ 
        if ($fila["image"] != "") {
            $salida["image"] = '<img src="actas/' . $fila["image"] . '"  class="img-thumbnail" width="150" height="150" />
            <input type="hidden" name="img_o" value="'.$fila["image"].'" />';
        }else{
            $salida["image"] = '<div class="alert alert-danger" role="alert"> <input type="hidden" name="img_o" value="" /> <i class="bi bi-exclamation-octagon-fill"></i> Sin Foto</div>' ;
            //$salida["foto"] = '<input type="hidden" name="img_o" value="" />';
        }
        
        
    }

    echo json_encode($salida);
}