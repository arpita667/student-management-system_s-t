<?php
require_once('../models/dbConnection.php');

function addRegistration($sec,$student){
    $con=dbConnect();
    $sql="insert into registrationinfo values ('','{$sec}','{$student}')";
    echo $sql;
    $result=mysqli_query($con,$sql);
    if($result) return true;
    else return false;
}

function getAllRegistration($id){
    $con=dbConnect();
    $sql="select * from registrationinfo where courseId='$id'";
    $result=mysqli_query($con,$sql);
    return $result;
}

function getRegistaredCourses($student){
    $con=dbConnect();
    $sql="select courseinfo.courseId,courseinfo.courseCode, courseinfo.courseName, courseinfo.credits, courseinfo.description from registrationinfo inner join  courseinfo on registrationinfo.courseId = courseinfo.courseId where registrationinfo.studentId = '$student'";
    $result=mysqli_query($con,$sql);
    return $result;
}
?>