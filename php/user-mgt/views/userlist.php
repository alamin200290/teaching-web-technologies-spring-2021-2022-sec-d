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
			<?php 

				$file = fopen('../models/user.txt', 'r');

				while(!feof($file)){
					$user = fgets($file);
					$userArray = explode('|', $user);
			?>

				<tr>
					<td><?=$userArray[0]?></td>
					<td><?=$userArray[1]?></td>
					<td><?=$userArray[2]?></td>
					<td><?=$userArray[3]?></td>
					<td>
						<a href="edit.php?id=<?=$userArray[0]?>"> EDIT </a> |
						<a href="delete.php?id=<?=$userArray[0]?>"> DELETE </a> 
					</td>
				</tr>
			<?php
				}
			?>
			
			
			
		</table>
		</fieldset>
	</form>
</body>
</html>