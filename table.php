<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Database1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table I named Table1 
$sql = "CREATE TABLE Table1 (
    id INT(6) UNSIGNED AUTO_INCREMENT UNIQUE,
    factor1 INT(6) NOT NULL,
    factor2 INT(6) NOT NULL,
    operation VARCHAR(6) NOT NULL,
    result INT(6) NOT NULL,
    operation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if ($conn->query($sql) === TRUE) {
    
} else {
    
}

$conn->close();
?>