<?php
require_once('../models/drop-model.php');
require_once('message-controller.php');
$course=$_GET['cid'];
$student=$_GET['user'];
if($course&&$student){
    $result=addDrop($course,$student);
    if($result) popup("Success!","Drop application pending for approval");
    else popup("Error!","Failed to create drop application");
}
?>