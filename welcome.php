<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		body{
			background-image: url(img/gb.jpg);
			background-size: cover;
		}
	</style>
</head>
<body>
	<form method="post">
		<table border="0" class="welTable">
			<tr>
				<td colspan="2" class="t1" align="center">Hello <span class="resTxt"><?php echo $_SESSION['name'];?></span></td>
			</tr>
			<tr>
				<td colspan="2" class="t1" align="center" style="color: blue;">Your Account is Successfully Created.</td>
			</tr>
			<tr>
				<td colspan="2" class="t1" align="center">Your Account Password is <span class="resTxt"><?php echo $_SESSION['pass'];?></span></td>
			</tr>
			<tr>
				<td colspan="2" class="t1" align="right"><a href="logout.php" class="logoutLink">Logout</a></td>
			</tr>
		</table>
	</form>
</body>
</html>