<?php
require_once('../models/user-model.php');
require_once('message-controller.php');
require_once('../models/section-model.php');
if (!isset($_COOKIE['flag'])) {
    popup("Error!", "You need to sign-in in order to access this page.");
}
if (isset($_POST['submit'])) {
    $id=$_POST['sectionId'];
    $sectionName = $_POST['sectionName'];
    $courseId = $_POST['courseId'];
    $facultyId = $_POST['facultyId'];
    $capacity = $_POST['capacity'];
    $schedule = $_POST['schedule'];
    if (strlen(trim($id)) == 0 ||strlen(trim($sectionName)) == 0 || strlen(trim($courseId)) == 0 || strlen(trim($facultyId)) == 0 || strlen(trim($capacity)) == 0 ||  strlen(trim($schedule)) == 0) {
        return "All fields are required";
    } else {
        $result = updateSectionInfo($id,$sectionName, $courseId, $facultyId, $capacity, $schedule);
        if ($result) {
            popup("Success!", "Section info updated");
            return;
        } else {
            popup("Error!", " Failed to updated section");
            return;
        }
    }
}
