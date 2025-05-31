<?php
session_start();
$conn = new mysqli("localhost", "root", "", "Flavory");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$response = ["status" => "not_logged_in"];

if (isset($_SESSION['user_email'])) {
    $email = $_SESSION['user_email'];
    $stmt = $conn->prepare("SELECT Uname, Membership FROM Register WHERE UEmail = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($uname, $membership);
    
    if ($stmt->fetch()) {
        $response = [
            "status" => "logged_in",
            "uname" => $uname,
            "membership" => $membership
        ];
    }

    $stmt->close();
}

$conn->close();
header('Content-Type: application/json');
echo json_encode($response);
?>
