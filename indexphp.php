<?php
$servername = "localhost";
$title = $_POST["title"];
$question =$_POST["question"];
$dbname = "form";
$name="root";
$pass="";

// Create connection
$conn = mysqli_connect($servername,$name,$pass,$dbname);
// Check connec

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

$sql = "INSERT INTO ques VALUES ('".$title."', '".$question."')";

if ($conn->query($sql)) {
    header("location: index.php");
 
} else {

      header("location: index.html?account_is _not_created");
}

$conn->close();
?>

