<?php

session_start();
include "../../conexion.php";

include('inc/header.php');
include 'Invoice.php';
include 'conexion.php';
$invoice = new Invoice();

if (!empty($_POST['companyName']) && $_POST['companyName']) {
	$invoice->saveInvoice($_POST);
	header("Location:index.php");
}
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
                    <h2><i class="bi bi-file-earmark-plus"></i> NUEVA COTIZACION</h2>
                        
                    
                </div>

                <div class="col-sm-4">

                </div>

                <div class="col-sm-2">
                        <a class="btn btn-primary" href="index.php"><i class="bi bi-list-check"></i> Lista de Cotizaciones</a>

                </div>
                
<p></p>
                <hr>




	<form action="" id="invoice-form" method="post" class="invoice-form" role="form" novalidate="">
		<div class="load-animate animated fadeInUp">
			<div class="row">
				<div class="container">
					
					
				</div>
			</div>
			<input id="currency" type="hidden" value="$">
			<div class="row">
				
				<div class="col-md-12 row" >
					<h3><i class="bi bi-person-circle"></i> Clientes</h3>
					<div class="form-group col-md-4">
						<select style="width: 100%;font-size:12px ;" name="nombre" id="nombre" class="form-control  js-example-basic-single "  required onchange="fetchClienteData()" required >
                        <option value="" >Seleccione una opción : </option>
							<?php
								$query = mysqli_query($conexion, "SELECT * from cliente ORDER BY NOMBRE ASC;");
								$result = mysqli_num_rows($query);
								if ($result > 0) {
								while ($data = mysqli_fetch_array($query)) {
									echo '<option value="'.$data['nombre'].'">'.$data['nombre'].'</option>';
									$nombre = $data['nombre'];
								}}
							?>
                        </select>
					</div>
					<div class="form-group col-md-4">
						<input type="text" class="form-control form-control-sm" name="companyName" id="companyName" placeholder="Nombre Cliente" autocomplete="off">
					</div>
					<br>
					<div class="form-group col-md-4">
						<input class="form-control form-control-sm" type="text" name="address" id="address" placeholder="Dirección">
					</div>

				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table table-bordered table-hover" id="invoiceItem">
						<tr>
							<th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
							<th width="15%">No Ítem</th>
							<th width="38%">Nombre Ítem</th>
							<th width="15%">Cantidad</th>
							<th width="15%">Precio Venta</th>
							<th width="15%">SubTotal Venta</th>
						</tr>
						
						<tr>
						
							<td><input class="itemRow" type="checkbox"></td>
							<td><input class="form-control form-control-sm" type="text" name="productCode[]" id="productCode_1" class="form-control" autocomplete="off"></td>

							<!-- <td><input class="form-control form-control-sm" type="text" name="productName[]" id="productName_1" class="form-control" autocomplete="off"></td> -->
							<td>
								<select  class="form-control  js-example-basic-single2 " name="productName[]" id="productName_1" onchange="getProductPrice(1)">
									<option value="">Seleccione un producto</option>
									<?php
									$query = mysqli_query($conexion, "SELECT * FROM productos ORDER BY p_descripcion ASC");
									while ($data = mysqli_fetch_array($query)) {
										echo '<option value="'.$data['p_descripcion'].'" data-price="'.$data['p_preciov'].'">'.$data['p_descripcion'].'</option>';
									}
									?>
								</select>
							</td>



							<td><input class="form-control form-control-sm" type="number" name="quantity[]" id="quantity_1" class="form-control quantity" autocomplete="off"></td>
							<td><input class="form-control form-control-sm" type="number" name="price[]" id="price_1" class="form-control price" autocomplete="off"></td>
							<td><input class="form-control form-control-sm" type="number" name="total[]" id="total_1" class="form-control total" autocomplete="off"></td> 
							

						</tr>
						
					</table>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<button class="btn btn-danger delete" id="removeRows" type="button">- Eliminar</button>
					<button class="btn btn-success" id="addRows" type="button" onclick="addRow()">+ Agregar Más</button>
					
				</div>
			</div>

			<hr>
			<div class="row">
				<div class="col-md-4">
					<h3>Observaciones: </h3>
					<div class="form-group">
						<input class="form-control form-control-sm" type="text" name="notes" id="notes" placeholder="Observaciones">
					</div>
					<br>
					<div class="form-group">
						<input type="hidden" value="" class="form-control" name="userId">
						<input data-loading-text="Guardando factura..." type="submit" name="invoice_btn" value="Guardar " class="btn btn-success submit_btn invoice-save-btm">
					</div>

				</div>
				<div class="col-md-8 row">

						<div class="col-md-3">
							<label for="">TOTAL Venta</label>
							<input value="" type="number" class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal">
						</div>

						<div class="col-md-3">
							<label for="">% IMPUESTOS</label>
							<input value="" type="number" class="form-control" name="taxRate" id="taxRate" placeholder="Porcentaje Impuestos">
						</div>

						<div class="col-md-3">
							<label for="">Monto IMPUESTOS</label>
							<input value="" type="number" class="form-control" name="taxAmount" id="taxAmount" placeholder="Monto impuestos">
						</div>
					
						<div class="col-md-3">
							<label for="">TOTAL</label>
							<input value="" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total">
						</div>

						<div class="col-md-3">
							<label for="">Monto Pagado:</label>
							<input value="" type="number" class="form-control" name="amountPaid" id="amountPaid" placeholder="Monto Pagado">
						</div>

						<div class="col-md-3">
							<label for="">cambio:</label>
							<input value="" type="number" class="form-control" name="amountDue" id="amountDue" placeholder="Cambio">
						</div>

					
					
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</form>






<?php include('inc/footer.php'); ?>

<script>
  function fetchClienteData() {
    var selectedCliente = document.getElementById("nombre").value;

    // Realizar una solicitud AJAX al servidor
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "get_cliente_data.php?cliente=" + encodeURIComponent(selectedCliente), true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        var clienteData = JSON.parse(xhr.responseText);
        if (clienteData) {
          // Rellenar los campos de nombre y nit con los datos del cliente
          document.getElementById("companyName").value = clienteData.nombre;
          document.getElementById("address").value = clienteData.nit;
        } else {
          // Limpiar los campos si no se encuentra ningún dato para el cliente seleccionado
          document.getElementById("companyName").value = "";
          document.getElementById("address").value = "";
        }
      }
    };
    xhr.send();
  }
</script>

<script>
  function getProductPrice(rowId) {
    var select = document.getElementById("productName_" + rowId);
    var selectedOption = select.options[select.selectedIndex];
    var priceInput = document.getElementById("price_" + rowId);

    if (selectedOption.value !== "") {
      var price = selectedOption.getAttribute("data-price");
      priceInput.value = price;
    } else {
      priceInput.value = "";
    }
  }
</script>
