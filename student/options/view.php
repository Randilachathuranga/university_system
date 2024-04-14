<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> student</title>
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

$sql2 = "SELECT * FROM student";
$result = $connection->query($sql2);

if ($result && $result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Student ID </th><th>Name</th>  <th>Contact No</th> <th>   DOB</th> <th>Academic program</th>  <th>Advisor</th>  </tr>";
    
    while ($row = $result->fetch_assoc()) {
        $mt = $row['StudentID'];
        $dep = $row['Name'];
        $ContactNO = $row['ContactNO'];
        $DOB = $row['DOB'];
        $Acadamic_program = $row['Academic_program'];
        $Advisor = $row['Advisor'];
  
       
       
        
      
        
        echo "<tr> <td>$mt</td>
         <td>$dep</td>
         <td>$ContactNO</td>
         <td>$DOB</td>
         <td>$Acadamic_program</td>
         <td>$Advisor</td>
        
      
          </tr>";
    }
    
    echo "</table>";
}
?>

</body>
</html>