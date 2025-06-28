<?php
require_once('../controllers/message-controller.php');
require_once('../models/user-model.php');
if (!isset($_COOKIE['flag'])) {
    echo ("Error! You have to login first.");
}
$id = $_COOKIE['id'];
$details = userInfo($id);
if ($details['role'] == 'student') {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Dashboard</title>
        <link rel="stylesheet" href="../style.css">
    </head>

    <body>
        <div align='center'>
            <h1>Student Dashboard</h1>
            <table width="20%" bgcolor="white" align="center" cellpadding="25" cellspacing="0" bordercolor="#1B6392" border="1">
                <tr>
                    <td align="center">
                        <a href="create-drop-application.php">Create drop request</a><br><br>
                        <a href="view-all-faculty.php">View faculty list</a><br><br>
                        <a href="update-profile-picture.php">Update profile picture</a><br><br>
                        <a href="update-profile-info.php">Update profile info</a><br><br>
                        <a href="view-profile-info.php">View Profile info</a><br><br>
                        <a href="change-password.php">Change password</a><br><br>
                    </td>
                </tr>
            </table>
            <br><br><br><br>
            <div align="center">
                <a href="logout.php"><button>logout</button></a>
            </div>
        </div>
    </body>

    </html>
<?php
} else if ($details['role'] == 'admin') {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="../style.css">
    </head>

    <body>
        <div align='center'>
            <h1>Admin Dashboard</h1>
            <table width="20%" bgcolor="white" align="center" cellpadding="25" cellspacing="0" bordercolor="#1B6392">
                <tr>
                    <td align="center">
                        <a href="add-course.php">Add new course</a><br><br>
                        <a href="add-section.php">Add course section</a><br><br>
                        <a href="view-all-course.php">View all courses</a><br><br>
                        <a href="view-all-department.php">View all department</a><br><br>
                        <a href="view-all-section.php">View all section</a><br><br>
                        <a href="view-all-faculty.php">View all teacher</a><br><br>
                        <a href="add-department.php">Add new department</a><br><br>
                        <a href="pending-list.php">Pending Account list</a><br><br>
                        <a href="update-profile-picture.php">Update profile picture</a><br><br>
                        <a href="update-profile-info.php">Update profile info</a><br><br>
                        <a href="view-profile-info.php">View Profile info</a><br><br>
                        <a href="change-password.php">Change password</a><br><br>
                    </td>
                </tr>
            </table>
            <br><br>
            <div align="center">
                <a href="logout.php"><button>logout</button></a>
            </div>
        </div>
    </body>

    </html>
<?php
} else if ($details['role'] == 'teacher') {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Teacher Dashboard</title>
        <link rel="stylesheet" href="../style.css">
    </head>

    <body>
        <div align='center'>
            <h1>Teacher Dashboard</h1>
            <table width="20%" bgcolor="white" align="center" cellpadding="25" cellspacing="0" bordercolor="#1B6392" border="1">
                <tr>
                    <td align="center">
                        <a href="view-all-course.php">View all courses</a><br><br>
                        <a href="view-all-section.php">View all section</a><br><br>
                        <a href="view-all-department.php">View all department</a><br><br>
                        <a href="assign-courses.php">Assign courses</a><br><br>
                        <a href="approve-drop-application.php">Approve drop application</a><br><br>
                        <a href="update-profile-info.php">Update profile info</a><br><br>
                        <a href="update-profile-picture.php">Update profile picture</a><br><br>
                        <a href="view-profile-info.php">View Profile info</a><br><br>
                        <a href="change-password.php">Change password</a><br><br>
                    </td>
                </tr>
            </table>
            <br><br><br><br>
            <div align="center">
                <a href="logout.php"><button>logout</button></a>
            </div>
        </div>
    </body>

    </html>
<?php
}
?>