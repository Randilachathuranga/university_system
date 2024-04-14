

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> course</title>
    <link rel="icon" type="image/x-icon" href="../../firstpage/sample.jpeg">
    <link rel="stylesheet" href="../../firstpage/index.css">
    <link rel="stylesheet" href="../../firstpage/index.php">

</head >
<body>
    <div class="header">
        <h1>deletedep</h1>
      </div>

      
<?php
$root = $_SERVER["DOCUMENT_ROOT"] . "/ui//";
require_once $root . "../ui/firstpage/dbconfig.php";


      if ($_SERVER["REQUEST_METHOD"] === "POST") {
$CourseCode = $_POST["CourseCode"];
$DepID = $_POST["DepID"];


$sql1 = "DELETE FROM course WHERE CourseCode = '$CourseCode' AND DepID = '$DepID'";

$result = $connection -> query($sql1);

if($result){
    echo "<br> <center> <h1> Delete successful......</h1> </center> ";
}else{
    echo "error-Quaru unsuccessfull" . $connection->error;
}
      }

   
?>


</body>
</html>