<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Section</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div align="center">
        <br>
        <form action="../controllers/create-section-controller.php" method="post">
            <table bgcolor="white" cellpadding="15" cellspacing="0" bordercolor="#1B6392">
                <tr>
                    <td colspan="2">
                        <center>
                            <font size="5">Add New Section</font>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4">Section Name</label>
                    </td>
                    <td>
                        <input type="text" name="sectionName">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4">Course Id</label>
                    </td>
                    <td>
                        <input type="text" name="courseId">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4">Faculty Id</label>
                    </td>
                    <td>
                        <input type="text" name="facultyId">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4">Capacity</label>
                    </td>
                    <td>
                        <input type="number" name="capacity">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4">Schedule</label>
                    </td>
                    <td>
                        <textarea name="schedule" id="schedule" rows="2" cols="21"></textarea>
                    </td>
                </tr>
               <tr><td colspan="2">
                <center><input type="submit"name="submit" value='Add new section'></center> 
              </td></tr>
            </table>
        </form>
    </div>
</body>
</html>