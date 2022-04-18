<?php 

	//sleep(3);
	//echo "Your username is: ".$_POST['uname'];
	
	$json = $_POST['data'];

	$obj = json_decode($json);
	echo $obj->name;
?>