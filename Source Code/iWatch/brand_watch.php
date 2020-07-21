<?php 

session_start();

require_once('Controller/BrandWatchController.php');
$BrandWatchController = new BrandWatchController();

if (!isset($_GET['BrandName'])) {
	# code...
	header('location: index.php');
}

$BrandName = $_GET['BrandName'];

$conn = array(

	'BrandName' => $BrandName

);

$brands = 	$BrandWatchController->getBrandByCondition($conn);

foreach ($brands as $brand) {
	# code...
	$BrandName 		= $brand['BrandName'];
	$Specification 	= $brand['Specification']; 
}

$spec = json_decode($Specification, true);

$BrandWatchController->getView($BrandName, $spec);


?>