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
        $foto = $_FILES['img'];
        $foto2 = $_FILES['img2'];
        $foto3 = $_FILES['img3'];
        $foto4 = $_FILES['img4'];
        $foto5 = $_FILES['img5'];
        $foto6 = $_FILES['img6'];
        $foto7 = $_FILES['img7'];
        $foto8 = $_FILES['img8'];
        $foto9 = $_FILES['img9'];
        $foto10 = $_FILES['img10'];
        $foto11 = $_FILES['img11'];
        $foto12 = $_FILES['img12'];
        $foto13 = $_FILES['img13'];
        $foto14 = $_FILES['img14'];
        $foto15 = $_FILES['img15'];


        //imagen 1
        

        $nombre_image = $foto['name'];
        $type = $foto['type'];
        $url_temp = $foto['tmp_name'];

        $imgProducto = 'nodisponible.png';

        if ($nombre_image != '') {
            $destino = 'img/actas/';
            $img_nombre = 'acta' . $id_producto;
            //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
            $imgActa = $img_nombre . '.jpg';
            $src = $destino . $imgActa;
        }


            $query = mysqli_query($conexion,"SELECT * FROM productos");  
                                                  
            $resul = mysqli_fetch_array($query);
          
            $sql_update = mysqli_query($conexion,"UPDATE productos
                                                  SET foto = '$imgActa' 
                                                  WHERE id_producto = $id_producto");

        

        if ($sql_update) {
            if ($nombre_image != '') {
                move_uploaded_file($url_temp, $src);
            }
            $alert = '<p class="alert alert-success"> Guardado Correctamente </p> ';
            header("Location: productos.php");
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