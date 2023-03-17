<?php
include('inc/header.php');
include 'Invoice.php';
$invoice = new Invoice();

?>
<title>sis-poncelet</title>
<script src="js/invoice.js"></script>
<link href="css/style.css" rel="stylesheet">
<?php include('inc/container.php'); ?>
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
    <?php
    $invoiceList = $invoice->getInvoiceList();
    foreach ($invoiceList as $invoiceDetails) {
      $invoiceDate = date("d/M/Y, H:i:s", strtotime($invoiceDetails["fecha_cotizacion"]));
      echo '
              <tr>
                <td>' . $invoiceDetails["id_cotizacion"] . '</td>
                <td>' . $invoiceDate . '</td>
                <td>' . $invoiceDetails["cliente_nombre"] . '</td>
                <td>' . $invoiceDetails["total_despues_impuestos"] .' Bs'. '</td>
                <td><a href="print_invoice.php?invoice_id=' . $invoiceDetails["id_cotizacion"] . '" title="Imprimir Factura"><span class="glyphicon glyphicon-print"></span></a></td>
                <td><a href="edit_invoice.php?update_id=' . $invoiceDetails["id_cotizacion"] . '"  title="Editar Factura"><span class="glyphicon glyphicon-edit"></span></a></td>
                <td><a href="#" id="' . $invoiceDetails["id_cotizacion"] . '" class="deleteInvoice"  title="Eliminar Factura"><span class="glyphicon glyphicon-remove"></span></a></td>
              </tr>
            ';
    }
    ?>
  </table>
</div>
<?php include('inc/footer.php'); ?>