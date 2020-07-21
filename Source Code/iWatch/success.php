<?php 

session_start();
require_once('Controller/StatusController.php');
$StatusController = new StatusController();

if (!isset($_GET['url']) || !isset($_GET['action'])) {
	# code...
	header('location: index.php');
}

$url = $_GET['url'];

$action = $_GET['action'];

$StatusController->getViewSuccess($url, $action);



?>