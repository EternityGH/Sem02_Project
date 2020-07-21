<?php 

session_start();

require_once('Controller/ContactController.php');
$ContactController = new ContactController();
$ContactController->getView();

?>