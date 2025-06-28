<?php
require_once('../models/user-model.php');
session_start();
$title = $_SESSION['title'];
$message = $_SESSION['message'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>S.M.S Popup</title>
</head>

<body>
    <center>
        <br><br><br><br><br><br><br><br><br>
        <font color="#1B6392" face="times new roman" size="20"><?php echo $title ?></font><br><br>
        <font color="#f55405" face="times new roman" size="6"><?php echo $message ?></font><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
    </center>
</body>

</html>