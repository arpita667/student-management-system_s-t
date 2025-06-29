<?php
require_once('../models/course-model.php');
$cid=$_GET['cid'];
$course=getCourse($cid);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Course</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div align="center">
        <br>
        <form action="../controllers/update-course-info.php" method="post">
            <table bgcolor="white" cellpadding="15" cellspacing="0" bordercolor="#1B6392">
                <tr>
                    <td colspan="2">
                        <center>
                            <font size="5">Update Course</font>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="courseId" value="<?php echo $course['courseId']?>">
                        <label color="black" size="4">Course Code</label>
                    </td>
                    <td>
                        <input type="text" name="courseCode" value="<?php echo $course['courseCode']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4">Course Name</label>
                    </td>
                    <td>
                        <input type="text" name="courseName" value="<?php echo $course['courseName']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4" >Credits</label>
                    </td>
                    <td>
                        <input type="number" name="credits" value="<?php echo $course['credits']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4">Department Id</label>
                    </td>
                    <td>
                        <input type="" name="departmentId" value="<?php echo $course['departmentId']?>">
                    
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4">Description</label>
                    </td>
                    <td>
                        <textarea name="description" id="" rows="2" ><?php echo $course['description']?></textarea>
                    </td>
                </tr>
               <tr><td colspan="2">
                <center><input type="submit" name='submit' value='Update course'></center> 
              </td></tr>
            </table>
        </form>
    </div>
</body>

</html>