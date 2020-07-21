<?php 

session_start();

require_once('Controller/LadyWatchController.php');

$LadyWatchController = new LadyWatchController();
$LadyWatchController->getView();

?>