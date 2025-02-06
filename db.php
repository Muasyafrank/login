<?php
$servername = "localhost"; // Change if necessary
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "TestApp"; // Your database name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Database Connection Failed: " . $conn->connect_error]));
}
?>
