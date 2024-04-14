<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>department</title>
    <link rel="icon" type="image/x-icon" href="../../firstpage/sample.jpeg">
    <link rel="stylesheet" href="../../firstpage/index.css">
  
</head>
<body>
    <div class="header">
        <h1>UniCourse</h1>
    </div>

    <div class="form-container"> <!-- Center the form both horizontally and vertically -->
        <div class="form-box"> <!-- Apply the class to create a box around the form -->
            <form action="./added.php" method="POST">
                <label for="text">DepID : </label>
                <input type="text" name="DepID" placeholder="dep1000"><br><br>

                <label for="text">DepName   : </label>
                <input type="text" name="DepName" placeholder="UCSC"><br><br>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
