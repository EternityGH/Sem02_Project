<?php 

class HomeController {
	public function getView(){

		$newCustomer 	= $this->newCustomer();

		$newWatch 		= $this->newWatches();

		$newFeedback 	= $this->newFeedbacks();

		require_once('View/home.php');
	}

	public function newCustomer(){
		require_once('Model/Model.php');
		$Model = new Model();
		$customers = $Model->selectAll('customer');

		$count = 0;

		foreach ($customers as $customer) {
			$date = date_create($customer['CreateAt']);
			$date = date_format($date, 'm');
			$now  = date('m');
			if ($date == $now) {
				$count++;
			}
		}

		return $count;

	}

	public function newWatches(){
		require_once('Model/Model.php');
		$Model = new Model();
		$watches = $Model->selectAll('watch');

		$count = 0;

		foreach ($watches as $watch) {
			$date = date_create($watch['CreateAt']);
			$date = date_format($date, 'm');
			$now  = date('m');
			if ($date == $now) {
				$count++;
			}
		}

		return $count;
	}

	public function newFeedbacks(){
		require_once('Model/Model.php');
		$Model = new Model();

		$condition = array(

			'IdComment' => 0

		);

		$feedbacks = $Model->selectByCondition('feedback', $condition);

		$count = 0;

		foreach ($feedbacks as $feedback) {
			$date = date_create($feedback['CreateAt']);
			$date = date_format($date, 'm');
			$now  = date('m');
			if ($date == $now) {
				$count++;
			}
		}

		return $count;
	}	
}

?>