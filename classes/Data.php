<!doctype html>
<html>
<?php
	class Data {
		private static $_instance = null;
		private $_pdo,
				$_conn,
				$_query, 
				$_error, 
				$_results,
				$_count = 0;
				
		private function __construct() {
			$conn = mysqli_connect(config::get("mysql/host"), config::get("mysql/username"), config::get("mysql/password"), config::get("mysql/db"));
			if(!$conn){
				echo '<script> alert("ERROR CONNECTION FAILED: ' . mysqli_connect_error() . '")</script>';
				die();
			}
		}
		
		
		
		public static function getInstance(){
			if(!isset(self::$_instance)){
				self::$_instance = new Data();
			}
			return self::$_instance;
		}
		
		public function query($sql, $params = array()){
			$this -> _error = false;
			if ($this -> _query =)
		}
	}
	
	
?>
</html>