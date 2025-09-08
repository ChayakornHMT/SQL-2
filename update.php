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

$sql = "UPDATE `products` SET `ProductID`='4',`ProductName`='yedmea',`SupplierID`='6',`CategoryID`='666',`Unit`='cacacacacaca',`Price`='93.66' WHERE `products`.`ProductID` = '7'";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>