<?php
require_once('../controllers/message-controller.php');
    require_once('../models/course-model.php');

    $courseId = $_GET['cid'];

    if(deleteCourse($courseId)) popup("Success!", "Course deleted successfully");
    else popup("Error!", "Unable to delete course. Please try again");

?>