<?php 

session_start();

require_once('Controller/AccountController.php');
$AccountController = new AccountController();

sleep(1);

if (isset($_GET['update'])) {
	# code...
	$id = $_GET['id'];
	$OldEmail = $_GET['OldEmail'];

	$bool = false;

	if ($AccountController->checkEmail($OldEmail, $id)) {
		# code...
		$_SESSION['error']['OldEmail'] = 'Email is not correct';
		$bool = true;
	}

	if ($bool) {
		# code...
		header('location: change_email.php?error=error');
	} else {

		header("location: change_email.php?send-mail=send-mail&&email=$OldEmail");

	}
}

if (isset($_GET['send-mail'])) {
	# code...
	$name 	= $_SESSION['Login']['LastName'];
	$email 	= $_GET['email'];
	$random = mt_rand(100000, 999999);
	$code   = md5('email-code');

	include('lib/PHPMailer/class.smtp.php');
    include('lib/PHPMailer/class.phpmailer.php');
    $nFrom 	= "iWATCHSTORE";    //mail duoc gui tu dau, thuong de ten cong ty ban
    $mFrom 	= 'long.vuphilong@gmail.com';  //dia chi email cua ban 
    $mPass 	= '1998philong';       //mat khau email cua ban
    $nTo 	= "$name"; //Ten nguoi nhan
    $mTo 	= "$email";   //dia chi nhan mail
    $mail   = new PHPMailer();
    $body   = "Your Code is: $random";   // Noi dung email
    $title 	= "Code Active To Change Email";   //Tieu de gui mail
    $mail->IsSMTP();             
    $mail->CharSet  	= "utf-8";
    $mail->SMTPDebug  	= 0;   // enables SMTP debug information (for testing)
    $mail->SMTPAuth   	= true;    // enable SMTP authentication
    $mail->SMTPSecure 	= "ssl";   // sets the prefix to the servier
    $mail->Host       	= "smtp.gmail.com";    // sever gui mail.
    $mail->Port       	= 465;         // cong gui mail de nguyen
    // xong phan cau hinh bat dau phan gui mail
    $mail->Username   	= $mFrom;  // khai bao dia chi email
    $mail->Password   	= $mPass;              // khai bao mat khau
    $mail->SetFrom($mFrom, $nFrom);
    $mail->AddReplyTo('long.vuphilong@gmail.com'); //khi nguoi dung phan hoi se duoc gui den email nay
    $mail->Subject    	= $title;// tieu de email 
    $mail->MsgHTML($body);// noi dung chinh cua mail se nam o day.
    $mail->AddAddress($mTo, $nTo);
    // thuc thi lenh gui mail 
    if(!$mail->Send()) {
        die('Error');
    } else {
        header("location: change_email.php?mail=success&&$code=$random");
    }
}

if (isset($_GET['enter-code'])) {
	# code...
	$code   = md5('email-code');
	$random = $_GET['email-code'];
	$Code 	= $_GET['Code'];

	if ($Code == $random) {
		# code...
		header('location: change_email.php?change-email=success');
	} else {
		$_SESSION['error']['Code'] = 'Code is not correct';
		header("location: change_email.php?mail=success&&$code=$random&&error=error");
	}
}

if (isset($_GET['change'])) {
	# code...
	$id 		 = $_GET['id'];
	$Email 	     = $_GET['NewEmail'];
	$ReEmail     = $_GET['ReEmail'];
	$bool 		 = false; 

	

	if ($AccountController->hasEmail($Email)) {
		# code...
		$_SESSION['error']['NewEmail'] = 'Email was existed';
		$bool = true;
	}

	if (strlen(trim($_GET['NewEmail'])) < 8 ) {
		# code...
		$_SESSION['error']['NewEmail'] = 'Email must have at least 8 letters';
		$bool = true;
	}

	// Kiểm tra Repass
	if ($Email != $ReEmail) {
		$_SESSION['error']['ReEmail'] = 'Incorrect Email';
		$bool = true;
	}

	if ($bool) {
		# code...
		header('location: change_email.php?change-email=success&&error=error');
	} else {

		$data = array(

			'Email' => $Email

		);

		$bool = $AccountController->changeEmail($data, $id);

		if ($bool) {
			# code...
			header('location: success.php?url=login.php&&action=update&&email=change');
		}else {
			die('error');
		} 

	}
}

$AccountController->getViewChangeEmail();

if (isset($_GET['error'])) {
	# code...

	unset($_SESSION['error']);
}

?>