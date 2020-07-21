<?php 

session_start();
require_once('Controller/BrandController.php');
$BrandController = new BrandController();

if (isset($_POST['add'])) {

	sleep(2);

	$BrandName	= trim($_POST['Name']);
	$Intro		= trim($_POST['Intro']);

		//Bat loi
	$bool = false;

	// Phần xử lý upload hình ảnh
	// Update Image
	
	if($_FILES['background']['name'])
	{
	    $name_img = stripslashes($_FILES['background']['name']);
	    $source_img = $_FILES['background']['tmp_name'];
	    $path_img = "../lib/images/background/" . $name_img;
	    $link = trim(str_replace('../', '', $path_img));
	    move_uploaded_file($source_img, $path_img);
	} else {
		$_SESSION['error']['Image'] = 'You must choose Image';
		$bool = true;
	}

	// Hết phần xử lý ảnh

	//Kiểm tra Name
	if (strlen($BrandName) < 2) {
		$_SESSION['error']['BrandName'] = 'BrandName must have at least 2 letters';
		$bool = true;
	}

	if (strlen($Intro) < 10) {
		$_SESSION['error']['Intro'] = 'Intro must have at least 10 letters';
		$bool = true;
	}

	//Them Spec
	$specification = array(
		'Intro' 		=> stripslashes($Intro),
		'Background'	=> stripslashes($link)

	);

	$specification = json_encode($specification);

	//Kiểm tra thực thi
	if ($bool) {

		$_SESSION['data'] = array(
			'BrandName'	 	=> $BrandName,
			'Intro'			=> $Intro
		);

		header('location: add_brand.php?error=error');

	} else {
		//Thiết lập dữ liệu
		$data = array(
			'BrandName'	 	=> $BrandName,
			'Specification'	=> $specification
		);
			
		$bool = $BrandController->addBrand($data);

		if ($bool) {
			# code...
			header('location: add_brand.php?success=success');
		} else {
			die('Error');
		}

		
	}

}

$BrandController->getViewAdd();

if (isset($_GET['error'])) {
	# code...
	unset($_SESSION['error']);
	unset($_SESSION['data']);
}

?>