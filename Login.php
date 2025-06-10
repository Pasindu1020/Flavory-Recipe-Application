<?php
   
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['logemail'];
    $password = $_POST['logpw'];

    $conn = new mysqli("localhost", "root", "", "Flavory");
    if ($conn->connect_error) die("Connection failed");

    $stmt = $conn->prepare("SELECT * FROM Register WHERE UEmail = ? AND Password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        $_SESSION['logemail'] = $user['UEmail'];
        $_SESSION['membership'] = $user['Membership'];
        header("Location: HomeLogged.html");
    } else {
        echo "Invalid login!";
    }

    $stmt->close();
    $conn->close();
}
?>
