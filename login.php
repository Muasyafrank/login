<?php
include "db.php";

header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($data["email"]);
    $password = trim($data["password"]);

    if (empty($email) || empty($password)) {
        echo json_encode(["status" => "error", "message" => "Email and password are required."]);
        exit();
    }

    // Check user in database
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user["password"])) {
        session_start();
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["user_name"] = $user["name"];
        $_SESSION["user_email"] = $user["email"];

        echo json_encode(["status" => "success", "message" => "Login successful."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Invalid email or password."]);
    }

    $stmt->close();
    $conn->close();
}
?>
