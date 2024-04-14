<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student grade</title>
    <link rel="icon" type="image/x-icon" href="../../firstpage/sample.jpeg">
    <link rel="stylesheet" href="../../firstpage/index.css">

</head>
<body >
    <div class="header">
        <h1>UniCourse</h1>
    </div>

    <div class="form-container"> <!-- Center the form both horizontally and vertically -->
        <div class="form-box"> <!-- Apply the class to create a box around the form -->
            <form action="./added.php" method="POST">
                <label for="text">Student ID : </label>
                <input type="text" name="StudentID" placeholder="st1001"><br><br>

                <label for="text">Student Name   : </label>
                <input type="text" name="Student_Name" placeholder="D.R.C. Senarathne"><br><br>

                <label for="text">Course  : </label>
                <input type="text" name="Course" placeholder="SCIENCE"><br><br>
               
                <label for="text">Contact No : </label>
                <input type="number" name="ContactNO" placeholder="075xxxxxxx"><br><br>

                <label for="text"> GPA_value   : </label>
                <input type="number" name="GPA_value" placeholder="3.75"><br><br>

                <label for="text">Instructor id   : </label>
                <input type="text" name="INS_ID" placeholder="ins001"><br><br>
               
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
