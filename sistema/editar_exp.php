<?php
    
    session_start();
    
    include "../conexion.php";
    

    if (!empty($_POST)) {
        $alert = '';
        if (empty($_POST['nombre_contratante']) || empty($_POST['obj_contrato']) || empty($_POST['ubicacion']) || empty($_POST['monto_bs']) || empty($_POST['monto_dolares']) 
        || empty($_POST['fecha_ejecucion'])  || empty($_POST['profesional_resp'])) {
            $alert = '<p class="alert alert-danger w-50"> Todos los Campos Son Obligatorios </p> ';
        } else {
            
            $idexp = $_POST['id_exp'];
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

            
            $query = mysqli_query($conexion,"SELECT * FROM exp_general 
                                                      WHERE (id_exp = $idexp)");
            $resul = mysqli_fetch_array($query);

            if ($resul > 0) {
                $alert  = $alert = '<p class="alert alert-danger w-50"> No esta disponible </p> ';
            }else {
                
                    $sql_update = mysqli_query($conexion,"UPDATE exp_general
                                                          SET nombre_contratante = '$nombre_contratante', 
                                                              obj_contrato = '$obj_contrato ', 
                                                              ubicacion = '$ubicacion' ,
                                                              monto_bs = '$monto_bs',
                                                              monto_dolares = '$monto_dolares',
                                                              fecha_ejecucion = '$fecha_ejecucion',
                                                              participa_aso = '$participa_aso',
                                                              n_socio = '$n_socio',
                                                              profesional_resp = '$profesional_resp',
                                                              fecha_ejecucion = '$fecha_ejecucion',
                                                              
                                                          WHERE idusuario = $idUsuario ");    
                }

                if ($sql_update) {
                    $alert = '<p class="alert alert-success"> SE ACTUALIZO CORRECTAMENTE </p> ';
                }
                else{
                    $alert = '<p class="alert alert-danger w-50"> LA ACTUALIZACION FALLO </p> ';
                }
            }
        }


    //mostrar datos

    if (empty($_GET['id'])) 
    {
        header('Location: lista_exp.php');
    }

    $iduser = $_GET['id'];
    $sql= mysqli_query($conexion,"SELECT u.idusuario, u.nombre, u.correo, u.usuario, (u.rol) as idrol, (r.rol) as rol
                                FROM usuario u
                                INNER JOIN rol r
                                ON u.rol = r.idrol
                                WHERE idusuario = $iduser"); // colocar la variable rescatada de GET 

    $result_sql = mysqli_num_rows($sql);

    if ($result_sql == 0) {
        header('Location: lista_usuarios.php');
    }else {

        $option = '';
        while ($data = mysqli_fetch_array($sql)) {
            $iduser = $data['idusuario'];
            $nombre = $data['nombre'];
            $correo = $data['correo'];
            $usuario = $data['usuario'];
            $idrol = $data['idrol'];
            $rol = $data['rol'];

            if ($idrol == 1) {
                $option = '<option value = " '.$idrol.'" select> '.$rol.' </option>';
            }elseif ($idrol == 2) {
                $option = '<option value = " '.$idrol.'" select> '.$rol.' </option>';
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
                    <div>
                    <h1 class="mt-4">Editar Usuario</h1>
                        
                        <ol class="breadcrumb mb-2 ">
                            <li class="breadcrumb-item active">Poncelet / Editar Usuario</li> 
                        </ol>
                    
                        
                    </div>   
                        
                        <hr>
                       <!-- contenido del sistema 2--> 
                        <!-- formulario de registro de usuarios-->



                    <div class="form_register  container px-4 ">
                        
                        
                        <form action="" method="post">

                            <input type="hidden" name="idUsuario" value="<?php echo $iduser;?>">
                            <label for="nombre">Nombre</label>
                            <input class="form-control " type="text" name="nombre" id="nombre" placeholder="Introdusca su nombre" value="<?php echo $nombre ?>">
                            <label for="correo">Correo</label>
                            <input class="form-control" type="text" name="correo" id="correo" placeholder="Introdusca su correo" value="<?php echo $correo ?>">
                            <label for="usuario">Usuario</label>
                            <input class="form-control" type="text" name="usuario" id="usuario" placeholder="Introdusca su usuario" value="<?php echo $usuario ?>">
                            <label for="clave">Clave</label>
                            <input class="form-control" type="text" name="clave" id="clave" ">
                            <hr class="w-100">
                            <!-- selector--> 

                            <div class="input-group mb-3 ">
                                <label class="input-group-text" for="inputGroupSelect01">Tipo de Usuario</label>
                                
                                
                                <?php
                                    $query_rol = mysqli_query($conexion,"SELECT * FROM rol");
                                    $result_rol = mysqli_num_rows($query_rol);
                                ?>

                                <select class="form-select w-50 ocultar"  name="rol" id="rol">
                                
                                <?php
                                    echo $option;
                                    if ($result_rol > 0) {
                                        while ($rol = mysqli_fetch_array($query_rol)) {
                                ?>            
                                    <option value="<?php echo $rol["idrol"]; ?>"><?php echo $rol["rol"]?></option>
                                <?php
                                        }
                                        
                                    }
                                ?>

                                    
                                    
                                </select>
                            </div>
                            <hr class="w-100">     
                                    <center><input type="submit" value="Actualizar Usuario" class="btn btn-success  border-0 w-50   " data-dismiss="alert" ></center>
                                    <div class=" form-text text-center " role="alert" style=""> <?php echo isset ($alert) ? $alert :''; ?></div>
                            
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