<?php
$servername = "localhost";
$username = "root";
$password = "624235009";
$dbname = "bookonline ";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO product ( p_id, p_name,p_detail,p_price)
VALUES ('4', 'Doe', 'เสื้อ','300');";


if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>