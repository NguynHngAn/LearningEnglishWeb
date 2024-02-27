<?php
session_start();

function isSessionExpired($timeoutInSeconds) {
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeoutInSeconds) {
        return true;
    }
    return false;
}

// Check if the session is expired
$sessionTimeout = 1800; // 30 minutes in seconds
if (isSessionExpired($sessionTimeout)) {
    // Session expired, log the user out and redirect to login
    session_unset();
    session_destroy();
    header("Location: login.html");
    exit();
}

// Update user's last activity time in the session
$_SESSION['last_activity'] = time();

// Retrieve user data from the session or database if necessary

?>
