<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> inssub</title>
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

$sql2 = "SELECT * FROM instructor_subject";
$result = $connection->query($sql2);

if ($result && $result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Subject Id</th><th>Instructor Id</th>  <th> Subject</th>  </tr>";
    
    while ($row = $result->fetch_assoc()) {
        $mt = $row['Subject_id'];
        $dep = $row['INS_ID'];
        $name = $row['Subject'];
       
       
        
      
        
        echo "<tr> <td>$mt</td>
         <td>$dep</td>
         <td>$name</td>
        
      
          </tr>";
    }
    
    echo "</table>";
}
?>


</body>
</html>