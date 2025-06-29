<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div align="center">
        <br>
        <form action="../controllers/create-course-controller.php" method="post">
            <table bgcolor="white" cellpadding="15" cellspacing="0" bordercolor="#1B6392">
                <tr>
                    <td colspan="2">
                        <center>
                            <font size="5">Add New Course</font>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4">Course Code</label>
                    </td>
                    <td>
                        <input type="text" name="courseCode">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4">Course Name</label>
                    </td>
                    <td>
                        <input type="text" name="courseName">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4" >Credits</label>
                    </td>
                    <td>
                        <input type="number" name="credits">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4">Department Id</label>
                    </td>
                    <td>
                        <input type="" name="departmentId">
                    
                    </td>
                </tr>
                <tr>
                    <td>
                        <label color="black" size="4">Description</label>
                    </td>
                    <td>
                        <textarea name="description" id="" rows="2" ></textarea>
                    </td>
                </tr>
               <tr><td colspan="2">
                <center><input type="submit" name='submit' value='Add new course'></center> 
              </td></tr>
            </table>
        </form>
    </div>
</body>

</html>