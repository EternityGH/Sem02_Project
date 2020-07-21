<?php 

session_start();

require_once('Controller/MenWatchController.php');

$MenWatchController = new MenWatchController();
$MenWatchController->getView();

?>