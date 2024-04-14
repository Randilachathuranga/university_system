<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ins</title>
    <link rel="icon" type="image/x-icon" href="../../firstpage/sample.jpeg">
    <link rel="stylesheet" href="../../firstpage/index.css">
 
</head >
<body >
    <div class="header">
        <h1>UniCourse</h1>
      </div>
   
      <?php
      echo "<br> <br>";
$root = $_SERVER["DOCUMENT_ROOT"] . "/ui//";
require_once $root . "../ui/firstpage/dbconfig.php";

$sql2 = "SELECT * FROM instructors";
$result = $connection->query($sql2);

if ($result && $result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Instructor Id</th><th>Department Id</th>  <th> Name</th>   <th>ContactNo</th>  <th>Department Name</th> </tr>";
    
    while ($row = $result->fetch_assoc()) {
        $mt = $row['INS_ID'];
        $dep = $row['DepID'];
        $name = $row['Name'];
        $Contact = $row['Contact'];
        $Dep_name = $row['Dep_Name'];
       
        
      
        
        echo "<tr> <td>$mt</td>
         <td>$dep</td>
         <td>$name</td>
         <td>$Contact</td>
         <td>$Dep_name</td>
      
          </tr>";
    }
    
    echo "</table>";
}
?>

</body>
</html>