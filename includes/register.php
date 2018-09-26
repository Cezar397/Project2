<?php
	/**
	 * REGISTER;

	 		PHP Developer: Catarau Cezar-Iulian (Backend)
	 		HTML/CSS Developer: Cenusa Stefan Alexandru (Frontend)

	 		Date: 26/09/2018
	 		Time: 3:30 PM
	 */

	require "connect.php";

	class Register extends connect_to_database
	{
		private $user_name = NULL;
		private $user_email = NULL;
		private $user_password = NULL;
		
		public function __construct()
		{
			$this->user_name = $_POST["user_name"];
			$this->user_email = trim($_POST["user_email"]);	
			$this->user_password = $_POST["user_password"];
		}

		private function check_inputs($input)
		{
			if(!isset($input) || empty($input))
				return 0;
			return 1;
		}

		private function redirect()
		{
			if(!$this->check_inputs($this->user_name) || !$this->check_inputs($this->user_password) || !$this->check_inputs($this->user_email))
			{
				header("Location: ../register.php?status=3ea087755c5b01f4e882f60dc3e0a77b");
				exit(0);
			}

			return 0;
		}

		public function check_rep()
		{
			$select = "SELECT Email FROM users";
			$result = $GLOBALS["DB_STATUS"]->query($select);

			while($row = $result->fetch_assoc())
				if($row["Email"] == $this->user_email)
					return 0;
				return 1;
				
			
		}

		public  function make_register()
		{
			if(!$this->redirect() && $this->check_rep())
			{
				$user = $this->user_name;
				$pass = $this->user_password;
				$email = $this->user_email;

				$pass = password_hash($pass, PASSWORD_DEFAULT);

				$insert = "INSERT INTO users(Name, Email, Password) VALUES('$user', '$email', '$pass')";
				$result = $GLOBALS["DB_STATUS"]->query($insert);

				if($result)
					{
						header("Location: ../register.php?status=06e1f98be814d88bd7c21824475c8749");
						exit(0);
					}
			}
			else
				return 0;


		}
	}
	
	$register = new Register;

	//var_dump($test->make_register());

	echo $register->make_register();

	//Key List
	//"3ea087755c5b01f4e882f60dc3e0a77b" - campuri obligatorii;
	//"06e1f98be814d88bd7c21824475c8749" - succes