<?php	
	session_start();
	require('../models/userModel.php');

	if(isset($_REQUEST['submit'])){
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		if( $username != null &&  $password != null){

			$status = login($username, $password);

			if($status){
				setcookie('status', 'true', time()+3600, '/');
				header('location: ../views/home.php');
			}else{
				header('location: ../views/login.php?msg=error');
			}

			//$user = $_SESSION['user'];

			/*$file = fopen('../models/user.txt', 'r');
			while(!feof($file)){
				$user = fgets($file);
				$userArry = explode('|', $user);
				print_r($userArry);

				if(trim($userArry[1]) == $username && trim($userArry[2]) == $password){
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../views/home.php');
				}
			}*/

			//echo "invalid username/password";

		}else{
			echo "null submission";
		}
	}

?>