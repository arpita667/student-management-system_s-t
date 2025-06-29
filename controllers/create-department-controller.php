<?php
require_once('message-controller.php');
require_once('../models/department-model.php');
if (!isset($_COOKIE['flag'])) {
    popup("Error!", "You need to sign-in in order to access this page.");
}
if (isset($_POST['submit'])) {
    $deptCode = $_POST['deptCode'];
    $deptName = $_POST['deptName'];
    $description = $_POST['description'];

    if (strlen(trim($deptCode)) == 0 || strlen(trim($deptName)) == 0 || strlen(trim($description)) == 0 ) {
        return "All fields are required";
    } else {
        $result = addDepartment($deptCode, $deptName, $description);
        if ($result) {
            popup("Successful!", "New department added");
            return;
        } else {
            popup("Error!", " Failed to add department");
            return;
        }
    }
}
