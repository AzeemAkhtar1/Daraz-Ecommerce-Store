<?php
$host = "localhost"; // usually "localhost"
$username = "root";
$password = "";
$database = "darazdb";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
