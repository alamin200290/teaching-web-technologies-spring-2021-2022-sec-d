<?php 
	session_start();
	if(isset($_SESSION['status'])){
?>

<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome home!</h1> <a href="logout.php">Logout </a>	
</body>
</html>

<?php

	}else{
		echo "invalid request";
	}
?>


