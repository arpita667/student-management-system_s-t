<?php
require_once('../controllers/message-controller.php');
    require_once('../models/department-model.php');

    $dept = $_GET['dept'];

    if(deleteDept($dept)) popup("Success!", "Department deleted successfully");
    else popup("Error!", "Unable to delete Department. Please try again");

?>