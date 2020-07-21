<?php 

session_start();

require_once('Controller/CustomerController.php');
$CustomerController = new CustomerController();

if (isset($_GET['id'])) {

	$id = $_GET['id'];

	$bool = $CustomerController->deleteCustomer($id);

	if ($bool) {
		header('location: customer.php?success=success');
	} else {
		die('Error');
	}

}


$CustomerController->getView();


?>