<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Systerm</title>
    <link rel="stylesheet" href="./firstpage/index.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" type="image/x-icon" href="./firstpage/sample.jpeg">
    <style>
      body{
      background-image: url(./wp.jpg);
      background-size: cover;
    }
    </style>
 

</head>
<body>
<header>
    <nav>
      <ul>
        <li><a href="./index.php">Home</a></li>
      </ul>
    </nav>
  </header>
<div class="header">
        <h1>UniCourse</h1>
    </div>

   
    
<div class="form-container"> <!-- Center the form both horizontally and vertically -->
        <div class="form-box"> <!-- Apply the class to create a box around the form -->
            <form action="./st.php" method="POST">
            
            

                <label for="text">Student ID : </label>
                <input type="text" name="StudentID" placeholder="st1001"><br><br>

            
                <button type="submit">Login</button>
            </form>
        </div>
    </div>


</body>
</html>