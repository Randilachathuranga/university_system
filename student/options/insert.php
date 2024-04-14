<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
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

                <label for="text">Name   : </label>
                <input type="text" name="Name" placeholder="D.R.C. Kumara"><br><br>

                <label for="text">ContactNO   : </label>
                <input type="number" name="ContactNO" placeholder="075xxxxxxx"><br><br>
                <label for="text">DOB   : </label>
                <input type="text" name="DOB" placeholder="2001-01-01"><br><br>
                <label for="text">Academic_program   : </label>
                <input type="text" name="Acadamic_program" placeholder="Bsc"><br><br>
                <label for="text">Advisor   : </label>
                <input type="text" name="Advisor" placeholder="Dr. Kumara"><br><br>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
