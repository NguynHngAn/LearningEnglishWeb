<?php
// Establish a connection to the database
$host = 'localhost';
$db = 'user_accounts';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user data from the database based on the logged-in user
session_start();
if (isset($_SESSION['user_id'])) {
    $userID = $_SESSION['user_id'];
    $query = "SELECT username, email, full_name, date_of_birth FROM users WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $userID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $userData = $result->fetch_assoc();
        echo json_encode($userData);
    } else {
        echo json_encode(['error' => 'User not found']);
    }
} else {
    echo json_encode(['error' => 'User not authenticated']);
}

// Close the database connection
$stmt->close();
$conn->close();
?>