
<?php 

session_start();

    include "../conexion.php";


    

if (!empty($_POST)) {
    
    $alert = '';
    if (empty($_POST['earticulo']) || empty($_POST['estock'])) {
        $alert = '<p class="alert alert-danger w-50"> Todos los Campos Son Obligatorios  </p> ';
    } else {
        
        
        $idInv = $_POST['eid_inv'];
        $articulo = $_POST['earticulo'];
        $stock = $_POST['estock'];
        $stock = $_FILES['efoto'];
        
        //imagen 1

        $nombre_image = $foto['name'];
        $type = $foto['type'];
        $url_temp = $foto['tmp_name'];

        $imgProducto = 'nodisponible.png';

        if ($nombre_image != '') {
            $destino = 'img/inventario/';
            $img_nombre = 'articulo' . $num;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa = $img_nombre . '.jpg';
            $src = $destino . $imgActa;
        }


        if ($nombre_image != '') {
            $destino = 'img/inventario/';
            $img_nombre = 'articulo' . $num;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa = $img_nombre . '.jpg';
            $src = $destino . $imgActa;
        }
        
            $query = mysqli_query($conexion,"SELECT * FROM inventario");  
                                                  
            $resul = mysqli_fetch_array($query);
    }        
            $sql_update = mysqli_query($conexion,"UPDATE inventario
                                                  SET articulo = '$articulo', stock = '$stock', foto = '$imgActa'  
                                                  WHERE id_inv = $idInv");
                                                  
       

            if ($sql_update) {
                if ($nombre_image != '') {
                    move_uploaded_file($url_temp, $src);
                }
                $alert = '<p class="alert alert-success"> Guardado Correctamente </p> ';
                
                //header("Location: inventario_i.php");
                header("Location: inventario_i.php");
                

                 
            } else {
                $alert = '<p class="alert alert-danger "> El registro fallo </p> ';
            }
        }



?>