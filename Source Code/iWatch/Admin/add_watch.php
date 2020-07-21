<?php 

session_start();

require_once('Controller/WatchController.php');
$WatchController = new WatchController();

if (isset($_POST['add'])) {

	$Name			= trim($_POST['Name']);
	$Diameter		= $_POST['Diameter'];
	$Price			= $_POST['Price'];
	$Thickness  	= $_POST['Thickness'];
	$Material 		= $_POST['Material'];
	$Strap 			= $_POST['Strap'];
	$StrapWidth 	= $_POST['StrapWidth'];
	$Movement 		= $_POST['Movement'];
	$Glass 			= $_POST['Glass'];
	$WaterResistant	= $_POST['WaterResistant'];
	$IdBrand		= trim($_POST['Brand']);
	$CreateAt 		= date('Y-m-d');

	if (!isset($_POST['Type'])) {
		$Type 	= '';
	} else {
		$Type	= trim($_POST['Type']);
	}

	//Bat loi
	$bool = false;

	// Phần xử lý upload hình ảnh
	// Update Image
	// Sử dụng vòng lặp for để lưu từng file trong mảng

	$count = count($_FILES['image']['name']);

	$link = array();
	
	if ($count < 2) {
		# code...
		$_SESSION['error']['image'] = 'You must add at least 2 images';
		$bool = true;

	} else {

		foreach($_FILES['image']['name'] as $name => $value)
		{
		    $name_img = stripslashes($_FILES['image']['name'][$name]);
		    $source_img = $_FILES['image']['tmp_name'][$name];
		    $path_img = "../lib/images/watches/" . $name_img;
		    $link[] = trim(str_replace('../', '', $path_img));
		    move_uploaded_file($source_img, $path_img);
		}

		$link = json_encode($link);

	}
		

	// Hết phần xử lý ảnh

	

	//Kiểm tra Name
	if (strlen($Name) < 2) {
		$_SESSION['error']['Name'] = 'Name must have at least 2 letters';
		$bool = true;
	}

	//Kiểm tra Diameter
	if ($Diameter < 28 || $Diameter > 40) {
		$_SESSION['error']['Diameter']  = 'Diameter must be about 28-40';
		$bool = true;
	}

	//Kiểm tra Price
	$pattern = '/^[1-9][0-9]{0,5}$/';
	if (!preg_match($pattern, $Price)) {
		$_SESSION['error']['Price']  = 'Price must be greater than 0 and loweer than 1.000.000USD';
		$bool = true;
	}

	//Kiểm tra Thickness
	$pattern = '/^[5-9]$/';
	if (!preg_match($pattern, $Thickness)) {
		$_SESSION['error']['Thickness']  = 'Thickness must be about 5-9';
		$bool = true;
	}

	//Kiểm tra Material
	if (strlen($Material) < 2) {
		$_SESSION['error']['Material'] = 'Material must have at least 2 letters';
		$bool = true;
	}

	//Kiểm tra Strap
	if (strlen($Strap) < 2) {
		$_SESSION['error']['Strap'] = 'Strap must have at least 2 letters';
		$bool = true;
	}

	//Kiểm tra StrapWidth
	$pattern = '/^[1-2][0-9]$/';
	if (!preg_match($pattern, $StrapWidth)) {
		$_SESSION['error']['StrapWidth']  = 'StrapWidth must be about 10-29';
		$bool = true;
	}

	//Kiểm tra Movement
	if (strlen($Movement) < 2) {
		$_SESSION['error']['Movement'] = 'Movement must have at least 2 letters';
		$bool = true;
	}

	//Kiểm tra Glass
	if (strlen($Glass) < 2) {
		$_SESSION['error']['Glass'] = 'Glass must have at least 2 letters';
		$bool = true;
	}

	//Kiểm tra Strap
	if (strlen($WaterResistant) < 2) {
		$_SESSION['error']['WaterResistant'] = 'WaterResistant must have at least 2 letters';
		$bool = true;
	}

	//Kiểm tra Type
	if ($Type == '') {
		$_SESSION['error']['Type']  = 'Type must choose';
		$bool = true;
	}

	//Them Spec
	$specification = array(

		'Diameter' 			=> $Diameter,
		'Thickness'			=> $Thickness,
		'Material'			=> $Material,
		'Strap'				=> $Strap,
		'StrapWidth' 		=> $StrapWidth,
		'Movement'			=> $Movement,
		'Glass'				=> $Glass,
		'WaterResistant'	=> $WaterResistant

	);

	$specification = json_encode($specification);

	//Kiểm tra thực thi
	if ($bool) {

		$_SESSION['data'] = array(
			'WatchName'	 		=> $Name,
			'Price'		 		=> $Price,
			'Image'				=> $link,
			'Diameter' 			=> $Diameter,
			'Thickness'			=> $Thickness,
			'Material'			=> $Material,
			'Strap'				=> $Strap,
			'StrapWidth' 		=> $StrapWidth,
			'Movement'			=> $Movement,
			'Glass'				=> $Glass,
			'WaterResistant'	=> $WaterResistant,
			'Type'		 		=> $Type
		);

		header('location: add_watch.php?error=error');

	} else {
		//Thiết lập dữ liệu
		$data = array(
			'WatchName'	 	=> $Name,
			'Price'		 	=> $Price,
			'IdBrand'	 	=> $IdBrand,
			'Image'			=> $link,
			'Specification' => $specification,
			'Type'		 	=> $Type,
			'CreateAt'		=> $CreateAt
		);

		$bool = $WatchController->addWatch($data);

		if ($bool) {
			# code...
			header('location: add_watch.php?success=success');
		} else {
			die('Error');
		}
		
	
	}

}

$WatchController->getViewAdd();

if (isset($_GET['error'])) {
	# code...
	unset($_SESSION['error']);
	unset($_SESSION['data']);
}


?>