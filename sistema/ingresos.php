<?php
    
    session_start();
    include "../conexion.php";

    $query = mysqli_query($conexion, "SELECT * FROM ingresos");
    $result = mysqli_num_rows($query);
    if ($result > 0) {
        while ($data = mysqli_fetch_array($query)) {
             $num = $data['id_ingreso'];
             
        }}

        $sql_tfila = mysqli_query($conexion, "SELECT COUNT(id_ingreso) FROM ingresos;");
        $result_f = mysqli_fetch_array($sql_tfila);
        $total2 = $result_f['COUNT(id_ingreso)'];
        $total3 =  $total2 + 1;


    if (!empty($_POST)) {


        if (empty($_POST['persona'])  
        || empty($_POST['monto_bs']) 
        || empty($_POST['monto_dolares'])
        || empty($_POST['fecha'])) {
            $alert = '<p class="alert alert-danger "> Todos los Campos Son Obligatorios menos Nombre LI Socio(s)* y Participacion en Asociacion</p> ';
       } 
       else 
     {
            
            $persona = $_POST['persona'];
            $monto_bs = $_POST['monto_bs'];
            $monto_dolares = $_POST['monto_dolares'];
            $fecha = $_POST['fecha'];
            $respaldo = $_FILES['respaldo'];
            $num = $total2 +1;


             //imagen 1
  
             $nombre_image = $respaldo['name'];
             $type = $respaldo['type'];
             $url_temp = $respaldo['tmp_name'];
 
             $imgProducto = 'nodisponible.png';
 
             if ($nombre_image != '') {
                 $destino = 'img/cajaChica_respaldos/';
                 $img_nombre = 'respaldo'.$num.'_1_'.$fecha;
                 //$img_nombre = 'acta_'.$ubicacion.'-'.$fecha_ejecucion.date('H:m:s');
                 $imgActa = $img_nombre.'.jpg';
                 $src= $destino.$imgActa;
             }
            



                    $query_insert = mysqli_query($conexion, "INSERT INTO ingresos(
                        persona,
                        montoBs,
                        montoU,
                        fecha_i,
                        respaldo  
                    )
                    VALUES(
                        '$persona',
                        '$monto_bs',
                        '$monto_dolares',
                        '$fecha',
                        '$imgActa'
                        
                    )");


            if ($query_insert) {
                if ($nombre_image != '' ) {
                    move_uploaded_file($url_temp,$src);
                    
                
                } 
                $alert = '<p class="alert alert-success"> Guardado Correctamente </p> ';
                header("Location: ingresos.php");

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
    <?php  include "includes/header.php";?>
    

        <!-- contenido del sistema-->

        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <div class="container-fluid px-4 row">
                
                <h1 class="mt-4 col"><i class="fa-solid fa-cash-register"></i>  <strong> Caja Chica </strong>  Ingresos</h1>   
                        
                        <hr>

                        
                                                    
                        

                        
                       <!-- contenido del sistema 2--> 
                        <!-- formulario de registro de usuarios-->


                        <div class="  row ">
                        
                        
                        <div class="col-md-6 row">
                        <h3 class="col"><i class="fa-regular fa-newspaper"></i> Registro de Ingresos</h3>
                        <a class="btn alert alert-dark col disabled" role="button" aria-disabled="true">N° de registro: <?php echo $total3 ?> </a>





                        <form action="ingresos.php" method="post" class="fields was-validated " enctype="multipart/form-data" novalidate >

                        

                        <div class="row mb-3">
                            

                        

                            <hr>

                            

                           

                            <div class="col-md-6">
                                <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Persona </span> 
                                    <input class="form-control form-control-sm bg-warning bg-opacity-10" name="persona" type="text" value="Alberto Arispe Ponce" required  />
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

                            <div class="col-md-4">
                                <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Fecha </span> 
                                    <input class="form-control form-control-sm" name="fecha" type="date" required />
                                </div>
                            </div>

                            

                            <div class="col-md-8">
                                <div class=" mb-3 mb-md-0">
                                <span for="inputFirstName">Respaldo </span> 
                                <input type="file" class="form-control form-control-sm"  name="respaldo" id="files" >
                                </div>
                            </div> 

                            

                            
                        </div>




                            <hr class="w-100">
                            <!-- selector--> 

                            
                            

                            <div class="row">
                                <div class="" role="alert" style=""> <?php echo isset ($alert) ? $alert :''; ?></div>
                                
                                <input type="submit" value="Registrar Ingreso" class="btn btn-success  border-0 " data-dismiss="alert" >
                                
                            </div>

                            <hr>

                            <div class="col-md-12">
                                <div class="" id="">
                                <center> 
                                    
                                <output id="list" class="form-control "></output>
                                
                                </center>
                                

                                </div>
                            </div>
                            
                            
                                    


                            
                        </form>

                        </div>

                        

                        <div class="col-md-6">
                            <div class="" id="">

                            <nav class="navbar bg-light">
                                <div class="container-fluid">
                                    <a class="navbar-brand text-black"> <i class="fa-solid fa-table-list"></i>  Lista de Ingresos </a>
                                    <form class="d-flex" role="search">
                                    <a style="border: groove; color:red" class="btn btn-secomdary bg-opacity-10" ><i class="fa-solid fa-print"></i></i> Imprimir</a>
                                    <button style="border: groove;" class="btn btn-outline-success btn-sm" type="submit"> <strong> TOTAL INGRESOS: </strong> 12,500bs</button>
                                    <button style="border: groove;" class="btn btn-outline-success btn-sm" type="submit"> <strong><i class="fa-solid fa-filter-circle-dollar"></i> SALDO:</strong> 12,500bs</button>
                                    </form>
                                </div>
                                </nav>
                            
                            <table class="table table-bordered">
                            <table  class="tabla_ale" id="datatablesSimple"  >
                                <thead class="table-secondary">
                                    <tr class="">
                                        
                                        <th>N°</th>
                                        <th>Persona</th>
                                        <th>Monto(Bs)</th>
                                        <th>Monto($)</th>
                                        <th>Fecha de Ingreso</th>
                                        <th>Respaldo</th>
                                        <th>Acciones</th>    
                                    </tr>
                                    </thead>

                                    <tbody>
                                        
                                    </tbody>
                            </table>
                            

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>