<?php
    
    session_start();
    include "../../conexion.php";

    include('inc/header.php');
    include 'Invoice.php';
    $invoice = new Invoice();

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
        <title>sis-poncelet</title>
        <script src="js/invoice.js"></script>
        <link href="css/style.css" rel="stylesheet">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SIS-PONCELET</title>
        
    </head>
    <body class="sb-nav-fixed">
    <?php include "../menu.php"?>
    
    <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid ">
                    <div class="container-fluid  ">
                    
                     
                        <br>
                        
<!-- contenido del sistema 2--> 

<!-- Contenedor tabla--> 

<div class="container-fluid  fondo ">    
        <div class="container-fluid fondo">
            <div class="row">
                <div class="col-sm-6">
                    <h2><i class="bi bi-receipt"></i> LISTA DE COTIZACIONES</h2>
                        
                    
                </div>

                <div class="col-sm-4">

                </div>

                <div class="col-sm-2">
                        <button type="button" class="btn btn-outline-secondary boton w-100" >
                        <i class="bi bi-file-earmark-plus"></i> Nueva Cotizacion
                        </button>

                </div>
                
<p></p>
                <hr>
              

              

            

                

                
            </div>

            <div class="table-responsive" style="font-size: 11px; width:100%">
                <table id="data-table" class="table table-hover table-striped table-bordered" style="width:100%; text-align:center;">
                    <thead>
                        <tr>
                            <th># Cotizacion</th>
                            <th>Fecha Creación</th>
                            <th>Nombre del Cliente</th>
                            <th>Total (Monto)</th>
                            <th>Imprimir</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </main>
</div>


       









        </body>



        <script>
$(document).ready(function() {
  $('#data-table').DataTable({
    lengthMenu: [5, 25, 50], // Opciones de selección de filas por página
    pageLength: 5, // Cambiar el número según tus necesidades
    processing: true,
    searching: true,
    serverSide: true,
    ajax: {
      url: 'invoice_action.php',
      type: 'POST',
      data: { action: 'loadInvoiceData' }
    },
    columns: [
      { data: 'id_cotizacion', title: '# Cotización' },
      { data: 'fecha_cotizacion', title: 'Fecha Creación' },
      { data: 'cliente_nombre', title: 'Nombre del Cliente', searchable: true },
      { data: 'total_despues_impuestos', title: 'Total (Monto)' },
      { data: 'print_link', title: 'Imprimir' },
      { data: 'edit_link', title: 'Editar' },
      { data: 'delete_link', title: 'Eliminar' }
    ],
    language: {
      "sProcessing": "Procesando...",
      "sLengthMenu": "Mostrar _MENU_ registros",
      "sZeroRecords": "No se encontraron resultados",
      "sEmptyTable": "Ningún dato disponible en esta tabla",
      "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
      "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
      "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
      "sInfoPostFix": "",
      "sSearch": "Buscar:",
      "sUrl": "",
      "sInfoThousands": ",",
      "sLoadingRecords": "Cargando...",
      "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
      },
      "oAria": {
        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
      },
      "buttons": {
        "copy": "Copiar",
        "colvis": "Visibilidad"
      }
    }
  });

  
});

</script>



<?php include('inc/footer.php'); ?>
        

        
        
       



</html>

