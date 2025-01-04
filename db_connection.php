<?php
$servername = "localhost";
$username = "root";
$password = "";  // Add your MySQL root password if any
$dbname = "your_database_name";  // Replace with your actual database name
$port = 3307;  // Set the correct port (3307)

$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>
