<?php
require_once('../models/dbConnection.php');
function addSection($sectionName, $courseId, $facultyId, $capacity, $schedule)
{
    $con = dbConnect();
    $sql = "insert into sectioninfo values(' ','{$sectionName}', '{$courseId}','{$facultyId}','{$capacity}','{$schedule}')";
    if (mysqli_query($con, $sql)) return true;
    else return false;
}

function getAllSection(){
    $con=dbConnect();
    $sql="select * from sectioninfo";
    $result=mysqli_query($con,$sql);
    return $result;
}

function getSection($id){
    $con=dbConnect();
    $sql="select * from sectioninfo where sectionId='{$id}'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    return $row;
}

function updateSectionInfo( $id,$sectionName,$courseId, $facultyId,$capacity,$schedule){

    $con = dbConnect();
    $sql = "update sectioninfo set sectionName = '$sectionName',courseId = '$courseId', facultyId='$facultyId', capacity = '$capacity',schedule='$schedule' where sectionId = '$id'";
         
    if(mysqli_query($con,$sql)===true) return true;
    else return false; 
    
}
function deleteSection($id){
    $con = dbConnect();
    $sql="delete from sectioninfo where sectionId='$id'";
    $result=mysqli_query($con,$sql);
    return $result;
}
?>