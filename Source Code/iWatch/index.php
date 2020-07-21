<?php 

session_start();

require_once('Controller/HomeController.php');
$HomeController = new HomeController();
$HomeController->getView();


?>