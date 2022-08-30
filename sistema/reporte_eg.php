<?php

session_start();
include "../conexion.php";

$sql_suma_bs = mysqli_query($conexion, "SELECT SUM(monto_bs) FROM exp_general;");
                            $result_sum = mysqli_fetch_array($sql_suma_bs);
                            $total = $result_sum['SUM(monto_bs)']; 

require_once 'pdf/vendor/autoload.php';
use Dompdf\Dompdf;
ob_start();
?>


<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="css/style3.css" rel="stylesheet" />



    <title>SISPONCELET</title>

</head>

<body>
<table>
                <thead >
                    <tr>
                        <td colspan="10" class="exp">EXPERIENCIA GENERAL</td>
                    </tr>
                    <tr>
                        <td colspan="10" class="emp">Empresa Comercializadora PONCELET</td>
                    </tr>
                    <tr>
                        <th>N°</th>
                        <th >Nombre del contratante / Persona y Direccion de contacto</th>
                        <th >Objeto del Contrato</th>
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
                    $query = mysqli_query($conexion, "SELECT
                                                            ROW_NUMBER() OVER(
                                                        ORDER BY
                                                            fecha_ejecucion
                                                        ) row_num,
                                                        fecha_ejecucion,
                                                        monto_bs,
                                                        monto_dolares,
                                                        nombre_contratante,
                                                        n_socio,
                                                        obj_contrato,
                                                        participa_aso,
                                                        profesional_resp,
                                                        ubicacion
                                                        FROM
                                                            exp_general
                                                        ORDER BY
                                                            fecha_ejecucion;");




                    $result = mysqli_num_rows($query);

                    

                    if ($result > 0) {
                        while ($data = mysqli_fetch_array($query)) {

                    ?>
                            <tr>
                                <td><?php echo $data['row_num']?></td>
                                <td><?php echo $data['nombre_contratante'] ?></td>
                                <td><?php echo $data['obj_contrato'] ?></td>
                                <td><?php echo $data['ubicacion'] ?></td>
                                <td><?php echo $data['monto_bs'].' Bs' ?></td>
                                <td><?php echo $data['fecha_ejecucion'] ?></td>
                                <td><?php echo $data['monto_dolares'].' $' ?></td>
                                <td><?php echo $data['participa_aso'] ?></td>
                                <td><?php echo $data['n_socio'] ?></td>
                                <td><?php echo $data['profesional_resp'] ?></td>
                            </tr>
                    <?php

                        }
                    }
                    ?>

                    <tr>
                        <td colspan="6" class="exp">TOTAL FACTURADO EN BOLIVIANOS (****)</td>
                        <td colspan="4" class="exp"><?php echo $total.' Bs'?></td>
                    </tr>


                </table>

                <img class="im" src="../img/img-1.jpg" >
                    
                </body>

                </html>
                <?php
                    $html = ob_get_clean();
                    $dompdf = new Dompdf();
                    $dompdf->loadHtml($html);
                    //$dompdf->setPaper('letter','portrait');
                    $dompdf->setPaper('A4', 'landscape');
                    $dompdf->render();
                    $dompdf->stream('Experiencia_General',array('attachment'=>0));
                                
                                
                ?>

