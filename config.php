<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Database1";

// Creating a connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Creating a database I named Database1
$sql = "CREATE DATABASE Database1";
if ($conn->query($sql) === TRUE) {
    //echo "Database created successfully with the name Database1";
} else {
    //echo "Error creating database: " . $conn->error;
}

// closing connection
$conn->close();
?>
