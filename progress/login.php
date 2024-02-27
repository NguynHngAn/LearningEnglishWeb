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

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Retrieve hashed password from the database based on the provided username
$query = "SELECT id, password FROM users WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $hashedPassword = $row['password'];

    if (password_verify($password, $hashedPassword)) {
        // Start a session for the authenticated user
        session_start();
        $_SESSION['user_id'] = $row['id'];
        
        // Redirect to a new page after successful login
        header("Location: dashboard.php"); // Change "dashboard.php" to your desired page
        exit(); // Important to prevent further execution
    } else {
        echo "Incorrect password.";
    }
} else {
    header("Location: errorlogin.php"); // Change "homepage.php" to your desired page
}

// Close the database connection
$stmt->close();
$conn->close();
?>
