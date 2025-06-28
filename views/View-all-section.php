<?php
require_once('../models/section-model.php');
require_once('../controllers/message-controller.php');
require_once('../models/user-model.php');
if (!isset($_COOKIE['flag'])) {
    popup("Error!", "You need to sign-in in order to access this page.");
}
$section = getAllSection();
$id = $_COOKIE['id'];
$info = userInfo($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View all section</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div align="center">
        <br>
        <center>
            <font size="6">Section list</font>
        </center>
        <br>
        <table bgcolor="white" cellpadding="15" cellspacing="0" bordercolor="#1B6392">
            <tr>
                <td>Section ID</td>
                <td>Section Name</td>
                <td>Course ID</td>
                <td>Faculty ID</td>
                <td>Capacity</td>
                <td>Schedule</td>
                 <?php if ($info['role'] == 'admin') echo('<td>Action</td>') ?>
                
            </tr>
            <?php
            if (mysqli_num_rows($section) > 0) {
                while ($row = mysqli_fetch_assoc($section)) {
            ?>
                    <tr>
                        <td><?php echo ($row['sectionId']) ?></td>
                        <td><?php echo ($row['sectionName']) ?></td>
                        <td><?php echo ($row['courseId']) ?></td>
                        <td><?php echo ($row['facultyId']) ?></td>
                        <td><?php echo ($row['capacity']) ?></td>
                        <td><?php echo ($row['schedule']) ?></td>
                    <?php if ($info['role'] == 'admin') { ?>
                         <td><a href="edit-section-info.php?sid=<?php echo($row['sectionId'])?>">Edit</a> || <a href="../controllers/delete-section-controller.php?sid=<?php echo($row['sectionId'])?>">Delete</a></td>
                    <?php } ?>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</body>
</html>