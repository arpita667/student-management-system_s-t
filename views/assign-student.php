<?php
require_once('../models/user-model.php');
require_once('../models/registration-model.php');
$id = $_GET['cid'];
$details = getAllStudent();
$existed = getAllRegistration($id);
$registeredStudentIds = [];
if (mysqli_num_rows($existed) > 0) {
    while ($row = mysqli_fetch_assoc($existed)) {
        $registeredStudentIds[] = $row['studentId'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign student</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div align='center'>
        <h2>Student List</h2>
    </div>
    <br><br>
    <center>
        <table bgcolor="white" cellspacing="0" cellpadding="15" bordercolor="#1B6392" border="1">
            <tr>
                <td>Name</td>
                <td>Username</td>
                <td>Email</td>
                <td>Department</td>
                <td>Profile Picture</td>
                <td>Action</td>
            </tr>
            <?php
            if (mysqli_num_rows($details) > 0) {
                while ($row = mysqli_fetch_assoc($details)) {
                    if (in_array($row['userId'], $registeredStudentIds)) {
                        continue;
                    }
                    ?>
                    <tr>
                        <td><?php echo ($row['fullName']) ?></td>
                        <td><?php echo ($row['userName']) ?></td>
                        <td><?php echo ($row['email']) ?></td>
                        <td><?php echo ($row['department']) ?></td>
                        <td><img src="../<?php echo ($row['picture']) ?>" width="100px"></td>
                        <td>
                            <a href="../controllers/assign-course-controller.php?sid=<?php echo $id ?>&user=<?php echo ($row['userId']) ?>">
                                <button>Assign to course</button>
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
