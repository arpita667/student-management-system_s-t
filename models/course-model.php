<?php
require_once('../models/dbConnection.php');
function addCourse($coursename, $coursecode, $description,$credits, $dept_id)
{
    $con = dbConnect();
    $sql = "insert into courseinfo values(' ','{$coursename}', '{$coursecode}','{$description}','{$credits}','{$dept_id}')";
    if (mysqli_query($con, $sql)) return true;
    else return false;
}

function getAllCourses(){
    $con=dbConnect();
    $sql="select * from courseinfo";
    $result=mysqli_query($con,$sql);
    return $result;
}
function getCourse($id){
    $con=dbConnect();
    $sql="select * from courseinfo where courseId='{$id}'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    return $row;
}

function updateCourseInfo( $id,$coursecode,$coursename, $credits,$deptId,$description){

    $con = dbConnect();
    $sql = "update courseinfo set courseCode = '$coursecode',courseName = '$coursename', credits='$credits', departmentId = '$deptId',description='$description' where courseId = '$id'";
    if(mysqli_query($con,$sql)===true) return true;
    else return false; 
    
}

function deleteCourse($id){
    $con = dbConnect();
    $sql="delete from courseinfo where courseId='$id'";
    $result=mysqli_query($con,$sql);
    return $result;
}
?>