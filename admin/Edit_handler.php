<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name= $_POST['name'];
$description= $_POST['description'];
$price= $_POST['price'];
$image = $_POST['image'];
$date = $_POST['datetime'];

// $sql = "UPDATE student SET fname ='$fname', mname ='$mname', lname ='$lname', 
// address ='$address', email ='$email' WHERE student_id = '$get_id' ";

$sql = "INSERT INTO catalog (brand_name, brand_image, brand_description, brand_pub_date)
VALUES ('$name', '$image', '$description', '$date')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  echo header("Location:Edit.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>