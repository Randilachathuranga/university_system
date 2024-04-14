<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>instructorssub</title>
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
              
                <label for="text">Subject id   : </label>
                <input type="text" name="Subject_id" placeholder="sub001"><br><br>

                <label for="text">Instructor Id : </label>
                <input type="text" name="INS_ID" placeholder="ins001"><br><br>

                <label for="text">Subject   : </label>
                <input type="text" name="Subject" placeholder="DSA"><br><br>
                
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
