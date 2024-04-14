<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course</title>
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

                <label for="text">DepID   : </label>
                <input type="text" name="DepID" placeholder="dep1000"><br><br>

                <label for="text">Title   : </label>
                <input type="text" name="Title" placeholder="Title"><br><br>
                <label for="text">Description   : </label>
                <input type="text" name="Description" placeholder="Description"><br><br>
                <label for="text">Crediot   : </label>
                <input type="text" name="Crediot" placeholder="Crediot"><br><br>
                <label for="text">Category   : </label>
                <input type="text" name="Category" placeholder="undergraduate"><br><br>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
