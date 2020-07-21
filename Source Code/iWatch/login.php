<?php 

session_start();

require_once('Controller/LoginController.php');
$LoginController = new LoginController();

if (isset($_GET['Login'])) {
	
	sleep(1);

	$Email =  trim($_GET['Email']);
	$Pass  =  md5(trim($_GET['Password']));

	$customers = $LoginController->getAllCustomer();

	foreach ($customers as $customer) {
		if ($customer['Email'] == $Email && $customer['Password'] == $Pass ) {
			$_SESSION['Login']['ID'] 		= $customer['ID'];
			$_SESSION['Login']['FirstName'] = $customer['FirstName'];
			$_SESSION['Login']['LastName'] 	= $customer['LastName'];
			$_SESSION['Login']['Email'] 	= $customer['Email'];
			$_SESSION['Login']['Phone'] 	= $customer['Phone'];
			$_SESSION['Login']['Address'] 	= $customer['Address'];
			$_SESSION['Login']['Avatar'] 	= $customer['Avatar'];
			$_SESSION['Login']['Gender'] 	= $customer['Gender'];
			$_SESSION['Login']['Role']		= $customer['Role'];  
		}
	}

	if (isset($_SESSION['Login'])){

		header('location: account.php');

	} else {
		
		$_SESSION['error'] = "Email or password incorrect";
		$_SESSION['email'] = $Email;

		header('location: login.php?error=error');
	}

}

if (isset($_SESSION['Login'])){
	header('location: account.php');
}

$LoginController->getView();

if (isset($_GET['error'])) {

	//Kiểm tra và xoá biến $_SESSION['error'] 
	unset($_SESSION['error']);
	unset($_SESSION['email']);
 	
} 

?>