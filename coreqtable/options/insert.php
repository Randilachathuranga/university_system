<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>co-requires</title>
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
                <label for="text">Course Code : </label>
                <input type="text" name="CourseCode" placeholder="co100"><br><br>
                <label for="text">Co-requires   : </label>
                <input type="text" name="co_requires" placeholder="YES or NO"><br><br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
