<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniCourse</title>
    <link rel="icon" type="image/x-icon" href="../../firstpage/sample.jpeg">
    <link rel="stylesheet" href="./firstpage/index.css">
    <link rel="stylesheet" href="./style.css">
    <style>
        .container {
            text-align: center;
        }
    </style>
</head>
<body>

<header>
    <nav>
        <ul>
            <li><a type="button" href="./index.php">Logout</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <div class="header">
        <h1>UniCourse</h1>
    </div>

    <?php
    echo "<br> <br>";
    $root = $_SERVER["DOCUMENT_ROOT"] . "/ui//";
    require_once $root . "../ui/firstpage/dbconfig.php";

    $INS_ID = $_POST["INS_ID"];

    $sql2 = "SELECT DISTINCT i.INS_ID, i.Name, i.Contact, i.Dep_Name, h.Startdate,
                h.duration, c.DepID, s.Subject
                FROM instructors as i
                LEFT JOIN instructor_history as h ON i.INS_ID = h.INS_ID 
                INNER JOIN instructor_course as ci ON ci.INS_ID = i.INS_ID 
                INNER JOIN course as c ON c.CourseCode = ci.CourseCode
                INNER JOIN instructor_subject as s ON s.INS_ID = i.INS_ID 
                WHERE i.INS_ID = '$INS_ID'";

    $result = $connection->query($sql2);

    $instructorInfoPrinted = false;

    if ($result && $result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            if (!$instructorInfoPrinted) {
                $mt = $row['INS_ID'];
                $dep = $row['Name'];
                $ContactNO = $row['Contact'];
                $Dep_Name = $row['Dep_Name'];
                $Startdate = $row['Startdate'];
                $duration = $row['duration'];
                $DepID = $row['DepID'];

                echo "<h2>Instructor Information</h2>";

                echo "Instructor ID : $mt <br>";
                echo "Name : $dep <br>";
                echo "Contact no : $ContactNO <br>";
                echo "Department name : $Dep_Name <br>";
                echo "Start date : $Startdate <br>";
                echo "Duration : $duration <br>";
                echo "Department id : $DepID <br>";

                echo "<h2>subjects</h2>";
                $instructorInfoPrinted = true;
            }

            

            $subject = $row['Subject'];
            echo "$subject <br>";
        }

        echo "</div>";

    } else {
        echo "<h1>No records found.</h1>";
    }
    ?>

</div>

</body>
</html>
