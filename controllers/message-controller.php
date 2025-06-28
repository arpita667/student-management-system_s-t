<?php
function popup($title, $message)
{
    session_start();
    $_SESSION['title'] = $title;
    $_SESSION['message'] = $message;
    header("Location: ../views/popup.php");
    exit();
}
?>