

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> studentgrade</title>
    <link rel="icon" type="image/x-icon" href="../../firstpage/sample.jpeg">
    <link rel="stylesheet" href="../../firstpage/index.css">
    <link rel="stylesheet" href="../../firstpage/index.php">

</head >
<body >
    <div class="header">
        <h1>UniCourse</h1>
      </div>

      
<?php
$root = $_SERVER["DOCUMENT_ROOT"] . "/ui//";
require_once $root . "../ui/firstpage/dbconfig.php";


      if ($_SERVER["REQUEST_METHOD"] === "POST") {
$StudentID = $_POST["StudentID"];
$Student_Name = $_POST["Student_Name"];
$Course = $_POST["Course"];
$ContactNO = $_POST["ContactNO"];
$GPA_value = $_POST["GPA_value"];
$INS_ID = $_POST["INS_ID"];


$sql1 = "INSERT INTO student_grade (StudentID,Student_Name,Course,ContactNO,GPA_value,INS_ID) VALUES ('$StudentID','$Student_Name','$Course','$ContactNO','$GPA_value','$INS_ID')";

$result = $connection -> query($sql1);

if($result){
    echo "<br> <center> <h1> user added......</h1> </center> ";
}else{
    echo "error-Quaru unsuccessfull" . $connection->error;
}
      }

   
?>


</body>
</html>