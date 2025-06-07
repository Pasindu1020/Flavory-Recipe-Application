<?php
session_start();

header('Content-Type: application/json');

if (isset($_SESSION['email']) && isset($_SESSION['membership'])) {
    echo json_encode([
        'email' => $_SESSION['email'],
        'membership' => $_SESSION['membership']
    ]);
} else {
    echo json_encode([
        'error' => 'User not logged in'
    ]);
}
?>
