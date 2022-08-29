<?php
session_start();

include "../conexion.php";
include "../sistema/includes/scripts.php";


//$sentenciaSQL = $conexion->prepare("SELECT * FROM exp_general");
//$sentenciaSQL-> execute();
//$lista=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);

$query = mysqli_query($conexion, "SELECT * FROM exp_general ORDER BY id_exp ASC");
$result = mysqli_num_rows($query);


?>

<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style3.css">
    <title>Document</title>
</head>
<body>
    


                            
   

    <div class="card-body">


<table  class=" table table-bordered" style="width:100%" " id="datatablesSimple"  >
                <thead class="table-secondary">
                    
                <tr>
			        <td colspan="10" style="text-align:center;font-weight: bold;" class="exp">EXPERIENCIA GENERAL DE LA EMPRESA</td>
		        </tr>
                <tr>
			        <td colspan="10" style="text-align:center; background-color: #969696; font-weight: bold;"  >Empresa Comercializadora PONCELET</td>
		        </tr>
                    
                    <tr class="fila">
                        <th>idº</th>
                        <th>Nombre del contratante / Persona y Direccion de contacto</th>
                        <th>Objeto del Contrato</th>
                        <th>Ubicacion</th>
                        <th>Monto final del contrato en (Bs)</th>
                        <th>Periodo de ejecucion (Fecha de inicio y finalizacion)</th>
                        <th>Monto en $u$ (Llenado de uso alternativo)</th>
                        <th>% de Participacion en Asociacion</th>
                        <th>Nombre LI del Socio(s)</th>
                        <th>Profesional Responsable</th>
                            
                    </tr>
                    </thead>
                    <?php


                    // rescatar datos DB 
                    $query = mysqli_query($conexion, "SELECT * FROM exp_general 
                                                        ORDER BY id_exp ASC");

                   

                    $result = mysqli_num_rows($query);
                    if ($result > 0) {
                        while ($data = mysqli_fetch_array($query)) {
                            if ($data['image'] != 'nodisponible.png' ) {
                                $image = 'img/actas/'.$data['image'];
                                

                            }else {
                                $image = 'img/'.$data['image'];
                            }
                            
                            $image2 = 'img/actas/'.$data['image2'];
                            $image3= 'img/actas/'.$data['image3'];

                      

                    ?>
                            <tr>
                                <td><?php echo $data['id_exp'] ?></td>
                                <td><?php echo $data['nombre_contratante'] ?></td>
                                <td><?php echo $data['obj_contrato'] ?></td>
                                <td><?php echo $data['ubicacion'] ?></td>
                                <td><?php echo $data['monto_bs'] ?></td>
                                <td><?php echo $data['fecha_ejecucion'] ?></td>
                                <td><?php echo $data['monto_dolares'] ?></td>
                                <td><?php echo $data['participa_aso'] ?></td>
                                <td><?php echo $data['n_socio'] ?></td>
                                <td><?php echo $data['profesional_resp'] ?></td>
                                
                            </tr>
                    <?php

                        }
                    }
                    ?>


                </table>

                </div>


                </body>
</html>

<?php
$html = ob_get_clean();
//echo $html;

require_once 'assets/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled'=>true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);

$dompdf->setPaper('letter');

$dompdf->render();

$dompdf->stream("archivo_.pdf",array("Attachment" =>false));

?>
