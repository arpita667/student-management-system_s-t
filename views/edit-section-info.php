<?php
require_once('../models/section-model.php');
$sid=$_GET['sid'];
$section=getSection($sid);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Section</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div align="center">
        <br>
        <form action="../controllers/update-section-controller.php" method="post">
            <table bgcolor="white" cellpadding="15" cellspacing="0" bordercolor="#1B6392">
                <tr>
                    <td colspan="2">
                        <center>
                            <font size="5">Update Section</font>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="hidden" name="sectionId" value="<?php echo $section['sectionId']?>">
                        <label color="black" size="4">Section Name</label>
                    </td>
                    <td>
                        <input type="text" name="sectionName" value="<?php echo $section['sectionName'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4">Course Id</label>
                    </td>
                    <td>
                        <input type="text" name="courseId" value="<?php echo $section['courseId'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4">Faculty Id</label>
                    </td>
                    <td>
                        <input type="text" name="facultyId" value="<?php echo $section['facultyId'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4">Capacity</label>
                    </td>
                    <td>
                        <input type="number" name="capacity" value="<?php echo $section['capacity'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4">Schedule</label>
                    </td>
                    <td>
                        <textarea name="schedule" id="schedule" rows="2" cols="21" ><?php echo $section['schedule'] ?></textarea>
                    </td>
                </tr>
               <tr><td colspan="2">
                <center><input type="submit"name="submit" value='Update section'></center> 
              </td></tr>
            </table>
        </form>
    </div>
</body>
</html>