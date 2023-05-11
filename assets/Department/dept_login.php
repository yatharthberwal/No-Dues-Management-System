<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Department Login</title>
	<!---title logo--->
	<link rel="shortcut icon" type="image/png" href="N.png" style="border-radius: 50%;" />
	<!------end----->

	<link rel="stylesheet" type="text/css" href="dept_login.css">
</head>

<body>

	<div class="container">
		<div class="screen">
			<div class="screen__content">
				<h1 style="text-align: center; padding-top: 3rem; color: #333;">LOGIN</h1>
				<form class="login" action="Department_main.php" method="post">
					<div class="login__field">
						<input type="text" class="login__input" name="dept_name" placeholder="Department name" required>
					</div>
					<div class="login__field">
						<input type="password" class="login__input" name="password" placeholder="Password" required>
					</div>

					<div class="button login__submit">
						<input class="button__text" type="submit" name="submit" value="Login">
					</div>
				</form>

			</div>
			<div class="screen__background">
				<span class="screen__background__shape screen__background__shape4"></span>
				<span class="screen__background__shape screen__background__shape3"></span>
				<span class="screen__background__shape screen__background__shape2"></span>
				<span class="screen__background__shape screen__background__shape1"></span>
			</div>
		</div>
	</div>

</body>

</html>

<!--PHP CODE START-->

<?php
include "connection.php";
if (isset($_POST['submit'])) {
	error_reporting(0);
	$dept_name = $_POST['dept_name'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM `no_dues`.`department` WHERE `dept_name`='dept_name' AND `password`='$password'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) === 1) {
		echo '<script>alert("Welcome Back! You are Logged in.")</script>';
	} else {
		echo '<script>alert("Username or Password does not match.")</script>';
	}
	header("location:department_main.php");
}
?>