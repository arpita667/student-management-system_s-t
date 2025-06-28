<?php
require_once('message-controller.php');
require_once('../models/drop-model.php');
$drop=$_GET['id'];
if($drop){
    $result=approveDrop($drop);
    if($result) popup("Success!","Drop request approved");
    else popup("Error!","Failed to approve drop request");
}
?>