<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insmat</title>
    <link rel="icon" type="image/x-icon" href="../../firstpage/sample.jpeg">
    <link rel="stylesheet" href="../../firstpage/index.css">
  
</head>
<body >
    <div class="header">
        <h1>UniCourse</h1>
    </div>

    <div class="form-container"> <!-- Center the form both horizontally and vertically -->
        <div class="form-box"> <!-- Apply the class to create a box around the form -->
            <form action="./deleted.php" method="POST">
                <label for="text">Instructor Id : </label>
                <input type="text" name="INS_ID" placeholder="ins001"><br><br>

                <label for="text">Material Id : </label>
                <input type="text" name="Material_id" placeholder="mat001"><br><br>

               
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
