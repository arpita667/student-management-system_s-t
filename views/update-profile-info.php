<?php
require_once('../models/user-model.php');
require_once('../controllers/message-controller.php');
if (!isset($_COOKIE['flag'])) {
    popup("Error!", "You need to sign-in in order to access this page.");
}
$id = $_COOKIE['id'];
$details = UserInfo($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Info</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div align="center">
        <form action="../controllers/update-profile-info.php" method="post">
        <table bgcolor="white" cellpadding="15" cellspacing="0" bordercolor="#1B6392">
            <tr>
                <td colspan="2">
                    <center>
                        <h4>Profile info</h4>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><img src="../<?php echo ($details['picture']) ?>" width="100px"></center>
                </td>
            </tr>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name='fullName' id="fullName" value="<?php echo ($details['fullName']) ?>"></td>
            </tr>
            <tr>
                <td>User Name:</td>
                <td><input type="text" name="userName" value="<?php echo ($details['userName']) ?>"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value="<?php echo ($details['email']) ?>"></td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td><input type="text" name="phone" value="<?php echo ($details['phone']) ?>"></td>
            </tr>
            <tr>
                <td>Date of birth:</td>
                <td><input type="date" name="dob" value="<?php echo ($details['dob']) ?>"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="male" <?php echo ($details['gender'] == 'male') ? 'checked' : ''; ?>> Male
                    <input type="radio" name="gender" value="female" <?php echo ($details['gender'] == 'female') ? 'checked' : ''; ?>> Female
                    <input type="radio" name="gender" value="other" <?php echo ($details['gender'] == 'other') ? 'checked' : ''; ?>> Other
                </td>
            </tr>
            <tr>
                <td>Department:</td>
                <td><input type="text" name="department" value="<?php echo ($details['department']) ?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <center> <input type="submit" name='submit' value="Update profile info"></center><br>
                </td>
            </tr>
        </table>
        </form>
    </div>
</body>
</html>