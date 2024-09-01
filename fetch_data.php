<?php
$servername = "localhost";
$username = "root";
$password = ""; // Update with your database password
$dbname = "db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, pass FROM tbl";
$result = $conn->query($sql);

$data = [];
if ($result->num_rows > 0) {
    // Fetch data and store in array
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();

// Output data in JSON format
header('Content-Type: application/json');
echo json_encode($data);
?>
