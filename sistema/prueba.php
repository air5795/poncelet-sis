<?php

$fecha_actual = date("y-m-d");
//echo $fecha_actual;

$fecha_inicio= '2014-12-07';




function diasEntreFechas($fecha_inicio, $fecha_actual){
    return ((strtotime($fecha_actual)-strtotime($fecha_inicio))/86400);
    echo diasEntreFechas($fecha_inicio,$fecha_actual);

}

?>



