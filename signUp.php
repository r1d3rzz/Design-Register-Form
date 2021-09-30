<?php 
	error_reporting(1);
	session_start();

	$name = $_POST['name'];
	$pass = $_POST['pass'];

	$_SESSION['name'] = $name ;
	$_SESSION['pass'] = $pass ;

	if(isset($_POST['reg']))
	{
		if(file_exists("users/$name"))
		{
			// echo "Your Account is Already exits,Sign Up with another Account.";
			echo "<script>alert('Your Account is Already exits,Sign Up with another Account.')</script>";
			echo "<script>location='index.php'</script>";
		}
		else
		{
			mkdir("users/$name");
			$arr = fopen("users"."/".$_SESSION['name']."/".$_SESSION['pass'], "w");
			$data = "Your name is : ".$_SESSION["name"]."     "."Your Password is : ".$_SESSION['pass'];
			fwrite($arr, $data);
			header('location:index.php');
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
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
		<table border="0" class="signUpTable mainTable">
			<tr>
				<td colspan="2" align="center" class="signhead" style="color: blue;"><marquee>Create Your New Account</marquee></td>
			</tr>
			<tr>
				<td class="signTitle">Name</td>
				<td><input type="text" name="name" class="inputBox" autofocus required></td>
			</tr>
			<tr>
				<td class="signTitle">Password</td>
				<td><input type="password" name="pass" class="inputBox" required></td>
			</tr>
			<tr>
				<td colspan="2" align="right"><input type="submit" class="inputBtn" value="Create" name="reg"></td>
			</tr>
		</table>
	</form>
</body>
</html>