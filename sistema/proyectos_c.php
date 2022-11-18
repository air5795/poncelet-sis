<?php
    
    session_start();
    include "../conexion.php";

    $query = mysqli_query($conexion, "SELECT * FROM proyectos");
    $result = mysqli_num_rows($query);
    if ($result > 0) {
        while ($data = mysqli_fetch_array($query)) {
             $num = $data['id_proyecto'];
             
        }}

        $sql_tfila = mysqli_query($conexion, "SELECT COUNT(id_proyecto) FROM proyectos;");
        $result_f = mysqli_fetch_array($sql_tfila);
        $total2 = $result_f['COUNT(id_proyecto)'];
        $total3 =  $total2 + 1;


    if (!empty($_POST)) {


       
      
     
            
            $nombre_p = $_POST['nombre_proyecto'];
            $num = $total2 +1;


             
                    $query_insert = mysqli_query($conexion, "INSERT INTO proyectos(pro_nombre)
                                                                VALUES('$nombre_p')");


            if ($query_insert) {
                 
                $alert = '<p class="alert alert-success"> Guardado Correctamente </p> ';
                header("Location: proyectos_c.php");

            }else{
                $alert = '<p class="alert alert-danger "> El registro fallo </p> ';
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
    <?php  include "includes/header.php";?>
    

        <!-- contenido del sistema-->

        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <div class="container-fluid px-4 ">
                
                <h1 class="mt-4 col"><i class="fa-solid fa-book"></i> <strong>Gestor de <span style="color:coral;"> Proyectos </strong>   </span></h1>
                  
                        
                        <hr>

                        
                                                    
                        

                        
                       <!-- contenido del sistema 2--> 
                        <!-- formulario de registro de usuarios-->


                        <div class="row">
                        
                        
                        <div class="col-md-4">
                            
                        
                        





                        <form action="proyectos_c.php" method="post" class="fields was-validated " enctype="multipart/form-data" novalidate >

                        
                        

                        <div class="row" style="background-color: #fffbf0">
                            

                        <?php
                            $sql_suma_bs = mysqli_query($conexion, "SELECT SUM(g_montoBs) FROM gastos_c;");
                            $result_sum = mysqli_fetch_array($sql_suma_bs);
                            $total = $result_sum['SUM(g_montoBs)']; 

                            $sql_suma_bs2 = mysqli_query($conexion, "SELECT SUM(montoBs) FROM ingresos_c;");
                            $result_sum2 = mysqli_fetch_array($sql_suma_bs2);
                            $total2 = $result_sum2['SUM(montoBs)'];

                            
                            
                            $saldo = $total2 - $total;

                            

                        ?>

                        

                            

                           

                            

                        
                            <a class="btn alert alert-dark font-weight-bold  disabled" role="button" aria-disabled="true"> <strong> N° de registro:  <?php echo $total3 ?> </strong></a>
                            <div class="col-md-12">
                                <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Nombre del Proyecto  </span> 
                                    <input  class="form-control form-control-sm  bg-opacity-10" name="nombre_proyecto" type="text" value="" required  />
                                </div>
                            </div>
                           

                            

                            
                        </div>




                            <hr >
                            <!-- selector--> 

                            
                            

                            <div class="row">
                                <div class="" role="alert" style=""> <?php echo isset ($alert) ? $alert :''; ?></div>
                                
                                <input type="submit" value="Registrar Proyecto" class="btn btn-warning  border-0  " data-dismiss="alert" >
                                
                                
                            </div>

                            
                            
                            
                                    


                            
                        </form>

                        </div>

                        

                        <div class="col">
                       
                            <div class="">

                            

                                
                            
                            <table class="table table-bordered">
                            <table  class="tabla_ale" id="datatablesSimple"  >
                                <thead class="table-secondary">
                                    <tr class="">
                                        
                                        <th>N°</th>
                                        <th>Nombre de Proyecto</th>
                                        <th>Total Ingresos</th>
                                        <th>Total Gastos</th>
                                        <th>Saldo</th>
                                        <th>acciones</th>
                              
                                    </tr>
                                    </thead>
                                    <?php
                    
                                    // rescatar datos DB 
                                    //$query = mysqli_query($conexion, "SELECT * FROM gastos
                                    //ORDER BY id_gasto DESC;");

                                    $query = mysqli_query($conexion, "SELECT
                                                                            ROW_NUMBER() 
                                                                            OVER(ORDER BY id_proyecto ) 
                                                                            row_num,
                                                                            id_proyecto,
                                                                            pro_nombre,
                                                                            total_i,
                                                                            total_g,
                                                                            saldo 
                                                                            FROM proyectos
                                                                            ORDER BY id_proyecto DESC;");

                                

                                    $result = mysqli_num_rows($query);
                                    if ($result > 0) {
                                        while ($data = mysqli_fetch_array($query)) {
                                            
                                            
                                            

                                            

                                    ?>

                            <tr>
                                <td><?php echo $data['row_num'] ?></td>
                                <td><?php echo $data['pro_nombre'] ?></td>
                                <td><?php echo $data['total_i'] ?></td>
                                <td><?php echo $data['total_g'] ?></td>
                                <td><?php echo $data['saldo'] ?></td>


                                <td class="col-sm-2">

                                <div style="min-width: max-content;">
                                    
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModali<?php echo $data['id_proyecto']; ?> " class="btn btn-outline-danger btn-sm" href=""><i class="fa-solid fa-trash"></i> </a>
                                    <button style="border: groove;" disabled class="btn btn-light btn-sm" type="submit"> <strong>
                                        <i class="fa-solid fa-filter-circle-dollar"></i> SALDO :</strong> 
                                        <?php 
                                        if ($saldo > 0) {
                                            echo '<span style="color: green;"> '.$saldo.'  bs </span>';    
                                        } else {
                                            echo '<span style="color: red;"> '.$saldo.'  bs </span>'; 
                                        }
                                        
                                        
                                        ?>
                                    </button>             
                                    
                                </div>
                                    
                                    
                                    
                                </td>
                            </tr>

                            <!-- Modal eliminar  -->
                            <div class="modal fade " id="exampleModali<?php echo $data['id_proyecto']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content  bg-opacity-80">
                                            <form action="eliminar_proyectos.php" method="post">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Eliminar registro  </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-header text-center " style="padding: 0; margin: 0;">
                                            <input type="hidden" name="idProyecto" value="<?php echo $data['id_proyecto']; ?>" >
                                            
                                            <input name="ename" class="form-control" style="text-align: center;" type="text" value=" <?php echo $data['pro_nombre'] ?> " disabled>
                                            
                                             
                                            </div>
                                                
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <input class="btn btn-danger" type="submit" value="Eliminar">
                                        </div>

                                        </form>
                                        </div>
                                    </div>
                                    </div>


                    <?php

                        }
                    }
                    ?>

                                    
                            </table>
                            

                            </div>
                        </div>







                        </div>




                        </div>
                        <!-- Modal para  ver imagenes -->
                <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered " > 
                    <div class="modal-content modal-fullscreen ">
                    <div class="modal-header">
                        <!--<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" >
                        <img src="img/actas/acta_103_1_2021-02-22.jpg" class="modal-img" alt="modal img">
                    </div>
                    
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

        




        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>