

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> student</title>
    <link rel="icon" type="image/x-icon" href="../../firstpage/sample.jpeg">
    <link rel="stylesheet" href="../../firstpage/index.css">
    <link rel="stylesheet" href="../../firstpage/index.php">

</head >
<body >
    <div class="header">
        <h1>requires</h1>
      </div>

      
<?php
$root = $_SERVER["DOCUMENT_ROOT"] . "/ui//";
require_once $root . "../ui/firstpage/dbconfig.php";


      if ($_SERVER["REQUEST_METHOD"] === "POST") {
$StudentID = $_POST["StudentID"];
$Name = $_POST["Name"];
$ContactNO = $_POST["ContactNO"];
$DOB = $_POST["DOB"];
$Acadamic_program = $_POST["Acadamic_program"];
$Advisor = $_POST["Advisor"];



$sql1 = "INSERT INTO student (StudentID,Name,ContactNO,DOB,Academic_program,Advisor) VALUES ('$StudentID','$Name','$ContactNO','$DOB','$Acadamic_program','$Advisor')";

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