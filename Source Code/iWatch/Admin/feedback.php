<?php 

session_start();
require_once('Controller/FeedbackController.php');
$FeedbackController = new FeedbackController();

if (isset($_GET['id'])) {

	$id = $_GET['id'];

	$bool = $FeedbackController->deleteFeedback($id);

	if ($bool) {
		header('location: feedback.php?success=success');
	} else {
		die('Error');
	}

}

$FeedbackController->getView();



?>