<?php
class Invoice
{
	private $host  = 'localhost:3316';
	private $user  = 'root';
	private $password   = "";
	private $database  = "cotizacion2";
	//private $invoiceUserTable = 'invoice_user';
	private $invoiceOrderTable = 'cotizacion';
	private $invoiceOrderItemTable = 'items_cotizacion';
	private $dbConnect = false;
	public function __construct()
	{
		if (!$this->dbConnect) {
			$conn = new mysqli($this->host, $this->user, $this->password, $this->database);
			if ($conn->connect_error) {
				die("Error failed to connect to MySQL: " . $conn->connect_error);
			} else {
				$this->dbConnect = $conn;
			}
		}
	}
	private function getData($sqlQuery)
	{
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if (!$result) {
			die('Error in query: ' . mysqli_error());
		}
		$data = array();
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}
	private function getNumRows($sqlQuery)
	{
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if (!$result) {
			die('Error in query: ' . mysqli_error());
		}
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}
	/*public function loginUsers($email, $password)
	{
		$sqlQuery = "
			SELECT id, email, first_name, last_name, address, mobile 
			FROM " . $this->invoiceUserTable . " 
			WHERE email='" . $email . "' AND password='" . $password . "'";
		return  $this->getData($sqlQuery);
	}*/
	public function checkLoggedIn()
	{
		if (!$_SESSION['userid']) {
			header("Location:index.php");
		}
	}
	public function saveInvoice($POST)
	{
		$sqlInsert = "
			INSERT INTO " . $this->invoiceOrderTable . "(id_usuario, cliente_nombre, cliente_direccion, total_antes_impuestos, total_impuestos, porcentaje, total_despues_impuestos, order_amount_paid, order_total_amount_due, nota) 
			VALUES ('" . $POST['userId'] . "', '" . $POST['companyName'] . "', '" . $POST['address'] . "', '" . $POST['subTotal'] . "', '" . $POST['taxAmount'] . "', '" . $POST['taxRate'] . "', '" . $POST['totalAftertax'] . "', '" . $POST['amountPaid'] . "', '" . $POST['amountDue'] . "', '" . $POST['notes'] . "')";
		mysqli_query($this->dbConnect, $sqlInsert);
		$lastInsertId = mysqli_insert_id($this->dbConnect);
		for ($i = 0; $i < count($POST['productCode']); $i++) {
			$sqlInsertItem = "
			INSERT INTO " . $this->invoiceOrderItemTable . "(id_cotizacion, codigo_item, nombre_item, cantidad_item, precio_item, subtotal_item) 
			VALUES ('" . $lastInsertId . "', '" . $POST['productCode'][$i] . "', '" . $POST['productName'][$i] . "', '" . $POST['quantity'][$i] . "', '" . $POST['price'][$i] . "', '" . $POST['total'][$i] . "')";
			mysqli_query($this->dbConnect, $sqlInsertItem);
		}
	}
	public function updateInvoice($POST)
	{
		if ($POST['invoiceId']) {
			$sqlInsert = "
				UPDATE " . $this->invoiceOrderTable . " 
				SET cliente_nombre = '" . $POST['companyName'] . "', cliente_direccion= '" . $POST['address'] . "', total_antes_impuestos = '" . $POST['subTotal'] . "', total_impuestos = '" . $POST['taxAmount'] . "', porcentaje = '" . $POST['taxRate'] . "', total_despues_impuestos = '" . $POST['totalAftertax'] . "', order_amount_paid = '" . $POST['amountPaid'] . "', order_total_amount_due = '" . $POST['amountDue'] . "', nota = '" . $POST['notes'] . "' 
				WHERE id_usuario = '" . $POST['userId'] . "' AND id_cotizacion = '" . $POST['invoiceId'] . "'";
			mysqli_query($this->dbConnect, $sqlInsert);
		}
		$this->deleteInvoiceItems($POST['invoiceId']);
		for ($i = 0; $i < count($POST['productCode']); $i++) {
			$sqlInsertItem = "
				INSERT INTO " . $this->invoiceOrderItemTable . "(id_cotizacion, codigo_item, nombre_item, cantidad_item, precio_item, subtotal_item) 
				VALUES ('" . $POST['invoiceId'] . "', '" . $POST['productCode'][$i] . "', '" . $POST['productName'][$i] . "', '" . $POST['quantity'][$i] . "', '" . $POST['price'][$i] . "', '" . $POST['total'][$i] . "')";
			mysqli_query($this->dbConnect, $sqlInsertItem);
		}
	}
	public function getInvoiceList()
	{
		$sqlQuery = "SELECT * FROM $this->invoiceOrderTable ";
		return  $this->getData($sqlQuery);
	}
	public function getInvoice($invoiceId)
	{
		$sqlQuery = "SELECT * FROM  $this->invoiceOrderTable  WHERE id_cotizacion = '$invoiceId'";
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		return $row;
	}
	public function getInvoiceItems($invoiceId)
	{
		$sqlQuery = "
			SELECT * FROM " . $this->invoiceOrderItemTable . " 
			WHERE id_cotizacion = '$invoiceId'";
		return  $this->getData($sqlQuery);
	}
	public function deleteInvoiceItems($invoiceId)
	{
		$sqlQuery = "
			DELETE FROM " . $this->invoiceOrderItemTable . " 
			WHERE id_cotizacion = '" . $invoiceId . "'";
		mysqli_query($this->dbConnect, $sqlQuery);
	}
	public function deleteInvoice($invoiceId)
	{
		$sqlQuery = "
			DELETE FROM " . $this->invoiceOrderTable . " 
			WHERE id_cotizacion = '" . $invoiceId . "'";
		mysqli_query($this->dbConnect, $sqlQuery);
		$this->deleteInvoiceItems($invoiceId);
		return 1;
	}


}
