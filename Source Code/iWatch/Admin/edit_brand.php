<?php 

session_start();
require_once('Controller/BrandController.php');
$BrandController = new BrandController();

if (!isset($_GET['id'])) {
	header('location: brand.php');
}

$id = $_GET['id']; 

if (isset($_POST['edit_brand'])) {
	sleep(1);
	$ID 		= trim($_POST['ID']);
	$BrandName	= trim($_POST['Name']);
	$Intro		= trim($_POST['Intro']);
	$Image 		= trim($_POST['BackgroundOld']);

	// Phần xử lý upload hình ảnh

	if ($_FILES['Background']['name'] != "") {
	    $name_img = stripslashes($_FILES['Background']['name']);
	    $source_img = $_FILES['Background']['tmp_name'];
	    $path_img = "../lib/images/background/" . $name_img;
	    $link = trim(str_replace('../', '', $path_img));
	    move_uploaded_file($source_img, $path_img);
	} else {
		$link = $Image;
	}

	$spec = array(

		'Intro'			=> $Intro,
		'Background'	=> $link

	);

	$spec = json_encode($spec);

	//Bat loi
	$bool = false;

	//Kiểm tra Name
	if (strlen($BrandName) < 2) {
		$_SESSION['error']['BrandName'] = 'BrandName must have at least 2 letters';
		$bool = true;
	}

	if (strlen($Intro) < 10) {
		$_SESSION['error']['Intro'] = 'Intro must have at least 10 letters';
		$bool = true;
	}

	//Kiểm tra thực thi
	if ($bool) {
		header("location: edit_brand.php?id=$ID&&error=error");

	} else {
		//Thiết lập dữ liệu
		$data = array(
			'BrandName'		=> $BrandName,
			'Specification'	=> $spec
		);

		$bool = $BrandController->editBrand($data, $ID);

		if ($bool) {
			# code...
			header("location: edit_brand.php?id=$ID&&success=success");
		} else {
			die('Error!');
		}

	
	}

}

$BrandController->getViewEdit($id);

if (isset($_GET['error'])) {
	# code...
	unset($_SESSION['error']);
}

?>