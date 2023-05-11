<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="img\N.png" />
    <link rel="stylesheet" type="text/css" href="assets/css/Login1.css">

    <style>
        body {
            background-image: url("bg.png");
            background-size: 100%;
            background-repeat: no-repeat;
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
        <span onclick="location.href='main.php';">&times;</span>
    </div>
    <br><br>
    <section class="log">
        <div>
            <form action="" method="post">
                <div class="box">
                    <h2>Login</h2>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="dept_no" placeholder="Enter your Dept No." required="required">
                    </div>
                    <div class="inputBox">
                        <input type="text" name="name" placeholder="Enter your full Name" required="required">
                    </div>

                    <div class="inputBox">
                        <input type="submit" name="submit" value="Submit">
                    </div>
                    <br>
                </div>
        </div>
        </form>
        </div>
    </section>
</body>

</html>
<?php
include "connection.php";
session_start();
if (isset($_POST["submit"])) {

    $dept_no = $_POST['dept_no'];
    $name = $_POST['name'];

    $sql = "SELECT * FROM `no_dues`.`department` WHERE `dept_no`='$dept_no' AND `name`='$name' ";
    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);

    if ($num == 1) {
        $_SESSION['dept_no'] = $dept_no;
        header('location: Department_main.php');
    } else {
        echo '<script>alert("Data did not match. Try again.")</script>';
    }
}
?>