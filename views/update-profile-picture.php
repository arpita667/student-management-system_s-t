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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile Picture</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div>
     </div><br><br><br><br>
    <center>
    <form action="../controllers/upload-profile-picture-controller.php" method="POST" enctype="multipart/form-data">
        <label color="#1B6392" face="times new roman" size="12">Update Profile Picture</label><br><br><br>
        <hr color="#1B6392" width="530px">
        <br><br><br><br><br>
        <table cellspacing="0" cellpadding="10"  bgcolor="#1B6392">
            <tr>
                <td>
                    <input type="file" name="myfile" accept=".png,.jpg,.jpeg"> <br> <br>
                    <input type="submit" value="Upload Image" name="submit">
                </td>
            </tr>
        </table>
    </form>
    </center>
    <br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>