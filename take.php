<?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "otp";

$conn = new mysqli("localhost", "root", "", "otp");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$membership = $_POST['membership'];
$district = $_POST['district'] ?? null;
$place = $_POST['place'] ?? null;

// Prepare and execute SQL query to insert data into the database
$sql = "INSERT INTO connect (fullname, email, contact, membership, district, place)
        VALUES ('$fullname', '$email', '$contact', '$membership', '$district', '$place')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Thanks for connecting with us successfully!'); window.location='index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header('Location: connect.php');
}

// Close the database connection
$conn->close();
?>
