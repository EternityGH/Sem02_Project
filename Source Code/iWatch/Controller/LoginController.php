<?php 

class LoginController {
	public function getView(){
		require_once('View/login.php');
	}

	public function getAllCustomer(){

		require_once('Model/Model.php');
		$Model = new Model();
		$customers = $Model->selectAll('customer');

		return $customers;

	}

}

?>