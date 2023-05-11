<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us</title>
	<link rel="shortcut icon" type="image/png" href="N.png" style="border-radius: 50%;" />
	<link rel="stylesheet" type="text/css" href="assets/css/contact.css">
	<style type="text/css">
		body {
			background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("bg.png");
			background-size: cover;
			background-position: center;
		}

		.closebutn {
			margin-top: 10px;
			margin-right: 30px;
			color: black;
			font-weight: bolder;
			float: right;
			font-size: 70px;
			line-height: 40px;
			cursor: pointer;
			transition: 0.3s;
			border-radius: 30%;
			background: white;
		}

		.closebutn:hover {
			color: white;
			background: black;
			line-height: 40px;
			border-radius: 30%;
		}

		.navbar ul li ul {
			position: absolute;
			width: 200px;
			display: none;
		}

		.navbar ul li ul li {
			background: #555;
			display: block;
		}

		.navbar ul li ul li a {
			display: block !important;
		}
	</style>
</head>

<body>
	<div class="closebutn">
		<span onclick="location.href='index.php';">&times;</span>
	</div>
	<br><br>
	<div class="head">
		<h1>Contact US!</h1>
	</div>
	<section class="contact">
		<form action="" method="post">
			<div class="box">
				<h2>Send Message</h2>
				<br>
				<div class="inputBox">
					<input type="text" name="reg" placeholder="reg No." required="required">
				</div>
				<div class="inputBox">
					<input type="text" name="Name" placeholder="Full Name" required="required">
				</div>

				<div class="inputBox">
					<input type="tel" name="Mobile" placeholder="Mobile" pattern="[0-9]{10}" required="required">
				</div>

				<div class="inputBox">
					<textarea name="Message" placeholder="Type your Message..." required="required"></textarea>
				</div>
				<br>
				<div class="inputBox">
					<input type="submit" name="submit" value="Send">
				</div>
			</div>
		</form>
		</div>
		</div>
	</section>
</body>

</html>

<?php
include "connection.php";
if (isset($_POST["submit"])) {
	$reg = $_POST['reg'];
	$Name = $_POST['Name'];
	$Mobile = $_POST['Mobile'];
	$Message = $_POST['Message'];
	header("location:main.php");

	$sql = "INSERT INTO `no_dues`.`contact`(`reg`, `Name`, `Mobile`, `Message`) VALUES('$reg','$Name','$Mobile','$Message')";
	$result = mysqli_query($conn, $sql);

	if ($result) {
		echo '<script>alert("Your Message is Sent. Thank You! For Contacting US.")</script>';
	}
}
?>