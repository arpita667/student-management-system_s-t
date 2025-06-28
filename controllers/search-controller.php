<?php
require_once('../models/user-model.php');
require_once('message-controller.php');
if (!isset($_COOKIE['flag'])) {
    popup("Error!", "You need to sign-in in order to access this page.");
}
$id = $_COOKIE['id'];
$name = $_REQUEST['fullname'];
$result = searchStudent($name);
if (mysqli_num_rows($result) > 0) {
    echo "<table border=\"1\" cellspacing=\"0\" cellpadding=\"15\">";
    echo "<tr>
    <td></td>
    <td><label>Username</label></td>
    <td><label>Full Name</label></td>
    <td><label>Status</label></td>
    <td><label>Department</label></td>
    </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['userId'];
        $username = $row['userName'];
        $fullname = $row['fullName'];
        $status = $row['status'];
        $picture = $row['picture'];
        $dept = $row['department'];
        echo "<tr>
                <td><a href=\"view-profile-info.php?id=$id\"><img src=\"../$picture\" width=\"100px\"></a></td>
                 <td><a href=\"view-profile-info.php?id=$id\"><label color=\"black\" face=\"times new roman\" size=\"6\">$username</label></a></td>
                 <td><label>$fullname</label></td>
                 <td><label>$status</label></td>
                 <td><label>$dept</label></td>
        </tr> ";
    }
} else {
    echo "<tr><td align=\"center\"><label color=\"black\" face=\"times new roman\" size=\"6\">No student found</label><br><br><br>";
}
