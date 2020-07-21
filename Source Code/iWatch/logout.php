<?php 

session_start();

require_once('Controller/LogoutController.php');
$LogoutController = new LogoutController();

if (isset($_SESSION['Login'])){
	unset($_SESSION['Login']);
} else {
	header('location: index.php');
}

if (isset($_SESSION['data-account'])){
	unset($_SESSION['data-account']);
}

if (isset($_SESSION['email'])) {
	# code...
	unset($_SESSION['email']);
}

$LogoutController->getView();



?>