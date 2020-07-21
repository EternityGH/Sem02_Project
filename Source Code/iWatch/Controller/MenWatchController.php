<?php 

class MenWatchController {
	public function getView(){
		require_once('Model/WatchModel.php');
		$WatchModel = new WatchModel();
		$menWatches = $WatchModel->getMenWatches();

		require_once('View/men_watch.php');

	}
}

?>