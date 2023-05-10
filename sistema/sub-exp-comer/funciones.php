<?php
   

     function subir_image(){
        if (isset($_FILES["image"])) {

            include('conexion.php');
            $stmt = $conexion->prepare("SELECT COUNT(id_exp) FROM exp_general;");
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach($resultado as $fila){
                $data = $fila["COUNT(id_exp)"];
                
            }

            $num = $data +1;

            $fecha_ejecucion = $_POST['fecha_ejecucion'];
            $extension = explode('.', $_FILES["image"]['name']);
            //$nuevo_nombre = 'Acta-'.date('d-m-y').'-'.rand() . '.' . $extension[1];
            $nuevo_nombre = 'acta_'.$fecha_ejecucion.'_'.$num.'_1'.'.'. $extension[1];
            $ubicacion = './actas/' . $nuevo_nombre;
            move_uploaded_file($_FILES["image"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }

    function subir_image2(){
        if (isset($_FILES["image2"])) {

            include('conexion.php');
            $stmt = $conexion->prepare("SELECT COUNT(id_exp) FROM exp_general;");
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach($resultado as $fila){
                $data = $fila["COUNT(id_exp)"];
                
            }

            $num = $data +1;

            $fecha_ejecucion = $_POST['fecha_ejecucion'];
            $extension = explode('.', $_FILES["image2"]['name']);
            //$nuevo_nombre = 'Acta-'.date('d-m-y').'-'.rand() . '.' . $extension[1];
            $nuevo_nombre = 'acta_'.$fecha_ejecucion.'_'.$num.'_2'.'.'. $extension[1];
            $ubicacion = './actas/' . $nuevo_nombre;
            move_uploaded_file($_FILES["image2"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }

    function subir_image3(){
        if (isset($_FILES["image3"])) {

            include('conexion.php');
            $stmt = $conexion->prepare("SELECT COUNT(id_exp) FROM exp_general;");
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach($resultado as $fila){
                $data = $fila["COUNT(id_exp)"];
                
            }

            $num = $data +1;

            $fecha_ejecucion = $_POST['fecha_ejecucion'];
            $extension = explode('.', $_FILES["image3"]['name']);
            //$nuevo_nombre = 'Acta-'.date('d-m-y').'-'.rand() . '.' . $extension[1];
            $nuevo_nombre = 'acta_'.$fecha_ejecucion.'_'.$num.'_3'.'.'. $extension[1];
            $ubicacion = './actas/' . $nuevo_nombre;
            move_uploaded_file($_FILES["image3"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }

    function subir_image4(){
        if (isset($_FILES["image4"])) {

            include('conexion.php');
            $stmt = $conexion->prepare("SELECT COUNT(id_exp) FROM exp_general;");
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach($resultado as $fila){
                $data = $fila["COUNT(id_exp)"];
                
            }

            $num = $data +1;

            $fecha_ejecucion = $_POST['fecha_ejecucion'];
            $extension = explode('.', $_FILES["image4"]['name']);
            //$nuevo_nombre = 'Acta-'.date('d-m-y').'-'.rand() . '.' . $extension[1];
            $nuevo_nombre = 'acta_'.$fecha_ejecucion.'_'.$num.'_4'.'.'. $extension[1];
            $ubicacion = './actas/' . $nuevo_nombre;
            move_uploaded_file($_FILES["image4"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }

    function subir_image5(){
        if (isset($_FILES["image5"])) {

            include('conexion.php');
            $stmt = $conexion->prepare("SELECT COUNT(id_exp) FROM exp_general;");
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach($resultado as $fila){
                $data = $fila["COUNT(id_exp)"];
                
            }

            $num = $data +1;

            $fecha_ejecucion = $_POST['fecha_ejecucion'];
            $extension = explode('.', $_FILES["image5"]['name']);
            //$nuevo_nombre = 'Acta-'.date('d-m-y').'-'.rand() . '.' . $extension[1];
            $nuevo_nombre = 'acta_'.$fecha_ejecucion.'_'.$num.'_5'.'.'. $extension[1];
            $ubicacion = './actas/' . $nuevo_nombre;
            move_uploaded_file($_FILES["image5"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }

    function subir_image6(){
        if (isset($_FILES["image6"])) {

            include('conexion.php');
            $stmt = $conexion->prepare("SELECT COUNT(id_exp) FROM exp_general;");
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach($resultado as $fila){
                $data = $fila["COUNT(id_exp)"];
                
            }

            $num = $data +1;

            $fecha_ejecucion = $_POST['fecha_ejecucion'];
            $extension = explode('.', $_FILES["image6"]['name']);
            //$nuevo_nombre = 'Acta-'.date('d-m-y').'-'.rand() . '.' . $extension[1];
            $nuevo_nombre = 'acta_'.$fecha_ejecucion.'_'.$num.'_6'.'.'. $extension[1];
            $ubicacion = './actas/' . $nuevo_nombre;
            move_uploaded_file($_FILES["image6"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }

    function subir_image7(){
        if (isset($_FILES["image7"])) {

            include('conexion.php');
            $stmt = $conexion->prepare("SELECT COUNT(id_exp) FROM exp_general;");
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach($resultado as $fila){
                $data = $fila["COUNT(id_exp)"];
                
            }

            $num = $data +1;

            $fecha_ejecucion = $_POST['fecha_ejecucion'];
            $extension = explode('.', $_FILES["image7"]['name']);
            //$nuevo_nombre = 'Acta-'.date('d-m-y').'-'.rand() . '.' . $extension[1];
            $nuevo_nombre = 'acta_'.$fecha_ejecucion.'_'.$num.'_7'.'.'. $extension[1];
            $ubicacion = './actas/' . $nuevo_nombre;
            move_uploaded_file($_FILES["image7"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }

    function subir_image8(){
        if (isset($_FILES["image8"])) {

            include('conexion.php');
            $stmt = $conexion->prepare("SELECT COUNT(id_exp) FROM exp_general;");
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach($resultado as $fila){
                $data = $fila["COUNT(id_exp)"];
                
            }

            $num = $data +1;

            $fecha_ejecucion = $_POST['fecha_ejecucion'];
            $extension = explode('.', $_FILES["image8"]['name']);
            //$nuevo_nombre = 'Acta-'.date('d-m-y').'-'.rand() . '.' . $extension[1];
            $nuevo_nombre = 'acta_'.$fecha_ejecucion.'_'.$num.'_8'.'.'. $extension[1];
            $ubicacion = './actas/' . $nuevo_nombre;
            move_uploaded_file($_FILES["image8"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }

    function subir_image9(){
        if (isset($_FILES["image9"])) {

            include('conexion.php');
            $stmt = $conexion->prepare("SELECT COUNT(id_exp) FROM exp_general;");
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach($resultado as $fila){
                $data = $fila["COUNT(id_exp)"];
                
            }

            $num = $data +1;

            $fecha_ejecucion = $_POST['fecha_ejecucion'];
            $extension = explode('.', $_FILES["image9"]['name']);
            //$nuevo_nombre = 'Acta-'.date('d-m-y').'-'.rand() . '.' . $extension[1];
            $nuevo_nombre = 'acta_'.$fecha_ejecucion.'_'.$num.'_9'.'.'. $extension[1];
            $ubicacion = './actas/' . $nuevo_nombre;
            move_uploaded_file($_FILES["image9"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }

    function subir_image10(){
        if (isset($_FILES["image10"])) {

            include('conexion.php');
            $stmt = $conexion->prepare("SELECT COUNT(id_exp) FROM exp_general;");
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach($resultado as $fila){
                $data = $fila["COUNT(id_exp)"];
                
            }

            $num = $data +1;

            $fecha_ejecucion = $_POST['fecha_ejecucion'];
            $extension = explode('.', $_FILES["image10"]['name']);
            //$nuevo_nombre = 'Acta-'.date('d-m-y').'-'.rand() . '.' . $extension[1];
            $nuevo_nombre = 'acta_'.$fecha_ejecucion.'_'.$num.'_10'.'.'. $extension[1];
            $ubicacion = './actas/' . $nuevo_nombre;
            move_uploaded_file($_FILES["image10"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }

    function subir_image11(){
        if (isset($_FILES["image11"])) {

            include('conexion.php');
            $stmt = $conexion->prepare("SELECT COUNT(id_exp) FROM exp_general;");
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach($resultado as $fila){
                $data = $fila["COUNT(id_exp)"];
                
            }

            $num = $data +1;

            $fecha_ejecucion = $_POST['fecha_ejecucion'];
            $extension = explode('.', $_FILES["image11"]['name']);
            //$nuevo_nombre = 'Acta-'.date('d-m-y').'-'.rand() . '.' . $extension[1];
            $nuevo_nombre = 'acta_'.$fecha_ejecucion.'_'.$num.'_11'.'.'. $extension[1];
            $ubicacion = './actas/' . $nuevo_nombre;
            move_uploaded_file($_FILES["image11"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }

    function subir_image12(){
        if (isset($_FILES["image12"])) {

            include('conexion.php');
            $stmt = $conexion->prepare("SELECT COUNT(id_exp) FROM exp_general;");
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach($resultado as $fila){
                $data = $fila["COUNT(id_exp)"];
                
            }

            $num = $data +1;

            $fecha_ejecucion = $_POST['fecha_ejecucion'];
            $extension = explode('.', $_FILES["image12"]['name']);
            //$nuevo_nombre = 'Acta-'.date('d-m-y').'-'.rand() . '.' . $extension[1];
            $nuevo_nombre = 'acta_'.$fecha_ejecucion.'_'.$num.'_12'.'.'. $extension[1];
            $ubicacion = './actas/' . $nuevo_nombre;
            move_uploaded_file($_FILES["image12"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }

    function subir_image13(){
        if (isset($_FILES["image13"])) {

            include('conexion.php');
            $stmt = $conexion->prepare("SELECT COUNT(id_exp) FROM exp_general;");
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach($resultado as $fila){
                $data = $fila["COUNT(id_exp)"];
                
            }

            $num = $data +1;

            $fecha_ejecucion = $_POST['fecha_ejecucion'];
            $extension = explode('.', $_FILES["image13"]['name']);
            //$nuevo_nombre = 'Acta-'.date('d-m-y').'-'.rand() . '.' . $extension[1];
            $nuevo_nombre = 'acta_'.$fecha_ejecucion.'_'.$num.'_13'.'.'. $extension[1];
            $ubicacion = './actas/' . $nuevo_nombre;
            move_uploaded_file($_FILES["image13"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }

    function subir_image14(){
        if (isset($_FILES["image14"])) {

            include('conexion.php');
            $stmt = $conexion->prepare("SELECT COUNT(id_exp) FROM exp_general;");
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach($resultado as $fila){
                $data = $fila["COUNT(id_exp)"];
                
            }

            $num = $data +1;

            $fecha_ejecucion = $_POST['fecha_ejecucion'];
            $extension = explode('.', $_FILES["image14"]['name']);
            //$nuevo_nombre = 'Acta-'.date('d-m-y').'-'.rand() . '.' . $extension[1];
            $nuevo_nombre = 'acta_'.$fecha_ejecucion.'_'.$num.'_14'.'.'. $extension[1];
            $ubicacion = './actas/' . $nuevo_nombre;
            move_uploaded_file($_FILES["image14"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }

    function subir_image15(){
        if (isset($_FILES["image15"])) {

            include('conexion.php');
            $stmt = $conexion->prepare("SELECT COUNT(id_exp) FROM exp_general;");
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach($resultado as $fila){
                $data = $fila["COUNT(id_exp)"];
                
            }

            $num = $data +1;

            $fecha_ejecucion = $_POST['fecha_ejecucion'];
            $extension = explode('.', $_FILES["image15"]['name']);
            //$nuevo_nombre = 'Acta-'.date('d-m-y').'-'.rand() . '.' . $extension[1];
            $nuevo_nombre = 'acta_'.$fecha_ejecucion.'_'.$num.'_15'.'.'. $extension[1];
            $ubicacion = './actas/' . $nuevo_nombre;
            move_uploaded_file($_FILES["image15"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }




    function obtener_nombre_imagen($id_exp){
        include('conexion.php');
        $stmt = $conexion->prepare("SELECT image FROM exp_general WHERE id_exp = '$id_exp'");
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        foreach($resultado as $fila){
            return $fila["image"];
        }
    }




    function obtener_nombre_ficha($id_producto){
        include('conexion.php');
        $stmt = $conexion->prepare("SELECT pdf FROM productos WHERE id_producto = '$id_producto'");
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        foreach($resultado as $fila){
            return $fila["pdf"];
        }
    }

    function obtener_nombre_certificado($id_producto){
        include('conexion.php');
        $stmt = $conexion->prepare("SELECT certificado FROM productos WHERE id_producto = '$id_producto'");
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        foreach($resultado as $fila){
            return $fila["certificado"];
        }
    }

    function obtener_todos_registros(){
        include('conexion.php');
        $stmt = $conexion->prepare("SELECT * FROM exp_general");
        $stmt->execute();
        $resultado = $stmt->fetchAll(); 
        return $stmt->rowCount();       
    }