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

	<br><br>
		<table border="1">
			<tr>
				<td>ID</td>
				<td>Username</td>
				<td>Password</td>
				<td>Email</td>
				<td>Action</td>
			</tr>
			<tr>
				<td>1</td>
				<td>XYZ</td>
				<td>123</td>
				<td>XYZ@AIUB.EDU</td>
				<td>
					<a href="edit.php"> EDIT </a> |
					<a href="delete.php"> DELETE </a> 
				</td>
			</tr>
			<tr>
				<td>2</td>
				<td>ALAMIN</td>
				<td>234</td>
				<td>alamin@aiub.edu</td>
				<td>
					<a href="edit.php"> EDIT </a> |
					<a href="delete.php"> DELETE </a> 
				</td>
			</tr>
			
		</table>
		</fieldset>
	</form>
</body>
</html>