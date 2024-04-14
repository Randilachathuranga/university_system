<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> stgrade</title>
    <link rel="icon" type="image/x-icon" href="../../firstpage/sample.jpeg">
    <link rel="stylesheet" href="../../firstpage/index.css">
 
</head >
<body>
    <div class="header">
        <h1>UniCourse</h1>
      </div>
   
      <?php
      echo "<br> <br>";
$root = $_SERVER["DOCUMENT_ROOT"] . "/ui//";
require_once $root . "../ui/firstpage/dbconfig.php";

$sql2 = "SELECT * FROM student_grade";
$result = $connection->query($sql2);

if ($result && $result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Student ID </th><th> Student Name</th>  <th> Course</th>  <th> Contact No</th>
    <th> GPA value </th> <th> Instructor Id</th> </tr>";
    
    while ($row = $result->fetch_assoc()) {
        $mt = $row['StudentID'];
        $dep = $row['Student_Name'];
        $Course = $row['Course'];
        $ContactNO = $row['ContactNO'];
        $GPA_value = $row['GPA_value'];
        $INS_ID = $row['INS_ID'];
       
        
        echo "<tr> <td>$mt</td>
         <td>$dep</td>
         <td>$Course</td>
         <td>$ContactNO</td>
         <td>$GPA_value</td>
         <td>$INS_ID</td>
         
          </tr>";
    }
    
    echo "</table>";
}
?>

</body>
</html>