<?php 

class WatchController {
	public function getView($watches, $id){

		require_once('Model/Model.php');
		$Model = new Model();

		foreach ($watches as $watch) {
			$WatchName  = $watch['WatchName'];
			$Price   	= $watch['Price'];
			$spec   	= $watch['Specification'];
			$IdBrand   	= $watch['IdBrand'];
			$Type		= $watch['Type'];
			$Image 		= $watch['Image'];
			$BrandName 	= $watch['BrandName'];
		}

		$images = json_decode($Image, true); 

		$spec = json_decode($spec, true);

		if ($Type == 0) {
			# code...
			$type = 'men';
		} else {
			$type = 'lady';
		}

		$condition = array(
			'IdWatch' => $id
		);

		$reviews = $Model->selectByCondition('feedback', $condition);

		$countRating = 0;
		$RatingDivi  = 0;

		$values = array();

		foreach ($reviews as $review) { 
			if ($review['IdComment'] != 0) {
				continue;
			} else if( $review['IdWatch'] == $id ) {
				$countRating++;
				$RatingDivi += $review['Rating'];
			}



			$condition = array(
				'IdComment' => $review['ID']
			);

			$value = $Model->selectByCondition('feedback', $condition);

			if (!empty($value)) {
				$values[] = $value;
			}
			
		}

		if ($countRating != 0) {
			$RatingDivi = round($RatingDivi/$countRating) ;
		}

		$customers = $Model->selectAll('customer');

		require_once('View/watch.php');
	}

	public function getWatch($id){
		require_once('Model/WatchModel.php');
		$WatchModel = new WatchModel();
		$watches = $WatchModel->getWatchByID('watch', $id);
		return $watches;
	}

	public function insertFeedback($data){
		require_once('Model/Model.php');
		$Model 	= new Model();
		$bool 	= $Model->insert('feedback', $data);
		return $bool;
	}
}

?>