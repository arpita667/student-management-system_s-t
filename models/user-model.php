<?php
require_once('../models/dbConnection.php');
function addUser($username, $fullname, $email,  $phone, $password,$dob,$gender,$joinDate,$department, $status, $role)
{
    $con = dbConnect();
    $sql = "insert into userinfo values('','{$username}', '{$fullname}','{$email}' ,'{$phone}','{$password}','{$dob}','{$gender}','{$joinDate}','{$department}','{$status}','{$role}', 'uploads/image/default.jpg')";
    if (mysqli_query($con, $sql)) return true;
    else return false;
}
function uniqueEmail($email)
{

    $con = dbConnect();
    $sql = "select email from userinfo where email like '{$email}' ";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) return false;//email validation
    else return true;
}
function login($email, $password){
    $con = dbConnect();
    $sql = "select * from userinfo where email ='{$email}' and password ='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1) 
    {
    $details = mysqli_fetch_assoc($result);
    return $details;

    }
    else return false;

}
function userInfo($id){
    $con=dbConnect();
    $sql="select* from userinfo where userid='$id'";
    $result=mysqli_query($con,$sql);
    $details=mysqli_fetch_assoc($result);
    return $details;
}
function pendingUser(){
    $con=dbConnect();
    $sql="select* from userinfo where status='pending'";
    $result=mysqli_query($con,$sql);
    return $result;
}

function approveAccount($id){
    $con=dbConnect();
    $sql="update userinfo set status = 'active' where userId = '$id'";
    $result=mysqli_query($con,$sql);
    return $result;
}
function updateUserInfo( $id,$username, $fullname,$email,$phone,$dob,$gender,$department){

    $con = dbConnect();
    $sql = "update userinfo set userName = '$username',fullName = '$fullname', email='$email', phone = '$phone',dob='$dob',gender='$gender',department='$department' where userId = '$id'";
         
    if(mysqli_query($con,$sql)===true) return true;
    else return false; 
    
}
function updateProfilePicture( $imagename, $id){
    $con = dbConnect();
    $sql = "update userinfo set picture = '$imagename' where userId = '$id'"; 
    if(mysqli_query($con,$sql)===true) return true;
    else return false; 
    
}
function viewAllFaculty(){
    $con=dbConnect();
    $sql="select* from userinfo where role='teacher'";
    $result=mysqli_query($con,$sql);
    return $result;
}

function searchStudent($name){
    $con = dbConnect();
    $sql="select * from userinfo where fullName LIKE '%$name%' and role='student'";
    $result=mysqli_query($con,$sql);
    return $result;
} 
function getAllStudent(){
    $con = dbConnect();
    $sql="select * from userinfo where role='student'";
    $result=mysqli_query($con,$sql);
    return $result;
} 
 function changePassword($id,$newpass){
        $con=dbConnect();
        $sql = "update userinfo set password = '$newpass' where userId = '$id'";
        if(mysqli_query($con,$sql)===true) return true;
        else return false; 
    }
?>