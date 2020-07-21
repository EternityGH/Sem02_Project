<?php 

class RegisterController {

	public function getView(){

		require_once('View/register.php');

	}

	public function createAccount($data){

		require_once('Model/Model.php');
		$model = new Model();
		$bool  = $model->insert('customer', $data);

		//Kiểm tra thực thi có thành công hay không?
		return $bool;

	}

	public function checkEmail($email){
		require_once('Model/Model.php');
		$model = new Model();

		$condition = array(
			'Email'	=> $email
		);

		$values = $model->selectByCondition('customer', $condition);

		if (!empty($values)) {
			return true;
		}

		return false;
	}

}

?>