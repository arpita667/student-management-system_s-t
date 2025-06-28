<?php
require_once('../models/registration-model.php');
require_once('../models/drop-model.php');

$id = $_COOKIE['id'];
$details = getRegistaredCourses($id);
$drop = getDrop($id);

$droppedCourses = [];
if (mysqli_num_rows($drop) > 0) {
    while ($row = mysqli_fetch_assoc($drop)) {
        $droppedCourses[] = $row['studentId'] . '-' . $row['courseId'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create drop application</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div align='center'>
        <h2>Courses</h2>
    </div>
    <br><br>
    <center>
        <table bgcolor="white" cellspacing="0" cellpadding="15" border="1">
            <tr>
                <td>Course Code</td>
                <td>Course Name</td>
                <td>Course Credits</td>
                <td>Course Description</td>
                <td>Action</td>
            </tr>
            <?php
            if (mysqli_num_rows($details) > 0) {
                while ($row = mysqli_fetch_assoc($details)) {
                    $key = $id . '-' . $row['courseId'];
                    if (in_array($key, $droppedCourses)) {
                        continue;
                    }
            ?>
                    <tr>
                        <td><?php echo $row['courseCode']; ?></td>
                        <td><?php echo $row['courseName']; ?></td>
                        <td><?php echo $row['credits']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td>
                            <a href="../controllers/drop-course-controller.php?cid=<?php echo $row['courseId']; ?>&user=<?php echo $id; ?>">
                                <button>Add to drop</button>
                            </a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </center>
</body>

</html>