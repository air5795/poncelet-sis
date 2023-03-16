<?php
    
    session_start();
    include "../../conexion.php";

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <link rel="stylesheet" href="css/estilos3.css">
        <link rel="stylesheet" href="css/estilos2.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">

        <link rel="shortcut icon" href="img/ICONOGRANDE2.png">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SIS-PONCELET</title>
        
    </head>
    <body class="sb-nav-fixed">
    <?php include "../menu.php"?>
    

        <!-- contenido del sistema-->

        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid ">
                    <div class="container-fluid  ">
                    
                     
                        <br>
                        
<!-- contenido del sistema 2--> 

<!-- Contenedor tabla--> 

<div class="container-fluid  fondo ">    
        <div class="row">
            <div class="col-sm-8">
                <h2><i class="fa-solid fa-database"></i> Seguimiento - Proyectos Poncelet</h2>
                
            </div>

            <?php

                $result=mysqli_query($conexion,"SELECT count(*) as total from proyectos_comer");
                $data=mysqli_fetch_assoc($result);
                $data['total'];

            ?>

            <div class="col-sm-2">
                <a class="btn btn-secondary w-100 disabled" href=""> <strong><i class="bi bi-folder-check"> - </i>  <?php echo $data['total']; ?> </strong>  Proyectos </a>
            
                
            </div>

<!-- 
            <div class="col-sm-2">
                <a class="btn btn-danger w-100" style="background-color: cadetblue;border:none;" href="http://localhost/poncelet-sis/sistema/cotizador/"><i class="bi bi-file-earmark-ruled"></i> Cotizador Poncelet </a>
                
            </div> -->

            <div class="col-sm-2 ">
                
                <div class="text-center">
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-secondary boton w-100" data-bs-toggle="modal" data-bs-target="#modalproyectos" id="botonCrear">
                        <i class="fa-solid fa-plus"></i> Nuevo Proyecto
                        </button>
                        
                </div>
            </div>
            
            
        </div>
        
        <hr style="background-color: red;">

        <div class="table-responsive" style="font-size: 11px; width:100%">
            <table id="datos_usuario" class="table table-hover table-striped" style="width:100%;" >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th width="15%">NOMBRE PROYECTO</th>
                        <th>TIPO</th>
                        <th>UBICACION</th>
                        <th>N° TRAMITE</th>
                        <th>N° COMPROBANTE</th>
                        <th>CUCE</th>
                        
                        <th>MONTO</th>
                        <th>FECHA</th>
                        <th>ESTADO</th>
                        <th width="15%">PARTICIPANTES</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

<!-- FINAL tabla--> 

