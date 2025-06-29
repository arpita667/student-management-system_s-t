<?php
    require_once('../controllers/message-controller.php');
    require_once('../models/section-model.php');

    $section = $_GET['sid'];

    if(deleteSection($section)) popup("Success!", "Section deleted successfully");
    else popup("Error!", "Unable to delete section. Please try again");

?>