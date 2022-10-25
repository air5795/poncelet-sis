<?php
    
    session_start();
    include "../conexion.php";

    $num =0;

    $query = mysqli_query($conexion, "SELECT * FROM asistencias");
    $result = mysqli_num_rows($query);
    if ($result > 0) {
        while ($data = mysqli_fetch_array($query)) {
             $num = $data['id_asistencia'];
             
        }}

        $sql_tfila = mysqli_query($conexion, "SELECT COUNT(id_asistencia) FROM asistencias;");
        $result_f = mysqli_fetch_array($sql_tfila);
        $total2 = $result_f['COUNT(id_asistencia)'];
        $total3 =  $total2 + 1;


    if (!empty($_POST)) {


        if (empty($_POST['tipo'])) {
            $alert = '<p class="alert alert-danger "> Llenar campos faltantes</p> ';
       } 
       else 
     {
            
            $Tipo = $_POST['tipo'];
            $Usuario = $_SESSION['nombre'];
            $Obs = $_POST['obs'];
            
            $num = $total2 +1;

            

                    $query_insert = mysqli_query($conexion, "INSERT INTO asistencias(
                        usuario_id,
                        tipo_registro,
                        observacion_asis 
                    )
                    VALUES(
                        '$Usuario',
                        '$Tipo',
                        '$Obs'

                    )");


            if ($query_insert) {
                 
                $alert = '<p class="alert alert-success"> Guardado Correctamente </p> ';
                header("Location: asistencia.php");

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
                    <div class="container-fluid px-4 ">
                
                <h1 class="mt-4 col"><i class="fa-solid fa-clipboard-user"></i>  
                <strong>Control de </strong><span style="color:#fd6f0a;"> Asistencias Personal   </span> </h1>
                  <hr>
                        <div class="container-clock">
                            <p id="date">date</p>
                            <h1 id="time">00:00:00</h1>
                            
                           
                        </div>
                        
                        
                        <hr>

                        
                                                    
                        

                        
                       <!-- contenido del sistema 2--> 
                        <!-- formulario de registro de usuarios-->


                        <div class="row">
                        
                        
                        <div class="col-md-4">
                        
                        





                        <form action="asistencia.php" method="post" class="fields was-validated " enctype="multipart/form-data" novalidate >

                        

                        <div class="row" style="background-color: #fff0f0;">
                            

                        

                            

                           

                            

                             
                            <a class="btn alert alert-dark font-weight-bold  disabled" role="button" aria-disabled="true"> <strong> N° de registro:  <?php echo $total3 ?> </strong></a>
                            
                            <div class="col-md-12">
                                <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Tipo de Registro</span> 
                                    <select name="tipo" class="form-select form-select-sm" required >
                                    
                                        <option value="" >Seleccione : </option>
                                        <option value="entrada" >Entrada </option>
                                        <option value="salida" >Salida </option>
                                        
                                    </select>
                                   
                                </div>
                            </div>

                            <input type="hidden" name="usuario" value="<?php $_SESSION['nombre']; ?>">

                            

                            

                            

                            <div class="col-md-12">
                                <div class=" mb-3 mb-md-0">
                                <span for="inputFirstName">Observacion</span> 
                                <input type="text" class="form-control form-control-sm"  name="obs"  >
                                </div>
                            </div> 

                            

                            
                        </div>




                            <hr class="w-100">
                            <!-- selector--> 

                            
                            

                            <div class="row">
                                <div class="" role="alert" style=""> <?php echo isset ($alert) ? $alert :''; ?></div>
                                
                                <input type="submit" value="Registrar Asistencia " class="btn btn-primary  border-0 " data-dismiss="alert" >
                                
                            </div>

                            <hr>

                            
                            
                            
                                    


                            
                        </form>

                        </div>

                        

                        <div class="col">
                        
                            <div class="">

                            <nav class="navbar bg-light">
                                <div class="container-fluid " >
                                    <a class="navbar-brand text-black"> <i class="fa-solid fa-table-list"></i> Registro de Asistencias</a>
                                    <form class="d-flex" role="search">

                                    
                                    

                                   
                                    
                                    <a href="reporte_inventario.php" class="btn btn-danger" style="margin:2px;"> <i class="fa-solid fa-print"></i> Imprimir Reporte de Asistencias</a> 
                                    </form>
                                </div>
                                </nav>

                                
                            
                            <table class="table table-bordered">
                            <table  class="tabla_ale" id="datatablesSimple"  >
                                <thead class="table-secondary">
                                    <tr class="">
                                        
                                        <th>N°</th>
                                        <th>Usuario</th>
                                        <th>Tipo de Registro</th>
                                        <th>Fecha y Hora</th>
                                        <th>Acciones</th>    
                                    </tr>
                                    </thead>
                                    <?php
                    
                                    // rescatar datos DB 
                                    //$query = mysqli_query($conexion, "SELECT * FROM gastos
                                    //ORDER BY id_gasto DESC;");

                                    $query = mysqli_query($conexion, "SELECT inventario.id_inv, 
                                                                            inventario.articulo,
                                                                            inventario.stock,
                                                                            inventario.categoria_id,
                                                                            inventario.foto,
                                                                            categoria_i.nombre_categoria
                                                                    FROM inventario
                                                                    JOIN categoria_i ON inventario.categoria_id = categoria_i.id_categoria;");

                                

                                    $result = mysqli_num_rows($query);
                                    if ($result > 0) {
                                        while ($data = mysqli_fetch_array($query)) {
                                            if ($data['foto'] != 'nodisponible.png' ) {
                                                $image = 'img/inventario/'.$data['foto'];
                                                

                                            }else {
                                                $image = 'img/'.$data['foto'];
                                            }
                                            
                                            

                                            

                                    ?>

                            <tr>
                                <td><?php echo $data['articulo'] ?></td>
                                <td><?php echo $data['articulo'] ?></td>
                                <td><?php echo $data['nombre_categoria'] ?></td>
                                <td><?php echo $data['stock'] ?></td>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                

                                <td class="col-sm-2">

                                <div style="min-width: max-content;">
                                    
                                    <a class="btn btn-outline-success btn-sm gallery-item" id="<?php echo $image; ?> ">
                                    <i class="fa-solid fa-eye"></i> 
                                    </a>
                                
                                    

                                    
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModali<?php echo $data['id_inv']; ?> " class="btn btn-outline-danger btn-sm" href=""><i class="fa-solid fa-trash"></i> </a>
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $data['id_inv']; ?> " class="btn btn-outline-warning btn-sm" href=""><i class="fa-solid fa-pencil"></i> </a>
                                    
                                </div>
                                    
                                    
                                    
                                </td>
                            </tr>

                            <!-- Modal editar  -->
                            <div class="modal fade" id="exampleModal<?php echo $data['id_inv']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="editar_inventario.php" method="post">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Editar a <?php echo $data['articulo'] ?> </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-header text-center " style="padding: 0; margin: 0;">
                                            <input type="hidden" name="eid_inv" value="<?php echo $data['id_inv']; ?>" >
                                            <label for="">Articulo detalle</label>
                                            <input name="earticulo" class="form-control" style="text-align: center;" type="text" value=" <?php echo $data['articulo'] ?>">
                                             
                                            </div>
                                                <div class="card-body " style="padding: 0;margin: 0;">

                                                    

                                                    <div class="alert alert-warning alert-dismissible fade show" role="alert"> 
                                                    <i class="fa-solid fa-user-lock"></i><strong> Stock </strong> <input class="form-control form-control-sm" style="text-align: center;" type="text"  id="dos" name="estock" value="<?php echo $data['stock'] ?>" >
                                                        
                                                    </div>
                                                    
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <input type="submit" value="Actualizar Registros">
                                        </div>

                                        </form>
                                        </div>
                                    </div>
                                    </div>

                            <!-- Modal eliminar  -->
                            <div class="modal fade " id="exampleModali<?php echo $data['id_inv']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content  bg-opacity-80">
                                            <form action="eliminar_inventario.php" method="post">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Eliminar registro  </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-header text-center " style="padding: 0; margin: 0;">
                                            <input type="hidden" name="idInv" value="<?php echo $data['id_inv']; ?>" >
                                            
                                            <input name="ename" class="form-control" style="text-align: center;" type="text" value=" <?php echo $data['articulo'] ?> " disabled>
                                            <input name="ename" class="form-control" style="text-align: center;" type="text" value=" <?php echo $data['stock'].' Bs' ?> " disabled>
                                             
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

        



<script>
    document.addEventListener("click",function(e){
        if(e.target.classList.contains("gallery-item")){
            const src = e.target.getAttribute("id");
            document.querySelector(".modal-img").src = src;

            const myModal = new bootstrap.Modal(document.getElementById('gallery-modal'));
            myModal.show();
        }
    });
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
        <script>
            const time = document.getElementById('time');
            const date = document.getElementById('date');

            const meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
            const interval = setInterval(()=>{
                const local = new Date();
                let day = local.getDate(),
                    month = local.getMonth(),
                    year = local.getFullYear();

                time.innerHTML = local.toLocaleTimeString();
                date.innerHTML = `Fecha Actual : ${day} / ${meses[month]} / ${year}`; 

            },1000);
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>