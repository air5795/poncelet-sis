<?php
    

    session_start();
    

    include "../conexion.php";


    $query = mysqli_query($conexion, "SELECT * FROM exp_general");
    $result = mysqli_num_rows($query);
    if ($result > 0) {
        while ($data = mysqli_fetch_array($query)) {
             $num = $data['id_exp'];
             
        }}

        $sql_tfila = mysqli_query($conexion, "SELECT COUNT(id_exp) FROM exp_general;");
        $result_f = mysqli_fetch_array($sql_tfila);
        $total2 = $result_f['COUNT(id_exp)'];
        $total3 =  $total2 + 1;    


    if (!empty($_POST)) {


        if (empty($_POST['nombre_contratante']) || empty($_POST['obj_contrato']) || empty($_POST['ubicacion']) || empty($_POST['monto_bs']) || empty($_POST['monto_dolares']) 
         || empty($_POST['fecha_ejecucion'])  || empty($_POST['profesional_resp'])) {
            $alert = '<p class="alert alert-danger "> Todos los Campos Son Obligatorios menos Nombre LI Socio(s)* y Participacion en Asociacion</p> ';
       } 
       else 
     {
            
            $nombre_contratante = $_POST['nombre_contratante'];
            $obj_contrato = $_POST['obj_contrato'];
            $ubicacion = $_POST['ubicacion'];
            $monto_bs = $_POST['monto_bs'];
            $monto_dolores = $_POST['monto_dolares'];
            $fecha_ejecucion = $_POST['fecha_ejecucion'];
            $participa_aso = $_POST['participa_aso'];
            $n_socio = $_POST['n_socio'];
            $profesional_resp = $_POST['profesional_resp'];
            $usuario_id = $_SESSION['iduser'];
            $image = $_FILES['image'];
            $image2 = $_FILES['image2'];
            $image3 = $_FILES['image3'];
            $image4 = $_FILES['image4'];
            $image5 = $_FILES['image5'];
            $image6 = $_FILES['image6'];
            $image7 = $_FILES['image7'];
            $image8 = $_FILES['image8'];
            
            $num = $total2 +1;

            
            
            
            //imagen 1
            $nombre_image = $image['name'];

            $type = $image['type'];
            $url_temp = $image['tmp_name'];

            $imgProducto = 'nodisponible.png';

            if ($nombre_image != '') {
                $destino = 'img/actas/';
                //$img_nombre = 'acta_'.$num.'_1_'.$fecha_ejecucion;
                $img_nombre = 'acta_'.$fecha_ejecucion.'_'.$num.'_1';
                //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
                $imgActa = $img_nombre.'.jpg';
                $src= $destino.$imgActa;
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

        


            
            $query_insert = mysqli_query($conexion, "INSERT INTO exp_general(
                                                                                nombre_contratante,
                                                                                obj_contrato,
                                                                                ubicacion,
                                                                                monto_bs,
                                                                                monto_dolares,
                                                                                fecha_ejecucion,
                                                                                participa_aso,
                                                                                n_socio,
                                                                                profesional_resp,
                                                                                image,
                                                                                image2,
                                                                                image3,
                                                                                image4,
                                                                                image5,
                                                                                image6,
                                                                                image7,
                                                                                image8,
                                                                                usuario_id
                                                                            )
                                                                            VALUES(
                                                                                '$nombre_contratante',
                                                                                '$obj_contrato',
                                                                                '$ubicacion',
                                                                                '$monto_bs',
                                                                                '$monto_dolores',
                                                                                '$fecha_ejecucion',
                                                                                '$participa_aso',
                                                                                '$n_socio',
                                                                                '$profesional_resp',
                                                                                '$imgActa',
                                                                                '$imgActa2',
                                                                                '$imgActa3',
                                                                                '$imgActa4',
                                                                                '$imgActa5',
                                                                                '$imgActa6',
                                                                                '$imgActa7',
                                                                                '$imgActa8',
                                                                                '$usuario_id'
                                                                            )");
                                

                                        if ($query_insert) {
                                            if ($nombre_image != '' ) {
                                                move_uploaded_file($url_temp,$src);
                                                move_uploaded_file($url_temp2,$src2);
                                                move_uploaded_file($url_temp3,$src3);

                                                move_uploaded_file($url_temp4,$src4);
                                                move_uploaded_file($url_temp5,$src5);
                                                move_uploaded_file($url_temp6,$src6);
                                                move_uploaded_file($url_temp7,$src7);
                                                move_uploaded_file($url_temp8,$src8);
                                            
                                            } 
                                            $alert = '<p class="alert alert-success"> Guardado Correctamente </p> ';
                                            header("Location: registro_exp.php");

                                        }else{
                                            $alert = '<p class="alert alert-danger "> El registro fallo </p> ';
                                        }

                                        
                        

                                        


            
            
        }
        
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SISPONCELET</title>
        <?php include "includes/scripts.php"; ?>
        
    </head>
    <body class="sb-nav-fixed">
    <?php include "includes/header.php"; ?>
    

        <!-- contenido del sistema-->

        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid ">
                    <div class="container-fluid  ">
                    <div>
                    <h1 class="mt-4"><i class="fa-solid fa-cart-shopping"></i> Registro de Proyectos Comercializadora</h1>
                        
                        <ol class="breadcrumb mb-2 ">
                            <li class="breadcrumb-item active">Poncelet / Proyectos Comercializadora</li> 
                        </ol>
                        
                        <hr>
                       <!-- contenido del sistema 2--> 
                        <!-- formulario de registro de usuarios-->



                    <div class=" container-register2 row ">

                        <div class="col-md-6">
                         <a class="btn alert alert-dark disabled" role="button" aria-disabled="true">N°: <?php echo $total3 ?></a>


                        
                    
                        
                        <form action="" method="post" class="fields was-validated " enctype="multipart/form-data" novalidate >

                         

                        <div class="row mb-3">
                            

                            <div class=" mb-3 caja">
                                    <span for="inputFirstName">Nombre del Contratante / Persona y Dirección de Contacto</span>
                                    <input  class="form-control form-control-sm " name="nombre_contratante" type="text"  required />
                            </div>

                            <div class=" mb-3 caja">
                                    <span for="inputFirstName">Objeto del Contrato (Obra similar)</span> 
                                    <input class="form-control form-control-sm" name="obj_contrato" type="text" required />
                            </div>

                             <hr>

                             <div class="col-md-6">
                                 <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Ubicación</span> 
                                    <input class="form-control form-control-sm" name="ubicacion" type="text" required />
                                 </div>
                             </div>

                             <div class="col-md-3">
                                 <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Monto en Bs.</span> 
                                    <input class="form-control form-control-sm money" id="bs" name="monto_bs" type="number" step='0.001'  placeholder='0.00' oninput="calcular_a_dolar()" required/>
                                 </div>
                             </div>

                             <div class="col-md-3">
                                 <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Monto en $u$ </span> 
                                    <input class="form-control form-control-sm money " id="dolar" name="monto_dolares" type="number" step='0.001'  placeholder='0.00' oninput="calcular_a_bs()" required />
                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Período de ejecución </span> 
                                    <input class="form-control form-control-sm" name="fecha_ejecucion" type="date" required />
                                 </div>
                             </div>

                             

                             <div class="col-md-6">
                                 <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">% participación en Asociación (**)</span> 
                                    <input class="form-control form-control-sm" name="participa_aso" type="text" />
                                 </div>
                             </div> 

                             <div class="col-md-6">
                                 <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Nombre Ll del Socio(s) (***)</span> 
                                    <input class="form-control form-control-sm" name="n_socio" type="text" />
                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Profesional Responsable (****)</span> 
                                    <input class="form-control form-control-sm warning" name="profesional_resp" type="text" value="ALBERTO ARISPE PONCE" />
                                 </div>
                             </div>
                             
                             <hr>

                             <div class=" row"> <hr>

                             <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-folder-open"></i> Subir Actas 
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark ">
                                    <li><a class="dropdown-item " href="#">Acta N°1<input type="file" class="form-control form-control-sm"  name="image" id="files" required></a></li>
                                    <li><a class="dropdown-item" href="#">Acta N°2<input type="file" class="form-control form-control-sm"  name="image2" id="files" ></a></li>
                                    <li><a class="dropdown-item" href="#">Acta N°3<input type="file" class="form-control form-control-sm"  name="image3" id="files"></a></li>

                                    <li><a class="dropdown-item" href="#">Acta N°4<input type="file" class="form-control form-control-sm"  name="image4" id="files"></a></li>
                                    <li><a class="dropdown-item" href="#">Acta N°5<input type="file" class="form-control form-control-sm"  name="image5" id="files"></a></li>
                                    <li><a class="dropdown-item" href="#">Acta N°6<input type="file" class="form-control form-control-sm"  name="image6" id="files"></a></li>
                                    <li><a class="dropdown-item" href="#">Acta N°7<input type="file" class="form-control form-control-sm"  name="image7" id="files"></a></li>
                                    <li><a class="dropdown-item" href="#">Acta N°8<input type="file" class="form-control form-control-sm"  name="image8" id="files"></a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item">Subir las actas en el orden correcto</a></li>
                                </ul>
                                </div>


                                


                             
                             
                            
                             </div>
                        </div>

                        


                            <hr class="">
                            <!-- selector--> 

                            
                            

                            <div class="row">
                                <div class="" role="alert" style=""> <?php echo isset ($alert) ? $alert :''; ?></div>
                                
                                <input type="submit" value="Registrar Experiencia" class="btn btn-success  border-0 " data-dismiss="alert" >
                                
                            </div>

                            <hr>
                            
                            
                                    


                            
                       </form>

                       </div>

                       <div class="col-md-6">
                            <div class="" id="">
                             <center> 
                                
                             <output id="list" class="form-control "></output>
                            
                            </center>
                             

                            </div>
                       </div>



                      
                        
                       
                        
                    </div>

                    

                        
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
    <script type="text/javascript">
        function calcular_a_dolar(){
            try{
                var a = parseFloat(document.getElementById("bs").value) || 0;
                decimal = a.toFixed(2);
                proceso = decimal/6.96;
                result = proceso.toFixed(2);
                document.getElementById("dolar").value = result;
            } catch(e){}
        }

        function calcular_a_bs(){
            try{
                var b = parseFloat(document.getElementById("dolar").value) || 0;
                decimal = b.toFixed(2);
                proceso = decimal*6.96;
                result = proceso.toFixed(2);
                document.getElementById("bs").value = result;
            } catch(e){}
        }


        

    </script>
        <script>
            function archivo(evt) {
                var files = evt.target.files; // FileList object
                
                    //Obtenemos la imagen del campo "file". 
                for (var i = 0, f; f = files[i]; i++) {         
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                            continue;
                    }
                
                    var reader = new FileReader();
                    
                    reader.onload = (function(theFile) {
                        return function(e) {
                        // Creamos la imagen.
                                document.getElementById("list").innerHTML = ['<img class="form-control" style="max-width:400px;" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
            
                    reader.readAsDataURL(f);
                }
            }
                        
                document.getElementById('files').addEventListener('change', archivo, false);
        </script>
    
        <script src="js/function.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>

        
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
