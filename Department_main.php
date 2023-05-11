<?php
include("connection.php");
session_start();
$dept = $_SESSION['dept_no'];
$check = "select count(`reg`) from `no_dues`.`users`";
$output = mysqli_query($conn, $check);
$row2 = mysqli_fetch_array($output);
$total1 = $row2[0];
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
                <li><a href="main.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <br>
    <br>
    <div class="content">
        <table style="margin: 0 auto;">
            <h1 style="font-weight: bolder; background-color: #f2f2f2; color: #009688; text-align: center; width: 300px; margin: 0 auto;">List of students</h1>
            <h3 style="font-weight: bolder; background-color: #f2f2f2; color: #009688; text-align: center; width: 200px; margin: 0 auto;"> Total students: <?php echo $total1 ?></h3>
            <button type="submit" onclick="<?php
                                if ($dept == 1) {
                                    $sql = "UPDATE `no_dues`.`users`
                                    JOIN (
                                      SELECT `reg`
                                      FROM `no_dues`.`users`
                                      GROUP BY `reg`
                                    ) AS subquery
                                    SET`ap_medicare` = '1'";
                                    $result = mysqli_query($conn, $sql);
                                }
                                if ($dept == 2) {
                                    $sql = "UPDATE `no_dues`.`users`
                                    JOIN (
                                      SELECT `reg`
                                      FROM `no_dues`.`users`
                                      GROUP BY `reg`
                                    ) AS subquery
                                    SET`ap_library` = '1'";
                                    $result = mysqli_query($conn, $sql);
                                }
                                if ($dept == 3) {
                                    $sql = "UPDATE `no_dues`.`users`
                                    JOIN (
                                      SELECT `reg`
                                      FROM `no_dues`.`users`
                                      GROUP BY `reg`
                                    ) AS subquery
                                    SET`ap_ams` = '1'";
                                    $result = mysqli_query($conn, $sql);
                                }
                                if ($dept == 4) {
                                    $sql = "UPDATE `no_dues`.`users`
                                    JOIN (
                                      SELECT `reg`
                                      FROM `no_dues`.`users`
                                      GROUP BY `reg`
                                    ) AS subquery
                                    SET`ap_sports` = '1'";
                                    $result = mysqli_query($conn, $sql);

                                }
                                if ($dept == 5) {
                                    $sql = "UPDATE `no_dues`.`users`
                                    JOIN (
                                      SELECT `reg`
                                      FROM `no_dues`.`users`
                                      GROUP BY `reg`
                                    ) AS subquery
                                    SET`ap_IT` = '1'";
                                    $result = mysqli_query($conn, $sql);
                                }
                                if ($dept == 6) {
                                    $sql = "UPDATE `no_dues`.`users`
                                    JOIN (
                                      SELECT `reg`
                                      FROM `no_dues`.`users`
                                      GROUP BY `reg`
                                    ) AS subquery
                                    SET`ap_hostel` = '1'";
                                    $result = mysqli_query($conn, $sql);
                                }
                                if ($dept == 7) {
                                    $sql = "UPDATE `no_dues`.`users`
                                    JOIN (
                                      SELECT `reg`
                                      FROM `no_dues`.`users`
                                      GROUP BY `reg`
                                    ) AS subquery
                                    SET`ap_mess` = '1'";
                                    $result = mysqli_query($conn, $sql);

                                }
                                if ($dept == 8) {
                                    $sql = "UPDATE `no_dues`.`users`
                                    JOIN (
                                      SELECT `reg`
                                      FROM `no_dues`.`users`
                                      GROUP BY `reg`
                                    ) AS subquery
                                    SET`ap_finance` = '1'";
                                    $result = mysqli_query($conn, $sql);
                                }
                                if ($dept == 9) {
                                    $sql = "UPDATE `no_dues`.`users`
                                    JOIN (
                                      SELECT `reg`
                                      FROM `no_dues`.`users`
                                      GROUP BY `reg`
                                    ) AS subquery
                                    SET`ap_academics` = '1'";
                                    $result = mysqli_query($conn, $sql);
                                }
                                if ($dept == 10) {
                                    $sql = "UPDATE `no_dues`.`users`
                                    JOIN (
                                      SELECT `reg`
                                      FROM `no_dues`.`users`
                                      GROUP BY `reg`
                                    ) AS subquery
                                    SET`ap_dept` = '1'";
                                    $result = mysqli_query($conn, $sql);
                                }
                                ?> "> Approve ALL</button>
            <thead style="font-weight: bolder; background-color: #000000; color: #fff; text-align: center;">
                <tr style="color: #009688;">
                    <td>S.No.</td>
                    <td>Name</td>
                    <td>Reg No.</td>
                    <td>E-mail</td>
                    <td>Department</td>
                    <td>Section</td>
                    <td>Action</td>
                </tr>
            </thead>

            <tbody style="text-align: center; font-weight: bolder; background-color: #f2f2f2; color: #000000;">
                <?php
                $i1 = 0;
                $sql2 = "select * from `no_dues`.`users` order by `reg`";
                $result4 = mysqli_query($conn, $sql2);
                while ($rows6 = mysqli_fetch_array($result4)) {
                    $i1++;
                    $r = $rows6['reg'];
                ?>
                    
                    <tr>
                        <td><?php echo $i1; ?></td>
                        <td><?php echo $rows6['Name']; ?></td>
                        <td><?php echo $rows6['reg']; ?></td>
                        <td><?php echo $rows6['mail']; ?></td>
                        <td><?php echo $rows6['dept']; ?></td>
                        <td><?php echo $rows6['section']; ?></td>
                        <td><button onclick="<?php
                                                if ($dept == 1) {
                                                    $sql1 = "UPDATE `no_dues`.`users` SET `ap_medicare` = '1' WHERE `reg` = $r";
                                                    $result1 = mysqli_query($conn, $sql1); 
                                                }
                                                else if ($dept == 2) {
                                                    $sql1 = "UPDATE `no_dues`.`users` SET `ap_library` = '1' WHERE `reg` = $r";
                                                    $result1 = mysqli_query($conn, $sql1);
                                                }
                                                else if ($dept == 3) {
                                                    $sql = "UPDATE `no_dues`.`users` SET `ap_ams` = '1' WHERE `reg` = $r";
                                                    $result1 = mysqli_query($conn, $sql1);
                                                }
                                                else if ($dept == 4) {
                                                    $sql1 = "UPDATE `no_dues`.`users` SET `ap_sports` = '1' WHERE `reg` = $r";
                                                    $result1 = mysqli_query($conn, $sql1);
                                                }
                                                else if ($dept == 5) {
                                                    $sql1 = "UPDATE `no_dues`.`users` SET `ap_IT` = '1' WHERE `reg` = $r";
                                                    $result1 = mysqli_query($conn, $sql1);
                                                }
                                                else if ($dept == 6) {
                                                    $sql1 = "UPDATE `no_dues`.`users` SET `ap_hostel` = '1' WHERE `reg` = $r";
                                                    $result1 = mysqli_query($conn, $sql1);
                                                }
                                                else if ($dept == 7) {
                                                    $sql1 = "UPDATE `no_dues`.`users` SET `ap_mess` = '1' WHERE `reg` = $r";
                                                    $result1 = mysqli_query($conn, $sql1);
                                                }
                                                else if ($dept == 8) {
                                                    $sql1 = "UPDATE `no_dues`.`users` SET `ap_finance` = '1' WHERE `reg` = $r";
                                                    $result1 = mysqli_query($conn, $sql1);
                                                }
                                                else if ($dept == 9) {
                                                    $sql1 = "UPDATE `no_dues`.`users` SET `ap_academics` = '1' WHERE `reg` = $r";
                                                    $result1 = mysqli_query($conn, $sql1);
                                                }
                                                else if ($dept == 10) {
                                                    $sql1 = "UPDATE `no_dues`.`users` SET `ap_dept` = '1' WHERE `reg` = $r";
                                                    $result1 = mysqli_query($conn, $sql1);
                                                }
                                                ?>">Approve</button>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>