<!-- Modal NUEVO -->
<div class="modal fade" id="modalproyectos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="fa-solid fa-box"></i> Registro de pproyectos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: azure;"></button>
            </div>
            
                <form action="" method="POST" id="formulario" enctype="multipart/form-data">
                    
                    <div class="modal-content">

                    <div class="modal-body">

                    

                 
                    <div class="row">

                        <div class="col-12">
                            <span for="inputFirstName">Nombre Proyecto o Descripcion </span>
                            <input class="form-control form-control-sm  bg-opacity-10" name="nombre" id="nombre" type="text" value="" required />
                        </div>
                        
                        <div class="col-4">
                            <span for="inputFirstName">Lugar (Ubicacion) </span>
                            <input class="form-control form-control-sm  bg-opacity-10" name="ubicacion" id="ubicacion" type="text" value="" required />
                        </div> 

                        <div class="col-4">
                            <span for="inputFirstName">Modalidad </span>
                            <select name="tipo" id="tipo" class="form-control form-control-sm">
                                <option value="">Selecciona una Opcion</option>
                                <option value="COMPRA DIRECTA">COMPRA DIRECTA</option>
                                <option value="CONTRATACION DIRECTA">CONTRATACION DIRECTA</option>
                                <option value="CM">CM</option>
                                <option value="ANPE">ANPE</option>
                                <option value="ANPP">ANPP</option>
                                <option value="LP">LP</option>
                            </select>
                        </div>
  
                        <div class="col-4">
                            <span for="inputFirstName">Fecha </span>
                            <input class="form-control form-control-sm  bg-opacity-10" name="fecha" id="fecha" type="date" value="" required />
                        </div>

                       

                        <div class="col-4">
                                <span for="inputFirstName">N° CUCE </span>
                                <input class="form-control form-control-sm  bg-opacity-10" name="cuce" id="cuce" type="text" value="" />
                        </div>

                        <div class="col-4">
                                <span for="inputFirstName">N° tramite </span>
                                <input class="form-control form-control-sm  bg-opacity-10" name="tramite" id="tramite" type="text" value="" />
                        </div>
                        

                        <div class="col-4">
                            <span for="inputFirstName">N° Comprobante </span>
                            <input class="form-control form-control-sm  bg-opacity-10" name="comprobante" id="comprobante" type="text" value="" />
                        </div>

                        

                        <div class="col-4">
                            <span for="inputFirstName">Monto</span>
                            <input id="monto" style="background-color: #e5ffe0; color:green; font-weight: 600;" class="form-control form-control-sm  bg-opacity-10" placeholder="0"  name="monto" type="text" value="" required />
                        </div>


                        <div class="col-4">
                                <span for="inputFirstName">Estado</span>
                                <select name="estado" id="estado" class="form-control form-control-sm " required>
                                        <option value="">Selecciona una Opcion</option>
                                        <option  value="proceso">En Proceso</option>
                                        <option  value="pagado">Pagado</option>
                                </select>
                        </div>

                        <p></p>
                        <hr>

                        <h6>Participantes en Proyecto</h6>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Importante!</strong> Mencionar los trabajos colaborados en el proyecto ejemplo: Certificado C-1
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>


                        <div class="col-10">
                            <span for="inputFirstName">Jazmin </span>
                            <input class="form-control form-control-sm  bg-opacity-10" id="jazmin" name="jazmin" type="text" value=""  />
                        </div>

                        

                        <div class="col-10">
                            <span for="inputFirstName">Mavel </span>
                            <input class="form-control form-control-sm  bg-opacity-10" id="mavel" name="mavel" type="text" value=""  />
                        </div>

                        

                        <div class="col-10">
                            <span for="inputFirstName">Nicol </span>
                            <input class="form-control form-control-sm  bg-opacity-10" id="nicol" name="nicol" type="text" value=""  />
                        </div>

                        

                        <div class="col-10">
                            <span for="inputFirstName">Alejandro </span>
                            <input class="form-control form-control-sm  bg-opacity-10" id="ale" name="ale" type="text" value=""  />
                        </div>

                        

                        <div class="col-10">
                            <span for="inputFirstName">Edwin</span>
                            <input class="form-control form-control-sm  bg-opacity-10" id="edwin" name="edwin" type="text" value=""  />
                        </div>

                       

                        

                        
                        
                        

                        



                        

                        

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id_producto" id="id_producto">
                        <input type="hidden" name="operacion" id="operacion">

                        <input type="reset" value="Limpiar" class="btn btn-secondary"> 
                        <input type="submit" name="action" id="action" class="btn btn-success" value="Registrar">
                        
                    </div>
                    </div>
                    </div>
                </form>
            </div>


            
        </div>



        </div>



</div>

<!-- FINAL MODAL -->
<!-- Modal para  ver imagenes -->

                <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered ">
                        <div class="modal-content modal-fullscreen ">
                            <div class="modal-header">
                                <!--<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="img/actas/acta_103_1_2021-02-22.jpg" class="modal-img" alt="modal img" width="100%" height="100%">
                            </div>

                        </div>
                    </div>
                </div>
<!-- FINAL Modal para  ver imagenes -->
                

<!-- FINAL CONTENIDO--> 
                
            </div>
        </div>

    </main>

</div>

        

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous" ></script>
        
        <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>


        <script>

       

            window.addEventListener('DOMContentLoaded', event => {
            // Toggle the side navigation
            const sidebarToggle = document.body.querySelector('#sidebarToggle');
            if (sidebarToggle) {
                // Uncomment Below to persist sidebar toggle between refreshes
                // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
                //     document.body.classList.toggle('sb-sidenav-toggled');
                // }
                sidebarToggle.addEventListener('click', event => {
                    event.preventDefault();
                    document.body.classList.toggle('sb-sidenav-toggled');
                    localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
                });
            }

            });
        </script>

