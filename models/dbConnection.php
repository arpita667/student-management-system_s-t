<?php
function dbConnect()
{
    $conn = mysqli_connect('localhost', 'root', '', 'student_management');
    if ($conn) {
        return $conn;
    } else {
        echo "connection failed";
    }
}
