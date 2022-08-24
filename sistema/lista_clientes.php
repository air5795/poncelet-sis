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
                <h1 class="mt-4">Lista de Clientes</h1>
                <ol class="breadcrumb mb-2">
                    <li class="breadcrumb-item active">Poncelet / Lista Clientes </li>
                </ol>

                <hr>
                <!-- llenado de tabla-->

                <a href="registro_cliente.php" class="btn btn-primary">Crear nuevo Cliente</a>

                <hr>
            

                <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Listado de Clientes en Base de datos Poncelet
                            </div>
                            


                <div class="card-body">
                <table  class="display compact" style="width:100%" " id="datatablesSimple"  >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NIT</th>
                        <th>NOMBRE</th>
                        <th>TELEFONO</th>
                        <th>DIRECCION</th>
                        <th>ESTATUS</th>
                        <th>ACCIONES</th>    
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
                    $query = mysqli_query($conexion, "SELECT * FROM cliente 
                                                        ORDER BY idcliente ASC");

                   

                    $result = mysqli_num_rows($query);

                    if ($result > 0) {
                        while ($data = mysqli_fetch_array($query)) {

                    ?>
                            <tr>
                                <td><?php echo $data['idcliente'] ?></td>
                                <td><?php echo $data['nit'] ?></td>
                                <td><?php echo $data['nombre'] ?></td>
                                <td><?php echo $data['telefono'] ?></td>
                                <td><?php echo $data['direccion'] ?></td>
                                <td><?php echo $data['estatus'] ?></td>
                                
                                

                                <td class="col-sm-2">
                                    <a href="editar_cliente.php?id=<?php echo $data['idcliente'] ?>" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar" >
                                        <i class="fa fa-square-pen"></i>  
                                    </a>

                                    
                                    <a href="baja_cliente.php?id=<?php echo $data['idcliente'] ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Dar de Baja">
                                        <i class="fa-solid fa-circle-minus"></i>
                                    </a>
                                    <a href="activar_cliente.php?id=<?php echo $data['idcliente'] ?>" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Activar">
                                        <i class="fa-solid fa-circle-check"></i>
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