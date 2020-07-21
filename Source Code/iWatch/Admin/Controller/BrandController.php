<?php 

class BrandController {

	public function getView(){

		$page = $this->getPagination();
		$brands = $this->getBrand();
		require_once('View/brand.php');
	}

	public function getViewAdd(){
		require_once('View/add_brand.php');
	}

	public function getViewEdit($id){
		$brands = $this->getBrandById($id);
		require_once('View/edit_brand.php');
	}

	public function getPagination(){
		include_once('Model/Pagination.php');
		include_once('Model/Model.php');

		$Model = new Model();

		$brands = $Model->selectAll('brand');

		if (isset($_GET['page'])) {
		    $page = $_GET['page'];
		} else {
		    $page = 1;
		}
		$limit = 10;
		$offset = ($page-1) * $limit;

		$config = [
		    'total' => (int)count($brands), 
		    'limit' => 10,
		    'full' => false
		];

		$page = new Pagination($config);

		return $page;

	}

	public function getBrand(){
		include_once('Model/BrandModel.php');
		$BrandModel = new BrandModel();
		if (isset($_GET['page'])) {
		    $page = $_GET['page'];
		} else {
		    $page = 1;
		}
		$limit 		= 10;
		$offset 	= ($page-1) * $limit;
		$brands 	= $BrandModel->getBrandPagination('brand', $offset, $limit);
		return $brands;
	}

	public function deleteBrand($id){
		include_once('Model/Model.php');

		$Model = new Model();

		$condition = array(

			'IdBrand' => $id

		);

		$watches = $Model->selectByCondition('watch', $condition);
		if (count($watches) > 0) {
			foreach ($watches as $watch) {
				# code...
				$bool = $this->deleteWatch($watch['ID']);
			}
		} else {
			$bool = true;
		}
			

		if ($bool) {
			# code...

			$bool = $Model->deleteByID('brand', $id);

		}

		return $bool;
	}

	public function addBrand($data){
		include_once('Model/Model.php');

		$Model = new Model();
		$bool = $Model->insert('brand', $data);

		return $bool;
	}

	public function getBrandById($id){
		include_once('Model/Model.php');
		$Model = new Model();
		$condition = array(
			'ID'	=> $id
		);

		$brands = $Model->selectByCondition('brand', $condition);
		return $brands;
	}

	public function editBrand($data, $id){
		include_once('Model/Model.php');
		$Model = new Model();
		$bool = $Model->updateByID('brand', $data, $id);
		return $bool;
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
}

?>