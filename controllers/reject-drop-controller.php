<?php
require_once('message-controller.php');
require_once('../models/drop-model.php');
$drop=$_GET['id'];
if($drop){
    $result=rejectDrop($drop);
    if($result) popup("Success!","Drop request rejected");
    else popup("Error!","Failed to reject drop request");
}
?>