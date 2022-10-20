<?php

require_once 'app/config.php';

// insertar prueba 

$_SESSION['new_quote']['items'] =  
[
[
    'id'           => 1234,
    'concept'      => 'guitarra',
    'marc'         => 'ibañez',
    'unidad'       => 'Unidad',
    'type'         => 'producto',
    'quantity'     => 2,
    'price_c'      => 50,
    'price_v'      => 100,
    'subtotal_c'   => 100,
    'subtotal_v'   => 200,
    'taxes'        => (TAXES_RATE / 100)*(100*2),
    'total'        => (100*2)+((TAXES_RATE / 100)*(100*2))
 
],
];

get_view('index');




?>