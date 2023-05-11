<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us</title>
	<!---title logo--->
	  <link rel="shortcut icon" type="image/png" href="N.png" style="border-radius: 50%;" />
	  <!------end----->

	<!-------CSS Links----->
	<link rel="stylesheet" type="text/css" href="contact.css">
	<style type="text/css">
		body{
			background: linear-gradient(to right top,  #A4B3EF,  #6A93CB);
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
	</style>
</head>
<body>
		<div class="closebutn">
        			<span  onclick="location.href='department_main.php';">&times;</span>
  				</div>
  				
  				<br><br>
	<div class="head">
		<h1>Contact US!</h1>	
	</div>
		<section class="contact">
				<form action="" method="post">
					<div class="box">
					<h2>Send Message</h2>
						<div class="inputBox">
							<input type="text" name="Dept_Name" placeholder="Department Name" required="required">
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
include "connection.php" ;
if(isset($_POST["submit"])){
$Dept_Name = $_POST['Dept_Name'];
$Mobile = $_POST['Mobile'];
$Message = $_POST['Message'];

   $sql = "INSERT INTO `no_dues`.`contact`(`Dept_name`, `Mobile`, `Message`) VALUES('$Dept_Name','$Mobile','$Message')";
		  $result = mysqli_query($conn, $sql);

        if ($result) {
				echo '<script>alert("Your Message is Sent. Thank You! For Contacting US.")</script>';
			}

header("location:cs_dept.php");
}
?>