<!DOCTYPE html>
<html>
<head>
	<title>Cotizaciones</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Cotizaciones realizadas</h1>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Fecha</th>
				<th>Cliente</th>
				<th>Total monto</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$db = new mysqli("localhost:3316", "root", "", "basededatos");
				if ($db->connect_error) {
				    die("Connection failed: " . $db->connect_error);
				} 
				$sql = "SELECT * FROM cotizaciones";
				$result = $db->query($sql);
				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {
				        echo "<tr>";
				        echo "<td>" . $row["id"] . "</td>";
				        echo "<td>" . $row["fecha"] . "</td>";
				        echo "<td>" . $row["cliente"] . "</td>";
				        echo "<td>" . $row["total_monto"] . "</td>";
				        echo "<td>";
				        echo "<a href='imprimirCotizacion.php?id=" . $row["id"] . "'>Imprimir</a> ";
				        echo "<a href='editarCotizacion.php?id=" . $row["id"] . "'>Editar</a> ";
				        echo "<a href='eliminarCotizacion.php?id=" . $row["id"] . "'>Eliminar</a>";
				        echo "</td>";
				        echo "</tr>";
				    }
				}
				$db->close();
			?>
		</tbody>
	</table>
</body>
</html>