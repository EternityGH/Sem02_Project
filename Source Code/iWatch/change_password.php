<?php 

session_start();
require_once('Controller/AccountController.php');
$AccountController = new AccountController();

if (isset($_GET['update'])) {
	sleep(1);
	# code...
	$id 		 = $_GET['id'];
	$OldPassword = $_GET['OldPassword'];
	$Password 	 = $_GET['Password'];
	$RePassword  = $_GET['RePassword'];

	$bool = false;

	if ($AccountController->checkPass($OldPassword, $id)) {
		# code...
		$_SESSION['error']['OldPassword'] = 'OldPassword incorrect!';
		$bool = true;
	}

	if (strlen(trim($_GET['Password'])) < 8 ) {
		# code...
		$_SESSION['error']['Password'] = 'Password must have at least 8 letters';
		$bool = true;
	}

	// Kiểm tra Repass
	if ($RePassword != $Password) {
		$_SESSION['error']['RePassword'] = 'Incorrect Password';
		$bool = true;
	}

	if ($bool) {
		# code...
		header("location: change_password.php?error=error");
	} else {

		$data = array(

			'Password' => md5($Password)

		);

		$bool = $AccountController->changePassword($data, $id);

		if ($bool) {
			# code...
			header('location: success.php?url=account.php&&action=update');
		} else {
			die('Error!');
		}
	}
}

$AccountController->getViewChangePassword();

if (isset($_GET['error'])) {
	# code...
	unset($_SESSION['error']);
}

?>