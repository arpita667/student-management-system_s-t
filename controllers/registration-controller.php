<?php
require_once('../models/user-model.php');
require_once('../controllers/message-controller.php');
if (isset($_POST['submit'])) {
    $fullname = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $joinDate = date('Y-m-d');
    $department = $_POST['department'];
    $username = $_POST['userName'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $role = $_POST['role'];
    $status = 'pending';
 
    if (strlen(trim($fullname)) == 0 || strlen(trim($email)) == 0 || strlen(trim($phone)) == 0 || strlen(trim($username)) == 0||strlen(trim($gender)) == 0||strlen(trim($dob)) == 0||strlen(trim($joinDate)) == 0 || strlen(trim($password)) == 0 || strlen(trim($confirmPassword)) == 0 || strlen(trim($role)) == 0) {
        echo "All fields are required";
    }
    $namepart  = explode(' ', $fullname);
    if (count($namepart ) < 2) {
        return "full name must be at least two words";
    } else if (!ctype_alpha($fullname[0])) {
        popup ("Error!"," Name can not start with a digit.");
        return;
    } else if ((!ctype_alnum(str_replace(array('.', ' '), '', $fullname[0])))) {
        popup ("Error!","Name can only contain A-Z, a-z and . (dot).");
        return;
    }
    if (strlen($phone) != 11) {
        popup ("Error!"," Invalid phone number, Please try again.");
        return;
    }
    if ($phone[0] == "0" && $phone[1] == "1") {
    } else {
        popup ("Error!","Invalid phone number, Please try again.");
        return;
    }
    $checking1 = explode('@', $email);
    if (count($checking1) == 2) {
        $checking2 = explode('.', $checking1[1]);
        $c = count($checking2);
        if (count($checking2) < 2) {
            popup ("Error!"," Invalid email, Please try again.");
            return;
        }
    } else {
        popup ("Error!"," Invalid email, Please try again.");
        return;
    }
    if ($email[strlen($email) - 1] == ".") {
        popup ("Error!","Invalid email, Please try again.");
        return;
    } else if (uniqueEmail($email) == false) {
        popup ("Error!","Email already exists.");
        return;
    }

    if (strlen($password) < 8) {
        popup ("Error!"," Password must be atleast 8 characters long.");
    }else if ($password !== $confirmPassword) {
    popup ("Error!"," Passwords does not match.");
}else {
   
    $status = addUser($username, $fullname, $email,  $phone, $password,$dob,$gender,$joinDate,$department, $status, $role);
    if ($status) popup ("Congratulations!","Your account creation was successful.");
    else popup ("Error!","Could not register. Please try again");
}

}
?>