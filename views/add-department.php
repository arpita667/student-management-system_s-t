<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Department</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div align="center">
        <br>
        <form action="../controllers/create-department-controller.php" method="post">
            <table bgcolor="white" cellpadding="15" cellspacing="0" bordercolor="#1B6392">
                <tr>
                    <td colspan="2">
                        <center>
                            <font size="5">Add New Department</font>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4">Department Code</label>
                    </td>
                    <td>
                        <input type="text" name="deptCode">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4">Department Name</label>
                    </td>
                    <td>
                        <input type="text" name="deptName">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4">Description</label>
                    </td>
                    <td>
                        <textarea name="description" id="description" rows="3" cols="21"></textarea>
                    </td>
                </tr>
               <tr><td colspan="2">
                <center><input type="submit" name="submit" value='Add new department'></center> 
              </td></tr>
            </table>
        </form>
    </div>
</body>
</html>