<script type="text/javascript">
        $(document).ready(function(){

                
                $("#botonCrear").click(function(){
                $("#formulario")[0].reset();
                $(".modal-title").text("Crear Proyecto");
                $("#action").val("Crear Proyecto");
                $("#operacion").val("Crear");
            });
            
            var dataTable = $('#datos_usuario').DataTable({
                "pageLength": 25,
                "processing":true,
                "serverSide":true,
                "order":[],
                "ajax":{
                    url: "obtener_registros.php",
                    type: "POST"
                },
                //CONDICIONAL DE COLORES EN TABLA 
                /*"createdRow": function(row,data,index){
                        if (data[7] == 'proceso') {
                            $('td', row).eq(7).css({
                                'background-color':'#f3f39b',
                                'color':'black',
                                'text-align':'center',
                            });
                        }else{
                            $('td', row).eq(7).css({
                                'color':'black',
                                'background-color':'#84f585',
                                'text-align':'center',
                    

                            });
                        }
                    },*/
                "columnsDefs":[
                    {
                    "targets":[0, 3, 4],
                    "orderable":false,
                    },
                ],
                "language": {
                "decimal": "",
                "emptyTable": "No hay registros",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
            });

    
            
            //Aquí código inserción
            $(document).on('submit', '#formulario', function(event){
            event.preventDefault();
            var nombre = $('#nombre').val();
            var ubicacion = $('#ubicacion').val();
            var tipo = $('#tipo').val();
            var fecha = $('#fecha').val();
            var cuce = $('#cuce').val();
            var tramite = $('#tramite').val();
            var comprobante = $('#comprobante').val();
            var monto = $('#monto').val();
            var estado = $('#estado').val();
            var jazmin = $('#jazmin').val();
            var mavel = $('#mavel').val();
            var nicol = $('#nicol').val();
            var ale = $('#ale').val();
            var edwin = $('#edwin').val();
            	
		    if(nombre != '' && ubicacion != '' && tipo != '' && fecha != '' && monto != '' && estado != '')
                {
                    $.ajax({
                        url:"crear.php",
                        method:'POST',
                        data:new FormData(this),
                        contentType:false,
                        processData:false,
                        success:function(data)
                        {
                            Swal.fire(
                            'Exitoso!',
                            'Se registro correctamente',
                            'success'
                            ),
                            $('#formulario')[0].reset();
                            $('#modalproyectos').modal('hide');
                            dataTable.ajax.reload();
                        }
                    });
                }
                else
                {
                    Swal.fire(
                    'Algunos Campos son Obligatorios ?',
                    'Revisa el formulario',
                    'warning'
                    );
                }
	        });


            //Funcionalidad de editar
            $(document).on('click', '.editar', function(){		
            var id_producto = $(this).attr("id");		
            $.ajax({
                url:"obtener_registro.php",
                method:"POST",
                data:{id_producto:id_producto},
                dataType:"json",
                success:function(data)
                    {
                        
                        //console.log(data);				
                        $('#modalproductos').modal('show');
                        $('#nombre').val(data.nombre);
                        $('#marca').val(data.marca);
                        $('#unidad').val(data.unidad);
                        $('#tipo').val(data.tipo);
                        $('#proveedor').val(data.proveedor);
                        $('#pc').val(data.pc);
                        $('#pv').val(data.pv);
                        $('.modal-title').text("Editar Producto");
                        $('#id_producto').val(id_producto);
                        $('#imagen-subida').html(data.foto);
                        $('#pdf-subido').html(data.ficha);
                        $('#certificado-subido').html(data.certificado);
                        $('#action').val("Editar");
                        $('#operacion').val("Editar");
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    }
                })
	        });

            //Funcionalidad de borrar
            $(document).on('click', '.borrar', function(){
                var id_producto = $(this).attr("id");

                Swal.fire({
                title: 'Esta Seguro de Borrar ?',
                text: "El Registro con el ID = " + id_producto,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#72db88',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Borralo!'
                }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url:"borrar.php",
                        method:"POST",
                        data:{id_producto:id_producto},
                        success:function(data)
                        {
                            dataTable.ajax.reload();
                        }
                    });

                    Swal.fire(
                    'Borrado con Exito!',
                    'Se Elimino de la Base de datos el Producto ',
                    'success'
                    )
                }
                else{
                    return false;
                }
                });

            });

        });         
    </script>


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

<script type="text/javascript">
        

        function calcular_a_bs(){
            try{
                var b = parseFloat(document.getElementById("pc").value) || 0;
                decimal = b.toFixed(2);
                proceso = (decimal *(30/100))+b;
                result = proceso.toFixed(2);
                document.getElementById("pv").value = result;
            } catch(e){}
        }


    </script>

    <script>

        //MODO OSCURO 

        const bdark = document.querySelector('#bdark');
        const main = document.querySelector('main');
        const body = document.querySelector('body');

        bdark.addEventListener('click',e =>{
            main.classList.toggle('darkmode');
        });

        bdark.addEventListener('click',e =>{
            body.classList.toggle('darkmode');
        });

        

        const table = document.querySelector('table');
            bdark.addEventListener('click',e =>{
            table.classList.toggle('table-dark');
        });





    </script>
        

        
        
       


        </body>
</html>