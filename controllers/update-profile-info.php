<?php
    require_once('../models/user-model.php');    
    require_once('../controllers/message-controller.php');
    if(!isset($_COOKIE['flag'])){
        popup("Error!","You need to sign-in in order to access this page.");
    }  
    if(isset($_POST['submit'])){
    $id=$_COOKIE['id'];
    $fullname = $_POST['fullName'];
    $username = $_POST['userName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];

    echo $fullname,$id;
    //Null value checking
    if (strlen(trim($fullname)) == 0 || strlen(trim($email)) == 0 || strlen(trim($phone)) == 0 || strlen(trim($username)) == 0||strlen(trim($gender)) == 0||strlen(trim($dob)) == 0||strlen(trim($joinDate)) == 0 || strlen(trim($password)) == 0 || strlen(trim($confirmPassword)) == 0 || strlen(trim($role)) == 0) {
        echo "All fields are required";
    }

    //Fullname validation
    $namepart = explode(' ', $fullname);

    if(count($namepart) < 2) {
        popup("Error!", "Name needs to be atleast two words.");
        return;
    }
    else if(!ctype_alpha($fullname[0])) {
        popup("Error!", "Name can not start with a digit.");
        return;
    }
    else if((!ctype_alnum(str_replace(array('.', ' '), '', $fullname)))) {
        popup("Error!", "Name can only contain A-Z, a-z and . (dot).");
        return;
    }

    //Phone number validation
    if(strlen($phone)!=11) {
        popup("Error!", "Invalid phone number, Please try again.");
        return;
    }
    if($phone[0] == "0" && $phone[1] == "1") {}
    else{
        popup("Error!", "Invalid phone number, Please try again.");
        return;
    }

    //Email validation 
    $checking1 = explode('@', $email);
    if(count($checking1) == 2){
        $checking2 = explode('.', $checking1[1]);
        $c = count($checking2);
        if(count($checking2) < 2){
            popup("Error!", "Invalid email, Please try again.");
            return;
        }
    }
    else {
        popup("Error!", "Invalid email, Please try again.");
        return;
    }
    if($email[strlen($email)-1] == "."){
        popup("Error!", "Invalid email, Please try again.");
        return;
    }
    
    if(updateUserInfo($id,$username, $fullname,$email,$phone,$dob,$gender,$department)===true)popup("Success!", "Your information has been updated successfully.");
    else popup("Error!", "Could not update information. Please try again.");
    
    

}
?>