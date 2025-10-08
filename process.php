<?php
session_start();

// Capture form data
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$userToken = $_POST['userToken'] ?? '';

// Check if credentials are correct
if ($username === 'YourName' && $password === 'YourStudentID') {
    // Set session variables
    $_SESSION['user'] = $username;
    $_SESSION['token'] = $userToken;
    
    // Redirect to welcome page
    header("Location: welcome.php");
    exit();
} else {
    // Redirect back to login with error
    header("Location: login.php?error=1");
    exit();
}
?>