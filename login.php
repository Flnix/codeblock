<?php
session_start();

// Dummy credentials (Replace with database logic)
$valid_users = [
    "admin" => "Admin",
    "user1" => "vanako"
];

// Get user input
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Check if username exists and password is correct
if (isset($valid_users[$username]) && $valid_users[$username] === $password) {
    $_SESSION['username'] = $username; // Store user session
    header("Location: 404.html"); // Redirect to dashboard
    exit();
} else {
    header("Location: index.html?error=Invalid username or password");
    exit();
}
?>
