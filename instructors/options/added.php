

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> instructors</title>
    <link rel="icon" type="image/x-icon" href="../../firstpage/sample.jpeg">
    <link rel="stylesheet" href="../../firstpage/index.css">
    <link rel="stylesheet" href="../../firstpage/index.php">

</head >
<body>
    <div class="header">
        <h1>requires</h1>
      </div>

      
<?php
$root = $_SERVER["DOCUMENT_ROOT"] . "/ui//";
require_once $root . "../ui/firstpage/dbconfig.php";


      if ($_SERVER["REQUEST_METHOD"] === "POST") {
$INS_ID = $_POST["INS_ID"];
$DepID = $_POST["DepID"];
$Name = $_POST["Name"];
$Contact = $_POST["Contact"];
$Dep_Name = $_POST["Dep_Name"];




$sql1 = "INSERT INTO instructors (INS_ID,DepID,Name,Contact,Dep_Name) VALUES ('$INS_ID','$DepID','$Name',$Contact,'$Dep_Name')";

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