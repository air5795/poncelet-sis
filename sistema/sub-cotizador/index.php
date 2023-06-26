<?php
include('inc/header.php');
include 'Invoice.php';
$invoice = new Invoice();
?>

<title>sis-poncelet</title>
<script src="js/invoice.js"></script>
<link href="css/style.css" rel="stylesheet">

<div class="container">
  <h2 class="title"></h2>
  <?php include('menu.php'); ?>
  <table id="data-table" class="table table-condensed table-striped">
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