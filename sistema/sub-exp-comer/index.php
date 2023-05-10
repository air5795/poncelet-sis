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
            <div class="col-sm-6">
                <h2><i class="bi bi-cart4"></i> Experiencia General Comercializadora</h2>
                
            </div>

            <?php

                $result=mysqli_query($conexion,"SELECT count(*) as total from exp_general");
                $data=mysqli_fetch_assoc($result);
                $data['total'];

            ?>

            <div class="col-sm-2">
                <a class="btn btn-secondary w-100 disabled" href=""> <strong><i class="bi bi-box-seam"> - </i>  <?php echo $data['total']; ?> </strong>  Proyectos </a>
            
                
            </div>


            <div class="col-sm-2">
                <a class="btn btn-danger w-100" style="background-color: cadetblue;border:none;" href="http://localhost/poncelet-sis/sistema/cotizador/"><i class="bi bi-file-earmark-ruled"></i> Cotizador Poncelet </a>
                
            </div>

            <div class="col-sm-2 ">
                
                <div class="text-center">
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-secondary boton w-100" data-bs-toggle="modal" data-bs-target="#modalproductos" id="botonCrear">
                        <i class="fa-solid fa-plus"></i> Nuevo Proyecto
                        </button>    
                </div>
            </div>
            
            
        </div>
        
        <hr style="background-color: red;">

        <div class="table-responsive" style="font-size: 11px; width:100%">
            <table id="datos_usuario" class="table table-hover table-striped table-bordered" style="width:100%" >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th width="30%">NOMBRE DEL CONTRATANTE / PERSONA Y DIRECCION DE CONTACTO  </th>
                        <th width="50%">OBJETO DEL CONTRATO</th>
                        <th>UBICACIÓN</th>
                        <th>MONTO FINAL DEL CONTRATO EN "BS"</th>
                        <th>MONTO FINAL DEL CONTRATO EN "$"</th>
                        <th>FECHA EJECUCION</th>
                        
                        <th>ACTA 1</th>
                        <th>ACTA 2</th>
                        <th>ACTA 3</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

<!-- FINAL tabla--> 

