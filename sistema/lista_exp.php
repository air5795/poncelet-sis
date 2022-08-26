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

</head>

<body class="sb-nav-fixed">
    <?php include "includes/header.php"; ?>


    <!-- contenido del sistema-->

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Lista de Proyectos Comercializadora</h1>
                <ol class="breadcrumb mb-2">
                    <li class="breadcrumb-item active">Poncelet / Lista Proyectos </li>
                </ol>

                <hr>
                <!-- llenado de tabla-->

                <div class="row g-3">
                
                <div class="input-group  col">
                       <a href="registro_exp.php" class=" btn btn-primary col "><i class="fa-solid fa-circle-plus"></i>  Nuevo Proyecto</a>
                </div>
                <div class="input-group  col">
                        <a href="registro_exp.php" class=" btn btn-danger col "><i class="fa-solid fa-file-pdf"></i>  Crear PDF</a>
                </div>
                <div class="input-group  col">
                        <a href="registro_exp.php" class=" btn btn-success col "> <i class="fa-solid fa-table"></i>  Crear Excel</a>
                </div>
                <div class="input-group col">
                        
                    </div>
                    <div class="input-group col">
                        
                    </div>
                    <div class="input-group col">
                        
                    </div>
                    <div class="input-group col">
                        
                    </div>
                
                </div>
<hr>
                <div class="row g-3">
                    <div class="input-group col">
                        
                    </div>
                    <div class="input-group col">
                        
                    </div>
                    <div class="input-group col">
                        <span class="input-group-text" id="basic-addon1">N° de proyectos </span>
                        <input type="text" class="form-control border-warning bg-opacity-25 bg-warning" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group  col ">
                        <span class="input-group-text" id="basic-addon1">Total (Bs)</span>
                        <input type="text" class="form-control alert-success" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>

                

                
                    
                
                

                <hr>
            

                <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Listado de Proyectos en Base de datos Poncelet
                            </div>
                            


                <div class="card-body">
                
                <table  class=" table-striped-columns" style="width:100%" " id="datatablesSimple"  >
                <thead class="table-secondary">
                    <tr>
                        <th>idº</th>
                        <th>Nombre del contratante / Persona y Direccion de contacto</th>
                        <th>Objeto del Contrato</th>
                        <th>Ubicacion</th>
                        <th>Monto final del contrato en (Bs)</th>
                        <th>Periodo de ejecucion (Fecha de inicio y finalizacion)</th>
                        <th>Monto en $u$ (Llenado de uso alternativo)</th>
                        <th>% de Participacion en Asociacion</th>
                        <th>Nombre LI del Socio(s)</th>
                        <th>Profesional Responsable</th>
                        <th>imagen (acta)</th>
                        <th>Acciones</th>    
                    </tr>
                    </thead>
                    <?php
                    //paginador

                    $sql_registe = mysqli_query($conexion, "SELECT COUNT(*) as total_registro from cliente");

                    $result_register = mysqli_fetch_array($sql_registe);

                    $total_registro = $result_register['total_registro']; 

                    $por_pagina = 7;

                    if (empty($_GET['pagina'])) {
                        $pagina = 1;
                    }else {
                        $pagina = $_GET['pagina'];
                    }

                    $desde = ($pagina-1) * $por_pagina;  // 0
                    $total_paginas = ceil($total_registro / $por_pagina);


                    // rescatar datos DB 
                    $query = mysqli_query($conexion, "SELECT * FROM exp_general 
                                                        ORDER BY id_exp ASC");

                   

                    $result = mysqli_num_rows($query);

                    if ($result > 0) {
                        while ($data = mysqli_fetch_array($query)) {
                            if ($data['image'] != 'nodisponible.png') {
                                $image = 'img/actas/'.$data['image'];

                            }else {
                                $image = 'img/'.$data['image'];
                            }                            

                    ?>
                            <tr>
                                <td><?php echo $data['id_exp'] ?></td>
                                <td><?php echo $data['nombre_contratante'] ?></td>
                                <td><?php echo $data['obj_contrato'] ?></td>
                                <td><?php echo $data['ubicacion'] ?></td>
                                <td><?php echo $data['monto_bs'] ?></td>
                                <td><?php echo $data['fecha_ejecucion'] ?></td>
                                <td><?php echo $data['monto_dolares'] ?></td>
                                <td><?php echo $data['participa_aso'] ?></td>
                                <td><?php echo $data['n_socio'] ?></td>
                                <td><?php echo $data['profesional_resp'] ?></td>
                                <td>
                                    <img style= "width:100px" src="<?php echo $image ?>" alt=""> 
                                </td>
                                
                                

                                <td class="col-sm-2">
                                    <a href="editar_exp.php?id=<?php echo $data['id_exp'] ?>" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar" >
                                        <i class="fa fa-square-pen"></i>  
                                    </a>

                                    
                                    <a href="eliminar_exp.php?id=<?php echo $data['id_exp'] ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Dar de Baja">
                                        <i class="fa-solid fa-circle-minus"></i>
                                    </a>
                                    
                                    
                                </td>
                            </tr>
                    <?php

                        }
                    }
                    ?>


                </table>
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
    
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>

    <script type="text/javacsript">
    
        
    </script>
    

</body>

</html>