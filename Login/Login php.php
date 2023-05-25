<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	<link rel="stylesheet" href="Login.css">
	
</head>
<body>
	<div class="b">
	
		<form action="Login php.php" method="post">
		<h1> log in </h1>
		 Username
		<br>
		<input type="username" placeholder="Username" name="username">
		<br>password
		<br>
		<input type="password" placeholder="Enter password" name="password">
		<br>
			<button type="submit" onClick="enter()"> click here</button><br>
			<?php
			error_reporting(0);
	$con= mysqli_connect("localhost","root","","cars");
	if (mysqli_connect_errno())
	{
		echo "Connection Failed: ". mysqli_connect_error();
	}
			if( isset($_POST['name']) || isset($_POST['password'])     ) {
	$username=$_POST['name'];
	$password=$_POST['password'];}
			$sql="INSERT INTO cars (name,password) VALUES('$name','$password')";
			mysqli_query($con,$sql);
			mysqli_close($con);
	?>
	</form>
			</div>
</body>
</html>
