<?php
require_once('../models/dbConnection.php');
function addDrop($course, $student)
{
    $con = dbConnect();
    $sql = "insert into dropinfo values('','{$course}','{$student}','pending')";
    $result = mysqli_query($con, $sql);
    if ($result) return true;
    else return false;
}
function getDrop($id)
{
    $con = dbConnect();
    $sql = "select
    dropinfo.dropId, 
    dropinfo.courseId,
    dropinfo.studentId,
    courseinfo.courseCode, 
    courseinfo.courseName, 
    courseinfo.credits, 
    courseinfo.description,
    userinfo.fullName, 
    userinfo.department, 
    userinfo.phone 
from 
    dropinfo 
inner join 
    courseinfo ON dropinfo.courseId = courseinfo.courseId
inner join
    userinfo ON dropinfo.studentId = userinfo.userId
where 
    dropinfo.studentId={$id}
    ";
    $result = mysqli_query($con, $sql);
    return $result;
}
function approveDrop($id)
{
    $con = dbConnect();
    $sql = "update dropinfo set status='active' where dropId='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) return true;
    else return false;
}
function rejectDrop($id)
{
    $con = dbConnect();
    $sql = "update dropinfo set status='reject' where dropId='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) return true;
    else return false;
}

function getAllDrop()
{
    $con = dbConnect();
    $sql = "select
    dropinfo.dropId, 
    courseinfo.courseCode, 
    courseinfo.courseName, 
    courseinfo.credits, 
    courseinfo.description,
    userinfo.fullName, 
    userinfo.department, 
    userinfo.phone 
from 
    dropinfo 
inner join 
    courseinfo ON dropinfo.courseId = courseinfo.courseId
inner join
    userinfo ON dropinfo.studentId = userinfo.userId
where 
    dropinfo.status = 'pending'    
    ";
    $result = mysqli_query($con, $sql);
    return $result;
}
?>