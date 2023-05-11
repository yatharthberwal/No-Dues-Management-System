<!DOCTYPE html>
<html>

<head>
    <title> Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="img\N.png" />
    <link rel="stylesheet" type="text/css" href="assets/css/admin.css">

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
    <div class="content">
        <h1>WELCOME</h1>
        <button type="submit" onclick="exec(upload.py)"><span></span>ULOAD LIST</button>
        <a href="view_list.php">
            <button type="submit"><span></span>VIEW LIST</button>
        </a>
    </div>
</body>