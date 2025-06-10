<?php
session_start();

header('Content-Type: application/json');

if (isset($_SESSION['logemail']) && isset($_SESSION['membership'])) {
    echo json_encode([
        'email' => $_SESSION['logemail'],
        'membership' => $_SESSION['membership']
    ]);
}  else {
    $response = [
        'email' => null,
        'membership' => 'Free'
    ];
}

echo json_encode($response);
?>
