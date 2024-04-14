<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> course</title>
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

$sql2 = "SELECT * FROM course";
$result = $connection->query($sql2);

if ($result && $result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Course code</th><th>DepID</th><th>Title</th><th>Descriptopn</th><th>Crediot</th><th>Category</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        $coursecode = $row['CourseCode'];
        $dep = $row['DepID'];
        $title = $row['Title'];
        $description = $row['Description'];
        $cred = $row['Crediot'];
        $category = $row['Category'];
        
        echo "<tr> <td>$coursecode</td>
         <td>$dep</td>
         <td>$title</td>
         <td>$description</td>
         <td>$cred</td>
         <td>$category</td>
          </tr>";
    }
    
    echo "</table>";
}
?>
   

</body>
</html>