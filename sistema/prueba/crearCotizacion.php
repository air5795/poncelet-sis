<!DOCTYPE html>
<html>
<head>
	<title>Crear cotización</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		function calcular() {
			var total = 0;
			$("table tbody tr").each(function() {
				var cantidad = $(this).find(".cantidad").val();
				var precio = $(this).find(".precio").text();
				var subtotal = cantidad * precio;
				$(this).find(".subtotal").text(subtotal);
				total += subtotal;
			});
			$("#total").val(total);
		}

		function eliminarFila(btn) {
			$(btn).closest("tr").remove();
			calcular();
		}

		function editarFila(btn) {
			var tr = $(btn).closest("tr");
			var cantidad = tr.find(".cantidad").val();
			var precio = tr.find(".precio").text();
			var subtotal = cantidad * precio;
			tr.find(".subtotal").text(subtotal);
			calcular();
		}
	</script>
</head>
<body>
	<h1>Crear cotización</h1>
	<form method="post" action="guardarCotizacion.php">
		<label for="cliente">Nombre del cliente:</label>
		<input type="text" name="cliente" id="cliente"><br><br>
		<label for="producto">Productos:</label>
		<select name="producto" id="producto">
			<option value="">-- Seleccione un producto --</option>
			<?php 
				$db = new mysqli("localhost:3316", "root", "", "cotizacion2");
				if ($db->connect_error) {
				    die("Connection failed: " . $db->connect_error);
				} 
				$sql = "SELECT * FROM productos";
				$result = $db->query($sql);
				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {
				        echo "<option value='" . $row["id_producto"] . "'>" . $row["nombre"] . " - " . $row["precio"] . " USD/" . $row["tipo"] . "</option>";
				    }
				}
				$db->close();
			?>
		</select>
		<input type="number" name="cantidad" placeholder="Cantidad">
		<button type="button" onclick="agregarProducto()">Agregar</button><br><br>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Cantidad</th>
					<th>Precio</th>
					<th>Subtotal</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
			<tfoot>
				<tr>
					<th colspan="4">Total:</th>
					<th><span id="total">0</span></th>
				</tr>
			</tfoot>
		</table><br>
		<input type="submit" value="Guardar cotización">
	</form>
	<script type="text/javascript">
		function agregarProducto() {
			var id_producto = $("#producto").val();
			var nombre = $("#producto option:selected").text().split(" - ")[0];
			var precio = parseFloat($("#producto option:selected").text().split(" - ")[1].split(" ")[0]);
			var cantidad = parseInt($("input[name='cantidad']").val());
			if (id_producto && nombre && precio && cantidad) {
				var subtotal = precio * cantidad;
				var html = "<tr>";
				html += "<td>" + id_producto + "</td>";
				html += "<td>" + nombre + "</td>";
				html += "<td><input type='number' name='cantidad' class='cantidad' value='" + cantidad + "'></td>";
				html += "<td class='precio'>" + precio + "</td>";
				html += "<td class='subtotal'>" + subtotal + "</td>";
				html += "<td><button type='button' onclick='eliminarFila(this)'>Eliminar</button> <button type='button' onclick='editarFila(this)'>Editar</button></td>";
				html += "</tr>";
				$("table tbody").append(html);
				$("#producto").val("");
				$("input[name='cantidad']").val("");
				calcular();
			}
		}
	</script>
</body>
</html>