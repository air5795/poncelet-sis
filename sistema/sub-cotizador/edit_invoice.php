<?php

include('inc/header.php');
include 'Invoice.php';
$invoice = new Invoice();

if (!empty($_POST['companyName']) && $_POST['companyName'] && !empty($_POST['invoiceId']) && $_POST['invoiceId']) {
	$invoice->updateInvoice($_POST);
	header("Location:index.php");
}
if (!empty($_GET['update_id']) && $_GET['update_id']) {
	$invoiceValues = $invoice->getInvoice($_GET['update_id']);
	$invoiceItems = $invoice->getInvoiceItems($_GET['update_id']);
}
?>
<title>Sis-poncelet</title>
<script src="js/invoice.js"></script>
<link href="css/style.css" rel="stylesheet">

<div class="container content-invoice">
	<form action="" id="invoice-form" method="post" class="invoice-form" role="form" novalidate="">
		<div class="load-animate animated fadeInUp">
			<div class="row">
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<h1 class="title"></h1>
					<?php include('menu.php'); ?>
				</div>
			</div>
			<input id="currency" type="hidden" value="$">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<h3></h3>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right">
					<h3>Quien Compra,</h3>
					<div class="form-group">
						<input value="<?php echo $invoiceValues['cliente_nombre']; ?>" type="text" class="form-control" name="companyName" id="companyName" placeholder="Quien compra" autocomplete="off">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="3" name="address" id="address" placeholder="Dirección"><?php echo $invoiceValues['cliente_direccion']; ?></textarea>
					</div>

				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table table-bordered table-hover" id="invoiceItem">
						<tr>
							<th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
							<th width="15%">No Item</th>
							<th width="38%">Nombre Producto</th>
							<th width="15%">Cantidad</th>
							<th width="15%">Precio</th>
							<th width="15%">Total</th>
						</tr>
						<?php
						$count = 0;
						foreach ($invoiceItems as $invoiceItem) {
							$count++;
						?>
							<tr>
								<td><input class="itemRow" type="checkbox"></td>
								<td><input type="text" value="<?php echo $invoiceItem["codigo_item"]; ?>" name="productCode[]" id="productCode_<?php echo $count; ?>" class="form-control" autocomplete="off"></td>
								<td><input type="text" value="<?php echo $invoiceItem["nombre_item"]; ?>" name="productName[]" id="productName_<?php echo $count; ?>" class="form-control" autocomplete="off"></td>
								<td><input type="number" value="<?php echo $invoiceItem["cantidad_item"]; ?>" name="quantity[]" id="quantity_<?php echo $count; ?>" class="form-control quantity" autocomplete="off"></td>
								<td><input type="number" value="<?php echo $invoiceItem["precio_item"]; ?>" name="price[]" id="price_<?php echo $count; ?>" class="form-control price" autocomplete="off"></td>
								<td><input type="number" value="<?php echo $invoiceItem["subtotal_item"]; ?>" name="total[]" id="total_<?php echo $count; ?>" class="form-control total" autocomplete="off"></td>
								<input type="hidden" value="<?php echo $invoiceItem['id_items_cotizacion']; ?>" class="form-control" name="itemId[]">
							</tr>
						<?php } ?>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<button class="btn btn-danger delete" id="removeRows" type="button">- Eliminar</button>
					<button class="btn btn-success" id="addRows" type="button">+ Agregar más</button>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
					<h3>Observaciones: </h3>
					<div class="form-group">
						<textarea class="form-control txt" rows="5" name="notes" id="notes" placeholder="Observaciones"><?php echo $invoiceValues['nota']; ?></textarea>
					</div>
					<br>
					<div class="form-group">
						<input type="hidden" value="<?php echo $_SESSION['userid']; ?>" class="form-control" name="userId">
						<input type="hidden" value="<?php echo $invoiceValues['id_cotizacion']; ?>" class="form-control" name="invoiceId" id="invoiceId">
						<input data-loading-text="Updating Invoice..." type="submit" name="invoice_btn" value="Guardar Factura" class="btn btn-success submit_btn invoice-save-btm">
					</div>

				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<span class="form-inline">
						<div class="form-group">
							<label>Subtotal: &nbsp;</label>
							<div class="input-group">
								<div class="input-group-addon currency">$</div>
								<input value="<?php echo $invoiceValues['total_antes_impuestos']; ?>" type="number" class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal">
							</div>
						</div>
						<div class="form-group">
							<label>Porcentaje de Impuestos: &nbsp;</label>
							<div class="input-group">
								<input value="<?php echo $invoiceValues['porcentaje']; ?>" type="number" class="form-control" name="taxRate" id="taxRate" placeholder="Porcentaje de Impuestos">
								<div class="input-group-addon">%</div>
							</div>
						</div>
						<div class="form-group">
							<label>Monto de Impuestos: &nbsp;</label>
							<div class="input-group">
								<div class="input-group-addon currency">$</div>
								<input value="<?php echo $invoiceValues['total_impuestos']; ?>" type="number" class="form-control" name="taxAmount" id="taxAmount" placeholder="Monto de Impuestos">
							</div>
						</div>
						<div class="form-group">
							<label>Total: &nbsp;</label>
							<div class="input-group">
								<div class="input-group-addon currency">$</div>
								<input value="<?php echo $invoiceValues['total_despues_impuestos']; ?>" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total">
							</div>
						</div>
						<div class="form-group">
							<label>Monto Pagado: &nbsp;</label>
							<div class="input-group">
								<div class="input-group-addon currency">$</div>
								<input value="<?php echo $invoiceValues['order_amount_paid']; ?>" type="number" class="form-control" name="amountPaid" id="amountPaid" placeholder="Monto Pagado">
							</div>
						</div>
						<div class="form-group">
							<label>Cambio: &nbsp;</label>
							<div class="input-group">
								<div class="input-group-addon currency">$</div>
								<input value="<?php echo $invoiceValues['order_total_amount_due']; ?>" type="number" class="form-control" name="amountDue" id="amountDue" placeholder="Cambio">
							</div>
						</div>
					</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</form>
</div>
</div>
<?php include('inc/footer.php'); ?>