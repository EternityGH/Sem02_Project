<?php 

session_start();


require_once('Controller/AccountController.php');
$AccountController = new AccountController();

if (isset($_POST['update'])) {

	sleep(1);

	$ID 		= trim($_POST['ID']);
	$FirstName	= trim($_POST['FirstName']);
	$LastName	= trim($_POST['LastName']);
	$Phone		= trim($_POST['Phone']);
	$Address	= trim($_POST['Address']);
	$Gender		= trim($_POST['Gender']);
	$link		= $_POST['link'];

	// Phần xử lý upload hình ảnh
	// Update Image
	if (!empty($_FILES['avatar']['name'])) {
		$target_dir = "lib/images/avatar/";
		$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
	    $check = getimagesize($_FILES["avatar"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	    // Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["avatar"]["size"] > 5000000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}

		// Lay duong dan
		$Avatar = $target_file;
	} else {
		$Avatar = $link;
	}	

	// Hết phần xử lý ảnh

	//Bat loi
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

	//Kiểm tra So dien thoai
	$pattern = '/^[0][1-9][0-9]{7,10}$/';

	if (!preg_match($pattern, $Phone)) {
		$_SESSION['error']['Phone']  = 'Phone must have 9-12 numbers';
		$bool = true;
	}

	//Kiểm tra dia chi
	if (strlen($Address) < 5) {
		$_SESSION['error']['Address']  = 'Address must have at least 5 letters';
		$bool = true;
	}

	//Kiểm tra Gender
	if (empty($Gender)) {
		$_SESSION['error']['Gender']  = 'You must choose gender';
		$bool = true;
	}

	//Kiểm tra thực thi
	if ($bool) {
		header('location: account.php?error=error');

	} else {
		//Thiết lập dữ liệu
		$data = $_SESSION['data-account'] = array(
			'FirstName'	=> $FirstName,
			'LastName'	=> $LastName,
			'Phone'		=> $Phone,
			'Address'	=> $Address,
			'Avatar'	=> $Avatar,
			'Gender'	=> $Gender
		);

		$bool = $AccountController->updateAccount($data, $ID);

		if ($bool) {
			$_SESSION['Login']['Avatar'] = $Avatar;

			header('location: success.php?url=account.php&&action=update');
		} else {
			die('Error');
		}			
	
	}

}

$AccountController->getView();

if (isset($_GET['error'])) {

	//Kiểm tra và xoá biến $_SESSION['error'] 
	if (isset($_SESSION['error'])) {
		unset($_SESSION['error']);
	}
} 

?>