<?php
require_once('../models/user-model.php');
require_once('../controllers/message-controller.php');
if (!isset($_COOKIE['flag'])) {
    popup("Error!", "You need to sign-in in order to access this page.");
}
$pending = pendingUser();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Account</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div align="center">
        <br>
        <center><font size="6">Pending User list</font></center>
        <br>
        <table bgcolor='white' cellpadding="15" cellspacing="0" bordercolor="#1B6392">
            <tr>
                <td>Username</td>
                <td>Fullname</td>
                <td>Email</td>
                <td>Phone number</td>
                <td>Role</td>
                <td>Picture</td>
                <td>Action</td>
            </tr>
            <?php
            if (mysqli_num_rows($pending) > 0) {
                while ($row = mysqli_fetch_assoc($pending)) {
            ?>
                    <tr>
                        <td><?php echo ($row['userName']) ?></td>
                        <td><?php echo ($row['fullName']) ?></td>
                        <td><?php echo ($row['email']) ?></td>
                        <td><?php echo ($row['phone']) ?></td>
                        <td><?php echo ($row['role']) ?></td>
                        <td><img src="../<?php echo ($row['picture']) ?>" alt="" width="50px" height="50px"></td>
                        <td><a href="../controllers/approve-account.php?uid=<?php echo($row['userId'])?>">Approve Account</a></td>   
                <?php
                }
            }
                ?>
        </table>
    </div>
</body>
</html>