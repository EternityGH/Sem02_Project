<?php 

class HomeController {

	public function getView(){
		require_once('Model/WatchModel.php');
		$WatchModel = new WatchModel();
		$menWatches = $WatchModel->getMenWatches();
		$ladyWatches = $WatchModel->getLadyWatches();

		require_once('View/home.php');
	}

}


?>