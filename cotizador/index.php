<?php

require_once 'app/config.php';

// insertar prueba 

$_SESSION['new_quote']['items'] =  
[
[
    'id'           => 1234,
    'concept'      => 'guitarra acustica',
    'marc'         => 'lorem',
    'unidad'       => 'Unidad',
    'quantity'     => 2,
    'price_c'      => 50,
    'subtotal_c'   => 100,
    'price_v'      => 100,
    'subtotal_v'   => 200,
    'taxes'        => (TAXES_RATE / 100)*(100*2),
    'total_v'        => (100*2)+((TAXES_RATE / 100)*(100*2)),
    'total_c'        => (100)+((TAXES_RATE / 100)*(100*2)),
 
],
[
    'id'           => 1234,
    'concept'      => 'guitarra Electrica',
    'marc'         => 'lorem',
    'unidad'       => 'Unidad',
    'quantity'     => 2,
    'price_c'      => 50,
    'subtotal_c'   => 100,
    'price_v'      => 100,
    'subtotal_v'   => 200,
    'taxes'        => (TAXES_RATE / 100)*(100*2),
    'total_v'        => (100*2)+((TAXES_RATE / 100)*(100*2)),
    'total_c'        => (100)+((TAXES_RATE / 100)*(100*2)),
 
],
[
    'id'           => 1234,
    'concept'      => 'cables',
    'marc'         => 'lorem',
    'unidad'       => 'Unidad',
    'quantity'     => 2,
    'price_c'      => 10,
    'subtotal_c'   => 20,
    'price_v'      => 50,
    'subtotal_v'   => 100,
    'taxes'        => (TAXES_RATE / 50)*(50*2),
    'total_v'        => (50*2)+((TAXES_RATE / 50)*(50*2)),
    'total_c'        => (10*2)+((TAXES_RATE / 10)*(10*2)),
 
],



];

get_view('index');




?>