<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id= $_POST['id'];

$sql = "DELETE FROM producttable WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  echo header("Location:Delete.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>