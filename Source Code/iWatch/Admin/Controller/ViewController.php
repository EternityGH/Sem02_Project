<?php 

class ViewController {

	public function getView($id){
		$customer = $this->getCustomer($id);
		require_once('View/view_customer.php');
	}

	public function getCustomer($id){
		require_once('Model/Model.php');
		$Model = new Model();

		$condition = array(
			'ID' => $id
		);

		$customer = $Model->selectByCondition('customer', $condition);
		return $customer;
	}

}

?>