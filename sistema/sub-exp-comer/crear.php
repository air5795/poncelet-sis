<?php

include("conexion.php");
include("funciones.php");

session_start();



if ($_POST["operacion"] == "Crear") {

    
    $image = '';
    $image2 = '';
    $image3 = '';
    $image4 = '';
    $image5 = '';
    $image6 = '';
    $image7 = '';
    $image8 = '';
    $image9 = '';
    $image10 = '';
    $image11 = '';
    $image12 = '';
    $image13 = '';
    $image14 = '';
    $image15 = '';

    if ($_FILES["image"]["name"] != '') {
        
        $image = subir_image();
    }

    if ($_FILES["image2"]["name"] != '') {
        $image2 = subir_image2();
    }
    if ($_FILES["image3"]["name"] != '') {
        $image3 = subir_image3();
    }
    if ($_FILES["image4"]["name"] != '') {
        $image4 = subir_image4();
    }
    if ($_FILES["image5"]["name"] != '') {
        $image5 = subir_image5();
    }
    if ($_FILES["image6"]["name"] != '') {
        $image6 = subir_image6();
    }
    if ($_FILES["image7"]["name"] != '') {
        $image7 = subir_image7();
    }
    if ($_FILES["image8"]["name"] != '') {
        $image8 = subir_image8();
    }
    if ($_FILES["image9"]["name"] != '') {
        $image9 = subir_image9();
    }
    if ($_FILES["image10"]["name"] != '') {
        $image10 = subir_image10();
    }
    if ($_FILES["image11"]["name"] != '') {
        $image11 = subir_image11();
    }
    if ($_FILES["image12"]["name"] != '') {
        $image12 = subir_image12();
    }
    if ($_FILES["image13"]["name"] != '') {
        $image13 = subir_image13();
    }
    if ($_FILES["image14"]["name"] != '') {
        $image14 = subir_image14();
    }
    if ($_FILES["image15"]["name"] != '') {
        $image15 = subir_image15();
    }
    
    
    $stmt = $conexion->prepare("INSERT INTO exp_general(nombre_contratante, obj_contrato, ubicacion, monto_bs, monto_dolares, fecha_ejecucion, 
                                            participa_aso, n_socio, profesional_resp, detalle, usuario_id, image, image2, image3, 
                                            image4, image5, image6,image7,image8,image9,image10,image11,image12,image13,image14,image15)
                                VALUES(:nombre_contratante, :obj_contrato, :ubicacion, :monto_bs, :monto_dolares, :fecha_ejecucion, :participa_aso, 
                                            :n_socio, :profesional_resp, :detalle, :usuario_id, :image, :image2, :image3, :image4, :image5, :image6, :image7,
                                            :image8, :image9, :image10, :image11, :image12, :image13, :image14, :image15)");

    $resultado = $stmt->execute(
        array(
            
            ':nombre_contratante' => $_POST['nombre_contratante'],
            ':obj_contrato' => $_POST['obj_contrato'],
            ':ubicacion' => $_POST['ubicacion'],
            ':monto_bs' => $_POST['monto_bs'],
            ':monto_dolares' => $_POST['monto_dolares'],
            ':fecha_ejecucion' => $_POST['fecha_ejecucion'],
            ':participa_aso' => $_POST['participa_aso'],
            ':n_socio' => $_POST['n_socio'],
            ':profesional_resp' => $_POST['profesional_resp'],
            ':detalle' => $_POST['detalle'],
            ':usuario_id' => $_SESSION['iduser'],
            ':image' => $image,
            ':image2' => $image2,
            ':image3' => $image3,
            ':image4' => $image4,
            ':image5' => $image5,
            ':image6' => $image6,
            ':image7' => $image7,
            ':image8' => $image8,
            ':image9' => $image9,
            ':image10' => $image10,
            ':image11' => $image11,
            ':image12' => $image12,
            ':image13' => $image13,
            ':image14' => $image14,
            ':image15' => $image15
      


        )
    );

    if (!empty($resultado)) {
        echo 'Registro creado';
    }
}




	


/*

if ($_POST["operacion"] == "Editar") {
    $image = obtener_nombre_imagen($_POST["id_exp"]);


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
}*/