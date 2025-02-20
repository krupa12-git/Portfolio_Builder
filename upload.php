<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "port";

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $skill1 = $_POST['skill1'];
    $skil2 = $_POST['skil'];
    $ski = $_POST['ski'];
    $emai = $_POST['emai'];
    $contact = $_POST['contact'];
    $addr = $_POST['addr'];
    $abc = $_POST['abc'];
    $image = $_FILES['image']['tmp_name'];

    // Move the uploaded image to a specific folder
    $imagePath = 'asset/' . $_FILES['image']['name'];
    move_uploaded_file($image, $imagePath);

    // Insert user data into the database
    $sql = "INSERT INTO ports (name, skill1, skil2, ski, contact, emai, addr, abc, image_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssss", $name, $skill1, $skil2, $ski, $contact, $emai, $addr, $abc, $imagePath);

    if ($stmt->execute()) {
        header('Location: display_data.php');
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>


