<?php

session_start();
include "../conexion.php";

$sql_suma_bs = mysqli_query($conexion, "SELECT SUM(monto_bs) FROM exp_general;");
                            $result_sum = mysqli_fetch_array($sql_suma_bs);
                            $total = $result_sum['SUM(monto_bs)']; 

                            ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTAS</title>
    <style type="text/css">
        .aimg{
            width: 700px;
        }
    </style>
</head>
<body>


                <ul class="menu">
                    <?php
                    // rescatar datos DB 
                    $query = mysqli_query($conexion, "SELECT * FROM exp_general;");
                    $result = mysqli_num_rows($query);

                    

                    if ($result > 0) {
                        while ($data = mysqli_fetch_array($query)) {
                      
                            $img = 'img/actas/'.$data['image'];
                            $img2 = 'img/actas/'.$data['image2'];
                            $img3 = 'img/actas/'.$data['image3'];

                            echo '<li><img src="'.$img.'"></li>';
                           
                            

                    ?>
                        
                        
                <?php

                    }
                }
                ?>

</ul>
                <!--<tr>
                     <td colspan="10" class="exp2"><img class="im" src="img/sello.jpg" ></td>
                </tr>-->


            
    
</body>
</html>