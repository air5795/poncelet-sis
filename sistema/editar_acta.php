<?php 
session_start();
include "../conexion.php";

$id_producto = $_GET['id'];

if (!empty($_POST)) {
    $alert = '';
    if (empty($_POST['idP']) ) {
        $alert = '<p class="alert alert-danger w-50"> Todos los Campos Son Obligatorios </p> ';
    } else {
        
        $idPI = $_POST['idP'];
        $image = $_FILES['img'];
        $image2 = $_FILES['img2'];
        $image3 = $_FILES['img3'];
        $image4 = $_FILES['img4'];
        $image5 = $_FILES['img5'];
        $image6 = $_FILES['img6'];
        $image7 = $_FILES['img7'];
        $image8 = $_FILES['img8'];
        $image9 = $_FILES['img9'];
        $image10 = $_FILES['img10'];
        $image11 = $_FILES['img11'];
        $image12 = $_FILES['img12'];
        $image13 = $_FILES['img13'];
        $image14 = $_FILES['img14'];
        $image15 = $_FILES['img15'];


        

        //imagen 1   
        $nombre_image1 = $image1['name'];
        $type1= $image1['type'];
        $url_temp1 = $image1['tmp_name'];

        $imgProducto1 = 'nodisponible.png';

        if ($nombre_image1 != '') {
            $destino1 = 'img/actas/';
            $img_nombre1 = 'acta_'.$fecha_ejecucion.'_'.$num.'_1';
            //$img_nombre2 = 'acta_'.$num.'_2_'.$fecha_ejecucion;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa1 = $img_nombre1.'.jpg';
            $src1= $destino1.$imgActa1;
        }else {
            $destino1 = 0;
            $img_nombre1 = 0;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa1 = 0;
            $src1= 0;
        }

        //imagen 2   
        $nombre_image2 = $image2['name'];
        $type2= $image2['type'];
        $url_temp2 = $image2['tmp_name'];

        $imgProducto2 = 'nodisponible.png';

        if ($nombre_image2 != '') {
            $destino2 = 'img/actas/';
            $img_nombre2 = 'acta_'.$fecha_ejecucion.'_'.$num.'_2';
            //$img_nombre2 = 'acta_'.$num.'_2_'.$fecha_ejecucion;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa2 = $img_nombre2.'.jpg';
            $src2= $destino2.$imgActa2;
        }else {
            $destino2 = 0;
            $img_nombre2 = 0;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa2 = 0;
            $src2= 0;
        }

    

        //imagen 3
        $nombre_image3 = $image3['name'];
        $type3 = $image3['type'];
        $url_temp3 = $image3['tmp_name'];

        $imgProducto3 = 'nodisponible.png';

        if ($nombre_image3 != '') {
            $destino3 = 'img/actas/';
            $img_nombre3 = 'acta_'.$fecha_ejecucion.'_'.$num.'_3';
            //$img_nombre3 = 'acta_'.$num.'_3_'.$fecha_ejecucion;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa3 = $img_nombre3.'.jpg';
            $src3= $destino3.$imgActa3;
        }else {
            $destino3 = 0;
            $img_nombre3 = 0;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa3 = 0;
            $src3= 0;
        }

        //imagen 4
        $nombre_image4 = $image4['name'];
        $type4 = $image4['type'];
        $url_temp4 = $image4['tmp_name'];

        $imgProducto4 = 'nodisponible.png';

        if ($nombre_image4 != '') {
            $destino4 = 'img/actas/';
            $img_nombre4 = 'acta_'.$fecha_ejecucion.'_'.$num.'_4';
            //$img_nombre3 = 'acta_'.$num.'_3_'.$fecha_ejecucion;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa4 = $img_nombre4.'.jpg';
            $src4= $destino4.$imgActa4;
        }else {
            $destino4 = 0;
            $img_nombre4 = 0;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa4 = 0;
            $src4= 0;
        }

        //imagen 5
        $nombre_image5 = $image5['name'];
        $type5 = $image5['type'];
        $url_temp5 = $image5['tmp_name'];

        $imgProducto5 = 'nodisponible.png';

        if ($nombre_image5 != '') {
            $destino5 = 'img/actas/';
            $img_nombre5 = 'acta_'.$fecha_ejecucion.'_'.$num.'_5';
            //$img_nombre3 = 'acta_'.$num.'_3_'.$fecha_ejecucion;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa5 = $img_nombre5.'.jpg';
            $src5= $destino5.$imgActa5;
        }else {
            $destino5 = 0;
            $img_nombre5 = 0;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa5 = 0;
            $src5= 0;
        }


        //imagen 6
        $nombre_image6 = $image6['name'];
        $type6 = $image6['type'];
        $url_temp6 = $image6['tmp_name'];

        $imgProducto6 = 'nodisponible.png';

        if ($nombre_image6 != '') {
            $destino6 = 'img/actas/';
            $img_nombre6 = 'acta_'.$fecha_ejecucion.'_'.$num.'_6';
            //$img_nombre3 = 'acta_'.$num.'_3_'.$fecha_ejecucion;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa6 = $img_nombre6.'.jpg';
            $src6= $destino6.$imgActa6;
        }else {
            $destino6 = 0;
            $img_nombre6 = 0;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa6 = 0;
            $src6= 0;
        }

        //imagen 7
        $nombre_image7 = $image7['name'];
        $type7 = $image7['type'];
        $url_temp7 = $image7['tmp_name'];

        $imgProducto7 = 'nodisponible.png';

        if ($nombre_image7 != '') {
            $destino7 = 'img/actas/';
            $img_nombre7 = 'acta_'.$fecha_ejecucion.'_'.$num.'_7';
            //$img_nombre3 = 'acta_'.$num.'_3_'.$fecha_ejecucion;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa7 = $img_nombre7.'.jpg';
            $src7= $destino7.$imgActa7;
        }else {
            $destino7 = 0;
            $img_nombre7 = 0;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa7 = 0;
            $src7= 0;
        }

        //imagen 8
        $nombre_image8 = $image8['name'];
        $type8 = $image8['type'];
        $url_temp8 = $image8['tmp_name'];

        $imgProducto8 = 'nodisponible.png';

        if ($nombre_image8 != '') {
            $destino8 = 'img/actas/';
            $img_nombre8 = 'acta_'.$fecha_ejecucion.'_'.$num.'_8';
            //$img_nombre3 = 'acta_'.$num.'_3_'.$fecha_ejecucion;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa8 = $img_nombre8.'.jpg';
            $src8= $destino8.$imgActa8;
        }else {
            $destino8 = 0;
            $img_nombre8 = 0;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa8 = 0;
            $src8= 0;
        }


        //imagen 9
        $nombre_image9 = $image9['name'];
        $type9 = $image9['type'];
        $url_temp9 = $image9['tmp_name'];

        $imgProducto9 = 'nodisponible.png';

        if ($nombre_image9 != '') {
            $destino9 = 'img/actas/';
            $img_nombre9 = 'acta_'.$fecha_ejecucion.'_'.$num.'_9';
            //$img_nombre3 = 'acta_'.$num.'_3_'.$fecha_ejecucion;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa9 = $img_nombre9.'.jpg';
            $src9= $destino9.$imgActa9;
        }else {
            $destino9 = 0;
            $img_nombre9 = 0;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa9 = 0;
            $src9= 0;
        }

        //imagen 10
        $nombre_image10 = $image10['name'];
        $type10 = $image10['type'];
        $url_temp10 = $image10['tmp_name'];

        $imgProducto10 = 'nodisponible.png';

        if ($nombre_image10 != '') {
            $destino10 = 'img/actas/';
            $img_nombre10 = 'acta_'.$fecha_ejecucion.'_'.$num.'_10';
            //$img_nombre3 = 'acta_'.$num.'_3_'.$fecha_ejecucion;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa10 = $img_nombre10.'.jpg';
            $src10= $destino10.$imgActa10;
        }else {
            $destino10 = 0;
            $img_nombre10 = 0;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa10 = 0;
            $src10= 0;
        }

        //imagen 11
        $nombre_image11 = $image11['name'];
        $type11 = $image11['type'];
        $url_temp11 = $image11['tmp_name'];

        $imgProducto11 = 'nodisponible.png';

        if ($nombre_image11 != '') {
            $destino11 = 'img/actas/';
            $img_nombre11 = 'acta_'.$fecha_ejecucion.'_'.$num.'_11';
            //$img_nombre3 = 'acta_'.$num.'_3_'.$fecha_ejecucion;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa11 = $img_nombre11.'.jpg';
            $src11= $destino11.$imgActa11;
        }else {
            $destino11 = 0;
            $img_nombre11 = 0;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa11 = 0;
            $src11= 0;
        }

        //imagen 12
        $nombre_image12 = $image12['name'];
        $type12 = $image12['type'];
        $url_temp12 = $image12['tmp_name'];

        $imgProducto12 = 'nodisponible.png';

        if ($nombre_image12 != '') {
            $destino12 = 'img/actas/';
            $img_nombre12 = 'acta_'.$fecha_ejecucion.'_'.$num.'_12';
            //$img_nombre3 = 'acta_'.$num.'_3_'.$fecha_ejecucion;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa12 = $img_nombre12.'.jpg';
            $src12= $destino12.$imgActa12;
        }else {
            $destino12 = 0;
            $img_nombre12 = 0;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa12 = 0;
            $src12= 0;
        }

        //imagen 13
        $nombre_image13 = $image13['name'];
        $type13 = $image13['type'];
        $url_temp13 = $image13['tmp_name'];

        $imgProducto13 = 'nodisponible.png';

        if ($nombre_image13 != '') {
            $destino13 = 'img/actas/';
            $img_nombre13 = 'acta_'.$fecha_ejecucion.'_'.$num.'_13';
            //$img_nombre3 = 'acta_'.$num.'_3_'.$fecha_ejecucion;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa13 = $img_nombre13.'.jpg';
            $src13= $destino13.$imgActa13;
        }else {
            $destino13 = 0;
            $img_nombre13 = 0;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa13 = 0;
            $src13= 0;
        }

        //imagen 14
        $nombre_image14 = $image14['name'];
        $type14 = $image14['type'];
        $url_temp14 = $image14['tmp_name'];

        $imgProducto14 = 'nodisponible.png';

        if ($nombre_image14 != '') {
            $destino14 = 'img/actas/';
            $img_nombre14 = 'acta_'.$fecha_ejecucion.'_'.$num.'_14';
            //$img_nombre3 = 'acta_'.$num.'_3_'.$fecha_ejecucion;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa14 = $img_nombre14.'.jpg';
            $src14= $destino14.$imgActa14;
        }else {
            $destino14 = 0;
            $img_nombre14 = 0;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa14 = 0;
            $src14= 0;
        }

        //imagen 15
        $nombre_image15 = $image15['name'];
        $type15 = $image15['type'];
        $url_temp15 = $image15['tmp_name'];

        $imgProducto15 = 'nodisponible.png';

        if ($nombre_image15 != '') {
            $destino15 = 'img/actas/';
            $img_nombre15 = 'acta_'.$fecha_ejecucion.'_'.$num.'_15';
            //$img_nombre3 = 'acta_'.$num.'_3_'.$fecha_ejecucion;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa15 = $img_nombre15.'.jpg';
            $src15= $destino15.$imgActa15;
        }else {
            $destino15 = 0;
            $img_nombre15 = 0;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa15 = 0;
            $src15= 0;
        }


            $query = mysqli_query($conexion,"SELECT * FROM exp_general");  
                                                  
            $resul = mysqli_fetch_array($query);
          
            $sql_update = mysqli_query($conexion,"UPDATE exp_general
                                                  SET image = '$imgActa',
                                                  image2 = '$imgActa2',
                                                  image3 = '$imgActa3',
                                                  image4 = '$imgActa4',
                                                  image5 = '$imgActa5',
                                                  image6 = '$imgActa6',
                                                  image7 = '$imgActa7',
                                                  image8 = '$imgActa8',
                                                  image9 = '$imgActa9',
                                                  image10 = '$imgActa10',
                                                  image11 = '$imgActa11',
                                                  image12 = '$imgActa12',
                                                  image13 = '$imgActa13',
                                                  image14 = '$imgActa14',
                                                  image15 = '$imgActa15'
                                                  WHERE id_exp = $id_producto");

        

        if ($sql_update) {
            if ($nombre_image != '') {
                move_uploaded_file($url_temp, $src);

                move_uploaded_file($url_temp2,$src2);
                move_uploaded_file($url_temp3,$src3);

                move_uploaded_file($url_temp4,$src4);
                move_uploaded_file($url_temp5,$src5);
                move_uploaded_file($url_temp6,$src6);
                move_uploaded_file($url_temp7,$src7);
                move_uploaded_file($url_temp8,$src8);

                move_uploaded_file($url_temp9,$src9);
                move_uploaded_file($url_temp10,$src10);
                move_uploaded_file($url_temp11,$src11);
                move_uploaded_file($url_temp12,$src12);
                move_uploaded_file($url_temp13,$src13);
                move_uploaded_file($url_temp14,$src14);
                move_uploaded_file($url_temp15,$src15);

                
            }
            $alert = '<p class="alert alert-success"> Guardado Correctamente </p> ';
            header("Location: lista_exp.php");
        } else {
            $alert = '<p class="alert alert-danger "> El registro fallo </p> ';
        }
   
                
        }
    
    }
    








?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <?php include "includes/scripts.php";?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SISPONCELET</title>
        
    </head>
    <body class="sb-nav-fixed">
    <?php include "includes/header.php";?>
    

        <!-- contenido del sistema-->

        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <div>
                    <h1 class="mt-4">Editar Actas de Experiencia General </h1>
                        
                        <ol class="breadcrumb mb-2 ">
                            <li class="breadcrumb-item active">Poncelet / Editar Imagen de la Acta de la Experiencia  </li> 
                        </ol>
                    
                        

                    </div>   
                        
                        <hr>
                       <!-- contenido del sistema 2--> 
                        <!-- formulario de registro de usuarios-->



                        <?php

                    

                        $query = mysqli_query($conexion, "SELECT * from exp_general where id_exp = '$id_producto';");

                        $result = mysqli_num_rows($query);
                        if ($result > 0) {
                            while ($data = mysqli_fetch_array($query)) {
                                if ($data['image'] != 'nodisponible.png') {
                                    $image = 'img/actas/' . $data['image'];
                                    $image2 = 'img/actas/' . $data['image2'];
                                    $image3 = 'img/actas/' . $data['image3'];
                                    $image4 = 'img/actas/' . $data['image4'];
                                    $image5 = 'img/actas/' . $data['image5'];
                                    $image6 = 'img/actas/' . $data['image6'];
                                    $image7 = 'img/actas/' . $data['image7'];
                                    $image8 = 'img/actas/' . $data['image8'];
                                    $image9 = 'img/actas/' . $data['image9'];
                                    $image10 = 'img/actas/' . $data['image10'];
                                    $image11 = 'img/actas/' . $data['image11'];
                                    $image12 = 'img/actas/' . $data['image12'];
                                    $image13 = 'img/actas/' . $data['image13'];
                                    $image14 = 'img/actas/' . $data['image14'];
                                    $image15 = 'img/actas/' . $data['image15'];

                                } else {
                                    $image = 'img/' . $data['image'];
                                }
                                
                            }
                        }
                            

                        ?>

                                
                                    <table class="table table-bordered table-responsive">
                                    <form action="" method="post" class="fields was-validated " enctype="multipart/form-data" novalidate>
                                    <input type="hidden" name="idP" value="<?php echo $id_producto;?>">
                                            <tr>
                                                <td>Imagen 1</td>
                                                <td>Imagen 2</td>
                                                <td>Imagen 3</td>
                                                <td>Imagen 4</td>
                                                <td>Imagen 5</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="file" class="form-control form-control-sm " name="img" id="files"> 
                                            </td>
                                                <td><input type="file" class="form-control form-control-sm" name="img2" id="files"> 
                                            </td>
                                                <td><input type="file" class="form-control form-control-sm" name="img3" id="files"> 
                                            </td>
                                                <td><input type="file" class="form-control form-control-sm" name="img4" id="files"> 
                                            </td>
                                                <td><input type="file" class="form-control form-control-sm" name="img5" id="files"> 
                                            </td>
                                                
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo $image;?>" width="70px" height="100px"></td>
                                                <td><img src="<?php echo $image2;?>" width="70px" height="100px"></td>
                                                <td><img src="<?php echo $image3;?>" width="70px" height="100px"></td>
                                                <td><img src="<?php echo $image4;?>" width="70px" height="100px"></td>
                                                <td><img src="<?php echo $image5;?>" width="70px" height="100px"></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Imagen 6</td>
                                                <td>Imagen 7</td>
                                                <td>Imagen 8</td>
                                                <td>Imagen 9</td>
                                                <td>Imagen 10</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="file" class="form-control form-control-sm" name="img6" id="files"> </td>
                                                <td><input type="file" class="form-control form-control-sm" name="img7" id="files"> </td>
                                                <td><input type="file" class="form-control form-control-sm" name="img8" id="files"> </td>
                                                <td><input type="file" class="form-control form-control-sm" name="img9" id="files"> </td>
                                                <td><input type="file" class="form-control form-control-sm" name="img10" id="files"> </td>
                                                
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo $image6;?>" width="70px" height="100px"></td>
                                                <td><img src="<?php echo $image7;?>" width="70px" height="100px"></td>
                                                <td><img src="<?php echo $image8;?>" width="70px" height="100px"></td>
                                                <td><img src="<?php echo $image9;?>" width="70px" height="100px"></td>
                                                <td><img src="<?php echo $image10;?>" width="70px" height="100px"></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Imagen 11</td>
                                                <td>Imagen 12</td>
                                                <td>Imagen 13</td>
                                                <td>Imagen 14</td>
                                                <td>Imagen 15</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="file" class="form-control form-control-sm" name="img11" id="files"> </td>
                                                <td><input type="file" class="form-control form-control-sm" name="img12" id="files"> </td>
                                                <td><input type="file" class="form-control form-control-sm" name="img13" id="files"> </td>
                                                <td><input type="file" class="form-control form-control-sm" name="img14" id="files"> </td>
                                                <td><input type="file" class="form-control form-control-sm" name="img15" id="files"> </td>
                                                
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo $image11;?>" width="70px" height="100px"></td>
                                                <td><img src="<?php echo $image12;?>" width="70px" height="100px"></td>
                                                <td><img src="<?php echo $image13;?>" width="70px" height="100px"></td>
                                                <td><img src="<?php echo $image14;?>" width="70px" height="100px"></td>
                                                <td><img src="<?php echo $image15;?>" width="70px" height="100px"></td>
                                                
                                            </tr>
                                            <input style="padding:5 ;" type="submit" value="Actualizar " class="btn btn-success btn-sm w-100  " data-dismiss="alert" >
                                            <div class=" form-text text-center " role="alert" style=""> <?php echo isset ($alert) ? $alert :''; ?></div>
                                        </form>
                                    </table>
                        



                        



                    
                        

                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; poncelet.bo@gmail.com @leiglesSoft</div>
                            <div>
                                
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>