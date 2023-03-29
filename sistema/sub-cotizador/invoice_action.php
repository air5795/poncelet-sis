
 <?php 

    include 'conexion.php';
    include 'invoice.php';
if(!empty($_POST['action']) && $_POST['action'] == 'loadItemsList') {	
	$invoice->loadItemsList();
}

if(!empty($_POST['action']) && $_POST['action'] == 'loadItems') {	
	$invoice->loadItems();
}
 ?>