<?php	
	session_start();

	if(isset($_REQUEST['submit'])){
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		if( $username != null &&  $password != null){

			//$user = $_SESSION['user'];

			$file = fopen('user.txt', 'r');
			while(!feof($file)){
				$user = fgets($file);
				$userArry = explode('|', $user);
				print_r($userArry);

				if(trim($userArry[0]) == $username && trim($userArry[1]) == $password){
					setcookie('status', 'true', time()+3600, '/');
					header('location: home.php');
				}
			}

			echo "invalid username/password";

		}else{
			echo "null submission";
		}
	}

?>