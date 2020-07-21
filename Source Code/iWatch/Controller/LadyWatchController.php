<?php 

class LadyWatchController {
	public function getView(){
		require_once('Model/WatchModel.php');
		$WatchModel = new WatchModel();
		$ladyWatches = $WatchModel->getLadyWatches();

		require_once('View/lady_watch.php');

	}
}

?>