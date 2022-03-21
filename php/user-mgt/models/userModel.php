<?php 
	
	function getConnection(){

		$host = "localhost";
		$dbname = "webtech";
		$dbpass = "";
		$dbuser = "root";

		$con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $con;
	}
	
	function login($username, $password){
		$con = getConnection();
		$sql= "select * from users where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);

		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}

	function signup($username, $password, $email){
		$con = getConnection();
		$sql= "insert into users values('', '{$username}', '{$password}', '{$email}', 'user')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getUserById($id){

	}

	function updateUser($user){

	}

	function deleteUser($id){

	}

	function getAllUser(){

	}
?>