<?php


function get_view($view_name){
    $view = VIEWS.$view_name.'View.php';
    if (!is_file($view)) {
        die('La vista no existe');
    }

    // Existe la vista
    require_once $view; 
}

// cotizacion 
// new_quote[]
/**
 * number
 * name
 * company
 * email
 * items[]
 * subtotal
 * taxes
 * shiping
 * total

 */

 /**
  * item
  * id
  * concept
  * type
  * cuantity
  * price
  * taxes
  * total
  */

  /**
   * get_quoute()
   * get_items()
   * get_items($id)
   * add_item($item)
   * delete_item($id)
   * delete_items()
   * restart_quote()
   */


   function get_quote(){
    if (!isset($_SESSION['new_quote'])) {
        return $_SESSION['new_quote'] =
        [
            'number'        => rand(111111, 999999),
            'name'          => '',
            'company'       => '',
            'email'         => '',
            'items'         => [],
            'subtotal'      => 0,
            'taxes'         => 0,
            'shipping'      => 0,
            'total'         => 0,
        ];
    }
    // recalcular los totales
    recalculate_quote();
    return $_SESSION['new_quote'];

   }

   function recalculate_quote(){
    $items      =[]; //array vacio
    $subtotal   =0; 
    $taxes      =0; // inpuestos
    $shipping   =0; // envio
    $total      =0;

    if (!isset($_SESSION['new_quote'])) {
        return false;
    }

    //validar Items
    $items = $_SESSION['new_quote']['items'];

    // si la lista de items esta vacia no es necesario calcular nada

    if (!empty($items)) {
        foreach ($items as $item) {
            $subtotal += $item['total'];
            $taxes    += $item['taxes'];
        }
    }

    $shipping = $_SESSION['new_quote']['shipping'];
    $total    = $subtotal + $taxes + $shipping;

    $_SESSION['new_quote']['subtotal'] = $subtotal;
    $_SESSION['new_quote']['taxes'] = $taxes;
    $_SESSION['new_quote']['shipping'] = $shipping;
    $_SESSION['new_quote']['total'] = $total;

    return true;



   }

   function restart_quote(){
    if (!isset($_SESSION['new_quote'])) {
        return $_SESSION['new_quote'] =
        [
            'number'        => rand(111111, 999999),
            'name'          => '',
            'company'       => '',
            'email'         => '',
            'items'         => [],
            'subtotal'      => 0,
            'taxes'         => 0,
            'shipping'      => 0,
            'total'         => 0,
        ];

        return true;
    }

}

    function get_items(){
        $items = [];
        
        //si no existe la cotizacion y esta vacio el array 

        if (!isset($_SESSION['new_quote']['items'])) {
            return $items;
        }

        // la cotizacion existe, se asigana el valor

        $items = $_SESSION['new_quote']['items'];
        return $items;
    }

    function get_item($id){
        $items = get_items();
        
        //si no existe items 
        if (empty($items)) {
            return false;
        }

        // si hay items iteramos
        foreach ($items as $item){
            // validar si existe con el id pasado 
            if($item['id'] === $id){
                return $item;
            }
        }

        //no hubo un match o resultados

        return false;
}

    function delete_items(){
        $_SESSION['new_quote']['items'] = [];

        recalculate_quote();

        return true;
    }

    function delete_item($id){
        $items = get_items();
        
        //si no existe items 
        if (empty($items)) {
            return false;
        }

        // si hay items iteramos
        foreach ($items as $i => $item){
            // validar si existe con el id pasado 
            if($item['id'] === $id){
                unset($_SESSION['new_quote']['items'][$i]);
                return true;
            }
        }

        //no hubo un match o resultados

        return false;
}
    function add_item($item){
        $items = get_items();

        // si existe el id ya en nuestros items
        // podemos actualizar la informacion en lugar de agregarlo

        if (get_item($item['id']) !== false) {
            foreach ($items as $i => $e_item) {
                if ($item['id'] === $e_item['id']) {        
                $_SESSION['new_quote']['items'][$i] = $item;
                return true;
                }   
            }
        }

        // no existe en la lista, se agrega simplemente

        $_SESSION['new_quote']['items'] = $item;
        return true;





    }
    
    function json_build($status = 200, $data = [], $msg =""){
        if (empty($msg) || $msg == '') {
            switch ($status){

            
            case 200:
            $msg = 'OK';
            break;
            case 201:
            $msg = 'Created';
            break;
            case 400:
            $msg = 'Invalid Request';
            break;
            case 403:
            $msg = 'Acceso denegado';
            break;

            case 404:
            $msg = 'Not Found';
            break;

            case 500:
            $msg = 'Internal Server Error';
            break;
            case 505:
            $msg = 'Permiso denegado';
            break;
            
            default;
            break;
        }
    }

    $json = [
        'status' => $status,
        'data' => $data,
        'msg' => $msg

    ];

        return json_encode($json);
    

    }


function json_output($json){
    header ('Access-Control-Allow-Origin: *');
    header ('Content-type: application/json;charset=utf-8');

    if (is_array($json)) {
        $json = json_encode($json);

    }

    echo $json;

    return true;
}








?>