<?php
session_start();

header('Content-Type: application/json');

if (isset($_SESSION['logemail']) && isset($_SESSION['membership'])) {
    echo json_encode([
        'email' => $_SESSION['logemail'],
        'membership' => $_SESSION['membership']
    ]);
} else {
    echo json_encode([
        'error' => 'User not logged in'
    ]);
}
?>