<!-- Modal NUEVO -->
<div class="modal fade" id="modalproductos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="fa-solid fa-box"></i> Registrar Experiencia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: azure;"></button>
            </div>
            
                <form action="" method="POST" id="formulario" enctype="multipart/form-data">
                    
                    <div class="modal-content">

                    <div class="modal-body">

                    
                    <div class="row">
                    <div class="col-md-6">
                    <div class="row">

                        <div class="col-12">
                                <span for="inputFirstName">Nombre del Contratante / Persona y Dirección de Contacto</span>
                                <input  class="form-control form-control-sm " name="nombre_contratante" id="nombre_contratante" type="text"  required />
                        </div>
                        <div class="col-12">
                                <span for="inputFirstName">Objeto del Contrato (Obra similar)</span> 
                                <input class="form-control form-control-sm" name="obj_contrato" id="obj_contrato" type="text" required />
                        </div> 
                        <div class="col-6">
                        <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Ubicación</span> 
                                    <input class="form-control form-control-sm" name="ubicacion" id="ubicacion" type="text" required />
                                 </div>
                        </div>

                        <div class="col-6">
                            <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Monto en Bs.</span> 
                                    <input class="form-control form-control-sm money" id="monto_bs" name="monto_bs" type="number" step='0.001'  placeholder='0.00' oninput="calcular_a_dolar()" required/>
                                 </div>
                        </div>

                        <div class="col-6">
                        <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Monto en $u$ </span> 
                                    <input class="form-control form-control-sm money " id="monto_dolares" name="monto_dolares" type="number" step='0.001'  placeholder='0.00' oninput="calcular_a_bs()" required />
                                 </div>
                        </div>

                        <div class="col-6">
                        <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Período de ejecución </span> 
                                    <input class="form-control form-control-sm" name="fecha_ejecucion" id="fecha_ejecucion"   type="date" required />
                                 </div>
                        </div>

                        <div class="col-6">
                        <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">% participación en Asociación (**)</span> 
                                    <input class="form-control form-control-sm" name="participa_aso" id="participa_aso"  type="text" />
                                 </div>
                        </div>

                        <div class="col-6">
                            <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Nombre Ll del Socio(s) (***)</span> 
                                    <input class="form-control form-control-sm" name="n_socio" id="n_socio" type="text" />
                                 </div>
                        </div>

                        <div class="col-6">
                                <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Profesional Responsable (****)</span> 
                                    <input class="form-control form-control-sm warning" name="profesional_resp" id="profesional_resp" type="text" value="ALBERTO ARISPE PONCE" />
                                 </div>
                        </div>

                        <div class="col-12">
                            <div class=" mb-3 mb-md-0">
                                    <span for="inputFirstName">Detalle de la Experiencia <span style="color:red"> (Colocar Palabras Clave ejm. Computadoras) </span></span> 
                                    <input class="form-control form-control-sm bg-info bg-opacity-25" name="detalle" id="detalle" type="text" required  />
                                 </div>
                        </div>

                        <p></p>

                        <div class=" row"> 

                             <div class="dropdown col ">
                                <button class="btn btn-secondary dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                                <i class="fa-solid fa-folder-open"></i> Subir Actas 1-8 Pag.
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark w-100 ">
                                    <li><a class="dropdown-item" href="#">Acta N°1<input type="file" class="form-control form-control-sm"  name="image" id="image" required></a></li>
                                    <li><a class="dropdown-item" href="#">Acta N°2<input type="file" class="form-control form-control-sm"  name="image2" id="image2" ></a></li>
                                    <li><a class="dropdown-item" href="#">Acta N°3<input type="file" class="form-control form-control-sm"  name="image3" id="image3"></a></li>

                                    <li><a class="dropdown-item" href="#">Acta N°4<input type="file" class="form-control form-control-sm"  name="image4" id="image4"></a></li>
                                    <li><a class="dropdown-item" href="#">Acta N°5<input type="file" class="form-control form-control-sm"  name="image5" id="image5"></a></li>
                                    <li><a class="dropdown-item" href="#">Acta N°6<input type="file" class="form-control form-control-sm"  name="image6" id="image6"></a></li>
                                    <li><a class="dropdown-item" href="#">Acta N°7<input type="file" class="form-control form-control-sm"  name="image7" id="image7"></a></li>
                                    <li><a class="dropdown-item" href="#">Acta N°8<input type="file" class="form-control form-control-sm"  name="image8" id="image8"></a></li>

                                    
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item">Subir las actas en el orden correcto</a></li>
                                </ul>
                                </div>

                                <div class="dropdown col ">
                                <button class="btn btn-secondary dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                                <i class="fa-solid fa-folder-open"></i> Subir Actas 9-15 Pag.
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark w-100 ">
                                    <li><a class="dropdown-item" href="#">Acta N°9<input type="file" class="form-control form-control-sm"  name="image9" id="image9"></a></li>
                                    <li><a class="dropdown-item" href="#">Acta N°10<input type="file" class="form-control form-control-sm"  name="image10" id="image10" ></a></li>
                                    <li><a class="dropdown-item" href="#">Acta N°11<input type="file" class="form-control form-control-sm"  name="image11" id="image11"></a></li>

                                    <li><a class="dropdown-item" href="#">Acta N°12<input type="file" class="form-control form-control-sm"  name="image12" id="image12"></a></li>
                                    <li><a class="dropdown-item" href="#">Acta N°13<input type="file" class="form-control form-control-sm"  name="image13" id="image13"></a></li>
                                    <li><a class="dropdown-item" href="#">Acta N°14<input type="file" class="form-control form-control-sm"  name="image14" id="image14"></a></li>
                                    <li><a class="dropdown-item" href="#">Acta N°15<input type="file" class="form-control form-control-sm"  name="image15" id="image15"></a></li>
                                    

                                    
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item">Subir las actas en el orden correcto</a></li>
                                </ul>
                                </div>

                                <p></p>

                                <div class="col-2">
                                    <span id="image"></span>
                                </div>
                                <div class="col-2">
                                    <span id="image2"></span>
                                </div>
                                <div class="col-2">
                                    <span id="image3"></span>
                                </div>
                                <div class="col-2">
                                    <span id="image4"></span>
                                </div>
                                <div class="col-2">
                                    <span id="image5"></span>
                                </div>
                                <div class="col-2">
                                    <span id="image6"></span>
                                </div>
                                <div class="col-2">
                                    <span id="image7"></span>
                                </div>
                                <div class="col-2">
                                    <span id="image8"></span>
                                </div>
                                <div class="col-2">
                                    <span id="image9"></span>
                                </div>
                                <div class="col-2">
                                    <span id="image10"></span>
                                </div>
                                <div class="col-2">
                                    <span id="image11"></span>
                                </div>
                                <div class="col-2">
                                    <span id="image12"></span>
                                </div>
                                <div class="col-2">
                                    <span id="image13"></span>
                                </div>
                                <div class="col-2">
                                    <span id="image14"></span>
                                </div>
                                <div class="col-2">
                                    <span id="image15"></span>
                                </div>

                                

                            


                                


                             
                             
                            
                             </div>



                        
                        
                        
                        

                        



                        

                        

                    </div>

                    

                       </div>

                       <div class="col-md-6">
                            <div class="" id="">
                             <center> 
                                
                             <output id="list" class="form-control "></output>
                            
                            </center>
                             

                            </div>
                       </div>

                       </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id_exp" id="id_exp">
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
                    <div class="modal-dialog modal-dialog-centered modal-xl ">
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
                //$('#imagen-subida').html("");
                //$('#pdf-subido').html("");
                //$('#certificado-subido').html("");
                //$("#foto").html("");
                //$("#ficha").html("");
                //$("#certificado").html("");

                
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
            var nombre_contratante = $('#nombre_contratante').val();
            var obj_contrato = $('#obj_contrato').val();
            var ubicacion = $('#ubicacion').val();
            var monto_bs = $('#monto_bs').val();
            var monto_dolares = $('#monto_dolares').val();
            var fecha_ejecucion = $('#fecha_ejecucion').val();
            var participa_aso = $('#participa_aso').val();
            var n_socio = $('#n_socio').val();
            var profesional_resp = $('#profesional_resp').val();
            var detalle = $('#detalle').val();
            
            var extension = $('#image').val().split('.').pop().toLowerCase();
            var extension2 = $('#image2').val().split('.').pop().toLowerCase();
            var extension3 = $('#image3').val().split('.').pop().toLowerCase();
            var extension4 = $('#image4').val().split('.').pop().toLowerCase();
            var extension5 = $('#image5').val().split('.').pop().toLowerCase();
            var extension6 = $('#image6').val().split('.').pop().toLowerCase();
            var extension7 = $('#image7').val().split('.').pop().toLowerCase();
            var extension8 = $('#image8').val().split('.').pop().toLowerCase();
            var extension9 = $('#image9').val().split('.').pop().toLowerCase();
            var extension10 = $('#image10').val().split('.').pop().toLowerCase();
            var extension11 = $('#image11').val().split('.').pop().toLowerCase();
            var extension12 = $('#image12').val().split('.').pop().toLowerCase();
            var extension13 = $('#image13').val().split('.').pop().toLowerCase();
            var extension14 = $('#image14').val().split('.').pop().toLowerCase();
            var extension15 = $('#image15').val().split('.').pop().toLowerCase();
        
            if(extension != '')
            {
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                    alert("Fomato de imagen inválido");
                    $('#image').val('');
                    return false;
                }
            }

            if(extension2 != '')
            {
                if(jQuery.inArray(extension2, ['gif','png','jpg','jpeg']) == -1)
                {
                    alert("Fomato de imagen inválido");
                    $('#image2').val('');
                    return false;
                }
            }

            if(extension3 != '')
            {
                if(jQuery.inArray(extension3, ['gif','png','jpg','jpeg']) == -1)
                {
                    alert("Fomato de imagen inválido");
                    $('#image3').val('');
                    return false;
                }
            }

            if(extension4 != '')
            {
                if(jQuery.inArray(extension4, ['gif','png','jpg','jpeg']) == -1)
                {
                    alert("Fomato de imagen inválido");
                    $('#image4').val('');
                    return false;
                }
            }

            if(extension5 != '')
            {
                if(jQuery.inArray(extension5, ['gif','png','jpg','jpeg']) == -1)
                {
                    alert("Fomato de imagen inválido");
                    $('#image5').val('');
                    return false;
                }
            }

            if(extension6 != '') {
                if(jQuery.inArray(extension6, ['gif','png','jpg','jpeg']) == -1) {
                    alert('Formato de imagen inválido');
                    $('#image6').val('');
                    return false;
                }
            }

            if(extension7 != '') {
                if(jQuery.inArray(extension7, ['gif','png','jpg','jpeg']) == -1) {
                    alert('Formato de imagen inválido');
                    $('#image7').val('');
                    return false;
                }
            }

            if(extension8 != '') {
                if(jQuery.inArray(extension8, ['gif','png','jpg','jpeg']) == -1) {
                    alert('Formato de imagen inválido');
                    $('#image8').val('');
                    return false;
                }
            }

            if(extension8 != '') {
                if(jQuery.inArray(extension8, ['gif','png','jpg','jpeg']) == -1) {
                    alert('Formato de imagen inválido');
                    $('#image8').val('');
                    return false;
                }
            }

            if(extension9 != '') {
                if(jQuery.inArray(extension9, ['gif','png','jpg','jpeg']) == -1) {
                    alert('Formato de imagen inválido');
                    $('#image9').val('');
                    return false;
                }
            }

            if(extension10 != '') {
                if(jQuery.inArray(extension10, ['gif','png','jpg','jpeg']) == -1) {
                    alert('Formato de imagen inválido');
                    $('#image10').val('');
                    return false;
                }
            }


            if(extension11 != '') {
                if(jQuery.inArray(extension11, ['gif','png','jpg','jpeg']) == -1) {
                    alert('Formato de imagen inválido');
                    $('#image11').val('');
                    return false;
                }
            }

            if(extension12 != '') {
                if(jQuery.inArray(extension12, ['gif','png','jpg','jpeg']) == -1) {
                    alert('Formato de imagen inválido');
                    $('#image12').val('');
                    return false;
                }
            }


            if(extension13 != '') {
                if(jQuery.inArray(extension13, ['gif','png','jpg','jpeg']) == -1) {
                    alert('Formato de imagen inválido');
                    $('#image13').val('');
                    return false;
                }
            }


            if(extension14 != '') {
                if(jQuery.inArray(extension14, ['gif','png','jpg','jpeg']) == -1) {
                    alert('Formato de imagen inválido');
                    $('#image14').val('');
                    return false;
                }
            }

            if(extension15 != '') {
                if(jQuery.inArray(extension15, ['gif','png','jpg','jpeg']) == -1) {
                    alert('Formato de imagen inválido');
                    $('#image15').val('');
                    return false;
                }
            }







            
            	
		    if(nombre_contratante != '' && obj_contrato != '' && ubicacion != '' && monto_bs != '' && fecha_ejecucion != '' && detalle != '' && image != '')
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
                            $('#modalproductos').modal('hide');
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
            var id_exp = $(this).attr("id");		
            $.ajax({
                url:"obtener_registro.php",
                method:"POST",
                data:{id_exp:id_exp},
                dataType:"json",
                success:function(data)
                    {
                        
                        //console.log(data);				
                        $('#modalproductos').modal('show');
                        $('#nombre_contratante').val(data.nombre_contratante);
                        $('#obj_contrato').val(data.obj_contrato);
                        $('#ubicacion').val(data.ubicacion);
                        $('#monto_bs').val(data.monto_bs);
                        $('#monto_dolares').val(data.monto_dolares);
                        $('#fecha_ejecucion').val(data.fecha_ejecucion);
                        $('#participa_aso').val(data.participa_aso);
                        $('#n_socio').val(data.n_socio);
                        $('#detalle').val(data.detalle);
                        $('#profesional_resp').val(data.profesional_resp);

                        
                        $('.modal-title').text("Editar Producto");
                        $('#id_exp').val(id_exp);
                        $('#image').html(data.image);
                        $('#image2').html(data.image2);
                        $('#image3').html(data.image3);
                        $('#image4').html(data.image4);
                        $('#image5').html(data.image5);
                        $('#image6').html(data.image6);
                        $('#image7').html(data.image7);
                        $('#image8').html(data.image8);
                        $('#image9').html(data.image9);
                        $('#image10').html(data.image10);
                        $('#image11').html(data.image11);
                        $('#image12').html(data.image12);
                        $('#image13').html(data.image13);
                        $('#image14').html(data.image14);
                        $('#image15').html(data.image15);
                        
                        //$('#pdf-subido').html(data.ficha);
                        //$('#certificado-subido').html(data.certificado);
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
                        
                document.getElementById('image').addEventListener('change', archivo, false);
        </script>
        
        <script type="text/javascript">
        function calcular_a_dolar(){
            try{
                var a = parseFloat(document.getElementById("monto_bs").value) || 0;
                decimal = a.toFixed(2);
                proceso = decimal/6.96;
                result = proceso.toFixed(2);
                document.getElementById("monto_dolares").value = result;
            } catch(e){}
        }

        function calcular_a_bs(){
            try{
                var b = parseFloat(document.getElementById("monto_dolares").value) || 0;
                decimal = b.toFixed(2);
                proceso = decimal*6.96;
                result = proceso.toFixed(2);
                document.getElementById("monto_bs").value = result;
            } catch(e){}
        }


        

    </script>
       


        </body>
</html>