<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="icon" type="image/x-icon" href="../../firstpage/sample.jpeg">
    <link rel="stylesheet" href="../../firstpage/index.css">
  
</head>
<body >
    <div class="header">
        <h1>UniCourse</h1>
    </div>

    <div class="form-container"> <!-- Center the form both horizontally and vertically -->
        <div class="form-box"> <!-- Apply the class to create a box around the form -->


        <form  action="./up.php" method="POST">

        <label for="text">Course code : </label>
                <input type="text" name="CourseCode" placeholder="co100"><br><br>
        <label for="cars">Select column name :</label>
                <select name="column">
                  <option value="Co_requires">Co_requires</option>
                  </select>
                
                <br><br>
                <label for="text">Enter a new data : </label>
                <input type="text" name="new" placeholder="new data">
 
  <br><br>
  <input type="submit" value="Submit">
</form>


        </div>
    </div>
</body>
</html>