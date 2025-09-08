<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajbo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `products`(`ProductID`, `ProductName`, `SupplierID`, `CategoryID`, `Unit`, `Price`) 
        VALUES ('20','ชยากร','3','444','ชยากรๆๆๆๆ','80.69')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
