<?php 

class AccountController {
	public function getView(){
		require_once('View/account.php');
	}

	public function getViewChangePassword(){
		require_once('View/change_password.php');
	}

	public function getViewChangeEmail(){
		require_once('View/change_email.php');
	}

	public function updateAccount($data, $id){
		require_once('Model/Model.php');
		$Model = new Model();
		$bool = $Model->updateByID('customer', $data, $id);
		return $bool;
	}

	public function checkPass($OldPassword, $id){		
		require_once('Model/Model.php');
		$Model = new Model();	

		$condition = array(

			'ID'		=> $id,
			'Password'	=> md5($OldPassword)

		);

		$customers = $Model->selectByCondition('customer', $condition);

		$count = count($customers);

		if ($count > 0) {
			# code...
			return false;
		}

		return true;
	}

	public function changePassword($data, $id){
		require_once('Model/Model.php');
		$Model = new Model();

		$bool = $Model->updateByID('customer', $data, $id);
		return $bool;
	}

	public function changeEmail($data, $id){
		require_once('Model/Model.php');
		$Model = new Model();

		$bool = $Model->updateByID('customer', $data, $id);
		return $bool;
	}

	public function checkEmail($OldEmail, $id){
		require_once('Model/Model.php');
		$Model = new Model();	

		$condition = array(

			'ID'		=> $id,
			'Email'		=> $OldEmail

		);

		$customers = $Model->selectByCondition('customer', $condition);

		$count = count($customers);

		if ($count > 0) {
			# code...
			return false;
		}

		return true;
	}

	public function hasEmail($email){
		require_once('Model/Model.php');
		$Model = new Model();	

		$condition = array(
			'Email'		=> $email

		);

		$customers = $Model->selectByCondition('customer', $condition);

		$count = count($customers);

		if ($count > 0) {
			# code...
			return true;
		}

		return false;
	}
}

?>