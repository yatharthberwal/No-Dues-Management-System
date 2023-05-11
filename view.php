<?php
session_start();
include("connection.php");
$reg = $_SESSION['reg_no'];
$sql = "select * from `no_dues`.`users` where `reg`='$reg'";
$result1 = mysqli_query($conn, $sql);
$row10 = mysqli_fetch_array($result1);
?>
<!DOCTYPE html>
<html>


<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>No Dues Form</title>
   <link rel="stylesheet" type="text/css" href="assets/css/regi.css">
   <style type="text/css">
      body {
         background-image: url("bg.png");
         background-size: cover;
         background-position: center;
      }

      .closebutn {
         margin-top: 25px;
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
      .a {
         font-weight: bolder; 
         background-color: #f2f2f2; 
         color: #009688;
      }
   </style>
</head>

<body>
   <div class="container">
      <div class="closebutn">
         <span onclick="location.href='index.php';">&times;</span>
      </div><br><br>
      <h2 class="form-title"> No Dues Form </h2>
      <div style="text-align: center; font-weight: bolder; background-color: #f2f2f2; color: #000000;">
         <h3> Name: <?php echo $row10['Name']; ?></h3>
         <h3> Reg No: <?php echo $row10['reg']; ?><br></h3>
         <h3>Mobile No: <?php echo $row10['mobile']; ?><br></h3>
         <h3>E-mail: <?php echo $row10['mail']; ?><br></h3>
         <h3>Section: <?php echo $row10['section']; ?><br></h3>
         <h3>Department: <?php echo $row10['dept']; ?><br><br><br><br></h3>
         <ul>
            <li><?php
                  $status;
                  if ($row10['ap_medicare'] == 0) {
                     $status = "Disapproved";
                  } else {
                     $status = "Approved";
                  }
                  echo "Medicare: $status";
                  ?></li><br>
            <li><?php
                  $status;
                  if ($row10['ap_library'] == 0) {
                     $status = "Disapproved";
                  } else {
                     $status = "Approved";
                  }
                  echo "Library: $status";
                  ?></li><br>
            <li><?php
                  $status;
                  if ($row10['ap_ams'] == 0) {
                     $status = "Disapproved";
                  } else {
                     $status = "Approved";
                  }
                  echo "AMS: $status";
                  ?></li><br>
            <li><?php
                  $status;
                  if ($row10['ap_sports'] == 0) {
                     $status = "Disapproved";
                  } else {
                     $status = "Approved";
                  }
                  echo "Sports: $status";
                  ?></li><br>
            <li><?php
                  $status;
                  if ($row10['ap_IT'] == 0) {
                     $status = "Disapproved";
                  } else {
                     $status = "Approved";
                  }
                  echo "IT Department: $status";
                  ?></li><br>
            <li><?php
                  $status;
                  if ($row10['ap_hostel'] == 0) {
                     $status = "Disapproved";
                  } else {
                     $status = "Approved";
                  }
                  echo "Hostel: $status";
                  ?></li><br>
            <li><?php
                  $status;
                  if ($row10['ap_mess'] == 0) {
                     $status = "Disapproved";
                  } else {
                     $status = "Approved";
                  }
                  echo "Mess: $status";
                  ?></li><br>
            <li><?php
                  $status;
                  if ($row10['ap_finance'] == 0) {
                     $status = "Disapproved";
                  } else {
                     $status = "Approved";
                  }
                  echo "Finance: $status";
                  ?></li><br>
            <li><?php
                  $status;
                  if ($row10['ap_academics'] == 0) {
                     $status = "Disapproved";
                  } else {
                     $status = "Approved";
                  }
                  echo "In-chagre Academics: $status";
                  ?></li><br>
            <li><?php
                  $status;
                  if ($row10['ap_dept'] == 0) {
                     $status = "Disapproved";
                  } else {
                     $status = "Approved";
                  }
                  echo "Department: $status";
                  ?></li>
         </ul>
      </div>
   </div>

</body>

</html>