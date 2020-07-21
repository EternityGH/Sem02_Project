<?php 

class CustomerController {
	public function getView(){

		$page = $this->getPagination();
		$customers = $this->getCustomer();
		require_once('View/customer.php');
	}

	public function getPagination(){
		include_once('Model/Pagination.php');
		include_once('Model/Model.php');

		$Model = new Model();

		$customers = $Model->selectAll('customer');

		if (isset($_GET['page'])) {
		    $page = $_GET['page'];
		} else {
		    $page = 1;
		}
		$limit = 10;
		$offset = ($page-1) * $limit;

		$config = [
		    'total' => (int)count($customers), 
		    'limit' => 10,
		    'full' => false
		];

		$page = new Pagination($config);

		return $page;

	}

	public function getCustomer(){
		include_once('Model/CustomerModel.php');
		$CustomerModel = new CustomerModel();
		if (isset($_GET['page'])) {
		    $page = $_GET['page'];
		} else {
		    $page = 1;
		}
		$limit 		= 10;
		$offset 	= ($page-1) * $limit;
		$customers 	= $CustomerModel->getCustomerPagination('customer', $offset, $limit);
		return $customers;
	}

	public function deleteCustomer($id){
		include_once('Model/Model.php');

		$Model = new Model();

		$condition = array(

			'IdCustomer' => $id

		);

		$bool = $Model->deleteByCondition('feedback', $condition);

		if ($bool) {
			# code...
			$bool = $Model->deleteByID('customer', $id);

		}

		return $bool;
	}
}

?>