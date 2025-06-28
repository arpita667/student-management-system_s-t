<?php
require_once('../models/course-model.php');
require_once('../controllers/message-controller.php');
require_once('../models/user-model.php');
if (!isset($_COOKIE['flag'])) {
    popup("Error!", "You need to sign-in in order to access this page.");
}
$courses = getAllCourses();
$id = $_COOKIE['id'];
$info = userInfo($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course List</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div align="center">
        <br>
        <center>
            <font size="6">Course list</font>
        </center>
        <br>
        <table bgcolor='white' cellpadding="15" cellspacing="0" bordercolor="#1B6392">
            <tr>
                <td>Course ID</td>
                <td>Course Code</td>
                <td>Course Name</td>
                <td>Credits</td>
                <td>Department ID</td>
                <?php if ($info['role'] == 'admin') echo ('<td>Action</td>') ?>
            </tr>
            <?php
            if (mysqli_num_rows($courses) > 0) {
                while ($row = mysqli_fetch_assoc($courses)) {
            ?>
                    <tr>
                        <td><?php echo ($row['courseId']) ?></td>
                        <td><?php echo ($row['courseCode']) ?></td>
                        <td><?php echo ($row['courseName']) ?></td>
                        <td><?php echo ($row['credits']) ?></td>
                        <td><?php echo ($row['departmentId']) ?></td>
                        <?php if ($info['role'] == 'admin') { ?>
                            <td>
                                <a href="edit-course-info.php?cid=<?php echo $row['courseId']; ?>">Edit</a> ||
                                <a href="../controllers/delete-course-controller.php?cid=<?php echo $row['courseId']; ?>">Delete</a>
                            </td>
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