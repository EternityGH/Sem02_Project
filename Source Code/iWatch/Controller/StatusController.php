<?php 

class StatusController {
	public function getViewSuccess($url, $action){

		$url = $url;
		$action = $action;
		require_once('View/success.php');
	}
}

?>