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

// Get registration form data
$username = $_POST['username'];
$email = $_POST['email'];
$fullName = $_POST['full_name'];
$dateOfBirth = $_POST['date_of_birth'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insert user data into the database
$query = "INSERT INTO users (username, email, full_name, date_of_birth, password) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("sssss", $username, $email, $fullName, $dateOfBirth, $password);

if ($stmt->execute()) {
    header("Location: successregister.php"); // Change "dashboard.php" to your desired page

} else {
    echo json_encode(['error' => 'Registration failed']);
}

// Close the database connection
$stmt->close();
$conn->close();
?>
