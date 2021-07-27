<?php

/*
	PHP & Mysql Connectivity
	php5 - oops use
*/


class class_MysqlConnection{ // Outer
	//Declare variable

	private $hostname = "localhost";
//print $hostname;
	private $username = "root";
	private $password = "";
	private $database_name = "formtask_db";

	//php & mysql connectivity function
	public function dbconnection(){ 
	// Inner - Inner - I
		$mysql_Connection = mysqli_connect($this->hostname,$this->username,$this->password,$this->database_name);
		if($mysql_Connection){


			echo "<script>alert('Mysql Connected..');</script>";

			// $_SESSION['Uname'] = "Neha";
			// $_SESSION['age']=25;
		}else{
			echo "error";
		}
		return $mysql_Connection;

	}


	

}

$objMysqlConn = new class_MysqlConnection();
// $objMysqlConn1 = new class_MysqlConnection();


?>




