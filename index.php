<?php 
	error_reporting(1);
	session_start();

	$name = $_POST['name'];
	$pass = $_POST['pass'];

	if(isset($_POST['login']))
	{
		if(file_exists("users/$name") && file_exists("users/$name/$pass"))
		{
			$_SESSION['name'] = $_POST['name'];
			$_SESSION['pass'] = $_POST['pass'];		
			header("location:welcome.php");
			
			if($_POST['ch']==true)
			{
				setcookie("name",$name,time()+60);
				setcookie("pass",$pass,time()+60);
				header("location:welcome.php");
			}
		}
		else
		{
		// echo "<font color='red'>Your Username or Password is Invalid TRY AGAIN !!!</font>";
			echo "<script>alert('Your Username or Password is Invalid TRY AGAIN !!!')</script>";
			echo "<script>location = 'index.php'</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
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
		<table border="0" class="mainTable">
			<tr>
				<td class="inputTitle">Name</td>
				<td><input type="text" class="inputBox" name="name" required value="<?php echo $_COOKIE['name']; ?>" autofocus></td>
			</tr>
			<tr>
				<td class="inputTitle">Password</td>
				<td><input type="password" class="inputBox" name="pass" required value="<?php echo $_COOKIE['pass'];?>"></td>
			</tr>
			<tr>
				<td colspan="2" align="right"><input type="submit" class="inputBtn" name="login" value="Login"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="checkbox" name="ch"><span style="font-size: 15px; cursor: pointer; color: blue;">Save Your account Login</span></td>
			</tr>
			<tr>
				<td colspan="2" align="center" class="linkBox"><span>If you have no account </span><a href="signUp.php">Sign up</a></td>
			</tr>
		</table>
	</form>
</body>
</html>