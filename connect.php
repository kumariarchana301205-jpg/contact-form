<?php
$conn = new mysqli("localhost", "root", "", "EX9");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Database connected successfully";
?
