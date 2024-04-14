


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Systerm</title>
    <link rel="stylesheet" href="./firstpage/index.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" type="image/x-icon" href="./firstpage/sample.jpeg">
    



</head>
<body>
<header>
    <nav>
      <ul>
        <li><a href="../ui/">Home</a></li>
      </ul>
    </nav>
  </header>

<div class="header">
        <h1>UniCourse</h1>
    </div>

    <?php
$root = $_SERVER["DOCUMENT_ROOT"] . "/ui/";
require_once $root . "firstpage/dbconfig.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $enteredPassword = $_POST["password"];
    $correctPassword = "1234";

    if ($correctPassword == $enteredPassword) {
        header("Location: ./firstpage/index.php");
        exit();
    } else {
        echo "<br><center><h1 style='color: red;'>Invalid login, please try again</h1></center>";
    }
}
?>



</body>
</html>


