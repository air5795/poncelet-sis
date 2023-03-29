<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Productos</h1>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Tipo</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$db = new mysqli("localhost", "usuario", "contraseña", "basededatos");
				if ($db->connect_error) {
				    die("Connection failed: " . $db->connect_error);
				} 
				$sql = "SELECT * FROM productos";
				$result = $db->query($sql);
				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {
				        echo "<tr>";
				        echo "<td>" . $row["id_producto"] . "</td>";
				        echo "<td>" . $row["nombre"] . "</td>";
				        echo "<td>" . $row["precio"] . "</td>";
				        echo \"<td>" . $row["tipo"] . "</td>";
				        echo "<td>";
				        echo "<a href='editarProducto.php?id=" . $row["id_producto"] . "'>Editar</a> ";
				        echo "<a href='eliminarProducto.php?id=" . $row["id_producto"] . "'>Eliminar</a>";
				        echo "</td>";
				        echo "</tr>";
				    }
				}
				$db->close();
			?>
		</tbody>
	</table>
	<a href="crearProducto.php">Crear nuevo producto</a>
</body>
</html>