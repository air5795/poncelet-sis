<?php

session_start();
include "../conexion.php";

$sql_suma_bs = mysqli_query($conexion, "SELECT SUM(monto_bs) FROM exp_general_c;");
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
                
                    <tr>
                        <td colspan="11" class="">EXPERIENCIA GENERAL DE LA EMPRESA</td>
                    </tr>
                    <tr>
                        <td colspan="11" class="emp">EMPRESA CONSTRUCTORA PONCELET</td>
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
                        <th>N° de Pagina </th> 
                    </tr>
                    
                    <?php
                    // rescatar datos DB 
                    $query = mysqli_query($conexion, "SELECT
                                                            ROW_NUMBER() OVER(
                                                        ORDER BY
                                                            fecha_ejecucion
                                                        ) row_num,
                                                        fecha_ejecucion,
                                                        fecha_final,
                                                        monto_bs,
                                                        monto_dolares,
                                                        nombre_contratante,
                                                        n_socio,
                                                        obj_contrato,
                                                        participa_aso,
                                                        profesional_resp,
                                                        ubicacion
                                                        FROM
                                                            exp_general_c
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
                                <td><?php echo number_format($data['monto_bs'],2,'.',',').' Bs' ?></td>
                                <td>
                                    <strong>FECHA INICIO</strong> <br>
                                    <?php echo $data['fecha_ejecucion'] ?> 
                                    <br>
                                    <strong>FECHA FINALIZACION</strong><br>
                                    <?php echo $data['fecha_final'] ?>
                                </td>
                                <td><?php echo number_format($data['monto_dolares'],2,'.',',').' $' ?></td>
                                <td><?php echo $data['participa_aso'] ?></td>
                                <td><?php echo $data['n_socio'] ?></td>
                                <td><?php echo $data['profesional_resp'] ?></td>
                                <td>
                                    <strong>Pag. </strong> 
                                    <?php 

                                        echo $data['row_num']
  
                                        //$ruta = "img/actas_c/";
                                        //$total_i = count(glob($ruta.'{*.jpg,*.png}',GLOB_BRACE));
                                        //echo $total_i; 
                                            
                                        ?>
                                </td>
                            </tr>
                    <?php

                        }
                    }
                    ?>

                    <tr>
                        <td colspan="7" class="exp">TOTAL FACTURADO EN BOLIVIANOS (****)</td>
                        <td colspan="4" class="exp"><?php echo number_format($total,2,'.',',').' Bs'?></td>
                    </tr>
                    <!--<tr>
                         <td colspan="10" class="exp2"><img class="im" src="img/sello.jpg" ></td>
                    </tr>-->


                </table>

                

                <!--<div style="page-break-after:always;">
                            
                </div>-->
                    
                </body>

                </html>
                <?php
                    $html = ob_get_clean();
                    $dompdf = new Dompdf();
                    $dompdf->loadHtml($html);
                    //$dompdf->setPaper('letter','portrait');
                    $dompdf->setPaper('A4', 'landscape');
                    $dompdf->render();
                    $dompdf->stream('Exp_General_Constructora',array('attachment'=>0));
                                         
                ?>

