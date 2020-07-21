<?php 

class WatchController {
	public function getView(){

		$page = $this->getPagination();
		$watches = $this->getWatch();
		require_once('View/watch.php');
	}

	public function getViewAdd(){

		$brands = $this->getBrand();
		require_once('View/add_watch.php');
	}

	public function getViewEdit($id){
		$brands = $this->getBrand();
		$watches = $this->getWatchById($id);
		require_once('View/edit_watch.php');
	}

	public function getPagination(){
		include_once('Model/Pagination.php');
		include_once('Model/Model.php');

		$Model = new Model();

		$watches = $Model->selectAll('watch');

		if (isset($_GET['page'])) {
		    $page = $_GET['page'];
		} else {
		    $page = 1;
		}
		$limit = 10;
		$offset = ($page-1) * $limit;

		$config = [
		    'total' => (int)count($watches), 
		    'limit' => 10,
		    'full' => false
		];

		$page = new Pagination($config);

		return $page;

	}

	public function getWatch(){
		include_once('Model/WatchModel.php');
		$WatchModel = new WatchModel();
		if (isset($_GET['page'])) {
		    $page = $_GET['page'];
		} else {
		    $page = 1;
		}
		$limit 		= 10;
		$offset 	= ($page-1) * $limit;
		$watches 	= $WatchModel->getWatchPagination('watch', $offset, $limit);
		return $watches;
	}

	public function deleteWatch($id){
		include_once('Model/Model.php');

		$Model = new Model();

		$condition = array(

			'IdWatch' => $id

		);

		$bool = $Model->deleteByCondition('feedback', $condition);

		if ($bool) {
			# code...
			$bool = $Model->deleteByID('watch', $id);

		}

		return $bool;
	}

	public function getBrand(){
		include_once('Model/Model.php');
		$Model = new Model();
		$brands = $Model->selectAll('brand');
		return $brands;

	}

	public function addWatch($data){
		include_once('Model/Model.php');

		$Model = new Model();
		$bool = $Model->insert('watch', $data);

		return $bool;

	}

	public function getWatchById($id){
		include_once('Model/Model.php');
		$Model = new Model();
		$condition = array(
			'ID'	=> $id
		);

		$watches = $Model->selectByCondition('watch', $condition);
		return $watches;
	}

	public function editWatch($data, $id){
		include_once('Model/Model.php');
		$Model = new Model();
		$bool = $Model->updateByID('watch', $data, $id);
		return $bool;
	}
}

?>