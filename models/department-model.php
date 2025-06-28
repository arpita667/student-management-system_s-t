<?php
require_once('../models/dbConnection.php');
function addDepartment($deptCode, $deptName, $description)
{
    $con = dbConnect();
    $sql = "insert into departmentinfo values(' ','{$deptCode}', '{$deptName}','{$description}')";
    if (mysqli_query($con, $sql)) return true;
    else return false;
}
function getAllDept(){
    $con=dbConnect();
    $sql="select * from departmentinfo";
    $result=mysqli_query($con,$sql);
    return $result;
}

function getDept($id){
    $con=dbConnect();
    $sql="select * from departmentinfo where deptId='{$id}'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    return $row;
}

function updateDeptInfo( $id,$deptcode,$deptname, $description){

    $con = dbConnect();
    $sql = "update departmentinfo set deptCode = '$deptcode',deptName = '$deptname', description='$description' where deptId = '$id'"; 
    if(mysqli_query($con,$sql)===true) return true;
    else return false; 
    
}
function deleteDept($id){
    $con = dbConnect();
    $sql="delete from departmentinfo where deptId='$id'";
    $result=mysqli_query($con,$sql);
    return $result;
}
?>