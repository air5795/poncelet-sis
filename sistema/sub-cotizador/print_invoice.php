<?php

include 'Invoice.php';
$invoice = new Invoice();

if (!empty($_GET['invoice_id']) && $_GET['invoice_id']) {
	echo $_GET['invoice_id'];
	$invoiceValues = $invoice->getInvoice($_GET['invoice_id']);
	$invoiceItems = $invoice->getInvoiceItems($_GET['invoice_id']);
}
$invoiceDate = date("d/M/Y, H:i:s", strtotime($invoiceValues['fecha_cotizacion']));
$output = '';
$output .= '<table width="100%" border="1" cellpadding="5" cellspacing="0">
	<tr>
	<td colspan="2" align="center" style="font-size:18px"><b>Factura ConfiguroWeb</b></td>
	</tr>
	<tr>
	<td colspan="2">
	<table width="100%" cellpadding="5">
	<tr>
	<td width="65%">
	Para,<br />
	<b>RECEPTOR (FACTURACIÓN A)</b><br />
	Name : ' . $invoiceValues['cliente_nombre'] . '<br /> 
	Dirección de Envio : ' . $invoiceValues['cliente_direccion'] . '<br />
	</td>
	<td width="35%">         
	Factura no. : ' . $invoiceValues['id_cotizacion'] . '<br />
	Fecha de la factura : ' . $invoiceDate . '<br />
	</td>
	</tr>
	</table>
	<br />
	<table width="100%" border="1" cellpadding="5" cellspacing="0">
	<tr>
	<th align="left">Sr No.</th>
	<th align="left">Código COTIZACION</th>
	<th align="left">Nombre Item</th>
	<th align="left">Cantidad</th>
	<th align="left">Precio</th>
	<th align="left">Cantidad real</th> 
	</tr>';
$count = 0;
foreach ($invoiceItems as $invoiceItem) {
	$count++;
	$output .= '
	<tr>
	<td align="left">' . $count . '</td>
	<td align="left">' . $invoiceItem["codigo_item"] . '</td>
	<td align="left">' . $invoiceItem["nombre_item"] . '</td>
	<td align="left">' . $invoiceItem["cantidad_item"] . '</td>
	<td align="left">' . $invoiceItem["precio_item"] . '</td>
	<td align="left">' . $invoiceItem["subtotal_item"] . '</td>   
	</tr>';
}
$output .= '
	<tr>
	<td align="right" colspan="5"><b>Sub Total</b></td>
	<td align="left"><b>' . $invoiceValues['total_antes_impuestos'] . '</b></td>
	</tr>
	<tr>
	<td align="right" colspan="5"><b>Porcentaje Impuestos :</b></td>
	<td align="left">' . $invoiceValues['porcentaje'] . ' %</td>
	</tr>
	<tr>
	<td align="right" colspan="5">Monto Impuestos: </td>
	<td align="left">' . $invoiceValues['total_impuestos'] . '</td>
	</tr>
	<tr>
	<td align="right" colspan="5">Total: </td>
	<td align="left">' . $invoiceValues['total_despues_impuestos'] . '</td>
	</tr>';
$output .= '
	</table>
	</td>
	</tr>
	</table>';
// create pdf of invoice	
$invoiceFileName = 'Factura ConfiguroWeb-' . $invoiceValues['id_cotizacion'] . '.pdf';
require_once 'dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->loadHtml(html_entity_decode($output));
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream($invoiceFileName, array("Attachment" => false));
