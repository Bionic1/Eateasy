<?php 
	session_start();
	require 'inc/db.php';
	$error = "";
	if(isset($_POST["submit"]))
	{
		$username = $_POST["username"];
		$password = $_POST["password"];
		$query = mysqli_query($c, "select username from users where username='$username' and password = '$password'");
		if(mysqli_num_rows($query)==1)
		{
			$_SESSION["username"] = $username;
			header("Location: index.php");
		}
		else {
			$error = '<div class="alert alert-danger"> Login Failed</div>';

		}
	}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
<div class="container">
<div class="jumbotron">
	<?php echo $error; ?>
	<form method="post">	
		<label>User Name</label>
		<input class="form-control" type="text" name="username"><br>
		<label>Password</label>
		<input class="form-control" type="password" name="password"><br>
		<button class="btn btn-warning" type="submit" name="submit">SUBMIT</button>
	</form>
</div>
</div>
</body>
</html>
