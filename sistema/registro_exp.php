<?php
    

    session_start();
    

    include "../conexion.php";
    if (!empty($_POST)) {
        $alert = '';
        if (empty($_POST['nombre']) || empty($_POST['direccion']) || empty($_POST['nit'])) {
            $alert = '<p class="alert alert-danger w-50"> Todos los Campos Son Obligatorios menos telefono *</p> ';
        } 
        else 
        {

            $nit = $_POST['nit'];
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $usuario_id = $_SESSION['iduser'];

            $result = 0;

            if (is_numeric($nit) and $nit !=0) {
                $query = mysqli_query($conexion,"SELECT * FROM cliente WHERE nit = '$nit'");
                $result = mysqli_fetch_array($query);


            }

            if ($result > 0) {
                $alert = '<p class="alert alert-danger w-50"> El numero de nit ya existe</p> ';
            }else {
                $query_insert = mysqli_query($conexion, "INSERT INTO cliente (nit,nombre,telefono,direccion,usuario_id) 
                                                         VALUES ('$nit','$nombre','$telefono','$direccion','$usuario_id')");
                                        
                                        if ($query_insert) {
                                            $alert = '<p class="alert alert-success"> Cliente Guardado Correctamente </p> ';
                                        }
                                        else{
                                            $alert = '<p class="alert alert-danger w-50"> El registro fallo </p> ';
                                        }
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



                    <div class=" ">

                    
                        
                        <form action="" method="post" class="fields" class="">

                        <div class="row mb-3">
                        <h3>Registro de Proyectos - Comercializadora</h3><hr>
                            <div class=" col-md-1 offset-md-11">
                                    <span for="number">N°</span> 
                                    <input class="form-control form-control" id="num_acta" type="text" value="12" disabled />
                            </div>

                            <div class=" mb-3">
                                    <span for="inputFirstName">Nombre del Contratante / Persona y Dirección de Contacto</span> 
                                    <input class="form-control form-control-sm" id="nombre_contratante" type="text" />
                            </div>

                            <div class=" mb-3">
                                    <span for="inputFirstName">Objeto del Contrato (Obra similar)</span> 
                                    <input class="form-control form-control-sm" id="obj_contrato" type="text" />
                            </div>

                             

                             <div class="col-md-6">
                                 <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Ubicación</span> 
                                    <input class="form-control form-control-sm" id="ubicacion" type="text" />
                                 </div>
                             </div>

                             <div class="col-md-3">
                                 <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Monto final del contrato en Bs. (*)</span> 
                                    <input class="form-control form-control-sm money" id="monto_bs" type="number" step='0.01'  placeholder='0.00' />
                                 </div>
                             </div>

                             <div class="col-md-3">
                                 <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Monto en $u$ (Llenado de uso alternativo)</span> 
                                    <input class="form-control form-control-sm money " id="monto_dolares" type="number" step='0.01'  placeholder='0.00' />
                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Período de ejecución (Fecha de inicio y finalización)</span> 
                                    <input class="form-control form-control-sm" id="fecha_ejecucion" type="date" />
                                 </div>
                             </div>

                             

                             <div class="col-md-6">
                                 <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">% participación en Asociación (**)</span> 
                                    <input class="form-control form-control-sm warning" id="participa_aso" type="text" value="Encargado"/>
                                 </div>
                             </div> 

                             <div class="col-md-6">
                                 <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Nombre Ll del Socio(s) (***)</span> 
                                    <input class="form-control form-control-sm" id="n_socio" type="text" />
                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Profesional Responsable (****)</span> 
                                    <input class="form-control form-control-sm warning" id="profesional_resp" type="text" value="Alberto Arispe Ponce" />
                                 </div>
                             </div>

                             <div class=" col-md-8"> <hr>
                             <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01"><i class="fa-solid fa-upload"></i></label>
                                    <input type="file" class="form-control" id="inputGroupFile01">
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
