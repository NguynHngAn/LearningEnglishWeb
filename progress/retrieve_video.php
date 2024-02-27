<?php
$servername = "localhost";
$username = "gicuzvzm_admin"; // Default username in XAMPP
$password = "Nttu@25022003"; // Default password in XAMPP
$dbname = "gicuzvzm_admin"; // Default database name in XAMPP

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $imageID = $_GET['id'];

    $sql = "SELECT image_data FROM imagess WHERE id = $imageID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        header("Content-type: image/jpeg");
        echo $row['image_data'];
    } else {
        echo "Image not found";
    }
}

$conn->close();
?>
