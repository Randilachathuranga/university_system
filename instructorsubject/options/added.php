

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> instructorssub</title>
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

$Subject_id = $_POST["Subject_id"];
$INS_ID = $_POST["INS_ID"];
$Subject = $_POST["Subject"];





$sql1 = "INSERT INTO instructor_subject (Subject_id,INS_ID,Subject) VALUES ('$Subject_id','$INS_ID','$Subject')";

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