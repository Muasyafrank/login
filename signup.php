<?php
include "db.php";

header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($data["email"]);
    $name = trim($data["name"]);
    $password = trim($data["password"]);

    if (empty($email) || empty($name) || empty($password)) {
        echo json_encode(["status" => "error", "message" => "All fields are required."]);
        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Check if email already exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode(["status" => "error", "message" => "Email already registered."]);
        exit();
    }

    // Insert user into database
    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $hashedPassword);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Account created successfully. Please login."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Signup failed. Try again."]);
    }

    $stmt->close();
    $conn->close();
}
?>
