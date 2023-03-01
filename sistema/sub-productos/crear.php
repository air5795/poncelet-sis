<?php

include("conexion.php");
include("funciones.php");


if ($_POST["operacion"] == "Crear") {
    $imagen = '';
    $ficha = '';
    $certificado = '';
    if ($_FILES["foto"]["name"] != '') {
        $imagen = subir_imagen();
    }
    if ($_FILES["ficha"]["name"] != '') {
        $ficha = subir_ficha();
    }
    if ($_FILES["certificado"]["name"] != '') {
        $certificado = subir_certificado();
    }
    $stmt = $conexion->prepare("INSERT INTO productos(p_descripcion, p_marca, p_unidad, p_precioc, p_preciov, p_tipo, p_proveedor, foto, pdf, certificado)
                                VALUES(:nombre, :marca, :unidad, :pc, :pv, :tipo, :proveedor, :foto, :ficha, :certificado)");

    $resultado = $stmt->execute(
        array(
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
        echo 'Registro creado';
    }
}


if ($_POST["operacion"] == "Editar") {
    $imagen = '';
    if ($_FILES["imagen_usuario"]["name"] != '') {
        $imagen = subir_imagen();
    }else{
        $imagen = $_POST["imagen_usuario_oculta"];
    }


    $stmt = $conexion->prepare("UPDATE usuarios SET nombre=:nombre, apellidos=:apellidos, imagen=:imagen, telefono=:telefono, email=:email WHERE id = :id");

    $resultado = $stmt->execute(
        array(
            ':nombre'    => $_POST["nombre"],
            ':apellidos'    => $_POST["apellidos"],
            ':telefono'    => $_POST["telefono"],
            ':email'    => $_POST["email"],
            ':imagen'    => $imagen,
            ':id'    => $_POST["id_usuario"]
        )
    );

    if (!empty($resultado)) {
        echo 'Registro actualizado';
    }
}