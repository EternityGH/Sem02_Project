<?php 

require_once('../Config/Database.php');

class FeedbackModel {

	public function getFeedbackPagination($table, $offset, $limit){
		$db 	= new Database();
		$conn 	= $db->dbConnect();


		// Cau lenh thuc thi
		$sql = "SELECT $table.*,  watch.WatchName FROM $table 
				JOIN watch ON $table.IdWatch = watch.ID
				WHERE IdComment = 0
				ORDER BY $table.ID DESC 
				LIMIT ?, ?";
		//Thực thi câu lệnh sql
		$statement 	= $conn->prepare($sql);
		$statement->bind_param("ii", $offset, $limit);
		$statement->execute();


		$arr = array();
		$results = $statement->get_result();
		if ($results->num_rows > 0) {
			while($row = $results->fetch_assoc()) {
			 	$arr[] = $row;
			}
		}

		$db->dbDis($conn);
		return $arr;
	}

}

?>