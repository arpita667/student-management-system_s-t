<?php
require_once('message-controller.php');
require_once('../models/department-model.php');
if (!isset($_COOKIE['flag'])) {
    popup("Error!", "You need to sign-in in order to access this page.");
}
if (isset($_POST['submit'])) {
    $id=$_POST['deptId'];
    $deptCode = $_POST['deptCode'];
    $deptName = $_POST['deptName'];
    $description = $_POST['description'];

    if (strlen(trim($id)) == 0||strlen(trim($deptCode)) == 0 || strlen(trim($deptName)) == 0 || strlen(trim($description)) == 0 ) {
        return "All fields are required";
    } else {
        $result = updateDeptInfo($id,$deptCode, $deptName, $description);
        if ($result) {
            popup("Success!", "Department info updated");
            return;
        } else {
            popup("Error!", " Failed to update department info");
            return;
        }
    }
}
