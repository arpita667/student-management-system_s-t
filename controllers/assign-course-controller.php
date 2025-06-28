<?php
require_once('../models/registration-model.php');
require_once('message-controller.php');
$sid=$_GET['sid'];
$user=$_GET['user'];

if($sid&&$user){
   $result=addRegistration($sid,$user);
   if($result) popup("Success!","Student assign to the section");
   else popup("Error!","Failed to assign section");
}
?>