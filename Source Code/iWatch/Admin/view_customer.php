<?php 

session_start();

require_once('Controller/ViewController.php');
$ViewController = new ViewController();

if (!isset($_GET['id'])) {
	# code...
	header('location: customer.php');
}

$id = $_GET['id'];

$ViewController->getView($id);
?>