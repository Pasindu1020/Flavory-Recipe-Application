<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "flavory");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Validate session
    if (!isset($_SESSION['logemail'])) {
        die("User not logged in.");
    }

    $user_email = $_SESSION['logemail'];

    // Get and sanitize form data
    $card_name = trim($_POST['card_name']);
    $card_number = trim($_POST['card_number']);
    $exp_year = trim($_POST['exp_year']);
    $exp_month = trim($_POST['exp_month']);
    $cvv = trim($_POST['cvv']);

    // Insert payment record
    $stmt = $conn->prepare("INSERT INTO payments (UEmail, card_name, card_number, exp_year, exp_month, cvv) VALUES (?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ssssss", $user_email, $card_name, $card_number, $exp_year, $exp_month, $cvv);

    if ($stmt->execute()) {
        // Check current membership status
        $checkMembership = $conn->prepare("SELECT Membership FROM register WHERE UEmail = ?");
        $checkMembership->bind_param("s", $user_email);
        $checkMembership->execute();
        $result = $checkMembership->get_result();
        $row = $result->fetch_assoc();

        if ($row && strtolower($row['Membership']) !== 'Premium') {
            // Update membership to 'member'
            $updateStmt = $conn->prepare("UPDATE register SET Membership = 'Premium' WHERE UEmail = ?");
            $updateStmt->bind_param("s", $user_email);
            $updateStmt->execute();
            $updateStmt->close();
        }

        $checkMembership->close();
        $stmt->close();
        $conn->close();

        // Redirect to loader page
        header("Location: ../Loader.html");
        exit();
    } else {
        echo "Payment insert failed: " . $stmt->error;
        $stmt->close();
        $conn->close();
    }
}
?>
