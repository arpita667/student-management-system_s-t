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
    <title>Assign courses</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div align="center">
        <br>
        <center>
            <font size="6">Assign Courses</font>
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
                <td>Action</td>
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
                         <td><a href="assign-student.php?cid=<?php echo($row['courseId'])?>">Assign</a>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</body>
</html>