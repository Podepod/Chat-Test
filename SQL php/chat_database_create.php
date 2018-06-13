<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chat_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE chat (
MsgID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
MsgUsername VARCHAR(30) NOT NULL,
MsgCont TEXT NOT NULL,
MsgDate TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table chat created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
