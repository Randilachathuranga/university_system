<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> prereq</title>
    <link rel="icon" type="image/x-icon" href="../../firstpage/sample.jpeg">
    <link rel="stylesheet" href="../../firstpage/index.css">
 
</style>
</head >
<body >
    <div class="header">
        <h1>UniCourse</h1>
      </div>
   
      <?php
      echo "<br> <br>";
$root = $_SERVER["DOCUMENT_ROOT"] . "/ui//";
require_once $root . "../ui/firstpage/dbconfig.php";

$sql2 = "SELECT * FROM prereq_table";
$result = $connection->query($sql2);

if ($result && $result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Course Code </th><th>Pre requires</th>  </tr>";
    
    while ($row = $result->fetch_assoc()) {
        $mt = $row['CourseCode'];
        $dep = $row['Pre_requires'];
  
       
       
        
      
        
        echo "<tr> <td>$mt</td>
         <td>$dep</td>
        
      
          </tr>";
    }
    
    echo "</table>";
}
?>
</body>
</html>
