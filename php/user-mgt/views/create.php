<?php 
	require_once('header.php');
?>

<html>
<head>
	<title>Create New</title>
</head>
<body>

	<a href="home.php">Back </a> |	
	<a href="../controllers/logout.php">Logout </a>	

	<form method="POST" action="regCheck.php">
		<fieldset>
			<legend>Create New</legend>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value=""></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Create"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>