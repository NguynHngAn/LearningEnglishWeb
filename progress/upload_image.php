<?php
$servername = "localhost";
$username = "root"; // Default username in XAMPP
$password = ""; // Default password in XAMPP
$dbname = "backgr"; // Default database name in XAMPP

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
    $image = $_FILES['image']['tmp_name'];
    $imageName = $_FILES['image']['name']; // Get the image name

    if($image){
        $imageData = addslashes(file_get_contents($image));
        $sql = "INSERT INTO images (image_name, image_data) VALUES ('$imageName', '$imageData')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Image uploaded successfully!";
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
    <title>Upload Image to Database</title>
</head>
<body>
    <form action="upload_image.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*">
        <input type="submit" name="submit" value="Upload Image">
    </form>
</body>
</html>
