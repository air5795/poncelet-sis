<?php 
//require_once 'app/config.php';

// conexion a bases de datos
$host = 'localhost:3316';
$user = 'root';
$password = '';
$db = 'prueba';

$conexion = @mysqli_connect($host,$user,$password,$db);


// Recibir el objeto JSON enviado por AJAX
$formulario = $_POST["formData"];

// Convertir el objeto JSON en un array asociativo de PHP
$formularioArray = json_decode($formulario, true);

// Acceder a los valores del formulario a través del array asociativo

$n_cotizacion = $formularioArray["0"];
$concepto = $formularioArray["1"];
$tipo = $formularioArray["2"];
$marca = $formularioArray["3"];
$cantidad = $formularioArray["4"];
$preciov = $formularioArray["5"];
$totalv = $formularioArray["6"];
$precioc = $formularioArray["7"];
$totalc = $formularioArray["8"];
$stotalv = $formularioArray["9"];
$stotalc = $formularioArray["10"];
$impuestos = $formularioArray["11"];
$envio = $formularioArray["12"];
$total_gastos = $formularioArray["13"];
$total_ingresos = $formularioArray["14"];
$porcentaje = $formularioArray["15"];




$datos = array(
    'n_cootizacion' => $n_cotizacion,
    'concepto' => $concepto,
    'tipo' => $tipo,
    'marca' => $marca,
    'cantidad' => $cantidad,
    'preciov' => $preciov,
    'totalv' => $totalv,
    'precioc' => $precioc,
    'totalc' => $totalc,
    'stotalv' => $stotalv,
    'stotalc' => $stotalc,
    'impuestos' => $impuestos,
    'envio' => $envio,
    'total_gastos' => $total_gastos,
    'total_ingresos' => $total_ingresos,
    'porcentaje' => $porcentaje
);


$action2 = serialize($datos);
$fecha_actual = date('Y-m-d');




$sql = "INSERT INTO cotizacion (fecha_actual, datos_serializados) VALUES ('$fecha_actual', '$action2')";
if(mysqli_query($conexion, $sql)) {
  echo "Los datos se han guardado correctamente";
} else {
  echo "Ha ocurrido un error al guardar los datos";
}





?>