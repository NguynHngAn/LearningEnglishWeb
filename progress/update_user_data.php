<?php
// Establish a connection to the database
$host = 'localhost';
$db = 'gicuzvzm_admin';
$user = 'gicuzvzm_admin';
$pass = 'Nttu@25022003';
$conn = new mysqli($host, $user, $pass, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update user data in the database based on the logged-in user
session_start();
if (isset($_SESSION['user_id'])) {
    $userID = $_SESSION['user_id'];
    $editedFullName = $_POST['full_name'];
    $editedDOB = $_POST['date_of_birth'];

    $query = "UPDATE users SET full_name = ?, date_of_birth = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssi", $editedFullName, $editedDOB, $userID);
    $result = $stmt->execute();

    if ($result) {
        $updatedUserData = [
            'full_name' => $editedFullName,
            'date_of_birth' => $editedDOB
        ];
        echo json_encode($updatedUserData);
    } else {
        echo json_encode(['error' => 'Error updating user data']);
    }
} else {
    echo json_encode(['error' => 'User not authenticated']);
}

// Close the database connection
$stmt->close();
$conn->close();
?>