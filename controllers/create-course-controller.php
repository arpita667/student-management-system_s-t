<?php
require_once('../models/user-model.php');
require_once('message-controller.php');
require_once('../models/course-model.php');
if (!isset($_COOKIE['flag'])) {
    popup("Error!", "You need to sign-in in order to access this page.");
}
if (isset($_POST['submit'])) {
    $coursename = $_POST['courseName'];
    $coursecode = $_POST['courseCode'];
    $description = $_POST['description'];
    $credits = $_POST['credits'];
    $departmentId = $_POST['departmentId'];

    if (strlen(trim($coursename)) == 0 || strlen(trim($coursecode)) == 0 || strlen(trim($description)) == 0 || strlen(trim($credits)) == 0 ||  strlen(trim($departmentId)) == 0) {
        return "All fields are required";
    } else {
        $result = addCourse($coursename, $coursecode, $description, $credits, $departmentId);
        if ($result) {
            popup("Successful!", " New courses added");
            return;
        } else {
            popup("Error!", " Failed to add course");
            return;
        }
    }
}
