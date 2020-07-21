<?php 

class FeedbackController {

	public function getView(){
		$page = $this->getPagination();
		$feedbacks = $this->getFeedback();
		require_once('View/feedback.php');
	}

	public function getPagination(){
		include_once('Model/Pagination.php');
		include_once('Model/Model.php');

		$Model = new Model();

		$feedbacks = $Model->selectAll('feedback');

		if (isset($_GET['page'])) {
		    $page = $_GET['page'];
		} else {
		    $page = 1;
		}
		$limit = 10;
		$offset = ($page-1) * $limit;

		$config = [
		    'total' => (int)count($feedbacks), 
		    'limit' => 10,
		    'full' => false
		];

		$page = new Pagination($config);

		return $page;

	}

	public function getFeedback(){
		include_once('Model/FeedbackModel.php');
		$FeedbackModel = new FeedbackModel();
		if (isset($_GET['page'])) {
		    $page = $_GET['page'];
		} else {
		    $page = 1;
		}
		$limit 		= 10;
		$offset 	= ($page-1) * $limit;
		$feedbacks 	= $FeedbackModel->getFeedbackPagination('feedback', $offset, $limit);
		return $feedbacks;
	}

	public function deleteFeedback($id){
		include_once('Model/Model.php');

		$Model = new Model();
		
		$bool = $Model->deleteByID('feedback', $id);

		return $bool;
	}

}

?>