<?php

include("conexion.php");
include("funciones.php");




if ($_POST["operacion"] == "Crear") {


    $stmt = $conexion->prepare("INSERT INTO proyectos_comer(nombre, tipo, ubicacion, num_tramite, num_comprobante, cuce, monto, fecha, estado, jazmin, mavel, nicol, ale, edwin)
                                VALUES(:nombre, :tipo, :ubicacion, :tramite, :comprobante, :cuce, :monto, :fecha, :estado, :jazmin, :mavel, :nicol, :ale, :edwin)");

    $resultado = $stmt->execute(
        array(
            ':nombre'           => $_POST["nombre"],
            ':ubicacion'        => $_POST["ubicacion"],
            ':tipo'             => $_POST["tipo"],
            ':tramite'          => $_POST["tramite"],
            ':comprobante'      => $_POST["comprobante"],
            ':monto'            => $_POST["monto"],
            ':cuce'             => $_POST["cuce"],
            ':estado'           => $_POST["estado"],
            ':fecha'            => $_POST["fecha"],
            ':jazmin'           => $_POST["jazmin"],
            ':mavel'            => $_POST["mavel"],
            ':nicol'            => $_POST["nicol"],
            ':ale'              => $_POST["ale"],
            ':edwin'            => $_POST["edwin"]
        )
    );

    if (!empty($resultado)) {
        echo 'Registro creado';
    }
}



	




if ($_POST["operacion"] == "Editar") {
    $imagen = obtener_nombre_imagen($_POST["id_producto"]);
    $ficha = obtener_nombre_ficha($_POST["id_producto"]);
    $certificados = obtener_nombre_certificado($_POST["id_producto"]);

    if ($_FILES["ficha"]["name"] != '') {
        unlink("fichas/" . $ficha);
        $ficha = subir_ficha();
    } 
    else {
        $ficha = @$_POST['ficha_o'];    
    } 

    if ($_FILES["certificado"]["name"] != '') {
        unlink("certificados/" . $certificados); 
        $certificado =  subir_certificado();
    }
    else {
        $certificado = @$_POST['certificado_o'];
    }


    if ($_FILES["foto"]["name"] != '') {
        unlink("productos/" . $imagen);
         $imagen = subir_imagen();
    }
    else {

        $imagen = @$_POST['img_o'];     
    }
    




    $stmt = $conexion->prepare("UPDATE productos SET p_descripcion=:nombre, p_marca=:marca, p_unidad=:unidad, p_precioc=:pc, p_preciov=:pv, p_tipo=:tipo, p_proveedor=:proveedor, 
    foto=:foto,pdf=:ficha,certificado=:certificado WHERE id_producto = :id_producto");

    $resultado = $stmt->execute(
        array(
            ':id_producto'    => $_POST["id_producto"],
            ':nombre'    => $_POST["nombre"],
            ':marca'    => $_POST["marca"],
            ':unidad'    => $_POST["unidad"],
            ':pc'    => $_POST["pc"],
            ':pv'    => $_POST["pv"],
            ':tipo'    => $_POST["tipo"],
            ':proveedor'    => $_POST["proveedor"],
            ':foto'    => $imagen,
            ':ficha'    => $ficha,
            ':certificado'    => $certificado

        )

        
    );

    if (!empty($resultado)) {
        echo 'Registro actualizado';
    }
}