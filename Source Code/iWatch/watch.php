<?php 

session_start();

if (!isset($_GET['id'])) {
	# code...
	header('location: index.php');
}

$id = $_GET['id'];



require_once('Controller/WatchController.php');

$WatchController = new WatchController();

if (isset($_POST['send'])) {

	sleep(1);
	
	$Name 		= $_POST['Name'];
	$Email 		= $_POST['Email'];
	$IdWatch 	= $_POST['IdWatch'];
	$Title 		= $_POST['Title'];
	$Content 	= $_POST['content'];
	$Rating 	= $_POST['star'];
	$CreateAt 	= date('Y-m-d');


	//Check IdCustomer 
	if (isset($_POST['IdCustomer'])) {
		$IdCustomer = $_POST['IdCustomer'];	
	} else {
		$IdCustomer = 0;
	}

	if (isset($_POST['Avatar'])) {
		$Avatar = $_POST['Avatar'];	
	} else {
		$Avatar = 'lib/images/avatar/default.png';
	}

	$bool = false;

	if (empty($Rating)) {
		$_SESSION['error']['Rating'] = 'You must choose star';
		$bool = true;
	}

	if (strlen($Title) < 10 ) {
		$_SESSION['error']['Title'] = 'Title must have at least 10 letters';
		$bool = true;
	}

	if (strlen($Content) < 20) {
		$_SESSION['error']['Content'] = 'Title must have at least 20 letters';
		$bool = true;
	}

	if ($bool) {
		
		header("location: watch.php?id=$IdWatch&&error=error");

	} else {
		$data = array(
			'IdCustomer'	=> $IdCustomer,
			'IdWatch'		=> $IdWatch,
			'Title'			=> $Title,
			'Content'		=> $Content,
			'Rating'		=> $Rating,
			'Name'			=> $Name,
			'Email'			=> $Email,
			'Avatar'		=> $Avatar,
			'CreateAt'		=> $CreateAt
		);

		$bool = $WatchController->insertFeedback($data);

		if ($bool) {
			header("location: watch.php?id=$IdWatch");
		} else {
			die('Error');
		}
	}
		


}

if(isset($_POST['send-reply'])) {
	
	$ID 		= $_POST['id'];
	$Name 		= $_POST['name'];
	$Reply 		= $_POST['reply'];
	$Avatar 	= $_POST['avatar'];
	$CreateAt 	= date('Y-m-d');
	$IdWatch 	= $_POST['IdWatch'];
	//Check IdCustomer 
	$IdCustomer = $_POST['IdCustomer'];

	$data = array(
		'IdCustomer'	=> $IdCustomer,
		'IdWatch'		=> $IdWatch,
		'IdComment'		=> $ID,
		'Reply'			=> $Reply,
		'Name'			=> $Name,
		'Avatar'		=> $Avatar,
		'CreateAt'		=> $CreateAt
	);

	$bool = $WatchController->insertFeedback($data);

	if ($bool) {
		header("location: watch.php?id=$IdWatch");
	} else {
		die('Error!');
	}

}

$watches = $WatchController->getWatch($id);

$WatchController->getView($watches, $id);

if (isset($_GET['error'])) {
	unset($_SESSION['error']);
}

?>