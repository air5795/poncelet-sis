<?php

session_start();
include "../conexion.php";


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <?php include "includes/scripts.php"; ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>SISPONCELET</title>

    <script src="js/jquery-3.6.1.js"></script>
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <script src="js/jquery.dataTables.min.js"></script>


</head>

<body class="sb-nav-fixed">
    <?php include "includes/header.php"; ?>


    <!-- contenido del sistema-->

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Lista de Proyectos Comercializadora</h1>
                <ol class="breadcrumb mb-2">
                    <li class="breadcrumb-item active">Poncelet / Lista Proyectos (Experiencia Especifica)</li>
                </ol>

                <hr>
                <?php
                            $sql_suma_bs = mysqli_query($conexion, "SELECT SUM(monto_bs) FROM exp_general;");
                            $result_sum = mysqli_fetch_array($sql_suma_bs);
                            $total = $result_sum['SUM(monto_bs)']; 

                            $sql_tfila = mysqli_query($conexion, "SELECT COUNT(id_exp) FROM exp_general;");
                            $result_f = mysqli_fetch_array($sql_tfila);
                            $total2 = $result_f['COUNT(id_exp)']; 

                    ?>
                <!-- llenado de tabla-->

                

                

                

                
        
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Importante!</strong> Seleccionar los proyectos que quiere listar a la Experiencia Especifica.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    
                </div>

                
                        


                

                <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Listado de Proyectos en Base de datos Poncelet
                            </div>
                            


                <div class="card-body">
                <form action="reporte_ee.php" method="POST">
                    <input type="submit" value="DESCARGAR EXPERIENCIA ESPECIFICA" class="btn btn-danger">
                    <a href="rep_ImgEE.php" class="btn btn-secondary">DESCARGAR ACTAS </a>
                    
                    <hr>
                <table  class=" table  table-borderless table-hover tabla_ale" id="datatable" class="display" >
                <thead class="table-secondary">
                    <tr class="">
                        <th>Check</th>
                        <th>idº</th>
                        <th >Nombre del contratante / Persona y Direccion de contacto</th>
                        <th >Objeto del Contrato</th>
                        <th>Ubicacion</th>
                        <th >Monto final del contrato en (Bs)</th>
                        <th  >Periodo de ejecucion (Fecha de inicio y finalizacion)</th>
                        <th >Monto en $u$ (Llenado de uso alternativo)</th>
                        
                        <th>Profesional Responsable</th>
                        
                     
                    </tr>
                    </thead>
                    <?php
                    
                    
                    


                    // rescatar datos DB 
                    $query = mysqli_query($conexion, "SELECT * FROM exp_general 
                                                        ORDER BY id_exp ASC");

                   

                    $result = mysqli_num_rows($query);
                    if ($result > 0) {
                        while ($data = mysqli_fetch_array($query)) {
                            

                            

                    ?>
                            <tr>
                                <form>
                                <td>
                                    <div class="form-check form-switch">
                                        <input  name="check[]" value="<?php echo $data['id_exp'] ?>" class="form-check-input " type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                    </div>
                                </td>
                                <td><?php echo $data['id_exp'] ?></td>
                                <td><?php echo $data['nombre_contratante'] ?></td>
                                <td><?php echo $data['obj_contrato'] ?></td>
                                <td><?php echo $data['ubicacion'] ?></td>
                                <td class=" bg-success bg-opacity-10"><?php echo number_format($data['monto_bs'],2,'.',',').' Bs' ?></td>
                                <td><?php echo $data['fecha_ejecucion'] ?></td>
                                <td class=" bg-success bg-opacity-10"><?php echo number_format($data['monto_dolares'],2,'.',',').' $' ?></td>
                                
                                <td><?php echo $data['profesional_resp'] ?></td>

                                
                                
                            </tr>
                    <?php

                        }
                        
                    }
                    ?>
                
                    


                </table>

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
    <!-- datatablesSimple -->
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    
    <!--<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>-->
    <script src="js/datatables-simple-demo.js"></script>

    <script>$(document).ready(function () {
    $('#datatable').DataTable({
        pageLength: 500,
        lengthMenu: [
            [5, 25, 50,150,500, -1],
            [5, 25, 50,150,500, 'All'],
        ],
        language:{
            url:'js/Spanish.json'
        }
    });
});</script>


    

</body>

</html>