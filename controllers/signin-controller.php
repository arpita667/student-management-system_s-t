<?php
require_once('../models/user-model.php');
require_once('../views/popup.php');
require_once('message-controller.php');
//validation
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Remember;

    if (isset($_POST['Remember'])) {
        $Remember = "true";
    }
    if (!isset($_POST['Remember'])) {
        $Remember = "false";
    }

    //Null value checking
    if (strlen(trim($email)) == 0 || strlen(trim($password)) == 0) popup("Error!", "You can not leave any fields empty.");
//Authentication
    $status = login($email, $password);

//role
    if ($status != false) {

        if ($status['role'] == "student" and $status['status'] == "active") {

            if ($Remember == "true") {
                setcookie("flag", "true", time() + 999999999, "/");
            }
            if ($Remember == "false") {
                setcookie("flag", "false", time() + 3600, "/");
            }
            setcookie("id", $status['userId'], time() + 99999999999, "/");
            header('location:../views/dashboard.php');
        } else if ($status['role'] == "admin" and $status['status'] == "active") {

            if ($Remember == "true") {
                setcookie("flag", "true", time() + 999999999, "/");
            }
            if ($Remember == "false") {
                setcookie("flag", "false", time() + 3600, "/");
            }
            setcookie("id", $status['userId'], time() + 99999999999, "/");
            header('location:../views/dashboard.php');
        } else if ($status['role'] == "teacher" and $status['status'] == "active") {
            if ($Remember == "true") {
                setcookie("flag", "true", time() + 999999999, "/");
            }
            if ($Remember == "false") {
                setcookie("flag", "false", time() + 3600, "/");
            }
            setcookie("id", $status['userId'], time() + 99999999999, "/");
            header('location:../views/dashboard.php');
        } else {
            popup("Error!", "Could not sign-in.Your are banned from the website.");
        }
    } else {
        popup("Error!", "Could not sign-in. Invalid sign-in credentials.");
    }
}
