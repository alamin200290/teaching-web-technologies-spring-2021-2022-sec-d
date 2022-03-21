<?php	
	session_start();

	if(isset($_REQUEST['submit'])){
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		if($username != null &&  $password != null && $email != null){
			/*$user = ['username'=> $username, 'password'=>$password, 'email'=> $email];
			$_SESSION['user'] = $user;*/

			$user = "3".$username."|".$password."|".$email."\r\n";
			$file = fopen('user.txt', 'a');
			fwrite($file, $user);
			header('location: login.php');
		}else{
			echo "null submission";
		}
	}

?>