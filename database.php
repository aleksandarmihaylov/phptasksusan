<?php 

require_once("config.php");

class Database{

	public $connection;

	function __construct(){
		$this -> open_connection();
	}

	public function open_connection(){

		$this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

		if($this->connection->connect_errno){

		die("Database connection failed!" . $this->connection->connect_error);

		}

	}//end of open method

	public function query($sql) {

		$result = $this->connection->query($sql);
		return $result;

	}

	private function confirm_query($result) {

		if(!$result) {
			
			die("Query failed" . $this->connection->error);
		
		}

	}

}// end of Database class

$database = new Database();

?>