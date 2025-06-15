<?php
require_once('../models/section-model.php');
require_once('../controllers/message-controller.php');
require_once('../models/drop-model.php');

if (!isset($_COOKIE['flag'])) {
    popup("Error!", "You need to sign-in in order to access this page.");
}
$drop=getAllDrop();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approve drop</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div align="center">
        <br>
        <center>
            <font size="6">Drop Details info</font>
        </center>
        <br>
       
        <table bgcolor="white" cellpadding="15" cellspacing="0" bordercolor="#1B6392">
            <tr>
                <td>Course Code</td>
                <td>Course Name</td>
                <td>Credits</td>
                <td>Description</td>
                <td>Student Name</td>
                <td>Department</td>
                <td>Phone</td>
                <td>Action</td>
            </tr>
            <?php
            if (mysqli_num_rows($drop) > 0) {
                while ($row = mysqli_fetch_assoc($drop)) {
            ?>
                    <tr>
                        <td><?php echo ($row['courseCode']) ?></td>
                        <td><?php echo ($row['courseName']) ?></td>
                        <td><?php echo ($row['credits']) ?></td>
                        <td><?php echo ($row['description']) ?></td>
                        <td><?php echo ($row['fullName']) ?></td>
                        <td><?php echo ($row['department']) ?></td>
                        <td><?php echo ($row['phone']) ?></td>
                        <td><a href="../controllers/approve-drop-controller.php?id=<?php echo($row['dropId'])?>">Approve</a> || <a href="../controllers/reject-drop-controller.php?id=<?php echo($row['dropId'])?>">Decline</a></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</body>
</html>