<?php

session_start();
include "../conexion.php";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <?php include "includes/scripts.php"; ?>
    <link rel="stylesheet" href="css/estilos.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SISPONCELET</title>

</head>

<body class="sb-nav-fixed">
    <?php include "includes/header.php"; ?>

    <div id="layoutSidenav_content">
        <div class="container-fluid px-5 fondo ">
            <h1 class="mt-4 col"><i class="fa-solid fa-truck-ramp-box"></i> <strong>Gestor </strong><span style="color:#fd6f0a;"> Base de datos Productos </span></h1>
            <hr> 
        

        <div class="row">
            <div class="col-2 offset-10">
                <div class="text-center">
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalproductos" id="botonCrear">
                        <i class="fa-solid fa-circle-plus"></i> Registrar Producto
                        </button>


                </div>
            </div>
        </div>

        <br />
        <br />

            <div class="table-responsive">
                <table id="datos_producto" class="table table-bordered table-striped" style="font-size: 10px;">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>NOMBRE Y DESCRIPCION</th>
                        <th>MARCA</th>
                        <th>U/M</th>
                        <th>PRECIO COMPRA</th>
                        <th>PRECIO VENTA</th>
                        <th>TIPO PRODUCTO</th>
                        <th>PROVEEDOR</th>
                        <th>FECHA REGISTRO</th>
                        <th>IMAGEN</th>
                        <th>FICHA TECNICA</th>
                        <th>CERTIFICADO</th>
                        <th>EDITAR</th>
                        <th>BORRAR</th>
                        </tr>
                    </thead>
                </table>

            </div>
        </div>

        <!-- Modal NUEVO -->
        <div class="modal fade" id="modalproductos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Productos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
                <form action="" method="POST" id="formulario" enctype="multipart/form-data">
                    
                    <div class="modal-content">

                    <div class="modal-body" style="background-color: #ebebeb;">

                    <p style="color:red">(*) Obligatorio Llenar</p>
                    <div class="row">

                        <div class="col-12">
                            <label for="nombre" style="color: black;font-family: sans-serif;">Ingrese el Nombre o Descripción <span style="color:red"> *</span></label>
                            <input type="text" name="nombre" id="nombre" class="form-control form-control-sm">
                        </div>
                        <div class="col-6">
                            <label for="marca" style="color: black;font-family: sans-serif;">Ingrese la Marca</label>
                            <input type="text" name="marca" id="marca" class="form-control form-control-sm">
                        </div> 
                        <div class="col-6">
                            <label for="unidad" style="color: black;font-family: sans-serif;">Ingrese Unidad Medible (U/M) <span style="color:red"> *</span></label>
                            <select name="unidad" id="unidad" class="form-control form-control-sm">
                                <option value="">Selecciona una Opcion</option>
                                <option value="Unidad">Unidad</option>
                                <option value="Caja">Caja</option>
                                <option value="Pieza">Pieza</option>
                                <option value="Equipo">Equipo</option>
                                <option value="Paquete">Paquete</option>
                                <option value="Pliegue">Pliegue</option>
                                <option value="Pliego">Pliego</option>
                                <option value="Par">Par</option>
                                <option value="Docena">Docena</option>
                                <option value="Bidon">Bidon</option>
                                <option value="Block">Block</option>
                                <option value="Bolsa">Bolsa</option>
                                <option value="Bote">Bote</option>
                            </select>
                        </div>

                        


                        <div class="col-6">
                            <label for="tipo" style="color: black;font-family: sans-serif;">Ingrese Tipo de Producto <span style="color:red"> *</span></label>
                            <select name="tipo" id="tipo" class="form-control form-control-sm ">
                                <option value="">Selecciona una Opcion</option>
                                <option value="limpieza">Material de Limpieza</option>
                                <option value="mobiliario">Material Mobiliario</option>
                                <option value="Musical">Material Musical</option>
                                <option value="Hospitalario">Material Hospitalario</option>
                                <option value="Tecnologico">Material Tecnologico</option>
                                <option value="Cocina">Material de Cocina</option>
                                <option value="Textil">Material Textil</option>
                                <option value="Vehiculos">Vehiculos</option>
                                <option value="Ferreteria">Ferreteria</option>
                                <option value="industrial">Seguridad Industrial</option>
                                <option value="alimentos">Alimentos</option>
                                <option value="escritorio">Material de Escritorio</option>
                                <option value="policial">Material Policial</option>
                                <option value="deportivo">Material Deportivo</option>
                                <option value="belleza">Material de Belleza</option>
                            </select>
                        </div>

                        <div class="col-6">
                            <label for="proveedor" style="color: black;font-family: sans-serif;">Ingrese Proveedor</label>
                            <input type="text" name="proveedor" id="proveedor" class="form-control form-control-sm">
                        </div>

                        <div class="col-6">
                            <label for="pc" style="color: black;font-family: sans-serif;">Ingrese Precio de Compra <span style="color:red"> *</span></label>
                            <input type="text" name="pc" id="pc" class="form-control form-control-sm" style="background-color: #2cff0029; color:green">
                        </div>

                        <div class="col-6">
                            <label for="pv" style="color: black;font-family: sans-serif;">Ingrese Precio de Venta <span style="color:red"> *</span></label>
                            <input type="text" name="pv" id="pv" class="form-control form-control-sm" style="background-color: #2cff0029; color:green">
                        </div>

                        <div class="col-6">
                            <label for="ficha" style="color: black;font-family: sans-serif;">Ingrese Ficha Tecnica</label>
                            <input type="file" class="form-control form-control-sm" name="ficha" id="files">
                        </div>

                        <div class="col-6">
                            <label for="certificado" style="color: black;font-family: sans-serif;">Ingrese Certificado</label>
                            <input type="file" class="form-control form-control-sm" name="certificado" id="files">
                        </div>

                        <div class="col-6">
                            <label for="foto" style="color: black;font-family: sans-serif;">Ingrese Foto</label>
                            <input type="file" class="form-control form-control-sm" name="foto" id="files">
                        </div>

                        <div class="col-6">
                            <span id="imagen-subida"></span>
                        </div>

                        

                        



                        

                        

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id_producto" id="id_producto">
                        <input type="hidden" name="operacion" id="operacion">

                        <input type="reset" value="Limpiar Formulario" class="btn btn-secondary"> 
                        <input type="submit" name="action" id="action" class="btn btn-primary" value="Registrar">
                        
                    </div>
                    </div>
                    </div>
                </form>
            </div>
            
        </div>
        </div>

    </div>


    
        

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
</body>

</html>