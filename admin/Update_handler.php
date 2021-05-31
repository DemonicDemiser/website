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
$name= $_POST['name'];
$description= $_POST['description'];
$price= $_POST['price'];

$sql = "UPDATE producttable SET name ='$name', description ='$description', price ='$price'
WHERE id = '$id' ";


if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
echo header("Location:Update.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>