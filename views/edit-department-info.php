<?php
     require_once('../models/department-model.php');
     $dept=$_GET['dept'];
     $details=getDept($dept);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Department</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div align="center">
        <br>
        <form action="../controllers/update-department-controller.php" method="post">
            <table bgcolor="white" cellpadding="15" cellspacing="0" bordercolor="#1B6392">
                <tr>
                    <td colspan="2">
                        <center>
                            <font size="5">Update Department</font>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="hidden" name="deptId" value="<?php echo $details['deptId']?>">
                        <label color="black" size="4">Department Code</label>
                    </td>
                    <td>
                        <input type="text" name="deptCode" value="<?php echo $details['deptCode']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4">Department Name</label>
                    </td>
                    <td>
                        <input type="text" name="deptName" value="<?php echo $details['deptName']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4">Description</label>
                    </td>
                    <td>
                        <textarea name="description" id="description" rows="3" cols="21"><?php echo $details['description']?></textarea>
                    </td>
                </tr>
               <tr><td colspan="2">
                <center><input type="submit" name="submit" value='Update department'></center> 
              </td></tr>
            </table>
        </form>
    </div>
</body>
</html>