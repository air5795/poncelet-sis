<?php

session_start();
include "../conexion.php";

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
                        <td colspan="10" class="exp">EXPERIENCIA ESPECIFICA</td>
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
                    
                    <?php

                    $sql = '';


                    if(!(empty($_POST['check']))){	
                        foreach($_POST['check'] as $elegidos){		
                        // echo $elegidos."<br>";
                        //echo  var_dump($elegidos);

                        //$cadena =  explode(',', $elegidos);

                        if ($sql != '')
                                
                        $sql .= ' OR ';
                        $sql .= "id_exp = $elegidos";

                        
                            
                    }}

                    
                    
                    

                    // rescatar datos DB 
                    $query = mysqli_query($conexion, "SELECT ROW_NUMBER() OVER( ORDER BY fecha_ejecucion) row_num,
                                                                                                        id_exp,
                                                                                                        fecha_ejecucion,
                                                                                                        monto_bs,
                                                                                                        monto_dolares,
                                                                                                        nombre_contratante,
                                                                                                        n_socio,
                                                                                                        obj_contrato,
                                                                                                        participa_aso,
                                                                                                        profesional_resp,
                                                                                                        image,
                                                                                                        image2,
                                                                                                        image3,
                                                                                                        ubicacion
                                                                                                        FROM
                                                                                                            exp_general
                                                                                                        WHERE
                                                                                                            $sql
                                                                                                        ORDER BY
                                                                                                            fecha_ejecucion;");



                    

                    $result = mysqli_num_rows($query);

                    // crear directorio o carpeta Exp especifica
                    //$nombre_directorio = "Exp_especifica";
                    //$resultado = mkdir("../sistema/img/"."/$nombre_directorio");
                    
                    
                    

                    // borrar contenido 

                    $files = glob('../sistema/img/Exp_especifica/*'); //obtenemos todos los nombres de los ficheros
                    foreach($files as $file){
                        if(is_file($file))
                        unlink($file); //elimino el fichero
                    }

                    
                    
                    

                    

                    if ($result > 0) {
                        while ($data = mysqli_fetch_array($query)) {
                            if ($data['image'] != 'nodisponible.png' ) {
                                $ru = $data['image'];
                                $image = 'img/actas/'.$data['image'];
                                

                            }else {
                                $image = 'img/'.$data['image'];
                            }
                            
                            $image2 = 'img/actas/'.$data['image2'];
                            $ru2 = $data['image2'];
                            $image3= 'img/actas/'.$data['image3'];
                            $ru3 = $data['image3'];
                            

                    ?>
                            <tr>
                                <td><?php echo $data['row_num']?></td>
                                <td><?php echo $data['nombre_contratante'] ?></td>
                                <td><?php echo $data['obj_contrato'] ?></td>
                                <td><?php echo $data['ubicacion'] ?></td>
                                <td><?php echo number_format($data['monto_bs'],2,'.',',').' Bs' ?></td>
                                <td><?php echo $data['fecha_ejecucion'] ?></td>
                                <td><?php echo number_format($data['monto_dolares'],2,'.',',').' $' ?></td>
                                <td><?php echo $data['participa_aso'] ?></td>
                                <td><?php echo $data['n_socio'] ?></td>
                                <td><?php echo $data['profesional_resp'] ?></td>
                            </tr>
                    <?php

                    

                    // copiar actas especificas

                    
                    
                    if ($ru !=0 ) {
                        $origen = "../sistema"."/$image";
                        $destino = "../sistema/img/Exp_especifica"."/$ru";
                        $resultado = copy($origen, $destino);
                    }
                    if ($ru2 !=0) {
                        $origen2 = "../sistema"."/$image2";
                        $destino2 = "../sistema/img/Exp_especifica"."/$ru2";
                        $resultado2 = copy($origen2, $destino2);
                    }
                    if ($ru3 !=0) {
                        $origen3 = "../sistema"."/$image3";
                        $destino3 = "../sistema/img/Exp_especifica"."/$ru3";
                        $resultado3 = copy($origen3, $destino3);
                    }


                        }
                    }

                    //shell_exec('start C:/xampp/htdocs/poncelet-sis/sistema/img/Exp_especifica');
                    //shell_exec('start .');

                    $sql_suma_bs = mysqli_query($conexion, "SELECT SUM(monto_bs) FROM exp_general where $sql ;");
                            $result_sum = mysqli_fetch_array($sql_suma_bs);
                            $total = $result_sum['SUM(monto_bs)']; 
                    ?>
                    <tr>
                        <td colspan="6" class="exp">TOTAL FACTURADO EN BOLIVIANOS (****)</td>
                        <td colspan="4" class="exp"><?php echo number_format($total,2,'.',',').' Bs'?></td>
                    </tr>
                    <tr>
                        <hr>
                         <td colspan="10" class="exp2"><img class="im" src="img/sello.jpg" ></td>
                    </tr>


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
                    $dompdf->stream('Experiencia_Especifica',array('attachment'=>0));
                                      
                ?>

