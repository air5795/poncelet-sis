<?php
    
    session_start();
    include "../conexion.php";

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
                    <div class="container-fluid px-4 row">
                    <img src="../img/login.png" style="width:100px;" class="col-2">
                <h1 class="mt-4 col">Claves y Credenciales PONCELET</h1>  
                        
                        <hr>
                       <!-- contenido del sistema 2--> 




                        


                       <div class="card">
                        <div class="card-header">
                            Correos de la Empresa
                        </div>
                        <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            
                            <p class="mb-0" style="text-align: left;"> <strong> CORREO (COMERCIALIZADORA) :</strong> poncelet.bo@gmail.com</p>
                            <p class="mb-0" style="text-align: left;"> <strong> Password :</strong> albertoarispe@1</p>
                            <hr>
                            <p class="mb-0" style="text-align: left;"> <strong> CORREO (CONSTRUCTORA) :</strong> poncelet.bol@gmail.com</p>
                            <p class="mb-0" style="text-align: left;"> <strong> Password :</strong> albertoarispeponce</p>
                            </div>
                        </div>
                        </div>



                        
                        
                        <div class="row">

                        <div class="card col-sm-3" style="font-size: 14px;">
                                <div class="card-header text-center">
                                    WIFI OFICINA
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Usuario: </strong> <input class="" type="text"  id="uno" value="Poncelet" disabled>
                                        <button id="submit_uno" class="btn btn-warning btn-sm"><i class="fa-solid fa-lock"></i></button>
                                        <button id="guardar_uno" class="btn btn-success btn-sm"><i class="fa-solid fa-floppy-disk"></i></button>
                                    </div>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Password: </strong> <input type="text"  id="dos" value="Ponce2021.@" disabled>
                                        <button id="submit_dos" class="btn btn-warning btn-sm"><i class="fa-solid fa-lock"></i></button>
                                        <button id="guardar_dos" class="btn btn-success btn-sm"><i class="fa-solid fa-floppy-disk"></i></button> 
                                    </div>
                                    
                                </div>
                        </div>

                        


                        


                        

























                            

                            
                            <script>
                            
                            document.getElementById('submit_uno').onclick = function() {
                                var disabled = document.getElementById("uno").disabled;
                                if (disabled) {
                                    document.getElementById("uno").disabled = false;
                                }
                                else {
                                    document.getElementById("uno").disabled = true;
                                }
                            }

                            document.getElementById('submit_dos').onclick = function() {
                                var disabled = document.getElementById("dos").disabled;
                                if (disabled) {
                                    document.getElementById("dos").disabled = false;
                                }
                                else {
                                    document.getElementById("dos").disabled = true;
                                }
                            }


                            </script>
                            
                            
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