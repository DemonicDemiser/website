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

$name= $_POST['name'];
$description= $_POST['description'];
$price= $_POST['price'];
 
// $sql = "UPDATE student SET fname ='$fname', mname ='$mname', lname ='$lname', 
// address ='$address', email ='$email' WHERE student_id = '$get_id' ";

$sql = "INSERT INTO producttable (name, description, price)
VALUES ('$name', '$description', '$price')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  echo header("Location:Edit.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>