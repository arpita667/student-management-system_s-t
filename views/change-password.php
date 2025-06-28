<?php
    require_once('../models/user-model.php');
    require_once('../controllers/message-controller.php');  
    if(!isset($_COOKIE['flag'])){
        popup("Error!","You need to sign-in in order to access this page.");
    }    
    $id=$_COOKIE['id'];
    $row=UserInfo($id);  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
   
    <br><br>
    <form action="../Controllers/change-password-controller.php" method="post">
    <table width="30%" bgcolor='white' border="1" cellspacing="0" cellpadding="25" align="center" bordercolor="#1B6392">
        <tr>
            <td>
                <label face="times new roman" size="6">Create New Password</label>
                <br><br>
                <label color="white" face="times new roman" size="4">Enter Old Password</label>
                <br>
                <input type="password" name="oldpass" size="43px"><br><br>
                <hr color="#1B6392" width="auto">
                <br>
                <label color="white" face="times new roman" size="4">New Password</label>
                <br>
                <input type="password" name="newpass" size="43px">
                <br><br>
                <label color="white" face="times new roman" size="2"><i>i &nbsp;</i></label><label color="white" face="times new roman" size="2">Passwords must be at least 8 characters.</label>
                <br><br>
                <label color="white" face="times new roman" size="4">Re-enter New Password</label>
                <br>
                <input type="password" name="repass" size="43px">
                <br><br><br>
                <input type="submit" name="submit" value="Change Password">
            </td>
            <br>
        </tr>
    </table>
    </form>
    <br><br><br><br><br>
</body>
</html>