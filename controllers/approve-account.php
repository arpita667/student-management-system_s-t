<?php
    require_once('../models/user-model.php'); 
    require_once('message-controller.php'); 
    if(!isset($_COOKIE['flag'])){
        popup("Error!","You need to sign-in in order to access this page.");
    }
    $id=$_GET['uid'];
    
     if(approveAccount($id)){
        popup("Success!","Account has been approved successfully");
     }else{
        popup("Error!", "Could not approve account. Please try again."); 
     }

?>