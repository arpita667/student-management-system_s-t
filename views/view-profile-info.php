<?php
require_once('../models/user-model.php');
require_once('../controllers/message-controller.php');
if (!isset($_COOKIE['flag'])) {
    popup("Error!", "You need to sign-in in order to access this page.");
}
$id = $_COOKIE['id'];
$details = UserInfo($id);
$flag = 0;
if (isset($_GET['id'])) {
    $id1 = $_GET['id'];
    $details1 = UserInfo($id1);
    if ($id != $id1) $flag = 1;
}
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
        <table bgcolor="white" cellpadding="15" cellspacing="0" bordercolor="#1B6392">
            <tr>
                <td colspan="2">
                    <center>
                        <h4>Profile info</h4>
                    </center>
                </td>
            </tr>
            <?php
            if ($flag == 0) {
            ?>
                <tr>
                    <td colspan="2">
                        <center><img src="../<?php echo ($details['picture']) ?>" width="100px"></center>
                    </td>
                </tr>
                <tr>
                    <td>Full Name:</td>
                    <td><?php echo ($details['fullName']) ?></td>
                </tr>
                <tr>
                    <td>User Name:</td>
                    <td><?php echo ($details['userName']) ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?php echo ($details['email']) ?></td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><?php echo ($details['phone']) ?></td>
                </tr>
                <tr>
                    <td>Date of birth:</td>
                    <td><?php echo ($details['dob']) ?></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><?php echo ($details['gender']) ?></td>
                </tr>
                <tr>
                    <td>Join Date:</td>
                    <td><?php echo ($details['joinDate']) ?></td>
                </tr>
                <tr>
                    <td>Department:</td>
                    <td><?php echo ($details['department']) ?></td>
                </tr>
            <?php
            } else {
            ?>
                <tr>
                    <td colspan="2">
                        <center><img src="../<?php echo ($details1['picture']) ?>" width="100px"></center>
                    </td>
                </tr>
                <tr>
                    <td>Full Name:</td>
                    <td><?php echo ($details1['fullName']) ?></td>
                </tr>
                <tr>
                    <td>User Name:</td>
                    <td><?php echo ($details1['userName']) ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?php echo ($details1['email']) ?></td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><?php echo ($details1['phone']) ?></td>
                </tr>
                <tr>
                    <td>Date of birth:</td>
                    <td><?php echo ($details1['dob']) ?></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><?php echo ($details1['gender']) ?></td>
                </tr>
                <tr>
                    <td>Join Date:</td>
                    <td><?php echo ($details1['joinDate']) ?></td>
                </tr>
                <tr>
                    <td>Department:</td>
                    <td><?php echo ($details1['department']) ?></td>
                </tr>
            <?php } ?>
            <tr>
                <td><br></td>
            </tr>
        </table>
    </div>
</body>

</html>