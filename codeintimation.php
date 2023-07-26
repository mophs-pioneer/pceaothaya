<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "otp";

$conn = mysqli_connect("localhost", "root", "", "otp");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['intbtn'])) {
    $name = $_POST['intname'];
    $date = $_POST['intdate'];
    $desc = $_POST['intdesc'];
   

        $query = "INSERT INTO intimations (title, date,decription) VALUES ('$name', '$date','$desc')";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            $_SESSION['success'] = "intimations added successfully";
            header('location: intimations.php');
        } else {
            $_SESSION['status'] = "intimations not added: " . mysqli_error($conn);
            header('location: intimations.php');
        }
    } 



?>
