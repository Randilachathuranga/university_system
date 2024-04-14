<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> co-requires</title>
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

$sql2 = "SELECT * FROM coreq_tablle";
$result = $connection->query($sql2);

if ($result && $result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Course code</th><th>Co requires</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        $coursecode = $row['CourseCode'];
        $co_req = $row['Co_requires'];
        
        echo "<tr> <td>$coursecode</td> <td>$co_req</td> </tr>";
    }
    
    echo "</table>";
}
?>

   

</body>
</html>