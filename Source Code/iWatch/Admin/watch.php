<?php 

session_start();

require_once('Controller/WatchController.php');
$WatchController = new WatchController();

if (isset($_GET['id'])) {

	$id = $_GET['id'];

	$bool = $WatchController->deleteWatch($id);

	if ($bool) {
		$_SESSION['success'] = 'success';
		header('location: watch.php?success=success');
	} else {
		die('Error');
	}

}


$WatchController->getView();


?>