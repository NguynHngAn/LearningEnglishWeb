<?php
$servername = "localhost";
$username = "root"; // Default username in XAMPP
$password = ""; // Default password in XAMPP
$dbname = ""; // Default database name in XAMPP

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
    $file = $_FILES['file']['tmp_name'];
    $fileName = $_FILES['file']['name']; // Get the file name

    if($file){
        $fileData = addslashes(file_get_contents($file));
        $sql = "INSERT INTO files_more (file_name, file_data) VALUES ('$fileName', '$fileData')";
        
        if ($conn->query($sql) === TRUE) {
            echo "File uploaded successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload File to Database</title>
</head>
<body>
    <form action="upload_file.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" accept=".mp3">
        <input type="submit" name="submit" value="Upload File">
    </form>
</body>
</html>
