<?php 

class Database {

	public function dbConnect(){
		$conn = new mysqli ('localhost', 'root', '', 'iwatches');

		if($conn->connect_error){
			die('Connect Database Failed' . $conn->connect_error);
		}

		$conn->set_charset('utf8');

		return $conn;
	}

	public function dbDis($conn){
		$conn->close();
	}

}

?>