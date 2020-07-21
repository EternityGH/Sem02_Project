<?php 

class BrandWatchController {

	public function getView($BrandName, $spec){
		require_once('Model/WatchModel.php');
		$WatchModel = new WatchModel();
		$spec 		= $spec;
		$watches	= $WatchModel->getWatchByBrand('watch', $BrandName);

		require_once('View/brand_watch.php');
	}

	public function getBrandByCondition($conn){

		require_once('Model/Model.php');
		$Model = new Model();
		$brands = $Model->selectByCondition('brand', $conn);
		return $brands;
	}
}
?>