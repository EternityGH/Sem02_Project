<?php 

session_start();

require_once('Controller/RegisterController.php');

$RegisterController = new RegisterController();

if (isset($_GET['register']) && isset($_GET['action'])) {

	sleep(1);

	$FirstName	= trim($_GET['FirstName']);
	$LastName	= trim($_GET['LastName']);
	$Email		= trim($_GET['Email']);
	$Password	= trim($_GET['Password']);
	$RePassword	= trim($_GET['RePassword']);
	$Avatar 	= 'lib/images/avatar/default.png';
	$Role 		= 1;
	$CreateAt 	= date('Y-m-d');
	
	//Kiểm tra hành động
	$bool = false;

	//Kiểm tra Họ
	if (strlen($FirstName) < 2) {
		$_SESSION['error']['FirstName'] = 'First Name must have at least 2 letters';
		$bool = true;
	}

	//Kiểm tra Tên
	if (strlen($LastName) < 2) {
		$_SESSION['error']['LastName']  = 'Last Name must have at least 2 letters';
		$bool = true;
	}

	//Kiểm tra email đã tồn tại chưa
	if ($RegisterController->checkEmail($Email)) {
	 	$_SESSION['error']['Email'] = 'Email already exists';
	 	$bool = true;
	} 

	//Kiểm tra Email
	if (empty($Email)) {
		$_SESSION['error']['Email']  = 'Email must be not blank';
		$bool = true;
	}

	// Kiểm tra Password
	if (strlen($Password) < 8) {
		# code...
		$_SESSION['error']['Password'] = 'Password must have at least 8 letters';
		$bool = true;
	}

	// Kiểm tra Repass
	if ($RePassword != $Password) {
		$_SESSION['error']['RePassword'] = 'Incorrect Password';
		$bool = true;
	}

	//Lưu dữ liệu vào mảng
	$data = array(
		'FirstName' => $FirstName, 
		'LastName'	=> $LastName, 
		'Email'		=> $Email, 
		'Password' 	=> md5($Password),
		'Avatar'	=> $Avatar,
		'Role'		=> $Role,
		'CreateAt'	=> $CreateAt
	);

	//Kiểm tra thực thi
	if ($bool) {
		$_SESSION['data'] = $data;
		header('location: register.php?error=error');

	} else {

		if ($RegisterController->createAccount($data)) {
			# code...
			header('location: success.php?url=login.php&&action=register');
		}
		
	}
	
}

$RegisterController->getView();

if (isset($_GET['error'])) {
	//Kiểm tra và xoá biến $_SESSION['error'] 
	if (isset($_SESSION['error']) ) {
		unset($_SESSION['error']);
		
	}
	if (isset($_SESSION['data'])){
		unset($_SESSION['data']);
	}
}

?>