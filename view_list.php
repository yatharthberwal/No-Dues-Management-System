<?php
include("connection.php");
$check = "select count(`reg`) from `no_dues`.`users`";
$output = mysqli_query($conn, $check);
$row2 = mysqli_fetch_array($output);
$total1 = $row2[0];
$check1 = "select count(`ap_dept`) from `no_dues`.`users` where `ap_medicare`=1 and `ap_library`=1 and `ap_ams`=1 and `ap_sports`=1 and `ap_IT`=1 and `ap_hostel`=1 and `ap_mess`=1 and `ap_finance`=1 and `ap_academics`=1 and `ap_dept`=1";
$output1 = mysqli_query($conn, $check1);
$row3 = mysqli_fetch_array($output1);
$total2 = $row3[0];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-spale=1">
    <title>Department</title>
    <link rel="shortcut icon" type="image/png" href="N.png" style="border-radius: 50%;" />
    <link rel="stylesheet" type="text/css" href="Department_main.css">
    <style>
        body {
            background-image: url("bg.png");
            background-size: 100%;
            background-repeat: no-repeat;
        }
    </style>

</head>

<body>
    <div class="banner">
        <div class="navbar">
            <img src="N.png" class="logo">
            <ul>
                <li><a href="admin.php">Home</a></li>
                <li><a href="main.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <br>
    <br>
    <div style=" width: 100%; position: absolute; top: 50%; transform: translateY(-50%); text-align: center; color: #009688;">
        <table style="margin: 0 auto;">
            <h1 style="font-weight: bolder; background-color: #f2f2f2; color: #009688; text-align: center; width: 300px; margin: 0 auto;">List of students</h1>
            <h3 style="font-weight: bolder; background-color: #f2f2f2; color: #009688; text-align: center; width: 200px; margin: 0 auto;"> Approved students: <?php echo $total2 ?></h3>
            <h3 style="font-weight: bolder; background-color: #f2f2f2; color: #009688; text-align: center; width: 200px; margin: 0 auto;"> Total students: <?php echo $total1 ?></h3>
            <thead style="font-weight: bolder; background-color: #000000; color: #fff;">
                <tr style="color: #009688;">
                    <td>S.No.</td>
                    <td>Name</td>
                    <td>Reg No.</td>
                    <td>E-mail</td>
                    <td>Department</td>
                    <td>Section</td>
                    <td>Medicare</td>
                    <td>Library</td>
                    <td>AMS</td>
                    <td>Sports</td>
                    <td>IT</td>
                    <td>Hostel</td>
                    <td>Mess</td>
                    <td>Finance</td>
                    <td>Academics</td>
                    <td>Department</td>
                    <td>Final Status</td>
                </tr>
            </thead>

            <tbody style="text-align: center; font-weight: bolder; background-color: #f2f2f2; color: #000000;">
                <?php
                $i1 = 0;
                $sql2 = "select * from `no_dues`.`users` order by `reg`";
                $result4 = mysqli_query($conn, $sql2);
                while ($rows6 = mysqli_fetch_array($result4)) {
                    $i1++;
                ?>

                    <tr>
                        <td><?php echo $i1; ?></td>
                        <td><?php echo $rows6['Name']; ?></td>
                        <td><?php echo $rows6['reg']; ?></td>
                        <td><?php echo $rows6['mail']; ?></td>
                        <td><?php echo $rows6['dept']; ?></td>
                        <td><?php echo $rows6['section']; ?></td>
                        <td><?php if ($rows6['ap_medicare'] == 1) {
                                $status = 'Approved';
                                echo $status;
                            } else{
                                $status = 'Disapproved';
                                echo $status;
                            } ?></td>
                        <td><?php if ($rows6['ap_library'] == 1) {
                                $status = 'Approved';
                                echo $status;
                            } else{
                                $status = 'Disapproved';
                                echo $status;
                            } ?></td>
                        <td><?php if ($rows6['ap_ams'] == 1) {
                                $status = 'Approved';
                                echo $status;
                            } else {
                                $status = 'Disapproved';
                                echo $status;
                            } ?></td>
                        <td><?php if ($rows6['ap_sports'] == 1) {
                                $status = 'Approved';
                                echo $status;
                            } else {
                                $status = 'Disapproved';
                                echo $status;
                            } ?></td>
                        <td><?php if ($rows6['ap_IT'] == 1) {
                                $status = 'Approved';
                                echo $status;
                            } else {
                                $status = 'Disapproved';
                                echo $status;
                            } ?></td>
                        <td><?php if ($rows6['ap_hostel'] == 1) {
                                $status = 'Approved';
                                echo $status;
                            } else {
                                $status = 'Disapproved';
                                echo $status;
                            } ?></td>
                        <td><?php if ($rows6['ap_mess'] == 1) {
                                $status = 'Approved';
                                echo $status;
                            } else {
                                $status = 'Disapproved';
                                echo $status;
                            } ?></td>
                        <td><?php if ($rows6['ap_finance'] == 1) {
                                $status = 'Approved';
                                echo $status;
                            } else{
                                $status = 'Disapproved';
                                echo $status;
                            } ?></td>
                        <td><?php if ($rows6['ap_academics'] == 1) {
                                $status = 'Approved';
                                echo $status;
                            } else {
                                $status = 'Disapproved';
                                echo $status;
                            } ?></td>
                        <td><?php if ($rows6['ap_dept'] == 1) {
                                $status = 'Approved';
                                echo $status;
                            } else {
                                $status = 'Disapproved';
                                echo $status;
                            } ?></td>
                        <td><?php if (($rows6['ap_medicare'] == 1)&&($rows6['ap_library'] == 1)&&($rows6['ap_ams'] == 1)&&($rows6['ap_sports'] == 1)&&($rows6['ap_IT'] == 1)&&($rows6['ap_hostel'] == 1)&&($rows6['ap_mess'] == 1)&&($rows6['ap_finance'] == 1)&&($rows6['ap_academics'] == 1)&&($rows6['ap_dept'] == 1)) {
                                $status = 'Approved';
                                echo $status;
                            } else {
                                $status = 'Disapproved';
                                echo $status;
                            } ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>