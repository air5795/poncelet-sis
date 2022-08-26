<?php
    

    session_start();
    

    include "../conexion.php";
    if (!empty($_POST)) {

        if (empty($_POST['nombre_contratante']) || empty($_POST['obj_contrato']) || empty($_POST['ubicacion']) || empty($_POST['monto_bs']) || empty($_POST['monto_dolares']) 
         || empty($_POST['fecha_ejecucion']) || empty($_POST['participa_aso']) || empty($_POST['profesional_resp'])) {
            $alert = '<p class="alert alert-danger w-50"> Todos los Campos Son Obligatorios menos Nombre LI Socio(s)*</p> ';
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
            $nombre_image = $image['name'];
            $type = $image['type'];
            $url_temp = $image['tmp_name'];

            $imgProducto = 'nodisponible.png';

            if ($nombre_image != '') {
                $destino = 'img/actas/';
                $img_nombre = 'acta_'.md5(date('d-m-y H:m:s'));
                //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
                $imgActa = $img_nombre.'.jpg';
                $src= $destino.$imgActa;
            }


            
            $query_insert = mysqli_query($conexion, "INSERT INTO exp_general (nombre_contratante, obj_contrato, ubicacion, monto_bs, monto_dolares
                                                                , fecha_ejecucion, participa_aso, n_socio, profesional_resp, image, usuario_id) 
                                                     VALUES ('$nombre_contratante','$obj_contrato','$ubicacion','$monto_bs','$monto_dolores'
                                                                ,'$fecha_ejecucion','$participa_aso','$n_socio','$profesional_resp','$imgActa','$usuario_id')");
                                        
                                        if ($query_insert) {
                                            if ($nombre_image != '') {
                                                move_uploaded_file($url_temp,$src);
                                            }
                                            $alert = '<p class="alert alert-success"> Guardado Correctamente </p> ';
                                        }
                                        else{
                                            $alert = '<p class="alert alert-danger w-50"> El registro fallo </p> ';
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
                    <div class="container-fluid px-4">
                    <div>
                    <h1 class="mt-4">Registro de Experiencia General</h1>
                        
                        <ol class="breadcrumb mb-2 ">
                            <li class="breadcrumb-item active">Poncelet / Registro Experiencia General - Comercializadora</li> 
                        </ol>
                    
                        
                    </div>   
                        
                        <hr>
                       <!-- contenido del sistema 2--> 
                        <!-- formulario de registro de usuarios-->



                    <div class=" container-register2 row g-4">

                        <div class="col">

                        
                    
                        
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
                                    <span for="inputFirstName">Período de ejecución (Fecha de inicio y finalización)</span> 
                                    <input class="form-control form-control-sm" name="fecha_ejecucion" type="date" required />
                                 </div>
                             </div>

                             

                             <div class="col-md-6">
                                 <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">% participación en Asociación (**)</span> 
                                    <input class="form-control form-control-sm warning" name="participa_aso" type="text" value="Encargado"/>
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
                                    <input class="form-control form-control-sm warning" name="profesional_resp" type="text" value="Alberto Arispe Ponce" />
                                 </div>
                             </div>

                             <div class=" col-md-8"> <hr>
                             
                             
                             

                             <div class="">
                                    <input type="file" class=""  name="image" id="files"  required>
                            </div>
                             </div>
                        </div>

                        


                            <hr class="w-100">
                            <!-- selector--> 

                            
                            

                            <div class="center">
                                <div class=" align-self-center " role="alert" style=""> <?php echo isset ($alert) ? $alert :''; ?></div>
                                <input type="submit" value="Registrar Experiencia" class="btn btn-success  border-0 w-50   " data-dismiss="alert" >
                            </div>
                            
                            
                                    


                            
                       </form>

                       </div>

                       <div class="col">
                            <div class="" id="">
                             <center> <output id="list" class="form-control""></output></center>
                             

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
                                document.getElementById("list").innerHTML = ['<img class="thumb" style="width:320px;" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
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
