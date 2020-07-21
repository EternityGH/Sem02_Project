<?php 

require_once('Config/Database.php');

class WatchModel {

	public function getMenWatches(){
		$db 	= new Database();
		$conn 	= $db->dbConnect();


		$sql 		= "	SELECT watch.*, brand.BrandName FROM watch
						JOIN brand ON watch.IdBrand = brand.ID
						WHERE Type = 0";
		$statement 	= $conn->prepare($sql);
		$statement->execute();

		$arr = array();

		$results = $statement->get_result();
		while($row = $results->fetch_assoc()) {
		 	$arr[] = $row;
		}

		$db->dbDis($conn);

		return $arr;
	}

	public function getLadyWatches(){
		$db 	= new Database();
		$conn 	= $db->dbConnect();


		$sql 		= "	SELECT watch.*, brand.BrandName FROM watch
						JOIN brand ON watch.IdBrand = brand.ID
						WHERE Type = 1";
		$statement 	= $conn->prepare($sql);
		$statement->execute();

		$arr = array();

		$results = $statement->get_result();
		while($row = $results->fetch_assoc()) {
		 	$arr[] = $row;
		}

		$db->dbDis($conn);

		return $arr;
	}

	public function getWatchByBrand($table, $brandName){
		$db 	= new Database();
		$conn 	= $db->dbConnect();

		$sql 		= 	"SELECT $table.*, brand.BrandName FROM $table
						JOIN brand ON $table.IdBrand = brand.ID
						WHERE brand.BrandName = '$brandName'";
		$statement 	= $conn->prepare($sql);
		$statement->execute();

		$arr = array();
		$results = $statement->get_result();
		while($row = $results->fetch_assoc()) {
		 	$arr[] = $row;
		}

		$db->dbDis($conn);
		return $arr;
	}

	public function getWatchByID($table, $id){
		$db 	= new Database();
		$conn 	= $db->dbConnect();

		$sql 		= "	SELECT $table.*, brand.BrandName FROM $table
						JOIN brand ON $table.IdBrand = brand.ID
						WHERE $table.ID = $id";
		$statement 	= $conn->prepare($sql);
		$statement->execute();

		$arr = array();
		$results = $statement->get_result();
		while($row = $results->fetch_assoc()) {
		 	$arr[] = $row;
		}

		$db->dbDis($conn);
		return $arr;
	}


}


?>