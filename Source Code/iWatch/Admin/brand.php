<?php 

session_start();

require_once('Controller/BrandController.php');
$BrandController = new BrandController();

if (isset($_GET['id'])) {

	$id = $_GET['id'];

	$bool = $BrandController->deleteBrand($id);

	if ($bool) {
		header('location: brand.php?success=success');
	} else {
		die('Error');
	}

}

$BrandController->getView();

?>