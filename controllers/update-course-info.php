<?php
require_once('../models/user-model.php');
require_once('message-controller.php');
require_once('../models/course-model.php');
if (!isset($_COOKIE['flag'])) {
    popup("Error!", "You need to sign-in in order to access this page.");
}
if (isset($_POST['submit'])) {
    $id = $_POST['courseId'];
    $coursename = $_POST['courseName'];
    $coursecode = $_POST['courseCode'];
    $description = $_POST['description'];
    $credits = $_POST['credits'];
    $departmentId = $_POST['departmentId'];
    if (strlen(trim($id))==0 || strlen(trim($coursename)) == 0 || strlen(trim($coursecode)) == 0 || strlen(trim($description)) == 0 || strlen(trim($credits)) == 0 ||  strlen(trim($departmentId)) == 0) {
        return "All fields are required";
    } else {
        $result = updateCourseInfo($id,$coursecode,$coursename, $credits, $departmentId,$description);
        if ($result) {
            popup("Success!", "Course info updated");
            return;
        } else {
            popup("Error!", "Failed to update course");
            return;
        }
    }
}
