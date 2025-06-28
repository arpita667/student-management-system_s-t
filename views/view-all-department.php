<?php
require_once('../models/department-model.php');
require_once('../controllers/message-controller.php');
require_once('../models/user-model.php');
if (!isset($_COOKIE['flag'])) {
    popup("Error!", "You need to sign-in in order to access this page.");
}
$dept = getAllDept();
$id = $_COOKIE['id'];
$info = userInfo($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department List</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div align="center">
        <br>
        <center>
            <font size="6">Department list</font>
        </center>
        <br>
        <table bgcolor="white" cellpadding="15" cellspacing="0" bordercolor="#1B6392">
            <tr>
                <td>Department ID</td>
                <td>Department Code</td>
                <td>Department Name</td>
                <td>Description</td>
                 <?php if ($info['role'] == 'admin') echo('<td>Action</td>') ?>
            </tr>
            <?php
            if (mysqli_num_rows($dept) > 0) {
                while ($row = mysqli_fetch_assoc($dept)) {
            ?>
                    <tr>
                        <td><?php echo ($row['deptId']) ?></td>
                        <td><?php echo ($row['deptCode']) ?></td>
                        <td><?php echo ($row['deptName']) ?></td>
                        <td><?php echo ($row['description']) ?></td>
                        <?php
                        if($info['role']=='admin'){
                        ?>
                         <td><a href="edit-department-info.php?dept=<?php echo($row['deptId'])?>">Edit</a> || <a href="../controllers/delete-department-controller.php?dept=<?php echo($row['deptId'])?>">Delete</a></td>  
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