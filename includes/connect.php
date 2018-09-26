<?php 
	/**
	 * CONNECT TO DATABASE;

	 		PHP Developer: Catarau Cezar-Iulian (Backend)
	 		HTML/CSS Developer: Cenusa Stefan Alexandru (Frontend)

	 		Date: 26/09/2018
	 		Time: 3:30 PM
	 */

	class connect_to_database
	{
		private $db_host = NULL;
		private $db_user = NULL;
		private $db_pass = NULL;
		private $db_name = NULL;

		public function __construct()
		{
			$this->db_host = "localhost";
		 	$this->db_user = "root";
		 	$this->db_pass = "";
		 	$this->db_name = "project";

		}
		
		private function make_connect()
		{
			$connect = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

			if($connect->connect_error)
				return 0;

			return $connect;
		}

		public function return_connect()
		{
			$return = $this->make_connect();

			return $return;
		}
	}

		$db_Class = new connect_to_database;

		$GLOBALS["DB_STATUS"] = $db_Class->return_connect();

?>

