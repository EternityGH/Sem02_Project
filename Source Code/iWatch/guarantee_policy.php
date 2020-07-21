<?php 

session_start();

require_once('Controller/PolicyController.php');
$PolicyController = new PolicyController();
$PolicyController->getViewGuaranteePolicy();

?>