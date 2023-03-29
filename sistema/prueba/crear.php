<!DOCTYPE html>
<html>
<head>
	<title>Crear</title>
</head>
<body>
	<h2>Registrar Cliente</h2>
	<form action="guardar_cliente.php" method="POST">
		<label for="nombre">Nombre del Cliente:</label>
		<input type="text" id="nombre" name="nombre"><br><br>
		<input type="submit" value="Guardar">
	</form>
	
	<br><br>
	
	<h2>Añadir Productos</h2>
	<form action="guardar_producto.php" method="POST">
		<label for="descripcion">Producto:</label>
		<input type="text" id="descripcion" name="descripcion">
		<input type="submit" value="Agregar">
	</form>

	<br><br>
	<h2>Tabla de Productos</h2>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Producto</th>
				<th>Precio</th>
				<th>Cantidad</th>
				<th>Total</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<?php
				// Conexión a la base de datos
				$conexion = mysqli_connect("localhost:3316", "root", "", "cotizacion2");

				// Obtener los productos de la base de datos
				$resultado = mysqli_query($conexion, "SELECT * FROM productos");

				while ($fila = mysqli_fetch_array($resultado)) {
					$id_producto = $fila['id_producto'];
					$descripcion = $fila['p_descripcion'];
					$precio = $fila['p_precioc'];

					echo "<tr>";
					echo "<td>$id_producto</td>";
					echo "<td>$descripcion</td>";
					echo "<td>$precio</td>";

					// Formulario para agregar cantidad y calcular total
					echo "<td>";
					echo "<form action='agregar_cantidad.php' method='POST'>";
					echo "<input type='hidden' name='id_producto' value='$id_producto'>";
					echo "<input type='number' name='cantidad'>";
					echo "<input type='submit' value='Agregar'>";
					echo "</form>";
					echo "</td>";

					// Mostrar el total de la fila
					echo "<td>";
					echo "$0.00";
					echo "</td>";

					// Botones de edición y eliminación
					echo "<td><a href='editar_producto.php?id=$id_producto'>Editar</a></td>";
					echo "<td><a href='eliminar_producto.php?id=$id_producto'>Eliminar</a></td>";

					echo "</tr>";
				}

				mysqli_close($conexion);
			?>
		</tbody>
	</table>
</body>
</html>