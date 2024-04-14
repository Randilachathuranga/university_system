<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> student</title>
    <link rel="icon" type="image/x-icon" href="../../firstpage/sample.jpeg">
    <link rel="stylesheet" href="./firstpage/index.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" type="image/x-icon" href="./firstpage/sample.jpeg">



</head >

<body >

<header>
    <nav>
      <ul>
        <li><a href="./index.php">Logout</a></li>
      </ul>
    </nav>
  </header>
    <div class="header">
        <h1>UniCourse</h1>
      </div>

      
   
      <?php
echo "<br> <br>";
$root = $_SERVER["DOCUMENT_ROOT"] . "/ui//";
require_once $root . "../ui/firstpage/dbconfig.php";

$StudentID = $_POST["StudentID"];

$sql2 = "SELECT DISTINCT s.StudentID, s.Name, s.ContactNO, s.DOB, s.Academic_program,
              s.Advisor, e.Status, g.GPA_value, iss.Subject, ins.Name  
            FROM student as s 
            INNER JOIN student_enrollment as e ON s.StudentID = e.StudentID 
            INNER JOIN student_grade as g ON s.StudentID = g.StudentID
            INNER JOIN instructor_course as i ON i.INS_ID = g.INS_ID
            INNER JOIN instructor_subject as iss ON iss.INS_ID = g.INS_ID
            INNER JOIN instructors as ins ON ins.INS_ID = g.INS_ID
            WHERE s.StudentID = '$StudentID'";

$result = $connection->query($sql2);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $mt = $row['StudentID'];
    $dep = $row['Name'];
    $ContactNO = $row['ContactNO'];
    $DOB = $row['DOB'];
    $Academic_program = $row['Academic_program'];
    $Advisor = $row['Advisor'];
    $Status = $row['Status'];
    $GPA_value = $row['GPA_value'];
    echo "<center>";
    echo "<div class='box'>";
        echo "<h2>Student Information</h2>";
        echo "Student ID: $mt <br>";
        echo "Name: $dep <br>";
        echo "Contact No: $ContactNO <br>";
        echo "Date of birth: $DOB <br>";
        echo "Academic program: $Academic_program <br>";
        echo "Advisor: $Advisor <br>";
        echo "Status: $Status <br>";
        echo "GPA: $GPA_value <br>";
        echo "</div>";
    
    $subjects = array();
    $result = $connection->query($sql2);

    echo "<div class='box'>";
    echo "<h2> Subjects</h2>";
    while ($row = $result->fetch_assoc()) {
        $Subject = $row['Subject'];
        $subjects[] = $Subject;
    }

    $uniqueSubjects = array_unique($subjects);

    foreach ($uniqueSubjects as $subject) {
        echo "$subject <br>";
       
    }
    echo "</div>";
} else {
    echo "<h1>No records found.</h1>";
}
?>

</body>
</html>